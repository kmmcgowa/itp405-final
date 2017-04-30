<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Format;
use App\Artist;

class PhotoController extends Controller
{
    public function index(){
    	$photos = Photo::get();
    	return view('photos', [
    		'photos' => $photos
  		]);
    }
}
