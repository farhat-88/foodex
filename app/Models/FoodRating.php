<?php namespace App\Models;
use CodeIgniter\Model;

class FoodRating extends Model{
  protected $table            = 'foods_rating';
  protected $primaryKey       = 'rating_id';
  // protected $returnType       = 'object';
  protected $allowedFields    = ['rating_description','rating_star'];
  
}
?>