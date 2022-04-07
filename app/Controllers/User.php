<?php namespace App\Controllers;

use App\Models\SeekerModel;
use App\Models\DonorModel;

class User extends Foodex_Controller
{
	public function index()
	{
		return view('login');
	}
	public function userLogin()
	{
		$validation = \Config\Services::validation();
    if($this->request->getMethod() == 'post'){
      $validation->setRules([
        'email'           => ['label'=>'Email address','rules'=>'required|valid_email'],
        'password'        => ['label'=>'Password','rules'=>'required'],
      ]);
      $is_validate = $validation->withRequest($this->request)->run();
      if(!$is_validate)
      {
        $data['validation'] = $validation;
        return view('login',$data);
      }
      $data = [
        "email"             => $_POST['email'],
        "password"          => password_hash( $_POST['password'],PASSWORD_DEFAULT),
      ];
			$seekerModel = new SeekerModel();
			$donorModel = new DonorModel();

			$userInfo_seekerModel = $seekerModel->where('s_email',$_POST['email'])->first();
			$userInfo_donorModel = $donorModel->where('d_email',$_POST['email'])->first();
			if(empty(!$userInfo_seekerModel))
			{
				if(password_verify($_POST['password'],$userInfo_seekerModel->s_password))
				{
					$this->session->set('isSeekerLoggedIn',true);
					$this->session->set('userInfo',$userInfo_seekerModel);
					$this->session->set('userName',$this->session->userInfo->s_fname);
					return redirect()->to('/home');
				}
			}
			else
			{
				if(password_verify($_POST['password'],$userInfo_donorModel->d_password))
				{
					$this->session->set('isDonorLoggedIn',true);
					$this->session->set('userInfo',$userInfo_donorModel);
					$this->session->set('userName',$this->session->userInfo->d_fname);
					return redirect()->to('/home');
				}
			}
      $data['message'] = "User Not Found. Register to get logged in.";
      return view('login',$data);
		}
		return view('login');
	}

	public function user_profile()
	{
		$validation = \Config\Services::validation();
    if($this->request->getMethod() == 'post'){
      $validation->setRules([
				'fname'           => ['label'=>'First name','rules'=>'required|min_length[3]|max_length[20]'],
        'lname'           => ['label'=>'Last name','rules'=>'required|min_length[3]|max_length[20]'],
        'contact_num'     => ['label'=>'Contact Number','rules'=>'required|min_length[11]|max_length[13]'],
        'address'         => ['label'=>'Address','rules'=>'required|min_length[10]|max_length[200]'],
        'email'           => ['label'=>'Email address','rules'=>'required|min_length[6]|max_length[50]|valid_email'],
      ]);
      $is_validate = $validation->withRequest($this->request)->run();
      if(!$is_validate)
      {
        $data['validation'] = $validation;
        return view('user_profile',$data);
			}
			else{
				
				if($this->session->isDonorLoggedIn)
				{
					$data = [
						"d_fname"             => $_POST['fname'],
						"d_lname"             => $_POST['lname'],
						"d_contact_num"       => $_POST['contact_num'],
						"d_address"           => $_POST['address'],
						"d_email"             => $_POST['email'],
					];
					$donorModel = new DonorModel();
					$donorModel->update($this->session->userInfo->d_id,$data);
				}
				else
				{
					$data = [
						"s_fname"             => $_POST['fname'],
						"s_lname"             => $_POST['lname'],
						"s_contact_num"       => $_POST['contact_num'],
						"s_address"           => $_POST['address'],
						"s_email"             => $_POST['email'],
					];
					$seekerModel = new SeekerModel();
					$seekerModel->update($this->session->userInfo->d_id,$data);
				}
				session()->destroy();
				$data["message"] = "Profile Updated Successfully. Please Login Again";
				return view('login',$data);
			}
		}
		else{
			if($this->session->isDonorLoggedIn)
			{
				$data['f_name'] 							= $this->session->userInfo->d_fname;
				$data['l_name'] 							= $this->session->userInfo->d_lname;
				$data['contact_number'] 			= $this->session->userInfo->d_contact_num;
				$data['postal_address'] 			= $this->session->userInfo->d_address;
				$data['email_address']				= $this->session->userInfo->d_email;
			}
			else
			{
				$data['f_name'] 							= $this->session->userInfo->s_fname;
				$data['l_name'] 							= $this->session->userInfo->s_lname;
				$data['contact_number'] 			= $this->session->userInfo->s_contact_num;
				$data['postal_address'] 			= $this->session->userInfo->s_address;
				$data['email_address']				= $this->session->userInfo->s_email;
			}
			return view('user_profile',$data);
		}
  }
}
