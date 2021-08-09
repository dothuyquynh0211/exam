<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CustomerModel extends Model
{
    use HasFactory;
    
    static function getAll($keyword=""){
        if ($keyword== "") {
            return DB::table('customers')->get();
        }
        else{
            return DB::table('customers')->where('name','LIKE','%'.$keyword.'%')
            ->orWhere('phone','LIKE','%'.$keyword.'%')->get();
        }
    }

    static function insertInfo($Name,$gender,$img,$phone,$email){
         $result = DB::table('customers')->insert(['name'=>$Name,'gender'=>$gender,'avt'=>$img,'phone'=>$phone,'email'=>$email]);
        return $result;
    }
}
