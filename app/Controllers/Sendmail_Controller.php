<?php 
namespace App\Controllers;
use CodeIgniter\Controller;

class Sendmail_Controller extends Foodex_Controller
{
  public function sendmail() 
  { 
    $validation = \Config\Services::validation();
    if($this->request->getMethod() == 'post')
    {
      $validation->setRules([
        'mailTo'            => ['label'=>'Mail to','rules'=>'required|min_length[3]|max_length[20]|valid_email'],
        'subject'           => ['label'=>'Subject','rules'=>'required|min_length[3]|max_length[50]'],
        'message'           => ['label'=>'Message','rules'=>'required|min_length[5]|max_length[250]'],
      ]);
      $is_validate = $validation->withRequest($this->request)->run();
      if(!$is_validate)
      {
        $data['validation'] = $validation;
        return view('contact',$data);
      }
      $data = [
        "mailTo"        => $_POST['mailTo'],
        "subject"       => $_POST['subject'],
        "message"       => $_POST['message'],
      ];
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
        return view('emailsent');
      } 
      else 
      {
        $data = $email->printDebugger(['headers']);
      }
    }
    else
    {
      return view('contact');
    }
   
  }
}