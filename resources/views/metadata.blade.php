@if ( !empty($canonical) )
<link rel="canonical" href="{{ $canonical }}" />
@endif

<meta name="robots" content="{{ !empty( $robots ) ? $robots : config('metadata.robots') }}" />
<meta name="referrer" content="{{ !empty( $referrer ) ? $referrer : config('metadata.referrer') }}" />

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta name="description" content="{{ !empty( $description ) ? $description : config('metadata.description') }}" />

@if ( config('metadata.keywords') !== '' || isset($keywords) )
<meta name="keywords" content="{{ !empty( $keywords ) ? $keywords : config('metadata.keywords') }}" />
@endif

@if ( config('metadata.fb.is_active') )

<!-- Facebook OpenGraph -->
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:title" content="{{ !empty( $title ) ? $title : config('metadata.title') }}" />
<meta property="og:description" content="{{ !empty( $description ) ? $description : config('metadata.description') }}" />

<meta property="og:type" content="{{ !empty( $type ) ? $type : config('metadata.fb.type') }}" />
<meta property="og:locale" content="{{ config('app.locale') }}" />

@if ( config('metadata.fb.app_id') !== '' )
<meta property="fb:app_id" content="{{ config('metadata.fb.app_id') }}" />
@endif

@endif

@if ( config('metadata.twitter.is_active') )

<!-- Twitter Card -->
<meta name="twitter:card" content="{{ !empty( $card_type ) ? $card_type : config('metadata.twitter.card_type') }}" />
<meta name="twitter:site" content="{{ !empty( $site ) ? $site : config('metadata.twitter.site') }}" />

@if( config('metadata.twitter.author') !== '' || isset($author) )
<meta property="twitter:creator" content="{{ !empty( $author ) ? $author : config('metadata.twitter.author') }}" />
@endif

@endif

@if( config('metadata.resources.image.url') !== '' || isset($image_url) )
<!-- Content image -->
<meta property="og:image" content="{{ !empty( $image_url ) ? $image_url : config('metadata.resources.image.url') }}" />
@endif

@if( config('metadata.resources.image.type') !== '' || isset($image_type) )
<meta property="og:image:type" content="{{ !empty( $image_type ) ? $image_type : config('metadata.resources.image.type') }}" />
@endif

@if( config('metadata.resources.image.width') !== '' || isset($image_width) )
<meta property="og:image:width" content="{{ !empty( $image_width ) ? $image_width : config('metadata.resources.image.width') }}" />
@endif

@if( config('metadata.resources.image.height') !== '' || isset($image_height) )
<meta property="og:image:height" content="{{ !empty( $image_height ) ? $image_height : config('metadata.resources.image.height') }}" />
@endif

@if ( config('metadata.fb.has_video') || config('metadata.twitter.card_type') == 'player' || isset($video_url) )
<!-- Video content -->

<meta property="og:video" content="{{ !empty( $video_url ) ? $video_url : config('metadata.resources.video.url') }}" />

@if( config('metadata.resources.video.type') !== '' || isset($video_type) )
<meta property="og:video:type" content="{{ !empty( $video_type ) ? $video_type : config('metadata.resources.video.type') }}" />
@endif

@if( config('metadata.resources.video.width') !== '' || isset($video_width) )
<meta property="og:video:width" content="{{ !empty( $video_width ) ? $video_width : config('metadata.resources.video.width') }}" />
@endif

@if( config('metadata.resources.video.height') !== '' || isset($video_height) )
<meta property="og:video:height" content="{{ !empty( $video_height ) ? $video_height : config('metadata.resources.video.height') }}" />
@endif

@if( config('metadata.resources.video.image') !== '' || isset($video_image) )
<meta property="og:video:image" content="{{ !empty( $video_image ) ? $video_image : config('metadata.resources.video.image') }}" />
@endif

@endif
