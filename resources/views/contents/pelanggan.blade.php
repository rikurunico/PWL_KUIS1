@extends('index')
@section('content')
<section> 
	<div class="container mt-5">
    <div class="table-responsive">
        <table class="table table-hover table table-striped">
            <thead>
                <tr>
                    <th colspan="2">Title</th>
                    <th>Owner</th>
                    <th>Updated</th>
                    <th>Status</th>
                    <th>Type</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">
                        <h6>Fasinating tactic that can help in business</h6>
                    </td>
                    <td>
                        <div class="d-flex align-items-center"><img class="rounded-circle" src="{{asset('template\assets\img\team\team-2.jpg')}}" width="30"><span class="ml-2">Christan M.</span></div>
                    </td>
                    <td>18 Mar, 2020<br></td>
                    <td class="font-weight-bold">Published</td>
                    <td>Business</td>
                    <td><i class="fa fa-external-link external-link"></i></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <h6>Fasinating tactic that can help in business</h6>
                    </td>
                    <td>
                        <div class="d-flex align-items-center"><img class="rounded-circle" src="{{asset('template\assets\img\team\team-1.jpg')}}" width="30"><span class="ml-2">Christan M.</span></div>
                    </td>
                    <td>18 Mar, 2020<br></td>
                    <td class="font-weight-bold">Published</td>
                    <td>Business</td>
                    <td><i class="fa fa-external-link external-link"></i></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <h6>Fasinating tactic that can help in business</h6>
                    </td>
                    <td>
                        <div class="d-flex align-items-center"><img class="rounded-circle" src="{{asset('template\assets\img\team\team-4.jpg')}}" width="30"><span class="ml-2">Christan M.</span></div>
                    </td>
                    <td>18 Mar, 2020<br></td>
                    <td class="font-weight-bold">Published</td>
                    <td>Business</td>
                    <td><i class="fa fa-external-link external-link"></i></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
            @endsection