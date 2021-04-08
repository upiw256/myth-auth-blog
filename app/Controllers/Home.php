<?php

namespace App\Controllers;
use \App\Models\MBerita;
use \App\Models\Kategori;
use \App\Models\UserHome;
class Home extends BaseController
{
	protected $berita;
	protected $kategori;
	protected $user;
	public function __construct(){
		$this->berita = new MBerita;
		$this->kategori = new Kategori;
		$this->user = new UserHome;
	}
	public function index()
	{
		$data = [
			'title'=>'Home',
			'berita'=>$this->berita->findAll(),
			'kategori'=>$this->kategori->findAll(),
			'login'=>FALSE
		];
		return view('welcome_message', $data);
	}
	public function dapodik()
	{
		if (!session()->get('login')) {
			redirect()->to('/');
		}
	}
	public function login($link="")
	{
		if(session()->get('login')){
            return redirect()->to('/home'.'/'.$link); 
		}
		if ($link==="") {
			return redirect()->to('/');
		}
			
		$data=[
			'link' => $link,
		];
		return view('login', $data);
	}
	public function atempLogin($to="")
	{
		
		$username = $this->request->getVar('username');
		$password = sha1(md5($this->request->getVar('password')));
		$link = $this->user->Where(['username'=>$username, 'password'=>$password])->first();
		//dd($link);
		if ($username === null) {
			return redirect()->to('/');
		}
		if (!$link) {
			return redirect()->to('/');
		}else{
			$session=[
				'id' => $link['username'],
				'login'=>TRUE
			];
			//dd($link);
			session()->set($session);
			return redirect()->to('/home'.'/'.$to);
		}

	}
	public function jadwal()
	{
		if(!session()->get('login')){
            return redirect()->to('/'); 
		}
		
		$data=[
			'title'=>'Home',
			'kategori'=>$this->kategori->findAll(),
			'login'=> session()->get('login')
		];
		return view('jadwal', $data);
	}
	
	public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
	
}
