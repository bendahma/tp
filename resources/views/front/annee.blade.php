@extends('layouts.front')

@section('content')

<div class="slider-area ">
   <div class="single-slider slider-height2 d-flex align-items-center"
      data-background="{{asset('images/hero/annee.jpg')}}">
      <div class="container">
         <div class="row">
            <div class="col-xl-12">
               <div class="hero-cap text-center">
                  <h2>Années</h2>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="job-listing-area pt-120 pb-120">
   <div class="container">
      <div class="row">

         @foreach ($niveaux as $niveau)
         <div class="col-xl-4 col-lg-3 col-md-6" style="margin: 14px 0">
            <section class="featured-job-area">
               <div class="container">
                  <div class="job-tittle">
                     <a href="{{url('/matiere/'. $matiere->id .'/annee/'. $niveau->id .'/cours')}}"
                        style="text-align: center">
                        <h4>{{$niveau->name}}</h4>
                     </a>

                  </div>
               </div>
         </div>
         @endforeach


      </div>


   </div>
   </section>

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