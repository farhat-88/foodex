<?php namespace App\Controllers;
use App\Models\SeekerModel;
use App\Models\DonorModel;

class Register extends Foodex_Controller
{
  public function s_registration()
  { 
    $validation = \Config\Services::validation();
    if($this->request->getMethod() == 'post'){
      $validation->setRules([
        's_fname'           => ['label'=>'First name','rules'=>'required|min_length[3]|max_length[20]'],
        's_lname'           => ['label'=>'Last name','rules'=>'required|min_length[3]|max_length[20]'],
        's_contact_num'     => ['label'=>'Contact Number','rules'=>'required|min_length[11]|max_length[13]'],
        's_address'         => ['label'=>'Address','rules'=>'required|min_length[10]|max_length[200]'],
        's_email'           => ['label'=>'Email address','rules'=>'required|min_length[6]|max_length[50]|valid_email|is_unique[donors_info.d_email]'],
        's_password'        => ['label'=>'Password','rules'=>'required|min_length[8]|max_length[255]'],
        'confirm_password'  => ['label'=>'Confirm password','rules'=>'required|matches[s_password]'],
      ]);
      $is_validate = $validation->withRequest($this->request)->run();
      if(!$is_validate)
      {
        $data['validation'] = $validation;
        return view('register_to_receive',$data);
      }
      $data = [
        "s_fname"             => $_POST['s_fname'],
        "s_lname"             => $_POST['s_lname'],
        "s_contact_num"       => $_POST['s_contact_num'],
        "s_address"           => $_POST['s_address'],
        "s_email"             => $_POST['s_email'],
        "s_password"          => password_hash( $_POST['s_password'],PASSWORD_DEFAULT),
      ];
      $seekerModel = new SeekerModel();
      $seekerModel->save($data);
      $data['message'] = "Registration Successful";
      return view('login',$data);
    }
    return view('register_to_receive');
  }

public function d_registration()
{ 
  $validation = \Config\Services::validation();
  if($this->request->getMethod() == 'post'){
    $validation->setRules([
      'd_fname'             => ['label'=>'First name','rules'=>'required|min_length[3]|max_length[20]'],
      'd_lname'             => ['label'=>'Last name','rules'=>'required|min_length[3]|max_length[20]'],
      'd_contact_num'       => ['label'=>'Contact Number','rules'=>'required|min_length[11]|max_length[13]'],
      'd_address'           => ['label'=>'Address','rules'=>'required|min_length[10]|max_length[200]'],
      'd_email'             => ['label'=>'Email address','rules'=>'required|min_length[6]|max_length[50]|valid_email'],
      'd_password'          => ['label'=>'Password','rules'=>'required|min_length[8]|max_length[255]'],
      'confirm_password'    => ['label'=>'Confirm password','rules'=>'required|matches[d_password]'],
    ]);
    $is_validate = $validation->withRequest($this->request)->run();
    if(!$is_validate)
    {
      $data['validation'] = $validation;
      return view('register_to_donate',$data);
    }
    $data = [
      "d_fname"             => $_POST['d_fname'],
      "d_lname"             => $_POST['d_lname'],
      "d_contact_num"       => $_POST['d_contact_num'],
      "d_address"           => $_POST['d_address'],
      "d_email"             => $_POST['d_email'],
      "d_password"          => password_hash( $_POST['d_password'],PASSWORD_DEFAULT),
    ];
    $donorModel = new DonorModel();
    $donorModel->save($data);
    $data['message'] = "Registration Successful";
    return view('login',$data);
  }
  return view('register_to_donate');
}
} 
?>
