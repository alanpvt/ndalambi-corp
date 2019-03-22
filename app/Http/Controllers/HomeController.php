<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class HomeController extends Controller
{

	public function index()
	{
		return View::make('index');
	}

	public function contact_us()
	{
		return View::make('contact-us');
	}

}