@extends('layouts.class')
@section('content')

 <div class="row mt-5">
    <div class="col">
       <ul class="breadcrumbs">
            <li class="breadcrumbs__item">
                <a href="/menu" class="breadcrumbs__link ml-3">Menu</a>
            </li>
            <li class="breadcrumbs__item">
                <a href="/menu/favorites" class="breadcrumbs__link">Favorite Products</a>
            </li>
            <li class="breadcrumbs__item">
                <a href="#" class="breadcrumbs__link">Menu</a>
            </li>
       </ul>
    </div>
    </div>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="text-center mt-3">Menu</h2>
        </div>
    </div>
    <div class="row ml-5 mt-5">
        <div class="col">
            <h2>Drinks</h2>
        </div>
        <div class="col ml-5">
            <h2>Food</h2>
        </div>
        <div class="col">
            <h2>Home Coffe</h2>
        </div>
    </div>
    <div class="row mt-3 ml-5">
        <div class="col">
            <a href="/menu/cold-coffe"><img src="img/kopi1.jpg" width="100px" height="100px"
                    class="img rounded-circle"><span class="ml-3" style="color: black;">Cold Coffe</span></a> <br>
            <a href="/menu/hot-coffe"><img src="img/kopi2.jpg" width="100px" height="100px"
                    class="img rounded-circle mt-3"><span class="ml-3" style="color: black;">Hot Coffe</span></a> <br>
            <a href="/menu/cold-drinks"><img src="img/kopi3.jpg" width="100px" height="100px"
                    class="img rounded-circle mt-3"><span class="ml-3" style="color: black;">Cold Drinks</span></a> <br>
            <a href="/menu/hot-drinks"><img src="img/kopi4.jpg" width="100px" height="100px"
                    class="img rounded-circle mt-3"><span class="ml-3" style="color: black;">Cold Drinks</span></a> <br>
        </div>
        <div class="col">
            <a href="/menu/cold-coffe"><img src="img/kopi1.jpg" width="100px" height="100px"
                    class="img rounded-circle"><span class="ml-3" style="color: black;">Cold Coffe</span></a> <br>
            <a href="/menu/hot-coffe"><img src="img/kopi2.jpg" width="100px" height="100px"
                    class="img rounded-circle mt-3"><span class="ml-3" style="color: black;">Hot Coffe</span></a> <br>
            <a href="/menu/cold-drinks"><img src="img/kopi3.jpg" width="100px" height="100px"
                    class="img rounded-circle mt-3"><span class="ml-3" style="color: black;">Cold Drinks</span></a> <br>
            <a href="/menu/hot-drinks"><img src="img/kopi4.jpg" width="100px" height="100px"
                    class="img rounded-circle mt-3"><span class="ml-3" style="color: black;">Cold Drinks</span></a> <br>
        </div>
        <div class="col">
            <a href="/menu/cold-coffe"><img src="img/kopi1.jpg" width="100px" height="100px"
                    class="img rounded-circle"><span class="ml-3" style="color: black;">Cold Coffe</span></a> <br>
            <a href="/menu/hot-coffe"><img src="img/kopi2.jpg" width="100px" height="100px"
                    class="img rounded-circle mt-3"><span class="ml-3" style="color: black;">Hot Coffe</span></a> <br>
            <a href="/menu/cold-drinks"><img src="img/kopi3.jpg" width="100px" height="100px"
                    class="img rounded-circle mt-3"><span class="ml-3" style="color: black;">Cold Drinks</span></a> <br>
            <a href="/menu/hot-drinks"><img src="img/kopi4.jpg" width="100px" height="100px"
                    class="img rounded-circle mt-3"><span class="ml-3" style="color: black;">Cold Drinks</span></a> <br>
        </div>
    </div>
</div>
@endsection
