<?php

return [

    /*
     | Metadata config file
     |
     | The value on this config file becomes the defaults metadata values
     | when you use the provided metadata view
     |
     */

    /*
     | Robots
     |
     | Defines the behaviour that cooperative crawlers, or "robots", should use with the page
     |
     | Possible values:
     | index, noindex, follow, nofollow, none, noodp, noarchive, nosnippet, noimageindex, nocache
     |
     | ! This attribute has not been formally accepted yet
     */
    'robots' => 'all',

    /*
     | Referrer
     |
     | Controls the Referer HTTP header attached to requests sent from the document
     |
     | Possible values:
     | no-referrer, origin, no-referrer-when-downgrade, origin-when-cross-origin,
     | same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-URL
     */
    'referrer' => 'no-referrer-when-downgrade',

    /*
     | Title
     |
     | ! This metadata is used inside head section to assign a title for search engine
     | ! does not modify the main page title
     */
    'title' => '',

    /*
     | Description
     |
     | Contains a short and accurate summary of the content of the page
     */
    'description' => '',

    /*
     | Keywords [optional]
     |
     | Contains words relevant to the page's content separated by commas
     */
    'keywords' => '',

    /*
     | Social metadata
     */

    'fb' => [
        /*
         | Activate facebook schema
         */
        'is_active' => false,

        /*
         | Facebook App Id
         */
        'app_id' => '',

        /*
         | Type
         |
         | Describe the type of the content
         |
         | Possible values:
         | website, article,  music, video, book, profile
         | https://ogp.me/#types
         */
        'type' => 'website',

        /*
         | The content has a video
         */
        'has_video' = false,

    ],

    'twitter' => [
        /*
         | Activate twitter schema
         */
        'is_active' => false,

        /*
         | Twitter card type
         |
         | Possible values:
         | summary, summary_large_image, app, player
         */
        'card_type' => 'summary',

        /*
         | Twitter referred @site
         */
        'site' => '',

        /*
         | Twitter referred @username
         */
        'author' => '',

    ],

    /*
     | Resources for the content
     |
     | Becouse twitter cards fallbackk to use og: we can optimize metadata
     | ! Video will be used only with fb.has_video flag or twitter.card_type player
     */
    'resources' => [
        'image' => [
            'url' => '', 'type' => '', 'width' => '', 'height' => ''
        ],
        'video' => [
            'url' => '', 'type' => '', 'width' => '', 'height' => '', 'image' => ''
        ],
    ],

];
