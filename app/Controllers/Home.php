<?php

namespace App\Controllers;
use \App\Models\MBerita;
use \App\Models\Kategori;
class Home extends BaseController
{
	protected $berita;
	protected $kategori;
	public function __construct(){
		$this->berita = new MBerita;
		$this->kategori = new Kategori;
	}
	public function index()
	{
		$data = [
			'title'=>'Home',
			'berita'=>$this->berita->findAll(),
			'kategori'=>$this->kategori->findAll(),
		];
		return view('welcome_message', $data);
	}
}
