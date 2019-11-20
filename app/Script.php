<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Script extends Model{
    /*
	 *	Thumbnail name, and its image file name will be
	 *	derived from slug. Always we want to have PNGs. 
     */
    public function direct_link(){
    	return route('script', ['script' => $this->slug]);
    }

    public function example_link(){
    	return route('examplePage', ['scriptName' => $this->slug]);
        // return env('APP_URL') . '/scripts/' . $this->slug . '.js';
    }

    public function avatar_link(){
        return '/img/' . str_replace('-', '_', $this->slug) . '.png';
        // skull_in_the_middle.png
    }

	public function getRouteKeyName(){
	    return 'slug';
	}
}
