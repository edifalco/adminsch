<?php

if (env('APP_ENV') === 'local') {
    URL::forceScheme('https');
}

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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/features/', ['as'=>'home.full_feature_list', 'uses'=>'FeaturesController@fullFeatureList']);
Route::get('/features/{id}', ['as'=>'home.feature', 'uses'=>'FeaturesController@post']);

Route::get('/news/', ['as'=>'home.news_list', 'uses'=>'AdminPostsController@newsList']);
Route::get('/post/{id}', ['as'=>'home.post', 'uses'=>'AdminPostsController@post']);

Route::get('/pricing/', ['as'=>'home.pricing', 'uses'=>'PagesController@pricing']);

Route::get('/contact/', ['as'=>'home.contact', 'uses'=>'MessagesController@create']);

Route::post('comment/reply', 'CommentRepliesController@createReply');

Route::get('/logout', 'Auth\LoginController@logout');

//Route::group(['middleware'=>'admin'], function() {

    Route::get('/admin', function(){
        return view('admin.dashboard');
    });
    
    Route::resource('/admin/messages', 'MessagesController',['names'=>[
        'index'=>'admin.messages.index',
        'show'=>'admin.messages.show'
    ]]);
    
    Route::resource('/admin/features', 'FeaturesController',['names'=>[
        'index'=>'admin.features.index',
        'create'=>'admin.features.create',
        'edit'=>'admin.features.edit'
    ]]);
    
    Route::resource('/admin/subfeatures', 'SubfeaturesController',['names'=>[
        'index'=>'admin.subfeatures.index',
        'create'=>'admin.subfeatures.create',
        'show'=>'admin.subfeatures.show',
        'edit'=>'admin.subfeatures.edit'
    ]]);
    
    Route::resource('/admin/posts', 'AdminPostsController',['names'=>[
        'index'=>'admin.posts.index',
        'create'=>'admin.posts.create',
        'edit'=>'admin.posts.edit'
    ]]);
    
    Route::resource('/admin/comments', 'PostCommentsController',['names'=>[
        'index'=>'admin.comments.index',
        'show'=>'admin.comments.show',
        'edit'=>'admin.comments.edit'
    ]]);
    
    Route::resource('/admin/comment/replies', 'CommentRepliesController', ['names'=>[
        'show'=>'admin.comment.replies.show'
    ]]);
    
    Route::resource('/admin/categories', 'AdminCategoriesController',['names'=>[
        'index'=>'admin.categories.index',
        'create'=>'admin.categories.create',
        'edit'=>'admin.categories.edit'
    ]]);
    
    Route::resource('/admin/medias', 'AdminMediasController', ['names'=>[
        'index'=>'admin.medias.index',
        'create'=>'admin.medias.create',
        'edit'=>'admin.medias.edit'
    ]]);
    
    Route::resource('/admin/users', 'AdminUsersController', ['names'=>[
        'index'=>'admin.users.index',
        'create'=>'admin.users.create',
        'edit'=>'admin.users.edit'
    ]]);
    
    Route::get('/admin/elements', function(){
        return view('admin.elements');
    });

//});