<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Board extends Model
{
      //ชื่อตารางในฐานข้อมูล
      protected $table = "board";
      //ชื่อคอลัมน์ในฐานข้อมูลที่อนุญาติให้แก้ไขข้อมูล
      protected $fillable = ["number","title","data","personnel","date"];    
      //Primary Key
          protected $primaryKey = "id";
          public $timestamps = false;
         
        public static function getAll(){
            return self::orderBy('id','desc')->get();
         }
        public static function getItem($id){
          //SIMILAR TO, BUT DIFFERENT A LITTLE BIT
          //return self::where('id',$id)->get($id);
          return self::findOrFail($id);
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
