<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use Illuminate\Http\Request;

class AddDomainDayController extends Controller
{
    public function edit(Domain $domain)
    {
        return view('domains.add-day', compact('domain'));
    }

    public function update(Request $request, Domain $domain)
    {
        $data = $this->validateData();
        $add_year = $data['domain_day'];
        $new_date = strtotime("$add_year years", strtotime($data['domain_end_date']));
        $new_date_format = date("Y-m-d", $new_date);
        $data['domain_end_date'] = $new_date_format;
        unset($data['domain_day']);

        $domain->update($data);
        return redirect()->back();
    }

    public function validateData()
    {
        return \request()->validate(array(
            "domain_day" => "required",
            "domain_end_date" => "required"
        ), array(
            "domain_day.required" => "Yıl Ekleme Alanı Boş Bırakılamaz",
        ));
    }
}
