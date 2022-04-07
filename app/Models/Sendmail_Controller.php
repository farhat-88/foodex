<?php 
namespace App\Controllers;
use CodeIgniter\Controller;

class Sendmail_Controller extends BaseController
{
    public function contact() 
    {
      return view('contact');
    }
    public function sendmail() 
    { 
        $to = $this->request->getVar('mailTo');
        $subject = $this->request->getVar('subject');
        $message = $this->request->getVar('message');
        
        $email = \Config\Services::email();
        
        $email->setTo('farhatyasir88@yopmail.com');
        $email->setFrom('farhatyasir88@gmail.com', 'farhat yasir');
        $email->setSubject($subject);
        $email->setMessage($message);
        if ($email->send()) 
        {
          echo 'Email successfully sent';
        } 
        else 
        {
          $data = $email->printDebugger(['headers']);
          print_r($data);
        }
      }
 }