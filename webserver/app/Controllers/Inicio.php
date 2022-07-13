<?php

namespace App\Controllers;

class Inicio extends BaseController
{
	public function __construct(){
		
	}
    public function index()
    {
        if(isMobile())
			return view('mobile/inicio');
        else
        	return view('web/inicio');
    }
}
