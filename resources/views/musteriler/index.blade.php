@extends('layout.content')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Müşteri Listesi</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                <a href="{{route('panel.musteriler.show',$customer->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="{{route('panel.musteriler.edit',$customer->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                <button type="button" class="btn btn-danger btn-sm isDelete" data-url="{{route('panel.musteriler.destroy',$customer->id)}}"><i class="fa fa-trash"></i></button>
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
