<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\I18n\Time;
class Kategori extends Migration
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
			'title'       => [
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
		$this->forge->createTable('kategori', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('kategori');
	}
}
