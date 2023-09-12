<?php

namespace App\Traits;


trait CourseUploade
{
    public string $rootPath='allFileUploaded/courses/images/';
    public string $videoPath='allFileUploaded/courses/video/';

    public function SaveImage($photo, $folder_name)
    {
        $file_name = time() . $photo->getClientOriginalName();
//                $path =$photo->storeAs($folder_name,$file_name,'allFile'); //when we use driver path
        $path = $photo->move($this->rootPath . $folder_name, $file_name);
//        $path=Storage::putFile($this->path_image_course.$file_name,$photo);
        return $path;
    }

    public function saveVideo($video,$name){

        $path=$video->move($this->videoPath,time().$name);
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
