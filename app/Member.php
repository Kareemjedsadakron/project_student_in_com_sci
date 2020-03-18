<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Member extends Model
{
        //ชื่อตารางในฐานข้อมูล
    protected $table = "member";
        //ชื่อคอลัมน์ในฐานข้อมูลที่อนุญาติให้แก้ไขข้อมูล
    protected $fillable = ["student_id","iden_number","name","lastname","nickname",
    "address","school","phone","email","facebook","company","com_address","username","password",'file'];    
        //Primary Key
    protected $primaryKey = "id";
    public $timestamps = false;

    public static function getAll(){
        return DB::table('member')->get();
     }

     public static function getItem($id){
        return self::findOrFail($id);
        }

     public static function search($q){
        return self::where("student_id","like","%{$q}%")           
        ->orWhere("iden_number","like","%{$q}%")         
        ->orWhere("name","like","%{$q}%")         
        ->orWhere("lastname","like","%{$q}%")
        ->orWhere("nickname","like","%{$q}%")         
        ->orWhere("address","like","%{$q}%")         
        ->orWhere("school","like","%{$q}%")
        ->orWhere("phone","like","%{$q}%")         
        ->orWhere("email","like","%{$q}%")         
        ->orWhere("facebook","like","%{$q}%")
        ->orWhere("company","like","%{$q}%")
        ->orWhere("com_address","like","%{$q}%")         
        ->orWhere("username","like","%{$q}%")         
        ->orWhere("password","like","%{$q}%")
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
