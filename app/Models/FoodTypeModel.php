<?php namespace App\Models;
use CodeIgniter\Model;

class FoodTypeModel extends Model
{
  protected $table            = 'food_types';
  protected $primaryKey       = 'type_id';
  protected $returnType       = 'object';
  protected $allowedFields    = ['food_type'];
}
?>