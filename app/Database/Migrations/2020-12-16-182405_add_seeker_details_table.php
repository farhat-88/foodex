<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddSeekerDetailsTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			's_id'          => [
							'type'           => 'INT',
							'constraint'     => 5,
							'unsigned'       => true,
							'auto_increment' => true,
			],
			's_fname'       => [
							'type'           => 'VARCHAR',
							'constraint'     => '100',
			],
			's_lname'       => [
							'type'           	=> 'VARCHAR',
							'constraint'     	=> '100',
			],
			's_contact_num' => [
							'type'           => 'VARCHAR',
							'constraint'		 => '50'
			],
			's_address' => [
							'type'           => 'VARCHAR',
							'constraint'     => '250',
			],
			's_email' => [
							'type'           => 'VARCHAR',
							'constraint'     => '250',
							'null'           => true,
			],
			's_password' => [
							'type'           => 'VARCHAR',
							'constraint'     => '250',
			],
]);
	$this->forge->addKey('s_id', true);
	$this->forge->addUniqueKey('s_email');
	$this->forge->createTable('seekers_info');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('seekers_info');
	}
}
