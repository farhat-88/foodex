<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddFoodTypes extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'type_id' 		=> [
										'type'           => 'INT',
										'constraint'     => 5,
										'unsigned'       => true,
										'auto_increment' => true,
										],
			'food_type' => [
										'type'           => 'VARCHAR',
										'constraint'     => '100',
									],
		]);
		$this->forge->addKey('type_id', true);
		$this->forge->createTable('food_types');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('food_types');
	}
}
