<?php

namespace App\Traits;

trait UploadFile
{
    //
    public function upload($imgFile, $path){
    $imgExt = $imgFile->getClientOriginalExtension();
    $fileName = time().'.'.$imgExt;
    $path = 'assets/admin/images';
    $imgFile->move($path, $fileName);
    return $fileName;
    }
}
