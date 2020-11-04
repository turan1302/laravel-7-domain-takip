@extends('layout.content')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Domain Gün Ekle</h6>
        </div>
        <div class="card-body">
            <form action="{{route('panel.domainler.add-day',$domain->id)}}" method="post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Domain Adı</label>
                            <input type="text" readonly class="form-control" name="domain_name" value="{{$domain->domain_name }}">
                        </div>
                        <div class="col-md-6">
                            <label for="">Domain Başlangıç Tarihi</label>
                            <input type="date" readonly class="form-control" name="domain_start_date" value="{{$domain->domain_start_date}}">
                        </div>
                        <div class="col-md-6">
                            <label for="">Domain Bitiş Tarihi</label>
                            <input type="date" readonly class="form-control" name="domain_end_date" value="{{$domain->domain_end_date }}">
                        </div>
                        <div class="col-md-6">
                            <label for="">Kaç Yıl Eklenecek</label>
                            <input type="number" name="domain_day" class="form-control">
                            @error('domain_day')
                            <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Güncelle</button>
                <a href="{{route('panel.domainler.index')}}" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Vazgeç</a>

            </form>
        </div>
    </div>

@endsection
