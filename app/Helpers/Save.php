<?php 

namespace App\Helpers;

class Save{
   
    public static function SaveImage($file) {
        if($file){
            $filename = time() . '.' . $file->getClientOriginalName();
            $file->move('images',$filename);
            return '/'.'images/'.$filename;    
        }else{
            return null;
        }
    }
    public static function SaveFile($file) {
        if($file){
            $filename = time() . '.' . $file->getClientOriginalName();
            $file->move('files',$filename);
            return '/'.'files/'.$filename;    
        }else{
            return null;
        }
    }
}