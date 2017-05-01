<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Format;
use App\Artist;
use Validator;

class PhotoController extends Controller
{
    public function index(){
    	$photos = Photo::get();
    	return view('photos', [
    		'photos' => $photos
  		]);
    }

    public function singlePhoto($id){
    	$photo = Photo::find($id);
    	return view('photo', [
    		'photo' => $photo
  		]);
  	}

  	public function create(){
  		$artists = Artist::all();
  		$formats = Format::all();
  		return view('createPhoto', [
  			'artists' => $artists,
  			'formats' => $formats
			]);
  	}

  	public function upload(Request $request){

    $validation = Validator::make($request->all(), [
      'title' => 'required',
      'image' => 'required',
      'description' => 'required'
    ]);

    if($validation->passes()){
 			$photo = new Photo;
      $photo->title = $request->title;
      $photo->image = $request->image;
      $photo->description = $request->description;
      if($request->artist){
      	$photo->artist_id = $request->artist;
    	}
      if($request->format){
      	$photo->format_id = $request->format;
    	}
      $photo->save();


      return redirect( '/photos')
        ->with('successStatus', 'Song was created Successfully!');
    } else {
      return redirect('/create/photo')
        ->withInput()
        ->withErrors($validation);
    }
  	}
}
