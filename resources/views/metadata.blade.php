@if( !empty( $canonical ) )
<link rel="canonical" href="{{ $canonical }}" />
@endif

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta name="referrer" content="{{ !empty( $referrer ) ? $referrer : config('metadata.referrer') }}" />
<meta name="robots" content="{{ !empty( $robots ) ? $robots : config('metadata.robots') }}" />
<meta name="description" content="{{ !empty( $description ) ? $description : config('metadata.description') }}" />
<meta name="keywords" content="{{ !empty( $keywords ) ? $keywords : config('metadata.keywords') }}" />

<!-- Facebook OpenGraph -->
@if( config('metadata.fb_app_id') !== '' )
<meta property="fb:app_id" content="{{ config('metadata.fb_app_id') }}" />
@endif

<meta property="og:locale" content="{{ config('app.locale') }}" />
<meta property="og:type" content="{{ !empty( $type ) ? $type : config('metadata.type') }}" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:site_name" content="{{ config('app.name') }}" />
<meta property="og:title" content="{{ !empty( $title ) ? $title : config('metadata.title') }}" />
<meta property="og:description" content="{{ !empty( $description ) ? $description : config('metadata.description') }}" />
<meta property="og:image" content="{{ asset( !empty( $logo ) ? $logo : config('metadata.logo') ) }}" />
<meta property="og:image:type" content="image/png" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="1200" />
<meta property="og:image" content="{{ asset( !empty( $mark ) ? $mark : config('metadata.mark') ) }}" />
<meta property="og:image:type" content="image/png" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="620" />

<!-- Twitter Card -->
@if( config('metadata.twitter_card') !== '' )
<meta name="twitter:card" content="{{ !empty( $twitter_card ) ? $twitter_card : config('metadata.twitter_card') }}" />
@endif
@if( config('metadata.twitter_site') !== '' || !empty( $twitter_site ) )
<meta name="twitter:site" content="{{ !empty( $twitter_site ) ? $twitter_site : config('metadata.twitter_site') }}" />
@endif
<meta name="twitter:title" content="{{ !empty( $title ) ? $title : config('metadata.title') }}" />
<meta name="twitter:description" content="{{ !empty( $description ) ? $description : config('metadata.description') }}" />
<meta name="twitter:image:src" content="{{ asset( !empty( $logo ) ? $logo : config('metadata.logo') ) }}" />
<meta name="twitter:image:width" content="1200" />
<meta name="twitter:image:height" content="1200" />
