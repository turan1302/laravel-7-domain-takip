<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Domain;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    public function index(){

        $domains = Domain::all();
        return view("domains.index",compact('domains'));
    }

    public function create(){
        $customers = Customer::all();
       return view('domains.create',compact('customers'));
    }

    public function store(){
        Domain::create($this->validateData());
        return redirect()->back();
    }

    public function show(Domain $domain){
        $customers = Customer::all();
        return view('domains.show',compact(['domain','customers']));
    }

    public function edit(Domain $domain){
        $customers = Customer::all();
        return view('domains.edit',compact(['domain','customers']));
    }

    public function update(Domain $domain){
        $domain->update($this->validateData());
        return redirect()->back();
    }

    public function destroy(Domain $domain){
       $domain->delete();
    }


    public function validateData(){
        return \request()->validate(array(
            "domain_name"=>"required",
            "domain_customer"=>"required",
            "domain_start_date"=>"required",
            "domain_company"=>"required",
            "domain_end_date"=>"required",
            "domain_price"=>"required"
        ),array(
            "domain_name.required"=>"Domain Adı Alanı Boş Bırakılamaz",
            "domain_customer.required"=>"Domain Müşterisi Alanı Boş Bırakılamaz",
            "domain_start_date.required"=>"Domain Başlangıç Tarihi Boş Bırakılamaz",
            "domain_company.required"=>"Domain Firması Alanı Boş Bırakılamaz",
            "domain_end_date.required"=>"Domain Bitiş Tarihi Boş Bırakılamaz",
            "domain_price.required"=>"Domain Fiyat Alanı Boş Bırakılamaz"
        ));
    }
}
