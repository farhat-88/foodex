<?php namespace App\Models;
use CodeIgniter\Model;

class SeekerModel extends Model
{
  protected $table            = 'seekers_info';
  protected $primaryKey       = 's_id';
  protected $returnType       = 'object';
  protected $allowedFields    = ['s_fname','s_lname','s_contact_num','s_address','s_email','s_password'];
}
?>