<!-- ======= Services Section ======= -->
@extends('index')
@section('content')
<section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Stuff</h2>
          <h3>Check our <span>stuff</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <table class="table table-image">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Stuff Image</th>
              <th scope="col">Name</th>
              <th scope="col">Description</th>
              <th scope="col">Price</th>
            </tr>
          </thead>
          <tbody>
            @foreach($barang as $st)
            <tr>
              <th scope="row">{{$st -> id}}</th>
              <td class="w-25">
                <img src="{{ asset($st -> gambar)}}" class="img-fluid img-thumbnail" alt="Sheep">
              </td>
              <td>{{$st -> nama}}</td>
              <td>{{$st -> deskripsi}}</td>
              <td>{{$st -> harga}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="d-flex justify-content-center">
          {!! $barang->links() !!}
      </div>

      </div>
    </section><!-- End Services Section -->
    @endsection