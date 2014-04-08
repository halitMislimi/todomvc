<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/test/{id}/{name}', function($id , $name)
{
  // return View::make('test', array('id'=> $id));
  // return View::make('test')->with('id', $id);
  //return View::make('test', compact('id'));
  return View::make('test')->with('id', $id)->with('name', $name);
});

Route::get('/index/{id}/{name}' , 'testControler@index');


// Dans use on lui donne le contrôlore et la methode. 
Route::get('tasks/create', array('as' => 'tasks_create', 'uses' => 'tasksController@create'));
Route::get('tasks/index', array('as' => 'tasks_index', 'uses' => 'tasksController@index'));
Route::post('tasks/create', array('as' => 'tasks_store', 'uses' => 'tasksController@store'));
Route::post('tasks/index', array('as' => 'tasks_indexRedirect', 'uses' => 'tasksController@indexRedirect'));
