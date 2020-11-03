@extends('layout.content')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Site Ayarları</h6>
        </div>
        <div class="card-body">
            <form action="{{route('panel.ayarlar.update',$setting->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Site Logo</label>
                            <input type="file" class="form-control" name="site_logo">
                            @error('site_logo')
                            <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="">Site Başlık</label>
                            <input type="text" class="form-control" name="site_title"
                                   value="{{old('site_title') ?? $setting->site_title}}">
                            @error('site_title')
                            <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="">Site Açıklama</label>
                            <textarea class="form-control" name="site_description" cols="30"
                                      rows="10">{{old('site_description') ?? $setting->site_description}}</textarea>
                            @error('site_description')
                            <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="">Site Sahibi Mail</label>
                            <input type="text" class="form-control" name="owner_mail"
                                   value="{{old('owner_mail') ?? $setting->owner_mail}}">
                            @error('owner_mail')
                            <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Güncelle</button>
                <a href="{{route('panel.index')}}" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Vazgeç</a>

            </form>
        </div>
    </div>

@endsection
