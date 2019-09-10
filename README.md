
## Metadata

This package provides a way to include metadata tags and other SEO related values inside a view. This is the most flexible way of inject metadata inside webpages without the need of a database.

> Use this package if you don't need complex implementation over SEO metadata.

### Configuration

#### Composer

Require this package inside your composer.json file

```composer

"agpretto/metadata": "^0.1"

```

#### Install

Use the package install command to install Metadata inside your application.

```bash

php artisan metadata:install
// or
php artisan metadata:install --template

```

> Opt-in publishing the default metadata template to your `resouces/views/vendor/metadata` folder.

You can opt-in publishing metadata template by using the flag `-T` or `--template`.

## Usage

This package is a very simple metadata management suite to include metadata tags and related SEO values inside a view.

0. Before start using this package update the configuration file `config/metadata.php` with your default SEO informations.

1. Include a new stack inside your base layout view. This stack will collect all your SEO metadata.

```php

// main layout

<!DOCTYPE html>
<html>
    <head>
        <!-- Metadata -->
        @stack( 'metadata' )

    </head>
    <body>
    </body>
</html>

```

Now you're ready to include your metadata.

2. Choose a public view of your website content (ex. views/articles/page.blade.php).

```php

@extends( 'layouts.page' )

@section( 'page' )

<section>
    <h2>{{ $article->title }}</h2>

    <div>{{ $article->body }}</div>
</section>

@endsection

// push metadata view on the stack
@push( 'metadata' )
    @include( 'metadata::metadata', [
        'title' => $article->title, // <- use the model title to contextualize the title metadata
        'author' => 'John Doe'      // <- simply overrides default author value
    ] )
@endpush

```

### Credits

This package is built for you by the Interstellar Developer [Andrea Giuseppe](https://andreagiuseppe.com) - [Github](https://github.com/Mindexperiment)
