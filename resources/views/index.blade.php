@extends('layouts.class')
@section('content')

<div class="judul text-center mb-5 mt-5">
    <h1>Daftar Menu</h1>
</div>
      <div class="container">
        <div class="row">
          <div class="col">
            <figure>
            <img src="/img/kopi1.jpg" alt="" class="img rounded-circle foto" width="250px" height="250px" data-tilt data-tilt-scale="1.4">
            <figcaption>
              Latte
            </figcaption>
          </figure>
          </div>
          <div class="col">
            <figure>
             <img src="/img/kopi2.jpg" alt="" class="img rounded-circle foto" width="250px" height="250px" data-tilt data-tilt-scale="1.4">
              <figcaption>
                Dark Mocha
              </figcaption>
            </figure>
          </div>
          <div class="col">
            <div class="latte">
              <figure>
            <img src="/img/kopi3.jpg" alt="" class="img rounded-circle foto" width="250px" height="250px" data-tilt data-tilt-scale="1.4">
                <figcaption>
                  Black Nigga
                </figcaption>
          </figure>
          </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <figure class="mt-5">
              <img src="/img/kopi4.jpg" alt="" class="img rounded-circle foto" width="250px" height="250px" data-tilt data-tilt-scale="1.4">
              <figcaption>
                Sugar White
              </figcaption>
            </figure>
            </div>
          <div class="col">
            <figure class="mt-5">
            <img src="/img/kopi5.jpg" alt="" class="img rounded-circle foto" width="250px" height="250px" data-tilt data-tilt-scale="1.4">
              <figcaption>
                Caramel White
              </figcaption>
          </figure>
          </div>
          <div class="col">
            <figure class="mt-5">
            <img src="/img/kopi6.jpg" alt="" class="img rounded-circle foto" width="250px" height="250px" data-tilt data-tilt-scale="1.4" >
              <figcaption>
                Caramel Black MAMBA
              </figcaption>
          </figure>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <a href="/home" class="btn btn-primary mb-3" style="float: right;">Pesan</a>
          </div>
        </div>
      </div>
     @endsection