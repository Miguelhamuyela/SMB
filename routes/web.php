<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Administrador;




/* Grupo de rotas autenticadas */

Route::middleware(['auth'])->group(function () {

    route::get('/', ['as' => 'admin.home', 'uses' => 'Admin\DashboardController@index']);


    Route::middleware([Administrador::class])->group(function () {

        /* User */
        Route::get('admin/user/index', ['as' => 'admin.user.index', 'uses' => 'Admin\UserController@index']);
        Route::get('admin/user/show/{id}', ['as' => 'admin.user.show', 'uses' => 'Admin\UserController@show'])->withoutMiddleware(Administrador::class);

        Route::get('admin/user/edit/{id}', ['as' => 'admin.user.edit', 'uses' => 'Admin\UserController@edit'])->withoutMiddleware(Administrador::class);;
        Route::put('admin/user/update/{id}', ['as' => 'admin.user.update', 'uses' => 'Admin\UserController@update'])->withoutMiddleware(Administrador::class);;

        Route::get('admin/user/delete/{id}', ['as' => 'admin.user.delete', 'uses' => 'Admin\UserController@destroy']);
        /* end user */
    });


    /* news */
    Route::get('admin/news/index', ['as' => 'admin.news.index', 'uses' => 'Admin\NewsController@list']);
    Route::get('admin/news/show/{id}', ['as' => 'admin.news.show', 'uses' => 'Admin\NewsController@show']);

    Route::get('admin/news/create', ['as' => 'admin.news.create', 'uses' => 'Admin\NewsController@create']);
    Route::post('admin/news/store', ['as' => 'admin.news.store', 'uses' => 'Admin\NewsController@store']);

    Route::get('admin/news/edit/{id}', ['as' => 'admin.news.edit', 'uses' => 'Admin\NewsController@edit']);
    Route::put('admin/news/update/{id}', ['as' => 'admin.news.update', 'uses' => 'Admin\NewsController@update']);

    Route::get('admin/news/delete/{id}', ['as' => 'admin.news.delete', 'uses' => 'Admin\NewsController@destroy']);
    /* end news */


    /* configuration */
    Route::get('admin/configuration/show', ['as' => 'admin.configuration.show', 'uses' => 'Admin\ConfigurationController@show']);

    Route::get('admin/configuration/edit/{id}', ['as' => 'admin.configuration.edit', 'uses' => 'Admin\ConfigurationController@edit']);
    Route::put('admin/configuration/update/{id}', ['as' => 'admin.configuration.update', 'uses' => 'Admin\ConfigurationController@update']);
    /* end configuration */


    /**Startups */

    Route::get('admin/startup/index', ['as' => 'admin.startup.create.index', 'uses' => 'Admin\StartupsController@create']);
    Route::get('admin/startup/list', ['as' => 'admin.startup.list.index', 'uses' => 'Admin\StartupsController@index']);
    Route::post('admin/startup/store', ['as' => 'admin.startup.store', 'uses' => 'Admin\StartupsController@store']);
    Route::get('admin/startup/edit/{id}', ['as' => 'admin.startup.edit.index', 'uses' => 'Admin\StartupsController@edit']);
    Route::put('admin/startup/update/{id}', ['as' => 'admin.startup.update', 'uses' => 'Admin\StartupsController@update']);
    Route::get('admin/startup/delete/{id}', ['as' => 'admin.startup.delete', 'uses' => 'Admin\StartupsController@destroy']);
    Route::get('admin/startup/show/{id}', ['as' => 'admin.startup.show', 'uses' => 'Admin\StartupsController@show']);
    /**End Startups */


    /***
     * Member
     */

    Route::get('admin/member/create/{id}', ['as' => 'admin.member.create', 'uses' => 'Admin\MembersController@create']);
    Route::post('admin/member/store/{id}', ['as' => 'admin.member.store', 'uses' => 'Admin\MembersController@store']); 
    Route::get('admin/member/delete/{id}', ['as' => 'admin.member.delete', 'uses' => 'Admin\MembersController@destroy']);
    
    /**End Member */


    /**
     *  ManufacturesSoftwares
     */
    Route::get('admin/manufactures/index', ['as' => 'admin.manufactures.create.index', 'uses' => 'Admin\ManufacturesSoftwaresController@create']);
    Route::post('admin/manufactures/store', ['as' => 'admin.manufactures.store', 'uses' => 'Admin\ManufacturesSoftwaresController@store']); 
    /**End ManufacturesSoftware */



     /**
      * Clients
      */

      Route::get('admin/client/index', ['as' => 'admin.client.create.index', 'uses' => 'Admin\ClientsController@create']);
      Route::get('admin/client/list', ['as' => 'admin.client.list.index', 'uses' => 'Admin\ClientsController@index']);
      Route::post('admin/client/store', ['as' => 'admin.client.store', 'uses' => 'Admin\ClientsController@store']);
      Route::get('admin/client/show/{id}', ['as' => 'admin.client.show', 'uses' => 'Admin\ClientsController@show']);
      Route::get('admin/client/edit/{id}', ['as' => 'admin.client.edit.index', 'uses' => 'Admin\ClientsController@edit']);
      Route::get('admin/client/delete/{id}', ['as' => 'admin.client.delete', 'uses' => 'Admin\ClientsController@destroy']);
      Route::put('admin/client/update/{id}', ['as' => 'admin.client.update', 'uses' => 'Admin\ClientsController@update']);
     
      
      /**End Clients */
});



/* inclui as rotas de autenticação do ficheiro auth.php */
require __DIR__ . '/auth.php';
