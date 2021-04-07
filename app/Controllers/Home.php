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
	public function dapodik()
	{
		if (!session()->get('login')) {
			redirect()->to('/');
		}
	}
	public function login($link)
	{
		$nisn = $this->request->getVar('username');
		$password = password_verify($this->request->getVar('password'), '$10$1YPSY/swET/arGCF3yaDlumsp1HYtd/Q4RoDBpFFXomapCzxw2HEu');
		
		$data=[
			'link' => $link,
		];
		return view('login', $data);
	}
	
}
