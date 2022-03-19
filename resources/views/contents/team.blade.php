<!-- ======= Team Section ======= -->
@extends('index')
@section('content')
<section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
        <h2>Team</h2>
        <h3>Our Hardworking <span>Team</span></h3>
        <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            @foreach($team as $t)
            <div class="member">
            <div class="member-img">
                <img src="{{asset($t->source)}}" class="img-fluid" alt="">
                <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <div class="member-info">
                <h4>{{ $t -> nama}}</h4>
                <span>{{ $t-> jabatan}}</span>
            </div>
            </div>
        </div>
        <div>
            <ul class="nav tm-paging-links"> 
                <li class="nav-item"><a href="{{url('team?page=1')}}" class="nav-link tm-paging-link">1</a></li>
                <li class="nav-item"><a href="{{url('team?page=2')}}" class="nav-link tm-paging-link">2</a></li>
                <li class="nav-item"><a href="{{url('team?page=3')}}" class="nav-link tm-paging-link">3</a></li>
                <li class="nav-item"><a href="{{url('team?page=4')}}" class="nav-link tm-paging-link">4</a></li>
            </ul>
        </div>
        @endforeach
    </div>
    </section><!-- End Team Section -->

    <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills">
        <div class="container" data-aos="fade-up">

            <div class="row skills-content">

            <div class="col-lg-6">

                <div class="progress">
                <span class="skill">HTML <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                </div>

                <div class="progress">
                <span class="skill">CSS <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                </div>

                <div class="progress">
                <span class="skill">JavaScript <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                </div>

            </div>

            <div class="col-lg-6">

                <div class="progress">
                <span class="skill">PHP <i class="val">80%</i></span>
                <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                </div>

                <div class="progress">
                <span class="skill">WordPress/CMS <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                </div>

                <div class="progress">
                <span class="skill">Photoshop <i class="val">55%</i></span>
                <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                </div>

            </div>

            </div>

        </div>
        </section><!-- End Skills Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

            <div class="row">

            <div class="col-lg-3 col-md-6">
                <div class="count-box">
                <i class="bi bi-emoji-smile"></i>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p>Happy Clients</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                <div class="count-box">
                <i class="bi bi-journal-richtext"></i>
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projects</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                <i class="bi bi-headset"></i>
                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hours Of Support</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                <i class="bi bi-people"></i>
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hard Workers</p>
                </div>
            </div>

            </div>

        </div>
        </section><!-- End Counts Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
        <div class="container" data-aos="zoom-in">

            <div class="row">

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="{{asset('template/assets/img/clients/client-1.png')}}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="{{asset('template/assets/img/clients/client-2.png')}}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="{{asset('template/assets/img/clients/client-3.png')}}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="{{asset('template/assets/img/clients/client-4.png')}}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="{{asset('template/assets/img/clients/client-5.png')}}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="{{asset('template/assets/img/clients/client-6.png')}}" class="img-fluid" alt="">
            </div>

            </div>

        </div>
        </section><!-- End Clients Section -->
    @endsection