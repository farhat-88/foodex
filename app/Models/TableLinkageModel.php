<?php namespace App\Models;
use CodeIgniter\Model;

class TableLinkageModel extends Model
{
  protected $table            = 'linkage_table';
  protected $primaryKey       = 'link_id';
  protected $returnType       = 'object';
  protected $allowedFields    = ['s_id','d_id','rating_id','item_id'];
}
?>