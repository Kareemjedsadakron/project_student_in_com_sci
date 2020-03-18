<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
class PublicRelations extends Model
{
      //ชื่อตารางในฐานข้อมูล
    protected $table = "publicrelations";
      //ชื่อคอลัมน์ในฐานข้อมูลที่อนุญาติให้แก้ไขข้อมูล
    protected $fillable = ["number_id","title","data","date"];    
      //Primary Key
    protected $primaryKey = "id";
    public $timestamps = false;

    public static function getAll(){
        return self::orderBy('id','desc')
        ->get();
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
