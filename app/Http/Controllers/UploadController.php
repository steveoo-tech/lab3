<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    function index(Request $req ) 
    { 
        $name = $req->file('ff')->getClientOriginalName();
        $ext = $req->file('ff')->extension();
        
        
        $originalName = str_replace(".$ext", "", $name);
        $fileuploadRegex = "/^[a-z][^0-9]*$/i";
        if(!preg_match($fileuploadRegex, $originalName)) {
            return back()
            ->with('failure',"$name did not pass the regex. You Need to have a filename that matches the")
            ->with('file',$name);
        }

     $req->file('ff')->store('uploads');
     return back()
        ->with("success", "SUCCESSLY UPLOADED");



    //     $fileName = basename("./uploads/" . $_FILES['ff']['name'], ".").PHP_EOL;
    //     echo $fileName;
    //     if(preg_match("/^[a-z][^0-9]*$/i", $fileName)){ 
    //         if(move_uploaded_file($_FILES['ff']['name'], "./uploads/" . $_FILES['ff']['name'])){
    //             return $req->file('ff')->store('uploads');
    //             echo 'File upload completed!!';
                
               
    //         }
    //         else{
    //             echo 'error!';
    //         }
    //     }else{
    //         echo 'File Name does not match!';
    //     }
    
    }
       
      
       
}

