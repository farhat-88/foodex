<?php namespace App\Controllers;
use App\Controllers\BaseController;
class Foodex_Controller extends BaseController{
  function __construct()
  {
    $this->session = session();
    helper(['form','html','date']);
    /* Start: Error Reporting*/
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);
    /* End: Error Reporting*/
  }
}
?>