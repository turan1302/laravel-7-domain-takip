@extends('layout.content')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Domain Ekle</h6>
        </div>
        <div class="card-body">
            <form action="{{route('panel.domainler.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">Domain Adı</label>
                            <input readonly type="text" class="form-control" name="domain_name" value="{{$domain->domain_name}}">
                        </div>
                        <div class="col-md-4">
                            <label for="">Domain Müşteri</label>
                            <select readonly class="form-control" name="domain_customer">
                                @forelse($customers as $customer)
                                    <option value="{{$customer->id}}" {{ ($domain->domain_customer==$customer->id) ? 'selected':'' }}>{{$customer->customer_name}}</option>
                                @empty
                                    <option>Kayıt Yok</option>
                                @endforelse
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">Domain Başlangıç Tarihi</label>
                            <input readonly type="date" class="form-control" name="domain_start_date" value="{{$domain->domain_start_date}}">
                        </div>
                        <div class="col-md-4">
                            <label for="">Kayıt Firması</label>
                            <input readonly type="text" name="domain_company" class="form-control" value="{{$domain->domain_company}}">
                        </div>
                        <div class="col-md-4">
                            <label for="">Domain Bitiş Tarihi</label>
                            <input readonly type="date" class="form-control" name="domain_end_date" value="{{$domain->domain_end_date}}">
                        </div>
                        <div class="col-md-4">
                            <label for="">Domain Fiyat</label>
                            <input readonly type="number" step="0.01" name="domain_price" class="form-control" value="{{$domain->domain_price}}">
                        </div>
                    </div>
                </div>

                <a href="{{route('panel.domainler.index')}}" class="btn btn-danger btn-sm"><i class="fa fa-arrow-alt-circle-down"></i> Geriye Dön</a>

            </form>
        </div>
    </div>

@endsection
