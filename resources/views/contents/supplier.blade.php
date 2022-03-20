@extends('index')
@section('content')
<section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Supplier</h2>
          <h3>Find Out More <span>Supplier </span></h3>
        </div>
      @foreach($supplier as $sup)
        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="{{asset($sup->source)}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>{{$sup -> nama}}</h3>
            <ul>
              <li>
                <i class="bx bx-store-alt"></i>
                <div>
                  <h5>{{$sup -> deskripsi1}}</h5>
                  <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                </div>
              </li>
              <li>
                <i class="bx bx-images"></i>
                <div>
                  <h5>{{$sup -> deskripsi2}}COBA</h5>
                  <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
                </div>
              </li>
            </ul>
            <p>
            {{$sup -> deskripsi3}}
            </p>
          </div>
        </div>
      @endforeach
      </div>
    </section><!-- End About Section -->
    <div class="d-flex justify-content-center">
          {!! $supplier->links() !!}
      </div>
    @endsection