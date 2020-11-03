@extends('layout.content')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Müşteri Güncelle</h6>
        </div>
        <div class="card-body">
            <form action="{{route('panel.musteriler.update',$customer->id)}}" method="post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Müşteri İsmi</label>
                            <input type="text" class="form-control" name="customer_name" value="{{old('customer_name') ?? $customer->customer_name}}">
                            @error('customer_name')
                            <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="">Müşteri Mail</label>
                            <input type="text" class="form-control" name="customer_mail" value="{{old('customer_mail') ?? $customer->customer_mail}}">
                            @error('customer_mail')
                            <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="">Müşteri Telefon</label>
                            <input type="text" class="form-control" name="customer_gsm" value="{{old('customer_gsm') ?? $customer->customer_gsm}}">
                            @error('customer_gsm')
                            <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="">Müşteri Detay</label>
                            <textarea name="customer_detail" class="form-control" cols="30" rows="10">{{old('customer_detail') ?? $customer->customer_detail}}</textarea>
                            @error('customer_detail')
                            <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Güncelle</button>
                <a href="{{route('panel.musteriler.index')}}" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Vazgeç</a>

            </form>
        </div>
    </div>

@endsection
