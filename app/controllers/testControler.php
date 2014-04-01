<?php

class testControler extends BaseController {
  
	public function index( $id, $name )
	{
    //echo "Salut";
    // return View::make('test')->with('id', $id)->with('name', $name);
    return View::make('testa')->with('id', $id)->with('name', $name);
	}

}