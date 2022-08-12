<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected static $product;

    public static function createProduct($request)
    {
        self::$product                  = new Product();
        self::$product->name            = $request->name;
        self::$product->category_name   = $request->category_name;
        self::$product->brand_name      = $request->brand_name;
        self::$product->description     = $request->description;
        $imageDir                       = 'product-img/';
        self::$product->image           = Product::imageUpload($request, self::$product, $imageDir);
        self::$product->status          = $request->status;

        self::$product->save();
    }
    public static function updateProduct($request, $id)
    {
        self::$product                  = Product::find($id);
        self::$product->name            = $request->name;
        self::$product->category_name   = $request->category_name;
        self::$product->brand_name      = $request->brand_name;
        self::$product->description     = $request->description;
        $imageDir                       = 'product-img/';
        self::$product->image           = Product::imageUpload($request, self::$product, $imageDir);
        self::$product->status          = $request->status;
        self::$product->save();
    }

    public static function imageUpload($request, $db, $imageDir)
    {
        if (isset($request->image))
        {
            if ($db->image){
                unlink($db->image);
            }
            $image      = $request->file('image');
            $imageName  = rand(100000, 999999). time(). '.'.$image->getClientOriginalExtension();
            $image->move($imageDir, $imageName);
            $imageUrl   = $imageDir.$imageName;
        }
        else{
            $imageUrl   = $db->image;
        }
        return $imageUrl;
    }
}
