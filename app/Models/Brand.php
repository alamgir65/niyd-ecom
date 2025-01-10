<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public static $image,$imageName,$imageUrl,$directory,$brand;
    public static function newBrand($request){
        self::$brand = new Brand();
        self::$brand->name = $request->name;
        self::$brand->status = $request->status;
        self::$brand->image = self::getImageUrl($request);
        self::$brand->description = $request->description;
        self::$brand->save();
    }
    public static function updateBrand($request,$id){
        self::$brand = Brand::find($id);
        if($request->file('image')){
            unlink(self::$brand->image);
            self::$imageUrl = self::getImageUrl($request);
        }
        else{
            self::$imageUrl = self::$brand->image;
        }

        self::$brand->name = $request->name;
        self::$brand->status = $request->status;
        self::$brand->image = self::$imageUrl;
        self::$brand->description = $request->description;
        self::$brand->save();

    }
    public static function deleteBrand($id){
        self::$brand = Brand::find($id);
        if (file_exists(self::$brand->image)){
            unlink(self::$brand->image);
        }
        self::$brand->delete();
    }
    public static function getImageUrl($request){
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'uploads/brand-image/';
        self::$image->move(self::$directory , self::$imageName);
        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;
    }
}
