@extends('layout.content')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Müşteri Görüntüle</h6>
        </div>
        <div class="card-body">
            <form action="{{route('panel.customers.update',$customer->id)}}" method="post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Müşteri İsmi</label>
                            <input readonly type="text" class="form-control" name="customer_name"
                                   value="{{old('customer_name') ?? $customer->customer_name}}">
                            @error('customer_name')
                            <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="">Müşteri Mail</label>
                            <input readonly type="text" class="form-control" name="customer_mail"
                                   value="{{old('customer_mail') ?? $customer->customer_mail}}">
                            @error('customer_mail')
                            <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="">Müşteri Telefon</label>
                            <input readonly type="text" class="form-control" name="customer_gsm"
                                   value="{{old('customer_gsm') ?? $customer->customer_gsm}}">
                            @error('customer_gsm')
                            <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="">Müşteri Detay</label>
                            <textarea readonly name="customer_detail" class="form-control" cols="30"
                                      rows="10">{{old('customer_detail') ?? $customer->customer_detail}}</textarea>
                            @error('customer_detail')
                            <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <a href="{{route('panel.customers.index')}}" class="btn btn-danger btn-sm"><i
                        class="fa fa-arrow-alt-circle-down"></i> Geri Dön</a>

            </form>
        </div>
    </div>

@endsection
