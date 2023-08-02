@extends('layouts.layoutclient')

@section('title', 'Home')

@section('content')

<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(/img/slide/123.png)">

          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>DITA TRANS</span></h2>
              <p class="animate__animated animate__fadeInUp">Jelajahi Keindahan Kota Anda Dengan Nyaman dan Gaya Bersama Layanan Penyewaan Mobil Kami, Karena Rumah Adalah Tempat Dimana Petualangan Dimulai.</p>
            </div>
          </div>
        </div>


      </div>

      <a  href="#heroCarousel" role="button" data-bs-slide="prev">
        <span  aria-hidden="true"></span>
      </a>

      <a  href="#heroCarousel" role="button" data-bs-slide="next">
        <span  aria-hidden="true"></span>
      </a>

    </div>
@endsection
