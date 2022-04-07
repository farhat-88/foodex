<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddFoodItems extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'item_id'  	=> [
											'type'           => 'INT',
											'constraint'     => 5,
											'unsigned'       => true,
											'auto_increment' => true,
			],
			'item_name' 	=> [
											'type'           => 'VARCHAR',
											'constraint'     => '100',
			],
			'servings' => [
										'type'           => 'INT',
										'constraint'		 => '5'
			],
			'pickup_address' => [
										'type'           => 'VARCHAR',
										'constraint'     => '250',
			],
			'prepared_date' => [
										'type'           => 'DATE',
],
			'prepared_time' => [
										'type'           => 'TIME',
			],
			'food_expiry_expected' => [
									'type'           => 'DATE',
			],
			'type_id' 		=> [
									'type'           => 'INT',
									'constraint'     => 5,
									'unsigned'       => true,
				],
			'food_status'  	=> [
								'type'           => 'INT',
								'constraint'     => 5,
								'unsigned'       => true,
				],
		]);
			$this->forge->addKey('item_id', true);
			$this->forge->addForeignKey('type_id','food_types','type_id','CASCADE','CASCADE');
			$this->forge->createTable('food_items');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('food_items');
	}
}
