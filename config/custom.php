<?php

return [
    /*
    * Access token for authorization
    */
	'access_token' => '245344@#$%#$!@QWERFes423q45t2q3512q34twgfegh4w53542324!@#$@wefrrewt',

    /*
    |--------------------------------------------------------------------------
    | Main Image Path
    |--------------------------------------------------------------------------
    |
    | When user clicks on download button, the application will always download
    | it from this path.
    |
    */
	'images_main_path' => '/uploads/large/',
	
    /*
    |--------------------------------------------------------------------------
    | Alternative Image Path
    |--------------------------------------------------------------------------
    |
    | This path is used for showing the image to the user, we can use it to show 
    | alterd image, but when user clicks on downoad, it will read the image from
    | 'images_main_path' config parameter
    |
    */    
	'images_read_path' => '/uploads/large/',
	
    /*
    |--------------------------------------------------------------------------
    | Main Thumbnail Path
    |--------------------------------------------------------------------------
    |
    | This parameter is for thumbnail main folder path
    |
    */    
	'thumbnail_main_path' => '/uploads/thumbnail/',
	
    /*
    |--------------------------------------------------------------------------
    | Alternative Thumbnail Path
    |--------------------------------------------------------------------------
    |
    | In case we need to show different thumbnail images, we can change the value
    | of this parameter. By default, both `thumbnail_main_path` amd 
    | `thumbnail_read_path` will point to the same folder
    |
    */     
	'thumbnail_read_path' => '/uploads/thumbnail/', 

    /*
    |--------------------------------------------------------------------------
    | Thumbnail Preferred Height 
    |--------------------------------------------------------------------------
    |
    | This parameter is used for resizing the large image into a thumbnail, the
    | new size will be relative to the height
    |
    */ 
	'thumbnail_height' => 200,

    /*
    |--------------------------------------------------------------------------
    | Supported Images Types 
    |--------------------------------------------------------------------------
    |
    | Supported images types is used to validate the API input, this will 
    | prevent uploading non-image data
    |
    */ 
	'supported_types' => ['png', 'jpeg', 'jpg', 'jpeg'],

    /*
    |--------------------------------------------------------------------------
    | Cache Enable
    |--------------------------------------------------------------------------
    |
    | Wether to use cache or not
    |
    */ 
    'use_cache' => true,

    /*
    |--------------------------------------------------------------------------
    | Image Resize factor
    |--------------------------------------------------------------------------
    |
    | This parameter represents the resize percentage for image large, medium, 
    | small andresolutions. 50 means that the image will down sized by 50% of
    | it's original size, e.g. if it's original size is 700x700, the new size
    | will be 350x350
    |
    */ 
    'height_resize_factor' => [
        'large' => 0,
        'medium' => 50,
        'small' => 70,
    ],

    /*
    |--------------------------------------------------------------------------
    | Paging limits
    |--------------------------------------------------------------------------
    |
    | Paging limits parameters, they used by the paginator to limit the selected 
    | rows from the database, the same parameters are also used by the cache API
    | end point to cache the first page results.
    |
    */     
    'paging' => [
        'categories_index' => 5, // for 'categories' route
        'category_photos' => 5, // for 'show_category' route
        'photo_related' => 5, // for 'photo' and 'photo_with_title' routes
        'tags_index' => 100, // for 'tags' route
        'tag_photos' => 20, // for 'tag_photos_by_name' route
        'latest' => 15, // for 'latest_photos' route
        'popular' => 15, // for 'popular_photos' route
        'search_results' => 20, // for 'tags_search' route
        'comments' => 5, // for 'photo' route
        'user_photos' => 2, // for 'user' route
    ],

    /*
    |--------------------------------------------------------------------------
    | Categories Count
    |--------------------------------------------------------------------------
    | This value will be used by other parameters like footer_categories_count
    | and menu_categories_count
    */ 
    'categories_count' => 15,

    /*
    |--------------------------------------------------------------------------
    | Menu Categories Count
    |--------------------------------------------------------------------------
    | The number of categories to be shown in the header menu
    */ 
    'menu_categories_count' => 6,

    /*
    |--------------------------------------------------------------------------
    | Main Page Categories Count
    |--------------------------------------------------------------------------
    | The default value is 12, the categories will be displayed on 3 columns
    */ 
    'main_page_categories_count' => 12,

    /*
    |--------------------------------------------------------------------------
    | Footer Categories Count
    |--------------------------------------------------------------------------
    |
    */  
    'footer_categories_count' => 5,

    /*
    |--------------------------------------------------------------------------
    | Main Page Photos Limit
    |--------------------------------------------------------------------------
    | The number of sample photos to be displayed on home page 
    |
    */  
    'main_page_latest_photos' => 20,


    'avatar_width' => 150,

    'avatar_height' => 150,

    'avatar_path' => 'img/avatars/',


];