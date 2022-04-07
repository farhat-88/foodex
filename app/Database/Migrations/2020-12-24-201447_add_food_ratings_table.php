<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddFoodRatingsTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'rating_id'          => [
							'type'           => 'INT',
							'constraint'     => 5,
							'unsigned'       => true,
							'auto_increment' => true,
			],
			'rating_description' => [
							'type'           => 'TEXT',
							'null'           => true,
			],
			'rating_star' => [
							'type'           => 'INT',
							'constraint'     => 2,
							'null'           => true,
			],
			's_id'        => [
							'type'           => 'INT',
							'constraint'     => 5,
							'unsigned'       => true,
							'null'           => true,
			],		
]);
	$this->forge->addKey('rating_id', true);
	$this->forge->addForeignKey('s_id','seekers_info','s_id','CASCADE','CASCADE');
	$this->forge->createTable('foods_rating');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('foods_rating');
	}
}
