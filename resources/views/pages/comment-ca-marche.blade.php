@extends('layouts.layout')
@section('title', 'Comment  ca marche ?')
@section('content')
{{-- <section class="py-8 bg-warning">
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
</section> --}}

<main>
    <!-- pageheader -->
    <section class="py-8">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-12 col-12">
            <!-- text center -->
            <div class="text-center">
              <h1 class="display-3 fw-bold">Comment ça marche</h1>
              <p class="lead px-8">Prenez connaissance du fonctionnement de vtp à travers ces informations essentielles.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- content -->
    <section class="pb-8">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-12 col-12">

            <h1 class="fw-bold mb-3">Comment effectuer un achat ?.</h1>
            <!-- para -->
            <p>Pour effectuer un achat c’est simple, </p>
            <ul class="fs-4">
              <li>1.	Vous devez créer un compte acheteur sur VTP-MARKET en « se connecter ».</li>
              <li>2.	Remplir le questionnaire d’inscription.</li>
              <li>3.	Vous reconnectez pour effectuer vos achats</li>

            </ul>
            <h1>A savoir : </h1>
            <p class="fs-4 mb-4">
              •	Pour les achats d’articles qui nécessitent un transport aérien ou maritime les frais de livraison sont inclus dans le prix de l’article.
            </p>
            <!-- para -->


            <div class="d-flex mt-5">

              <div class="ms-3">
                <h1>Comment vendre ces articles sur VTP-MARKET ? : </h1>
                <h5>Pour vendre rien de compliquer, </h5>
                <p class="fs-4">
                  1.	Vous devez créer un compte acheteur sur VTP-MARKET en « Commencer à vendre ».
                </p>
                <p class="fs-4">
                  2.	Remplir le questionnaire d’inscription et valider.
                </p>

                <p class="fs-4">
                  3.	Vous reconnectez pour mettre vos articles en ligne.
                </p>

              </div>
            </div>
            <!-- para -->


            <div class="d-flex mt-5">

              <div class="ms-3">
                <h1>Politique de remise et de vendeur  ? : </h1>

                <p class="fs-4">
                  1.	Les prix des articles sont définis par le vendeur et sont modifiable à tous moment..
                </p>
                <p class="fs-4">
                  2.	Si une vente est réalisée par un vendeur, il reçoit le paiement une fois l’article reçu par l’acheteur.
                </p>

                <p class="fs-4">
                  3.	Si une vente est réalisée par un vendeur, il reçoit le paiement une fois l’article reçu par l’acheteur.
                </p>

              </div>
            </div>
            <!-- para -->
            <div class="mt-5">
              <h2 class="fw-bold">Les Moyens de paiements ?.</h2>
              <p class="fs-4">
                Sur la plateforme VTP-MARKET vos achats peuvent être effectuer avec plusieurs systèmes de paiement sécurisée selon votre situation géographique (Mastercard, PayPal, Orange Money, Moov Money, MTN Mobile Money).
              </p>


            </div>
            <!-- para -->
            <div class="mt-5">
              <h2 class="fw-bold">Politique de remboursement ?.</h2>
              <p class="fs-4">
                En cas de litige concernant la livraison d’un article, VTP-MARKET se laisse le droit d’arbitré les différentes options de remboursement, si la cause est liée au système de transport de la plate-forme.
                A savoir :
              </p>
              <ul class="fs-4">
                <li>•	Si la cause de non remise est dû à un manquement du vendeur, l’acheteur sera remboursé intégrale (frais de remboursement à la charge du client).</li>
                <li>•	Le VTP-MARKET décline toutes responsabilités sur la qualité des produits mise en vente par les vendeurs, cela inclus la période de transit de l’article.</li>

              </ul>

              <h2 class="fw-bold">Suivi de votre colis ?</h2>
              <p class="fs-4">Vous avez la possibilité de suivre le statut de transit de votre colis avec un numéro de référence directement sur notre plate-forme..</p>

              <ul class="fs-4">
                <li>•	1.	Cliquez sur le menu « Suivi de commande ».</li>
                <li>•	2.	Renseignez votre numéro de Référence fourni lors de votre achat et visible sur votre espace.</li>
                <li>•	3.	Cliquez sur « Vérifier le statut ».</li>
              </ul>

              <h2 class="fw-bold">Les rotations de livraison </h2>
              <p class="fs-4">Les rotations de livraison
                VTP-MARKET c’est doté d’un outil logiciel qui facilite la gestion des articles vendus quotidiennement sur la plateforme. Cet outil nous permet de faire des planifications en fonction d’un quotas d’article à transporter par pays desservie.
                ..</p>

              <ul class="fs-4">
                <li>•	Durée moyens transite par avion est d’une à deux semaine selon les destinations ciblées. ».</li>
                <li>•	Durée moyens d’un transite par voie maritime est d’un à deux mois selon les destinations ciblées.</li>

              </ul>


              <h2 class="fw-bold">Commission de la plateforme VTP-MARKET   </h2>
              <p class="fs-4">La commission est de 15% sur chaque transaction effectuée afin de maintenir le service de la plateforme.
                ..</p>


                <h2 class="fw-bold">Informations importantes à retenir  </h2>


                <ul class="fs-4">
                  <li>Si une vente est réalisée par un vendeur, il reçoit le paiement une fois l’article reçu par l’acheteur..</li>
                  <li>Le VTP-MARKET décline toutes responsabilités sur la qualité et l’état des produits mise en vente par les vendeurs, cela inclus la période de transit de l’article. .</li>
                  <li>Si la cause de non remise est dû à un manquement du vendeur, l’acheteur sera remboursé intégrale (frais de remboursement à la charge du client)..</li>
                  <li>Si la cause de non remise est dû à un manquement du vendeur, l’acheteur sera remboursé intégrale (frais de remboursement à la charge du client)..</li>
                </ul>


            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
