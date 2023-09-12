<?php

namespace App\Traits;

trait DiplomaUploade
{

    public string $rootPath='allFileUploaded/diploma/images/';


    public function SaveImage($photo, $folder_name)
    {
        $file_name = time() . $photo->getClientOriginalName();
        $path = $photo->move($this->rootPath . $folder_name, $file_name);
        return $path;
    }

    public function str_rand(int $length = 16)
    {
        $x = '';
        for ($i = 1; $i <= $length; $i++) {
            $x .= dechex(random_int(0, 255));
        }
        return substr($x, 0, $length);
    }
}
