<?php
return [
    "components" => [
        "release" => ["description" => "Comunicato stampa singolo", "title" => "Comunicato stampa"],
        "releases" => ["description" => "Lista di comunicati stampa", "title" => "Comunicati stampa"],
        "review" => ["description" => "Recensione singola", "title" => "Recensione"],
        "reviews" => ["description" => "Lista di recensioni", "title" => "Recensioni"]
    ],
    "plugin" => ["description" => "Comunicati stampa e recensioni", "name" => "Press"],
    "settings" => [
        "categories" => "Categorie",
        "categories_description" => "Filtro di categoria o parametro",
        "d" => "Giorno",
        "d_description" => "Parametro del giorno",
        "featured_only" => "Solo in evidenza",
        "m" => "Mese",
        "m_description" => "Parametro del mese",
        "no_releases" => "Non ci sono comunicati al momento",
        "no_releases_description" => "Messaggio nel caso di mancanza di comunicati",
        "page_number" => "Numero di pagina",
        "page_number_description" => "Numero di pagina o parametro",
        "paginate" => "Paginazione?",
        "releases_order" => "Ordina comunicati",
        "releases_order_description" => "",
        "releases_per_page" => "Comunicati per pagina",
        "releases_per_page_description" => "Imposta quanti comunicati ci sono per pagina",
        "skip" => "Salta",
        "skip_description" => "Salta i primi n comunicati",
        "skip_validation" => "",
        "slug" => "Url Alias",
        "slug_description" => "Chiave url di ricerca",
        "y" => "Anno",
        "y_description" => "Parametro per l'anno"
    ]
];
