@extends('layouts.front')


@section('content')
{{-- Hero section --}}
<div class="slider-area ">
   <!-- Menu Mobile -->
   <div class="slider-active">
      <div class="single-slider slider-height d-flex align-items-center">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 col-lg-9 col-md-10">
                  <div class="hero__caption">
                     <h1>Trouvez les meilleurs TP interactifs</h1>
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-xl-8">

                  <form action="#" class="search-box">
                     <div class="input-form">
                        <input type="text" placeholder="Entrez le TP que vous recherchez">
                     </div>
                     <div class="select-form">
                        <div class="select-itms">
                           <select name="select" id="select1">
                              <option value="">Physique</option>
                              <option value="">Science</option>
                           </select>
                        </div>
                     </div>
                     <div class="search-form">
                        <a href="Tp.html" class="btn">Rechercher</a>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
{{-- End Hero section --}}


<div class="our-services section-pad-t30">
   <div class="container">

      <div class="row">
         <div class="col-lg-12">
            <div class="section-tittle text-center">
               <h2>Nos TP les mieux notés </h2>
            </div>
         </div>
      </div>
      <div class="row d-flex justify-contnet-center">
         <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
            <div class="single-services text-center mb-30">
               <div class="services-ion">
                  <span class="flaticon-tour"></span>
               </div>
               <div class="services-cap">
                  <h5><a href="PenduleSimple.html">Pendule Simple</a></h5>
                  <span>9.5</span>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
            <div class="single-services text-center mb-30">
               <div class="services-ion">
                  <span class="flaticon-cms"></span>
               </div>
               <div class="services-cap">
                  <h5><a href="DeuxPendules.html">Pendule Double</a></h5>
                  <span>9</span>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
            <div class="single-services text-center mb-30">
               <div class="services-ion">
                  <span class="flaticon-high-tech"></span>
               </div>
               <div class="services-cap">
                  <h5><a href="PenduleRessort.html">Pendule avec Ressort</a></h5>
                  <span>8.8</span>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
            <div class="single-services text-center mb-30">
               <div class="services-ion">
                  <span class="flaticon-app"></span>
               </div>
               <div class="services-cap">
                  <h5><a href="job_listing.html">Deux Pendules, Doubles Ressorts</a></h5>
                  <span>8.6</span>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="online-cv cv-bg section-overly pt-90 pb-120" data-background="{{asset('images/gallery/boy.jpg')}}">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-xl-10">
            <div class="cv-caption text-center">
               <p class="pera2"> Faite la différence en réalisant vos TP en simulation</p>
            </div>
         </div>
      </div>
   </div>
</div>

<section class="featured-job-area feature-padding">
   <div class="container">

      <div class="row">
         <div class="col-lg-12">
            <div class="section-tittle text-center">
               <h2>Travaux Pratiques récents</h2>
            </div>
         </div>
      </div>
      <div class="row justify-content-center">
         <div class="col-xl-10">

            <div class="single-job-items mb-30">
               <div class="job-items">
                  <div class="company-img">
                     <a href="PenduleSimple.html"><img src="assets/img/icon/PenduleSimple.gif" alt=""></a>
                  </div>
                  <div class="job-tittle">
                     <a href="PenduleSimple.html">
                        <h4>Pendule Simple</h4>
                     </a>
                     <ul>
                        <li>Manel Smatti</li>
                        <li><i class="fas fa-map-marker-alt"></i>Alger, Algeria</li>
                        <li>4AM</li>
                     </ul>
                  </div>
               </div>
               <div class="items-link f-right">
                  <a>Facile</a>
                  <span>Publie il y'a 6h</span>
               </div>
            </div>

            <div class="single-job-items mb-30">
               <div class="job-items">
                  <div class="company-img">
                     <a href="DeuxPendules.html"><img src="assets/img/icon/DeuxPendules.png" alt=""></a>
                  </div>
                  <div class="job-tittle">
                     <a href="DeuxPendules.html">
                        <h4>Pendule Double</h4>
                     </a>
                     <ul>
                        <li>Said Babaci</li>
                        <li><i class="fas fa-map-marker-alt"></i>Alger, Algeria</li>
                        <li>4AM</li>
                     </ul>
                  </div>
               </div>
               <div class="items-link f-right">
                  <a>Facile</a>
                  <span>Publié il y'a 15h</span>
               </div>
            </div>

            <div class="single-job-items mb-30">
               <div class="job-items">
                  <div class="company-img">
                     <a href="PenduleRessort.html"><img src="assets/img/icon/PenduleRessort.png" alt=""></a>
                  </div>
                  <div class="job-tittle">
                     <a href="PenduleRessort.html">
                        <h4>Pendule Ressort</h4>
                     </a>
                     <ul>
                        <li>Khettar Faycal</li>
                        <li><i class="fas fa-map-marker-alt"></i>Oran, Algeria</li>
                        <li>4AM</li>
                     </ul>
                  </div>
               </div>
               <div class="items-link f-right">
                  <a>normal</a>
                  <span>Publie il ya 2 jours</span>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<div class="apply-process-area apply-bg pt-150 pb-150" data-background="{{asset('images/gallery/how-applybg.png')}}">
   <div class="container">

      <div class="row">
         <div class="col-lg-12">
            <div class="section-tittle white-text text-center">
               <h2>Comment ca marche</h2>
            </div>
         </div>
      </div>

      <div class="row">
         <div class="col-lg-4 col-md-6">
            <div class="single-process text-center mb-30">
               <div class="process-ion">
                  <span class="flaticon-search"></span>
               </div>
               <div class="process-cap">
                  <h5>1. Rechercher votre TP</h5>
                  <p>Vous devez d'abord choisir la matière qui vous convient entre les choix possibles puis
                     choisir votre année pour accéder au catalogue </p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="single-process text-center mb-30">
               <div class="process-ion">
                  <span class="flaticon-curriculum-vitae"></span>
               </div>
               <div class="process-cap">
                  <h5>2. Consulter le TP</h5>
                  <p>L'élève accède a son TP parmis ceux déjà présents dans le catalogue</p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="single-process text-center mb-30">
               <div class="process-ion">
                  <span class="flaticon-tour"></span>
               </div>
               <div class="process-cap">
                  <h5>3. le completer</h5>
                  <p>L'élève complète le TP interactif en répondant aux questions et finalement arriver a
                     construire la simulation par rapport a l'enonce qu'on lui met entre les mains </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

@endsection