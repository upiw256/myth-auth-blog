<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Siswauser extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'username'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'password'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'created_at'       => [
				'type' => 'datetime',
				'default'        => Time::now(),
			],
			'updated_at'       => [
				'type' => 'datetime',
				'default'        => null,
			],
			'deleted_at'       => [
				'type' => 'datetime',
				'default'        => null,
			],
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel news
		$this->forge->createTable('siswaUser', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('siswaUser');
	}
}
