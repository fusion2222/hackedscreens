<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

use App\Script;


class Page extends Controller{

	public function script(Request $request, Script $script){

		$data = Arr::only(
			// No loop! Keep names literal in case we decide to have some special text labels in future.
			$request->query(), ['title', 'desc']
		);

		return response()->view(
			'scripts.' . $script->slug, ['data' => $data]
		)->header('Content-Type', 'application/javascript; charset=UTF-8');
	}
    
	public function landingPage(){
		$scripts = Script::orderBy('id', 'desc')->get();
		return view('index')->with(['scripts' => $scripts]);
	}

	public function examplePage(Request $request, Script $script){
		
		$url_params = [];

		foreach($request->query() as $key => $value){
			$url_params[] = $key . '=' . $value;
		}

		return view('example')->with([
			'script' => $script,
			'script_params' => '?' . implode('&', $url_params)
		]);
	}

}
