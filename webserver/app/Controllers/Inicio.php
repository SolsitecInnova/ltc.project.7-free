<?php

namespace App\Controllers;

class Inicio extends BaseController
{
	public function __construct(){
		
	}
    public function index()
    {
		return view('mobile/ListaDeContactos');
    }
}
