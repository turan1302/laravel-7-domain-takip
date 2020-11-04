@extends('layout.content')
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{$setting->site_title}}</h1>
    </div>

    <!-- MÜŞTERİLER TABLOSU -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Müşteriler</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>İsim</th>
                        <th>E-Mail</th>
                        <th>Telefon</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>İsim</th>
                        <th>E-Mail</th>
                        <th>Telefon</th>
                        <th>İşlemler</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @forelse($customers as $customer)
                        <tr>
                            <td>{{$customer->id}}</td>
                            <td>{{$customer->customer_name}}</td>
                            <td>{{$customer->customer_mail}}</td>
                            <td>{{$customer->customer_gsm}}</td>
                            <td>
                                <a href="{{route('panel.customers.show',$customer->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="{{route('panel.customers.edit',$customer->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                <button type="button" class="btn btn-danger btn-sm isDelete" data-url="{{route('panel.customers.destroy',$customer->id)}}"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="12"></td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- DOMAİNLER TABLOSU -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Domainler</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Domain Adı</th>
                        <th>Domain Müşteri</th>
                        <th>Başlangıç Tarihi</th>
                        <th>Bitiş Tarihi</th>
                        <th>Kayıt Firması</th>
                        <th>Fiyat</th>
                        <th>Gün farkı</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Domain Adı</th>
                        <th>Domain Müşteri</th>
                        <th>Başlangıç Tarihi</th>
                        <th>Bitiş Tarihi</th>
                        <th>Kayıt Firması</th>
                        <th>Fiyat</th>
                        <th>Gün farkı</th>
                        <th>İşlemler</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @forelse($domains as $domain)
                        <tr>
                            <td>{{$domain->id}}</td>
                            <td>{{$domain->domain_name}}</td>
                            <td>{{$domain->customer()->customer_name}}</td>
                            <td>{{$domain->domain_start_date}}</td>
                            <td>{{$domain->domain_end_date}}</td>
                            <td>{{$domain->domain_company}}</td>
                            <td>{{number_format($domain->domain_price,2,",",".")}}</td>
                            <td>{{$domain->DaysLeft}}</td>
                            <td>
                                <a href="{{route('panel.domainler.add-domain-day',$domain->id)}}" class="btn btn-success btn-sm"><i class="fa fa-recycle"></i></a>
                                <a href="{{route('panel.domainler.show',$domain->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="{{route('panel.domainler.edit',$domain->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                <button type="button" class="btn btn-danger btn-sm isDelete" data-url="{{route('panel.domainler.destroy',$domain->id)}}"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="12"></td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
