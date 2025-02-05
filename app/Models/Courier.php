<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
    public static $courier,$image,$imageName,$imageUrl,$directory;
    public static function newCourier($request){
        self::$courier = new Courier();
        self::$courier->name = $request->name;
        self::$courier->email = $request->email;
        self::$courier->status = $request->status;
        self::$courier->address = $request->address;
        self::$courier->description = $request->description;
        self::$courier->logo = self::getImageUrl($request);
        self::$courier->save();
    }
    public static function updateCourier($request,$id){
        self::$courier = Courier::find($id);

        if($request->file('logo')){
            unlink(self::$courier->logo);
            self::$imageUrl = self::getImageUrl($request);
        }
        else{
            self::$imageUrl = self::$courier->logo;
        }

        self::$courier->name = $request->name;
        self::$courier->email = $request->email;
        self::$courier->status = $request->status;
        self::$courier->address = $request->address;
        self::$courier->description = $request->description;
        self::$courier->logo = self::$imageUrl;
        self::$courier->save();
    }
    public static function deleteCourier($id){
        self::$courier = Courier::find($id);
        self::$courier->delete();
    }
    public static function getImageUrl($request){
        self::$image = $request->file('logo');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'upload/courier-logos/';
        self::$image->move(self::$directory,self::$imageName);
        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;
    }
}
