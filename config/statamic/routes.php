<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Enable Routes
    |--------------------------------------------------------------------------
    |
    | Statamic adds its own routes to the front-end of your site. You are
    | free to disable this behavior.
    |
    | More info: https://statamic.dev/routing
    |
    */

    'enabled' => true,

    /*
    |--------------------------------------------------------------------------
    | Enable Route Bindings
    |--------------------------------------------------------------------------
    |
    | Whether route bindings for Statamic repositories (entry, taxonomy,
    | collections, etc) are enabled for front end routes. This may be
    | useful if you want to make your own custom routes with them.
    |
    */

    'bindings' => false,

    /*
    |--------------------------------------------------------------------------
    | Action Route Prefix
    |--------------------------------------------------------------------------
    |
    | Some extensions may provide routes that go through the frontend of your
    | website. These URLs begin with the following prefix. We've chosen an
    | unobtrusive default but you are free to select whatever you want.
    |
    */

    'action' => '!',

    /*
    |--------------------------------------------------------------------------
    | Middleware
    |--------------------------------------------------------------------------
    |
    | Define the middleware that will be applied to the web route group.
    |
    */

    'middleware' => 'web',

];
