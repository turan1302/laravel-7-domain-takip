<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){

        $customers = Customer::all();
        return view("musteriler.index",compact('customers'));
    }

    public function create(){
        return view('musteriler.create');
    }

    public function store(){
        Customer::create($this->validateData());
        return redirect()->back();
    }

    public function edit(Customer $customer){
       return view('musteriler.edit',compact('customer'));
    }

    public function update(Customer $customer){
        $customer->update($this->validateData());
        return redirect()->back();
    }

    public function show(Customer $customer){
        return view('musteriler.show',compact('customer'));
    }

    public function destroy(Customer $customer){
        $customer->delete();
    }

    public function validateData(){
        return \request()->validate(array(
            "customer_name"=>"required",
            "customer_mail"=>"required|email|unique:customers",
            "customer_gsm"=>"required|unique:customers",
            "customer_detail"=>"required",
        ),array(
            "customer_name.required"=>"Müşteri İsmi Kısmı Boş Bırakılamaz",
            "customer_mail.required"=>"Müşteri Mail Kısmı Boş Bırakılamaz",
            "customer_mail.email"=>"Lütfen Geçerli Bir E-Mail Giriniz",
            "customer_mail.unique"=>"Aynı Mail e Ait Kullanıcı Var",

            "customer_gsm.required"=>"Müşteri Telefon Numarası Boş Bırakılamaz",
            "customer_gsm.unique"=>"Aynı GSM Numarasına Ait Kullanıcı Var",
            "customer_detail.required"=>"Müşteri Detay Kısmı Boş Bırakılamaz"
        ));
    }
}
