<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddDonorDetailsTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'd_id'          => [
							'type'           => 'INT',
							'constraint'     => 5,
							'unsigned'       => true,
							'auto_increment' => true,
			],
			'd_fname'       => [
							'type'           => 'VARCHAR',
							'constraint'     => '100',
			],
			'd_lname'       => [
							'type'           	=> 'VARCHAR',
							'constraint'     	=> '100',
			],
			'd_contact_num' => [
							'type'           => 'VARCHAR',
							'constraint'		 => '50'
			],
			'd_address' => [
							'type'           => 'VARCHAR',
							'constraint'     => '250',
			],
			'd_email' => [
							'type'           => 'VARCHAR',
							'constraint'     => '250',
							'null'           => true,
			],
			'd_password' => [
							'type'           => 'VARCHAR',
							'constraint'     => '250',
			],
]);
		$this->forge->addKey('d_id', true);
		$this->forge->addUniqueKey('s_email');
		$this->forge->createTable('donors_info');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('donors_info');
	}
}
