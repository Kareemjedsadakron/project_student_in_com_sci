<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Activities extends Model
{
    //ชื่อตารางในฐานข้อมูล
    protected $table = "activities";
    //ชื่อคอลัมน์ในฐานข้อมูลที่อนุญาติให้แก้ไขข้อมูล
    protected $fillable = ["student_id	","title","data","date"];    
    //Primary Key
        protected $primaryKey = "id";

        public $timestamps = false;

    public static function getAll(){
            return self::get();
         }
    public static function getItem($id){
            //SIMILAR TO, BUT DIFFERENT A LITTLE BIT
            //return self::where('id',$id)->get($id);
            return self::findOrFail($id);
            }
    public static function search($q){
            return self::where("student_id","like","%{$q}%")           
            ->orWhere("title","like","%{$q}%")         
            ->orWhere("data","like","%{$q}%")         
            ->orWhere("date","like","%{$q}%")
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
