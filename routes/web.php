<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('listings',[
        'heading' => 'Latest Products',
        'listings' =>[
            'id' => 1,
            'title' => 'Product One',
            'description' => 'Product description Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus nemo consequuntur officia excepturi, rem temporibus dignissimos ea! Id facere error dolores facilis earum quas ab sunt alias dolorem quae. Qui.
            Tenetur ab neque perspiciatis molestias, et dicta deserunt sed distinctio explicabo laborum nam aperiam odio aliquam saepe. Earum voluptatem deleniti adipisci aspernatur numquam repellendus odit, molestias illum maiores animi minima.'
        ],
        [
            'id' => 1,
            'title' => 'Product One',
            'description' => 'Product description Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus nemo consequuntur officia excepturi, rem temporibus dignissimos ea! Id facere error dolores facilis earum quas ab sunt alias dolorem quae. Qui.
            Tenetur ab neque perspiciatis molestias, et dicta deserunt sed distinctio explicabo laborum nam aperiam odio aliquam saepe. Earum voluptatem deleniti adipisci aspernatur numquam repellendus odit, molestias illum maiores animi minima.'
        ]
    ],
    );
});

Route::get('/contact',function(){
    return view('contact');
});
