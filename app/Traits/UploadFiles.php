<?php
namespace App\Traits;
trait UploadFiles{

    function saveFiles($file,$dist){

        $ext = $file->getClientOriginalExtension();  // to get the extension of the photo from form

        $upload_file = time().'.'.$ext;

        $path = $dist;

        $file->move($path,$upload_file);

        return $upload_file;
    }
}