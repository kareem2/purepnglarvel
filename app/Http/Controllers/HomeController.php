<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Tag;
use View;

class HomeController extends Controller
{

	public function __construct(){
		parent::__construct();
	}

    public function index(){
 
    	return view('pages.home');

    }

}