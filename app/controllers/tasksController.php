<?php

class tasksController extends BaseController {
  
	public function create()
	{
        // on va dans le dossier view/tasks/create
        return View::make('tasks/create');
    }
    public function store()
    {
        //Classse Tasks qui se trouve dans models. C'est elle qui accueille les données. On lui dit la fonction create(Input::all()) (on met tout); Input:all c'est récupérer tous les posts, get 
        //fait  partir de la fonction create
        //on aurrait pu avoir Input:post() et la ça récupère que les posts de la fonction
        Tasks::create(Input::all()); 
        return Redirect::route('tasks_create');
    }
}