<?php

return [

	'access_token' => '245344@#$%#$!@QWERFes423q45t2q3512q34twgfegh4w53542324!@#$@wefrrewt',

	'images_main_path' => 'uploads/large/',
	
	'images_read_path' => 'uploads/large/',
	
	'thumbnail_main_path' => 'uploads/thumbnail/',
	
	'thumbnail_read_path' => 'uploads/thumbnail/', 

	'thumbnail_height' => 200,

	'supported_types' => ['png', 'jpeg', 'jpg', 'jpeg'],

    /*
    |--------------------------------------------------------------------------
    | Last Domains Cache Size
    |--------------------------------------------------------------------------
    |
    | This array used to define the size for each domain block
    |
    */    
    'cache_size' => [
        'tags' => 10
    ],	

    'height_resize_factor' => [
        'large' => 0,
        'medium' => 50,
        'small' => 70,
    ],

    'paging' => [
        'categories_index' => 5,
        'category_photos' => 5,
        'photo_related' => 10,
        'tags_index' => 100,
        'tag_photos' => 20,
        'latest' => 15,
    ],

    'categories_count' => 15,
    
    'menu_categories_count' => 6,
    
    'main_page_categories_count' => 12,
    
    'footer_categories_count' => 9,
    
    'main_page_latest_photos' => 15,
    
];