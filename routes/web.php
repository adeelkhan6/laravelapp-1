<?php


// auth()->loginUsingId(1);


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

// use Illuminate\Routing\Route;

Route::get('/', function() {

   return view('test', [
       'name' => request('name'),
       'aname' => request('aname'),
   ]);
});

// Route::get('/posts/{post}', function($post) {
    
//     $posts = [
//         'absa-komal' => 'Absa is the most beautiful girl in this milky ways !',
//         'adeel-khan' => 'Adeel loves Absa !'
//     ];

//     if(! array_key_exists($post, $posts)) {
//         abort(404, 'This post was not found!');
//     }

//     return view('post', [
//         'post' => $posts[$post]        //?? 'Nothing here yet !'
//     ]);
//  });

 Route::get('/posts/{post}', 'PostsController@show');


Route::get('/', function() {
    return view('welcome');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/about', function() {
    return view('about', [
    	'articles' => App\Article::take(3)->latest()->get()
    ]);
});

Route::get('/articles', 'ArticlesController@index')->name('article.index');
Route::get('articles/create', 'ArticlesController@create');
Route::post('articles', 'ArticlesController@store');
Route::get('articles/{article}', 'ArticlesController@show')->name('articles.show');
Route::get('articles/{article}/edit', 'ArticlesController@edit');
Route::put('articles/{article}', 'ArticlesController@update');

Route::get('/contact', 'ContactController@show');

Route::post('/contact', 'ContactController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/payments/create', 'PaymentsController@create')->middleware('auth');
Route::post('/payments', 'PaymentsController@store')->middleware('auth');

Route::get('/notifications', 'UserNotificationsController@show')->middleware('auth');

Route::get('conversations', 'ConversationController@index');
Route::get('conversation/{conversation}', 'ConversationController@show');

Route::post('best-replies/{reply}', 'ConversationBestReplyController@store');


Route::get('/reports', function () {
    return 'the secret reports';
})->middleware('can:view_reports');