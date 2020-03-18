<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class AddStudent extends Model
{
    //ชื่อตารางในฐานข้อมูล
    protected $table = "addstudent";
        //ชื่อคอลัมน์ในฐานข้อมูลที่อนุญาติให้แก้ไขข้อมูล
    protected $fillable = ["number","name","lastname",];    
        //Primary Key
    protected $primaryKey = "id";
    public $timestamps = false;
    
    public static function getAll(){
        return self::get();
     }

     public static function getItem($id){
        return self::findOrFail($id);
        }

    public static function search($q){
        return self::where("number","like","%{$q}%")           
        ->orWhere("name","like","%{$q}%")         
        ->orWhere("lastname","like","%{$q}%")         
        ->get();
        }

    public static function storeItem($item){
            return self::create($item); 			//RETURN OBJECT
            }

    public static function updateItem($id, $item){
            self::findOrFail($id)->update($item); 	//NO NEED TO RETURN
            }
   
    public static function destroyItem($id){
            self::findOrFail($id)->delete();
                }

}