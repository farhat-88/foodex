<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddStatusColInFoodItems extends Migration
{
	public function up()
	{
		$fields =[
			'food_status'  	=> [
						'type'           => 'INT',
						'constraint'     => 5,
						'unsigned'       => true,
			],
		];
		$this->forge->addColumn('food_items', $fields);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropColumn('food_items', 'food_status');
	}
}
