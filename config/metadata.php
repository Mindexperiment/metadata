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
    | Author
    |
    | Defines the name of the document's author
    */
    'author' => '',

    /*
    | Description
    |
    | Contains a short and accurate summary of the content of the page
    */
    'description' => '',

    /*
    | Keywords
    |
    | Contains words relevant to the page's content separated by commas
    */
    'keywords' => '',

    /*
    | Resources
    |
    | Provide the path for your logo and mark
    */
    'logo' => '',
    'mark' => '',

    /*
    | Twitter site
    */
    'twitter_site' => '@',

    /*
    | Twitter card type
    */
    'twitter_card_type' => 'summary',

    /*
    | Facebook App Id
    */
    'fb_app_id' => '',

    /*
    | Type
    */
    'type' => 'website',

];
