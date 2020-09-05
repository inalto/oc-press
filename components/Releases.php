<?php namespace Martinimultimedia\Press\Components;

use Redirect;
use BackendAuth;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use MartiniMultimedia\Press\Models\Release as R;
use Log;

class Releases extends ComponentBase
{
    public $releases;

     /**
     * Message to display when there are no messages.
     * @var string
     */
    public $noReleasesMessage;
     /**
     * Reference to the page name for linking to posts.
     * @var string
     */
    public $releasePage;

    public $pageParam;
     /**
     * If the post list should be ordered by another attribute.
     * @var string
     */
    public $sortOrder;

    public function componentDetails()
    {
        return [
            'name'        => 'martinimultimedia.press::lang.components.releases.title',
            'description' => 'martinimultimedia.press::lang.components.releases.description'
        ];
    }


    public function defineProperties()
    {
        return [
            'pageNumber' => [
                'title'       => 'martinimultimedia.press::lang.settings.page_number',
                'description' => 'martinimultimedia.press::lang.settings.page_number_description',
                'type'        => 'string',
                'default'     => '{{ :page }}',
            ],
            'releasesPerPage' => [
                'title'             => 'martinimultimedia.press::lang.settings.releases_per_page',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'martinimultimedia.press::lang.settings.releases_per_page_validation',
                'default'           => '10',
            ],
            'noReleasesMessage' => [
                'title'        => 'martinimultimedia.press::lang.settings.no_releases',
                'description'  => 'martinimultimedia.press::lang.settings.no_releases_description',
                'type'         => 'string',
                'default'      => 'No posts found',
                'showExternalParam' => false
            ],
            'sortOrder' => [
                'title'       => 'martinimultimedia.press::lang.settings.releases_order',
                'description' => 'martinimultimedia.press::lang.settings.releases_order_description',
                'type'        => 'dropdown',
                'default'     => 'published_at desc'
            ],
            'releasePage' => [
                'title'       => 'martinimultimedia.press::lang.settings.release_page',
                'description' => 'martinimultimedia.press::lang.settings.release_page_description',
                'type'        => 'dropdown',
                'default'     => 'blog/post',
                'group'       => 'Links',
            ]
        ];
    }

    public function getReleasePageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }
 
    public function getSortOrderOptions()
    {
        return R::$allowedSortingOptions;
    }

    public function onRun()
    {        
        $this->prepareVars();
        $this->releases = $this->page['releases'] = $this->listReleases();
        /*
         * If the page number is not valid, redirect
         */
        if ($pageNumberParam = $this->paramName('pageNumber')) {
            $currentPage = $this->property('pageNumber');

            if ($currentPage > ($lastPage = $this->releases->lastPage()) && $currentPage > 1)
                return Redirect::to($this->currentPageUrl([$pageNumberParam => $lastPage]));
        }
    }

    protected function prepareVars()
    {
        $this->pageParam = $this->page['pageParam'] = $this->paramName('pageNumber');
        $this->noReleasesMessage = $this->page['noReleasesMessage'] = $this->property('noReleasesMessage');

        /*
         * Page links
         */
        $this->releasePage = $this->page['releasePage'] = $this->property('releasePage');
    }

    protected function listReleases()
    {
        //$lifestyle = $this->lifestyle ? $this->lifestyle->id : null;

        /*
         * List all the posts, eager load their lifestyles
         */
        $isPublished = !$this->checkEditor();

        $releases = R::listFrontEnd([
            'page'       => $this->property('pageNumber'),
            'sort'       => $this->property('sortOrder'),
            'perPage'    => $this->property('releasesPerPage'),
            'search'     => trim(input('search')),
            'published'  => $isPublished
        ]);

        /*
         * Add a "url" helper attribute for linking to each post and lifestyle
         */
        $releases->each(function($release) {
            $release->setUrl($this->releasePage, $this->controller);
        });

        return $releases;
    }
    
    protected function checkEditor()
    {
        $backendUser = BackendAuth::getUser();
        return $backendUser && $backendUser->hasAccess('martinimultimedia.press.access_releases');
    }
}
