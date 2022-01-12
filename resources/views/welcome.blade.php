@extends('layouts.app')

@section('content')
<style>
    .scroll-left {
 height: 50px;
 overflow: hidden;
 position: relative;
 background: yellow;
 color: orange;
 border: 1px solid orange;
}
.scroll-left p {
 position: absolute;
 width: 100%;
 height: 100%;
 margin: 0;
 line-height: 50px;
 text-align: center;
 /* Starting position */
 transform:translateX(100%);
 /* Apply animation to this element */
 animation: scroll-left 15s linear infinite;
}
/* Move it (define the animation) */
@keyframes scroll-left {
 0%   {
 transform: translateX(100%);
 }
 100% {
 transform: translateX(-100%);
 }
}
</style>
<link href="{{ asset('css/style.css')}}" rel="stylesheet">
<div>
    <table width = 100% border="1px">
        <th><a class="nav-link" href="/AboutUs">About Us</a></th>
        <th><a class="nav-link" href="/shop">Shop</a></th>
        <th><a class="nav-link" href="/cart">Cart</a></th>
        <th><a class="nav-link" href="/ContactUs">Contact Us</a></th>
    </table>
</div>

<div class="scroll-left" >
    <marquee>TYLKO TERAZ WYSYŁKA W DWA DNI</marquee>
    </div>
<div width=100% class="img.center">
   <center> <img src="https://www.komputronik.pl/informacje/wp-content/uploads/2019/04/jaka-karta-graficzna-asus-1.jpg" > </center>
</div>
@endsection
