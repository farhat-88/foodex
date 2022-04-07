<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddAllTableLinkage extends Migration
{
	public function up()
	{
		$this->forge->addField([
				'link_id'      => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
				],
				's_id'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'null'           => true,
				],
				'd_id'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'null'           => true,
				],
				'rating_id' 		=> [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'null'           => true,
				],
				'item_id'  	=> [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'null'           => true,
				],
		]);
		$this->forge->addKey('link_id', true);
		$this->forge->addForeignKey('s_id','seekers_info','s_id','CASCADE','CASCADE');
		$this->forge->addForeignKey('d_id','donors_info','d_id','CASCADE','CASCADE');
		$this->forge->addForeignKey('item_id','food_items','item_id','CASCADE','CASCADE');
		$this->forge->addForeignKey('rating_id','foods_rating','rating_id','CASCADE','CASCADE');
		$this->forge->createTable('linkage_table');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('linkage_table');
	}
}
