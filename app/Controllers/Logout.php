<?php namespace App\Controllers;

class Logout extends Foodex_Controller
{
  public function logout()
  {
    session()->destroy();
    return redirect()->to('/');
  }
}

?>