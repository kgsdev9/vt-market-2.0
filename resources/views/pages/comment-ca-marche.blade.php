@extends('layouts.layout')
@section('title', 'Comment  ca marche ?')
@section('content')
<section class="py-8 bg-warning">
    <div class="container my-lg-8">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6 col-12">
                <h1 class="fw-bold mb-1 display-3">Comment ca marche ?</h1>
            </div>
            <div class="col-md-6 col-12">
                <div class="d-flex align-items-center justify-content-end">
                    <img src="../assets/images/png/3d-girl.png" alt="girlsetting" class="text-center img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-8">
    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-md-8 col-12">
                <div class="mb-4">
                    <h2 class="mb-0 fw-semibold">Comment ca marche ?</h2>
                </div>
                <div class="accordion accordion-flush" id="accordionExample">
                    <div class="border p-3 rounded-3 mb-2" id="headingOne">
                        <h3 class="mb-0 fs-4">
                            <a href="#" class="d-flex align-items-center text-inherit active collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <span class="me-auto">Comment effectuer un achat  ?</span>
                                <span class="collapse-toggle ms-4">
                                    <i class="fe fe-chevron-down"></i>
                                </span>
                            </a>
                        </h3>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                            <div class="pt-2">
                                Pour effectuer un achat c'est simple, vous renseignez les informations de la personne qui doit recevoir le colis et c'est tout. vous recevez un mail de confirmation et de facture quand votre paiement est validé.
                            </div>
                        </div>
                    </div>
                    <div class="border p-3 rounded-3 mb-2" id="headingTwo">
                        <h3 class="mb-0 fs-4">
                            <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span class="me-auto">Comment recevoir vos colis ?</span>
                                <span class="collapse-toggle ms-4">
                                    <i class="fe fe-chevron-down"></i>
                                </span>
                            </a>
                        </h3>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="pt-3">

                               Nos transporteurs se chargent de vous livrer vos colis à vos portes ou dans nos points de rélais en Afrique
                               Les colis sont emballés dans des cartons sécurisés
                            </div>
                        </div>
                    </div>
                    <div class="border p-3 rounded-3 mb-2" id="headingThree">
                        <h3 class="mb-0 fs-4">
                            <a href="#" class="d-flex align-items-center text-inherit active" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                <span class="me-auto">Les Moyens de paiements ?</span>
                                <span class="collapse-toggle ms-4">
                                    <i class="fe fe-chevron-down"></i>
                                </span>
                            </a>
                        </h3>
                        <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample" style="">
                            <div class="pt-3">
                              Vtp a pensé à vous, nous avons mise en place des moyens de paiements locaux telles que les Mobiles moneys, Wave et aussi les paiements via Carte bancaire
                            </div>
                        </div>
                    </div>
                    <div class="border p-3 rounded-3 mb-2" id="headingFour">
                        <h3 class="mb-0 fs-4">
                            <a href="#" class="d-flex align-items-center text-inherit active collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <span class="me-auto">Politique de remboursement ?</span>
                                <span class="collapse-toggle ms-4">
                                    <i class="fe fe-chevron-down"></i>
                                </span>
                            </a>
                        </h3>

                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample" style="">
                            <div class="pt-3">
                               En cas d'echec  de la livraison nous remboursons la totalité de la somme engagée par le client, vous n'avez pas à vous faire chers clients.
                            </div>
                        </div>
                    </div>
                    <div class="border p-3 rounded-3 mb-2" id="headingFive">
                        <h3 class="mb-0 fs-4">
                            <a href="#" class="d-flex align-items-center text-inherit active collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <span class="me-auto">Comment dévenr vendeur ?</span>
                                <span class="collapse-toggle ms-4">
                                    <i class="fe fe-chevron-down"></i>
                                </span>
                            </a>
                        </h3>

                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <div class="pt-3">
                              Pour dévenir vendeur sur vtp c'est simple vous n'avez qu'à vous inscrire en tant que vendeur et et vous rentrer dans votre espace pour renseigner vos informations et commencer à vendre
                            </div>
                        </div>
                    </div>
                    <div class="border p-3 rounded-3 mb-2" id="headingSix">
                        <h3 class="mb-0 fs-4">
                            <a href="#" class="d-flex align-items-center text-inherit active collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <span class="me-auto">Suivi de votre colis ?</span>
                                <span class="collapse-toggle ms-4">
                                    <i class="fe fe-chevron-down"></i>
                                </span>
                            </a>
                        </h3>

                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                            <div class="pt-3">
                               Suivez le status de la livraison de votre colis et patientez
                            </div>
                        </div>
                    </div>
                    <div class="border p-3 rounded-3 mb-2" id="headingSeven">
                        <h3 class="mb-0 fs-4">
                            <a href="#" class="d-flex align-items-center text-inherit active collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                <span class="me-auto">Pourquoi nous ?</span>
                                <span class="collapse-toggle ms-4">
                                    <i class="fe fe-chevron-down"></i>
                                </span>
                            </a>
                        </h3>
                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                            <div class="pt-3">
                              Pourquoi VTP est plus surs, nous travaillons avec des partenaires telles que ORANGE MONEY AFRIQUE, MTN MONEY, MOOV MONEY , WAVE, VISA MASTER CARD et bien d'autres..
                              votre argent est sécurisé
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
