<?php namespace App\Controllers;
use App\Models\FoodItemModel;
use App\Models\FoodTypeModel;
use App\Models\TableLinkageModel;

class Receive extends Foodex_Controller
{
  public function meals_listing()
  {
    $foodItemModel = new FoodItemModel();
    // $data['mealsList'] = $foodItemModel->join('food_types','food_items.type_id = food_types.type_id','inner')->findAll();// select * from `food_items` INNER JOIN food_types on food_types.type_id =food_items.type_id; 
    $data = [
      'mealsList'   => $foodItemModel->join('food_types','food_items.type_id = food_types.type_id','inner')->findAll(),// select * from `food_items` INNER JOIN food_types on food_types.type_id =food_items.type_id; 
      'users'       => $foodItemModel->paginate(5),
      'pager'       =>  $foodItemModel->pager,
    ];
    return view('meals_listing',$data);
  }

  public function meals_update($item_id)
  { 
    $foodItemModel = new FoodItemModel();
    $foodTypeModel = new FoodTypeModel();
    $validation = \Config\Services::validation();
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
        $data['mealsList'] = $foodItemModel->find($item_id);
        return view('meals_update',$data);
      }
      $data = [
        "item_name"               => $_POST['item_name'],
        "servings"                => $_POST['servings'],
        "pickup_address"          => $_POST['pickup_address'],
        "prepared_date"           => $_POST['prepared_date'],
        "prepared_time"           => $_POST['prepared_time'],
        "food_expiry_expected"    => $_POST['food_expiry_expected'],
        "type_id"                 => $_POST['food_type'],
        "food_status"             => 0, // meal is entered for the first time.
      ];
      $foodItemModel->update($item_id,$data);
      return $this->response->redirect(base_url('/receive'));
    }
    else
    {
      $data['foodTypesList'] = $foodTypeModel->findAll();
      $data['mealsList'] = $foodItemModel->find($item_id);
      return view('meals_update',$data);
    }
  }

  public function meals_delete($item_id)
  {
    $foodItemModel = new FoodItemModel();
    $foodItemModel->delete($item_id);
    return $this->response->redirect(base_url('/receive'));
  }

  public function book_meal($item_id)
  {
    $foodItemModel = new FoodItemModel();
    $foodTypeModel = new FoodTypeModel();
    $data['mealsList'] = $foodItemModel->find($item_id);
    $data['foodTypesList'] = $foodTypeModel->find($data['mealsList']->type_id);
    return view('book-meal',$data);
  }

  public function confirmation($item_id)
  {
    $foodItemModel = new FoodItemModel();
    $linkageTableModel = new TableLinkageModel();
    $data = [   
      "food_status" => 1, // meal is in waiting for pickup state.
      "item_id"     => $item_id,
    ];
    $foodItemModel->update($item_id, $data ); 
    $s_id = $this->session->userInfo->s_id;

    $link_data = [
      's_id'    => $s_id,
    ];
    $linkageTableModel->set('s_id',$s_id)->where('item_id',$item_id)->update() ; //update `linkage_table` set s_id = 1 where item_id=1
    $data['message'] = "Your Order has been booked. Waiting to be delivered.";
    return redirect()->to('/receive');
   
  }
  public function status($item_id)
  {
    $data = [   
      "item_id"     => $item_id,
    ];
     return view('confirmation',$data);
  }
  
  public function delivered($item_id)
  {
    $foodItemModel = new FoodItemModel();
    $data = [   
      "food_status" => 2, // meal has been delivered;
    ];
    $foodItemModel->update($item_id, $data); 
    $data['message'] = "Meal has been delivered.";
    return redirect()->to('/receive');
  }

  public function cancelled($item_id)
  {
    $foodItemModel = new FoodItemModel();
    $data = [   
      "food_status" => 0, // meal booking has been cancelled;
    ];
    $foodItemModel->update($item_id, $data ); 
    $data['message'] = "Booking has been cancelled.";
    return redirect()->to('/receive');
  }

}

?>