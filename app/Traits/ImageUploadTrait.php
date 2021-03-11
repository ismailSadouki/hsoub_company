<?php

namespace App\Traits;

trait ImageUploadTrait
{
    protected $image_path = "app/public/images";
    protected $img_height = 230;
    protected $img_width = 262.5;

    public function uploadImage($img)
    {
        $img_name = $this->imageName($img);
        \Image::make($img)->resize($this->img_width,$this->img_height)->save(storage_path($this->image_path.'/'.$img_name));

        return "images/".$img_name;
    }

    public function imageName($image)
    {
        return time().'-'.$image->getClientOriginalName();
    }
}