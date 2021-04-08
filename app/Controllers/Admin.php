<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use \App\Models\MBerita;
use \App\Models\Muser;
use \App\Models\MuserDetail;
use CodeIgniter\I18n\Time;
use \App\Models\Mrole;
use \App\Models\Mroleuser;
use \vendor\Myth\Auth\Entities\User;
class Admin extends BaseController
{
	protected $berita;
	protected $user;
	protected $user_detail;
	protected $role;
	protected $roleuser;
	public function __construct()
	{
		$this->berita = new MBerita;
		$this->user = new Muser;
		$this->user_detail = new MuserDetail;
		$this->role = new Mrole;
		$this->roleuser = new Mroleuser;
	}
	
	public function index()
	{
		$data = [
			'aktiv' => 'dashboard',
			'sub' =>''
		];
		return view('admin/home', $data);
	}
	public function user()
	{
		$data = [
			'aktiv' => 'user',
			'sub' =>'',
			'user'=>$this->user->findAll(),
			'users'=>$this->user_detail->getWhere(['full_name'=>null])->getResultArray(),
		];
		return view('admin/user', $data);
	}
	public function berita()
	{
		$data = [
			'aktiv' => 'berita',
			'sub' =>'tambah-berita',
			'berita'=> $this->berita->findAll()
		];
		return view('admin/berita', $data);
	}
	public function kategori()
	{
		$data = [
			'aktiv' => 'berita',
			'sub' =>'tambah-kategori'
		];
		return view('admin/kategori', $data);
	}
	public function siswa()
	{

		$siswa = parent::siswa()['rows'];
		//dd($siswa);
		$data = [
			'siswa' => $siswa,
			'aktiv' => 'siswa',
			'sub' =>''
		];
		return view('admin/siswa', $data);
	}
	public function gtk()
	{
		$gtk = parent::gtk()['rows'];
		//dd($siswa);
		$data = [
			'gtk' => $gtk,
			'aktiv' => 'gtk',
			'sub' =>''
		];
		return view('admin/gtk', $data);
	}
	public function role()
	{
		$data = [
			'aktiv' => 'role',
			'sub' =>'',
			'role'=> $this->role->findAll()
		];
		return view('admin/role', $data);
	}
	public function setting()
	{
		$data = [
			'aktiv' => 'setting',
			'sub' =>'',
			'id'=>$this->user_detail->getWhere(['id' => user_id()])->getResult()
		];
		return view('admin/setting', $data);
	}
	public function regist()
	{
		
		$user=[
			'full_name'=> $this->request->getVar('full_name'),
			'updated_at'=> Time::now()
		];
		$this->user_detail->set($user);
		$this->user_detail->where('id', $this->request->getVar('id'));
		$this->user_detail->update();
		$role=[
			'group_id'=> $this->request->getVar('role'),
			'user_id'=> $this->request->getVar('id')
		];
		$this->roleuser->insert($role);
		$data = [
			'aktiv' => 'user',
			'sub' =>'',
			'user'=>$this->user->findAll(),
			'users'=>$this->user_detail->getWhere(['full_name'=>null])->getResultArray(),
		];
		return view('admin/user', $data);
	}
}
