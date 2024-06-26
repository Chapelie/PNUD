@extends('layouts.home')

@section('navbar')


@endsection

@section('content')
<style>
    @media (max-width: 768px) {
     .mobile-only-icon {
       display: inline-block;
     }
     .mobile-only-text {
       display: none;
     }
   }
</style>
  <section class="row mt-4">
        <div class="col-lg-10">
            <div class="card mb-3">
                <div class="card-header border-0 align-item-center">
                    <div class="row">
                        <div class="col-auto border-2">
                            <img style="width: 50px" class="rounded-circle " src="{{ asset('image/fasoInova.png')}}" alt="">
                        </div>
                        <div class="col">
                            <strong>Arnaud Ouedraogo</strong>
                            <p>21 Juin 2024, 09:34</p>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                  <img class="img-fluid w-100 rounded-2" src=" https://placehold.co/700x250" alt="">
                </div>
                <div class="card-footer border-0 ">
                  <div class="row d-flex justify-content-center">
                    <div class="col-4 d-flex justify-content-center">
                        <a class="btn btn-outline-secondary" href="">
                            <i class="bi bi-chat-square-text"></i>
                           <span class="mobile-only-text">Commenter</span>
                        </a>
                    </div>
                    <div class="col-4 d-flex justify-content-center">
                        <a class="btn btn-outline-secondary" href="">
                            <i class="bi bi-person-fill-add"></i>
                            <span class="mobile-only-text">collaborate</span>
                        </a>
                    </div>
                    <div class="col-4 d-flex justify-content-center">
                        <a class="btn btn-outline-secondary" href="">
                            <i class="bi bi-cash-coin"></i>
                            <span class="mobile-only-text">Investir</span>
                        </a>
                    </div>
                  </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header border-0 align-item-center">
                    <div class="row">
                        <div class="col-auto border-2">
                            <img style="width: 50px" class="rounded-circle " src="{{ asset('image/fasoInova.png')}}" alt="">
                        </div>
                        <div class="col">
                            <strong>Arnaud Ouedraogo</strong>
                            <p>21 Juin 2024, 09:34</p>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                  <img class="img-fluid w-100 rounded-2" src=" https://placehold.co/700x250" alt="">
                </div>
                <div class="card-footer border-0 ">
                  <div class="row d-flex justify-content-center">
                    <div class="col-4 d-flex justify-content-center">
                        <a class="btn btn-outline-secondary" href="">
                            <i class="bi bi-chat-square-text"></i>
                           <span class="mobile-only-text">Commenter</span>
                        </a>
                    </div>
                    <div class="col-4 d-flex justify-content-center">
                        <a class="btn btn-outline-secondary" href="">
                            <i class="bi bi-person-fill-add"></i>
                            <span class="mobile-only-text">collaborate</span>
                        </a>
                    </div>
                    <div class="col-4 d-flex justify-content-center">
                        <a class="btn btn-outline-secondary" href="">
                            <i class="bi bi-cash-coin"></i>
                            <span class="mobile-only-text">Investir</span>
                        </a>
                    </div>
                  </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header border-0 align-item-center">
                    <div class="row">
                        <div class="col-auto border-2">
                            <img style="width: 50px" class="rounded-circle " src="{{ asset('image/fasoInova.png')}}" alt="">
                        </div>
                        <div class="col">
                            <strong>Arnaud Ouedraogo</strong>
                            <p>21 Juin 2024, 09:34</p>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                  <img class="img-fluid w-100 rounded-2" src=" https://placehold.co/700x250" alt="">
                </div>
                <div class="card-footer border-0 ">
                  <div class="row d-flex justify-content-center">
                    <div class="col-4 d-flex justify-content-center">
                        <a class="btn btn-outline-secondary" href="">
                            <i class="bi bi-chat-square-text"></i>
                           <span class="mobile-only-text">Commenter</span>
                        </a>
                    </div>
                    <div class="col-4 d-flex justify-content-center">
                        <a class="btn btn-outline-secondary" href="">
                            <i class="bi bi-person-fill-add"></i>
                            <span class="mobile-only-text">collaborate</span>
                        </a>
                    </div>
                    <div class="col-4 d-flex justify-content-center">
                        <a class="btn btn-outline-secondary" href="">
                            <i class="bi bi-cash-coin"></i>
                            <span class="mobile-only-text">Investir</span>
                        </a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-2 mb-2">
            <div class="card">
                <div class="card-header" style="background-color: #0968B1; color:white">
                    <strong>Categories</strong>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush  d-flex justify-content-center">
                        <li class="list-group-item"><a class="text-decoration-none" style="color: black" href="#"><Strong>Sante</Strong></a></li>
                        <li class="list-group-item"><a class="text-decoration-none" style="color: black" href="#"><strong>Technologie</strong></a></li>
                        <li class="list-group-item"><a class="text-decoration-none" style="color: black" href="#"><strong>Agriculture</strong></a></li>
                        <li class="list-group-item"><a class="text-decoration-none" style="color: black" href="#"><strong>Elevage</strong></a></li>
                      </ul>
                </div>
            </div>
        </div>
  </section>
 

<script>
    // JavaScript pour vérifier la taille de la fenêtre et ajuster l'affichage
    function checkWindowSize() {
      const width = window.innerWidth;
      const textSpan = document.querySelector('.mobile-only-text');
      if (width <= 768) {
        textSpan.style.display = 'none';
      } else {
        textSpan.style.display = 'inline';
      }
    }

    // Vérifier la taille de la fenêtre lors du chargement et du redimensionnement
    window.addEventListener('load', checkWindowSize);
    window.addEventListener('resize', checkWindowSize);
  </script>
@endsection