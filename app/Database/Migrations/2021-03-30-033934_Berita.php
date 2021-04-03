<?php

namespace App\Database\Migrations;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Migration;

class Berita extends Migration
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
			'author'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
			'content' => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'img'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
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
		$this->forge->createTable('berita', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('berita');
	}
}
