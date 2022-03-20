@extends('index')
@section('content')
<section> 
	<div class="container mt-5">
    <div class="table-responsive">
        <table class="table table-hover table table-striped">
            <thead>
                <tr>
                    <th>ID Pengguna</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Total Pembelian</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($pelanggan as $p)
                <tr>
                    <td>
                        <h6>{{$p->id}}</h6>
                    </td>
                    <td>
                        <div class="d-flex align-items-center"><img class="rounded-circle" src="{{asset($p->source)}}" width="30"><span class="ml-2" style="margin-left:10px">{{$p->nama}}</span></div>
                    </td>
                    <td>{{$p -> alamat}}<br></td>
                    <td class="font-weight-bold">Rp {{$p->totalpembelian}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
            @endsection