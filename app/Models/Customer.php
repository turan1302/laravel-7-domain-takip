<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded=[];

    public function domains(){
        return $this->hasMany(Domain::class,'domain_customer','id')->first();

        /**
         *
         *  FİRST DEMEMİZİN SEBEBİ BİZE OBJE OLARAK DÖNDÜRMESİNDEN DOLAYI
         *  BİZ BU ŞEKİLDE DİĞER YERLERDEN KOLAY ALMAK İÇİN BUNU UYGULADIK
         */

    }

}
