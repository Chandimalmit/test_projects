<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class UploadController extends Controller
{
  
    public function upload()
    {   
     
    	if(Input::hasFile('fileToUpload')){  // name of the input field
        echo "final uploaded<br>";
       // return view('shop.index');
	    $file = Input::file('fileToUpload');
	    $file->move('uploads', $file->getClientOriginalName());
        echo '<img width="100px" height="100px" src="uploads/'.$file->getClientOriginalName().'" />';
      }
    }
}
