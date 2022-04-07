<?php namespace App\Controllers;

class Home extends Foodex_Controller
{
	public function index()
	{
		if($this->session->isSeekerLoggedIn)
		{
			return view('home',['loggedInUserName' => $this->session->userInfo->s_fname]);
		}
		else
		{
			return view('home',['loggedInUserName' => $this->session->userInfo->d_fname]);
		}
	
	}
}
