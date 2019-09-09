<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable = [
        "name",
        "age",
        "address",
        "telephone",
        "active",
        "created_at",
        "updated_at",
    ];

    public Const ACTIVE = 1;
    public Const DEACTIVE = 0;

    public static $_StatusLabel = [
        self::ACTIVE => "active",
        self::DEACTIVE => "Deactive",

    ];
    public function getStatus(){
        if($this->active){
            return "Active";
        }
        return "Deactive";
    }
}
