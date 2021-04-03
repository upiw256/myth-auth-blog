<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Alterberita extends Migration
{
	public function up()
	{
		$this->forge->addColumn('berita', [
			'id_kategori INT(5) UNIQUE'
		]);
	}

	public function down()
	{
		$this->forge->dropColumn('berita', 'id_kategori');
	}
}