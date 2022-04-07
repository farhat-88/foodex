<?php namespace App\Controllers;
use App\Models\FoodItemModel;
use App\Models\FoodTypeModel;
use App\Models\TableLinkageModel;

class Donate extends Foodex_Controller
{
	public function index()
	{
		return view('donate');
  }

  public function donate_meal()
  { 
    $validation = \Config\Services::validation();
    $foodTypeModel = new FoodTypeModel();
      if($this->request->getMethod() == 'post'){
        $validation->setRules([
          'item_name'             => ['label'=>'Item name','rules'=>'required|min_length[3]|max_length[50]'],
          'servings'              => ['label'=>'Servings','rules'=>'required|min_length[1]|max_length[3]'],
          'pickup_address'        => ['label'=>'Pickup Address','rules'=>'required|min_length[4]|max_length[200]'],
          'prepared_date'         => ['label'=>'Prepared date','rules'=>'required'],
          'prepared_time'         => ['label'=>'Prepared time','rules'=>'required'],
          'food_expiry_expected'  => ['label'=>'Expected food expiry','rules'=>'required'],
        ]);
        $is_validate = $validation->withRequest($this->request)->run();
        if(!$is_validate)
        {
          $data['validation'] = $validation;
          $data['foodTypesList'] = $foodTypeModel->findAll();
          return view('donate_meal',$data);
        }
        $data = [
          "item_name"               => $_POST['item_name'],
          "servings"                => $_POST['servings'],
          "pickup_address"          => $_POST['pickup_address'],
          "prepared_date"           => $_POST['prepared_date'],
          "prepared_time"           => $_POST['prepared_time'],
          "food_expiry_expected"    => $_POST['food_expiry_expected'],
          "type_id"                 => $_POST['food_type'],
        ];

        $foodItemModel = new FoodItemModel();
        $linkageTableModel = new TableLinkageModel();
        $foodItemModel->save($data); 
        
        $item_id = $foodTypeModel->insertID();
        $d_id = $this->session->userInfo->d_id;
        $link_data = [
          'item_id' => $item_id,
          'd_id'    => $d_id,
        ];
        $linkageTableModel->save($link_data);

        return $this->response->redirect(base_url('/receive'));
      }
      else
      {
        $data['foodTypesList'] = $foodTypeModel->findAll();
        return view('donate_meal',$data);
      }
    }
    
} 
?>
