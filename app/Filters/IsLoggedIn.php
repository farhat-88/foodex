<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class IsLoggedIn implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
      $session = session();
      if(!$session->get('isSeekerLoggedIn'))
      {
        if(!$session->get('isDonorLoggedIn'))
        {
          return redirect()->to('/login');
        }
        // return redirect()->to('/login');
      }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}