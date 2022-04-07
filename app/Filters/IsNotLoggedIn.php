<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class IsNotLoggedIn implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
      $session = session();
      if($session->get('isSeekerLoggedIn'))
      {
        return redirect()->to('/home');
      }
      else{
        if($session->get('isDonorLoggedIn'))
        {
          return redirect()->to('/home');
        }
      }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}