@extends('layout.content')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Profil Ayarları</h6>
        </div>
        <div class="card-body">
            <form action="{{route('panel.profil.update',auth()->user()->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Ad Soyad</label>
                            <input class="form-control" type="text" name="name" value="{{old('name') ?? $user->name}}">
                            @error('name')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="">E-Mail</label>
                            <input class="form-control" type="text" name="email" value="{{old('email') ?? $user->email}}">
                            @error('email')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="">Password</label>
                            <input class="form-control" type="password" name="password" placeholder="Boş Bırakırsanız Şifre Değişmez">
                            @error('password')
                            <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="">Password Tekrar</label>
                            <input class="form-control" type="password" name="password_confirmation" placeholder="Boş Bırakırsanız Şifre Değişmez">
                            @error('password_confirmation')
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
