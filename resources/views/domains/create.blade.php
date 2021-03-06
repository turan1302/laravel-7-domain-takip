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
                            <input type="text" class="form-control" name="domain_name" value="{{old('domain_name')}}">
                            @error('domain_name')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="">Domain Müşteri</label>
                            <select class="form-control FastAddCustomer" name="domain_customer">
                                @forelse($customers as $customer)
                                    <option value="{{$customer->id}}" {{ (old('domain_customer')==$customer->id) ? 'selected':'' }}>{{$customer->customer_name}}</option>
                                @empty
                                    <option>Kayıt Yok</option>
                                @endforelse
                                    <option value="musteri_ekle">Müşteri Ekle</option>
                            </select>
                            @error('domain_customer')
                            <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="">Domain Başlangıç Tarihi</label>
                            <input type="date" class="form-control" name="domain_start_date" value="{{old('domain_start_date')}}">
                            @error('domain_start_date')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="">Kayıt Firması</label>
                            <input type="text" name="domain_company" class="form-control" value="{{old('domain_company')}}">
                            @error('domain_company')
                            <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="">Domain Bitiş Tarihi</label>
                            <input type="date" class="form-control" name="domain_end_date" value="{{old('domain_end_date')}}">
                            @error('domain_end_date')
                            <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="">Domain Fiyat</label>
                            <input type="number" step="0.01" name="domain_price" class="form-control" value="{{old('domain_price')}}">
                            @error('domain_price')
                            <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Ekle</button>
                <a href="{{route('panel.domainler.index')}}" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Vazgeç</a>

            </form>
        </div>
    </div>

@endsection
