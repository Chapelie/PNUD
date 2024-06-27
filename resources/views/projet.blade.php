@extends('welcome')

@section('chat')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.2.96/css/materialdesignicons.min.css" integrity="sha512-LX0YV/MWBEn2dwXCYgQHrpa9HJkwB+S+bnBpifSOTO1No27TqNMKYoAn6ff2FBh03THAzAiiCwQ+aPX+/Qt/Ow==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="container">
    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body pb-0">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <div class="text-center border-end">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-fluid avatar-xxl rounded-circle" alt="Avatar">
                            </div>
                        </div><!-- end col -->
                        <div class="col-md-9">
                            <div class="ms-3">
                                <div>
                                    <h4 class="card-title mb-2">Innovation: Dispositif de purification d'air pour les espaces intérieurs</h4>
                                    <p class="text-muted">Développement d'une technologie de purification d'air avancée pour améliorer la qualité de l'air intérieur.</p>
                                    <p class="text-muted fw-medium">Domaine: Environnement</p>
                                    <p class="text-muted fw-medium">Impact: Réduction des allergènes et des polluants dans les espaces intérieurs.</p>
                                </div>
                                <div class="row my-4">
                                    <div class="col-md-12">
                                        <div>
                                            <p class="text-muted mb-2 fw-medium"><i class="mdi mdi-email-outline me-2"></i>idrissa.sinon@example.com</p>
                                            <p class="text-muted fw-medium mb-0"><i class="mdi mdi-phone-in-talk-outline me-2"></i>+226 78 23 45 67</p>
                                            <p class="text-muted mb-0 fw-medium"><i class="mdi mdi-map-marker-outline me-2"></i>Koudougou, Burkina Faso</p>
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->

                                <ul class="nav nav-tabs nav-tabs-custom border-bottom-0 mt-3 nav-justfied" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link px-4" href="{{ route('chat') }}" target="__blank">
                                            <span class="d-block d-sm-none"><i class="mdi mdi-menu-open"></i></span>
                                            <span class="d-none d-sm-block">Forum</span>
                                        </a>
                                    </li><!-- end li -->
                                </ul><!-- end ul -->
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end card body -->
            </div><!-- end card -->

            <div class="card">
                <div class="tab-content p-4">
                    <h4 class="card-title mb-3">Description de l'Innovation</h4>
                    <p class="text-muted">Développement d'une technologie de purification d'air avancée pour améliorer la qualité de l'air intérieur dans les espaces résidentiels et commerciaux. Ce dispositif utilise des filtres spéciaux et des technologies de pointe pour réduire efficacement les allergènes, les polluants et les particules nocives présentes dans l'air, offrant ainsi un environnement plus sain et plus propre pour les utilisateurs.</p>
                    <p class="text-muted fw-medium">Impact Environnemental: Réduction significative des allergènes et des polluants dans les espaces intérieurs, contribuant ainsi à la santé et au bien-être des occupants.</p>
                </div>
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="pb-2">
                        <h4 class="card-title mb-3">À propos de l'Innovation</h4>
                        <p>L'innovation de SINON Idrissa vise à résoudre le problème de la pollution de l'air intérieur en développant une solution technologique avancée et durable.</p>
                    </div>
                    <hr>
                    <div class="pt-2">
                        <h4 class="card-title mb-4">Domaine d'Application</h4>
                        <p>Cette innovation est applicable dans divers secteurs, y compris les bâtiments résidentiels, commerciaux, et institutionnels, ainsi que dans les installations industrielles.</p>
                    </div>
                </div><!-- end cardbody -->
            </div><!-- end card -->

            <div class="card">
                <div class="card-body">
                    <div>
                        <h4 class="card-title mb-4">Avantages Clés</h4>
                        <ul class="list-unstyled mb-0">
                            <li><i class="mdi mdi-checkbox-marked-outline me-2"></i>Amélioration de la qualité de l'air intérieur</li>
                            <li><i class="mdi mdi-checkbox-marked-outline me-2"></i>Réduction des risques pour la santé liés aux allergènes</li>
                            <li><i class="mdi mdi-checkbox-marked-outline me-2"></i>Technologie respectueuse de l'environnement</li>
                            <li><i class="mdi mdi-checkbox-marked-outline me-2"></i>Installation facile et maintenance minimale</li>
                        </ul><!-- end ul -->
                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->
</div><!-- end container -->
@endsection
