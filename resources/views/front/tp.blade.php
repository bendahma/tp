@extends('layouts.front')

@section('content')
<div class="slider-area ">
   <div class="single-slider section-overly slider-height2 d-flex align-items-center"
      data-background="{{asset('images/hero/physic1.jpg')}}">
      <div class="container">
         <div class="row">
            <div class="col-xl-12">
               <div class="hero-cap text-center">
                  <h2>Liste des TP</h2>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="job-listing-area pt-120 pb-120">
   <div class="container">
      <div class="row">

         @foreach ($tps as $tp)
         <div class="col-xl-6 col-lg-6 col-md-6" style="margin: 16px 0 ">

            <section class="featured-job-area">
               <div class="card shadow" style="">
                  <img class="card-img-top" src="storage/{{$tp->image}}" alt="Card image cap">

                  <div class="card-body">
                     <h5 class="card-title"> {{$tp->name}} </h5>
                     <br>
                     <table>
                        <thead>
                           <th></th>
                        </thead>
                        <tbody class=" text-muted">
                           <tr>
                              <td>Publié par : </td>
                              <td></td>
                              <td>{{$tp->user->name}}</td>
                           </tr>
                           <tr>
                              <td>Année scolaire : </td>
                              <td></td>
                              <td>{{$tp->niveau->name}}</td>
                           </tr>
                           <tr>
                              <td>Matière : </td>
                              <td></td>
                              <td>{{$tp->matiere->name}}</td>
                           </tr>
                           <tr>
                              <td>Cours : </td>
                              <td></td>
                              <td>{{$tp->cour->name}}</td>
                           </tr>
                        </tbody>
                     </table>

                     <p class="card-text font-weight-bold"> {{ $tp->body}} </p>
                     <div class="d-flex">
                        <a href="{{route('tp.download',$tp->id)}}" class="btn head-btn1">Télécharger TP</a>
                        <a href="" class="btn  btn-info">Simulation</a>

                     </div>
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