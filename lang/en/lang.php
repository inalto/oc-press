<?php
return [
    "components" => [
        "release" => ["description" => "Single press release", "title" => "Release"],
        "releases" => ["description" => "Lista of releases", "title" => "Releases"],
        "review" => ["description" => "Single review", "title" => "Review"],
        "reviews" => ["description" => "Reviews list", "title" => "Reviews"]
    ],
    "plugin" => ["description" => "Press Releases and Reviews", "name" => "Press"],
    "settings" => [
        "categories" => "Categories",
        "categories_description" => "Categories filter or parameter",
        "d" => "Day",
        "d_description" => "Day parameter",
        "m" => "Month",
        "m_description" => "Month parameter",
        "no_releases" => "No releases found at this time",
        "no_releases_description" => "Message when there is no releases",
        "page_number" => "Page number",
        "page_number_description" => "Page number or parameter",
        "releases_order" => "Releases order",
        "releases_order_description" => "",
        "releases_per_page" => "Releases per page",
        "releases_per_page_description" => "Set how many releases per page",
        "slug" => "Slug",
        "slug_description" => "Search Url Alias",
        "y" => "Year",
        "y_description" => "Year parameter"
    ]
];
