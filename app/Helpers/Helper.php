<?php


function uploadImage($image, $folder)
{
    if ($image  && $image != null) {
        $getClientMimeType = explode('/', $image->getClientMimeType());
       
        $destinationPath = public_path('assets/uploads/' . $folder . '/');
        // NEW CODE
        $image_tmp = $image->getPathName();
        $getClientMimeType = explode('/', $image->getClientMimeType());
        $extension = $image->getClientOriginalExtension();
        $image_name = time() . '.' . $extension;
        $image_data = file_get_contents($image_tmp);
        $image = imagecreatefromstring($image_data);
        imagejpeg($image, $destinationPath . $image_name);
        imagedestroy($image);
    } else {
        $image_name = 'no-image.png';
    }
    return $image_name;
}