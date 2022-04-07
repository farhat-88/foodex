<?php namespace App\Models;
use CodeIgniter\Model;

class FoodItemModel extends Model
{
  protected $table            = 'food_items';
  protected $primaryKey       = 'item_id';
  protected $returnType       = 'object';
  protected $allowedFields    = ['item_name','servings','pickup_address','prepared_date','prepared_time','food_expiry_expected','type_id','food_status'];
}
?>