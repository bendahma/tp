@extends('layouts.front')

@section('content')
<div class="slider-area ">
   <div class="single-slider slider-height2 d-flex align-items-center"
      data-background="{{asset('images/hero/annee.jpg')}}">
      <div class="container">
         <div class="row">
            <div class="col-xl-12">
               <div class="hero-cap text-center">
                  <h2>Mes Cours</h2>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="job-listing-area pt-120 pb-120">
   <div class="container">
      <div class="row">


         @foreach ($cours as $cour)
         <div class="col-xl-4 col-lg-9 col-md-8" style="margin: 16px 0 ">

            <section class="featured-job-area">
               <div class="card shadow" style="width: 18rem;">
                  <div class="card-body">
                     <h5 class="card-title"> {{$cour->name}} </h5>
                     <p class="card-text"> {{ $cour->resume}} </p>
                     <a href="{{route('downloadCours',$cour->id)}}" class="btn head-btn1">Télécharger le cours</a>
                  </div>
               </div>
            </section>
         </div>
         @endforeach
      </div>
   </div>
</div>

<div class="pagination-area pb-115 text-center">
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <div class="single-wrap d-flex justify-content-center">
               <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-start">
                     <li class="page-item active"><a class="page-link" href="#">01</a></li>

                  </ul>
               </nav>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection