<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('hello/world',['data'=>'Hello world juga']);
	}

	//--------------------------------------------------------------------

}
