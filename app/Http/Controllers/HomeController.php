<?php namespace App\Http\Controllers;

use Illuminate\Filesystem\Filesystem as File;
use Illuminate\Support\Facades\Input as Input;
use App\Guest as Guest;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home',['page' => 'home']);
	}
	
	public function journey()
	{
		return view('journey',['page' => 'journey']);
	}
	
	public function wedding()
	{
		return view('wedding',['page' => 'wedding']);
	}
	
	public function gallery()
	{
		$photos = $this->_getPhotos();
		return view('gallery',['page' => 'gallery', 'imgs' => $photos]);
	}
	
	public function events()
	{
		return view('events',['page' => 'events']);
	}
	
	public function guestbook() {
		$entries = Guest::all();
		
		foreach($entries as $entry) {
			$entry->datetime = date('D, M jS',strtotime($entry->created_at));
		}
		return view('guestbook',['page' => 'guestbook', 'entries' => $entries] );
	}
	
	public function addGuestbookEntry() {
		$data = Input::all();
		
		$entry = new Guest();
		
		$entry->name = $data['name'];
		$entry->message = $data['message'];
		
		$entry->save();
		
		$response = array(
			'name' => $entry->name,
			'message' => $entry->message,
			'datetime' => date('D, M jS',strtotime($entry->created_at)),
		);
		
		echo json_encode($response);
	}
	
	private function _getPhotos()
	{
		//get the paths
		$fh = new File;
		$files = $fh->allFiles('img/gallery');
		$paths = array();
		foreach($files as $file) {
			$fn = $file->getFileName();
			$fn = str_replace('.jpg','',$fn);
			$fn = intval($fn);
			$paths[] = array(
				'path' => $file->getPathName(),
				'fn'   => $fn,
				'type' => ''
			);
		}
		
		//known wide photos 
		$wide = array(6,10,14,15,23,28,29,44,48);
		
		foreach($paths as $n => $path) {
			if(in_array($path['fn'],$wide)) {
				$path['type'] = 'wide';
			} else {
				$path['type'] = 'tall';
			}
			
			$paths[$n] = $path;
		}
		
		$paths = $this->_smartShuffle($paths);
		
		return $paths;
	}
	
	private function _smartShuffle($paths) {
		$tall = array();
		$wide = array();
		foreach($paths as $path) {
			if($path['type'] == 'tall') {
				$tall[] = $path;
			} else {
				$wide[] = $path;
			}
		}
		
		shuffle($tall);
		shuffle($wide);
		
		$sorted = array();
		foreach($tall as $i => $path) {
			$sorted[] = $path;
			$sorted[] = $wide[$i];
		}
		
		return $sorted;
		
	}

}
