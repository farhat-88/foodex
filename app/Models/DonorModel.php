<?php namespace App\Models;
use CodeIgniter\Model;

class DonorModel extends Model
{
  protected $table            = 'donors_info';
  protected $primaryKey       = 'd_id';
  protected $returnType       = 'object';
  protected $allowedFields    = ['d_fname','d_lname','d_contact_num','d_address','d_email','d_password'];
}
?>