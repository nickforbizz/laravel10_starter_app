<?php
 namespace App\Helpers;
 

 class GlobalHelper{



    public static function saveImage($image, $path, $option){
        try {
            if($image != null) {
                $image_path = $image->store($path, $option);
                return $image_path;
            } else {
                return null;
            }
        } catch (\Exception $e) {
            echo 'Image Helper saveImage ' .$e->getMessage();
        }
    }





}