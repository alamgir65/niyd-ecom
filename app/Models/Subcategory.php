<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public static $image,$imageName,$imageUrl,$directory,$subCategory;
    public static function newSubCategory($request){
        self::$subCategory = new Subcategory();
        self::$subCategory->category_id = $request->category_id;
        self::$subCategory->name = $request->name;
        self::$subCategory->status = $request->status;
        self::$subCategory->image = self::getImageUrl($request);
        self::$subCategory->description = $request->description;
        self::$subCategory->save();
    }
    public static function getImageUrl($request){
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'uploads/sub-category-images/';
        self::$image->move(self::$directory,self::$imageName);
        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;
    }
    public static function updateSubCategory($request,$id){
        self::$subCategory = Subcategory::find($id);
        if ($request->file('image')){
            self::$imageUrl = self::getImageUrl($request);
            if (file_exists($request->image)){
                unlink($request->image);
            }
        }
        else{
            self::$imageUrl = self::$subCategory->image;
        }
        self::$subCategory->category_id = $request->category_id;
        self::$subCategory->name = $request->name;
        self::$subCategory->status = $request->status;
        self::$subCategory->image = self::$imageUrl;
        self::$subCategory->description = $request->description;
        self::$subCategory->save();
    }
    public static function deleteSubCategory($id){
        self::$subCategory = Subcategory::find($id);
        if (file_exists(self::$subCategory->image)){
            unlink(self::$subCategory->image);
        }
        self::$subCategory->delete();
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
