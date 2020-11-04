<?php

namespace App\Models;

use App\Http\Controllers\CustomerController;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    protected $guarded=[];

    public function customer(){
        return $this->belongsTo(Customer::class,'domain_customer','id')->first();

        /**
         *
         *  FİRST DEMEMİZİN SEBEBİ BİZE OBJE OLARAK DÖNDÜRMESİNDEN DOLAYI
         *  BİZ BU ŞEKİLDE DİĞER YERLERDEN KOLAY ALMAK İÇİN BUNU UYGULADIK
         */

    }

    public function getDaysLeftAttribute(){
        $date1= date_create($this->domain_end_date);
        $date2= date_create($this->domain_start_date);
        $interval= date_diff($date1,$date2);
        return $interval->format('%a gün farkı var.');
    }

}
