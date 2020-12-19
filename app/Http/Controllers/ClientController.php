<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Client;

class ClientController extends Controller
{
	public function index()
	{
		if (Session::get('userToken')==null) {
			return redirect()->route('login');
		}else{
			// echo Session::get('userToken');
	    	$res2 = Http::withHeaders([
				    'Content-Type'=>'application/x-www-form-urlencoded',
					'Accept'=>'application/json',
					'Authorization'=>'Bearer '.Session::get('userToken'),
				])->get('http://127.0.0.1:8000/api/class');

			// echo $res2->getStatusCode();
			$allClass = json_decode($res2->getBody());
			// var_dump($allClass);

			return view('allClass',compact('allClass'));
		}
	}
    public function login(Request $request)
    {
    	$res = Http::asForm()->post('http://127.0.0.1:8000/api/login', [
		    'email' => $request->email,
		    'password' => $request->password,
		]);

		$token = json_decode($res->getBody(),true);
		// var_dump($token);

    	$statusCode = $res->getStatusCode();
		if ($statusCode==401) {
			return back()->withInput()->with('fail','Invalid Credential');
		}else{
			Session::put('userToken',$token['token']);
			Session::put('login',true);
			Session::put('userName',$request->email);
			return redirect()->route('user');
		}
    }

    public function logout(Request $request)
    {
    	$request->Session()->flush();
    	return redirect()->route('login')->with('success','Berhasil Logout');
    }

    public function classWithID($classID)
    {
    	$res2 = Http::withHeaders([
			    'Content-Type'=>'application/x-www-form-urlencoded',
				'Accept'=>'application/json',
				'Authorization'=>'Bearer '.Session::get('userToken'),
				
			])->get('http://127.0.0.1:8000/api/detail/',[
				'classID'=>$classID,
			]);

		// echo $res2->getStatusCode();
		$allClass = json_decode($res2->getBody());
		// echo Session::get('userToken');
		// var_dump($allClass);
		return view('classDetail',compact('allClass'));
    }
}
