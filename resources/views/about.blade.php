@extends('app')
@section('contenu')
<link rel="shortcut icon" href="{{asset('assets/images/fav.png')}}" type="image/x-icon">
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="{{asset('assets/images/fav-icon.png')}}">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />

<!--MAIN BANNER AREA START -->


 <div class="page-banner-area page-contact" id="page-banner">
    <div class="overlay dark-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                <div class="banner-content content-padding">
                    <h1 class="text-white subtitle">TΞΛM ΞTHIϾΛŁ HΛϾКΞЯS</h1>
                    <p>l'espace des membres de la Team </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--MAIN HEADER AREA END -->


<!--  Sidy presentation  -->
<section class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12 col-md-8 mb-4">
                    <h3 class="mb-3">Papa Sidy Mactar TRAORE <br>Président de la Team Etickal Hackers</h3>
                    <p class="mb-4"> Jeune étudiant en Systèmes d’Information, je suis un travailleur dévoué et astucieux. Acquérir de nouvelles compétences et plus d’expérience est ma motivation quotidienne.</p>

                    <span class="h5 mb-4">Développeur full stack avec :</span>
                    <ul class="about-list2 my-4">
                        <li class="mb-2"><i class="icofont icofont-check-circled"></i> Angular et MongoDB </li>

                        <li class="mb-2">
                            <i class="icofont icofont-check-circled"> </i> CodeIgniter
                        </li>

                        <li class="mb-2">
                            <i class="icofont icofont-check-circled"> </i> Laravel front-end developer
                        </li>

                        <li class="mb-2">
                            <ul class="list-unstyled list-inline team-social mt-4">
                                <li class="list-inline-item"><a href=" https://instagram.com/sidy_king"><i class="fab fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-github"></i></a></li>
                                <li class="list-inline-item"><a href=" https://linkedin.com/in/traoré"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </li>
                    </ul>

                   {{--  <a href="#" class="mt-3 d-inline-block">Learn more about us <i class="fa fa-angle-right"></i></a> --}}
                </div>

                <div class="col-lg-6 col-md-4">
                    <img src="images/about/about-5.jpg" alt="" class="img-fluid w-100">
                </div>

            </div>
        </div>
        <br>
</section>
<!--  SECTION VIce-president mbacke seck  -->
<section class="section-padding" id="section-strategy">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-5">
                            <span class="icon-3x text-default"><i class="icofont-layers"></i></span>
                            <h4 class="my-3">Serigne Mbacké SECK <br>Président adjoint de la Team Etickal Hackers </h4>
                            <p> Je suis Cofounder,Business Developper, Communication Digitale & Community manager,
                                Développeur web et mobile Flutter et Angular </p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div>
                            <h4 class="my-3">Développeur full stack</h4>
                            <p>
                                <ul class="list-unstyled list-inline team-social mt-4">
                                    <li class="list-inline-item"><a href="https://www.instagram.com/mbacke_sindidi/"><i class="fab fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.instagram.com/mbacke_sindidi/"><i class="fab fa-github"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.linkedin.com/services/page/8541b3316060007486"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  Secretaire general  -->
<section class="section pt-0">
    <div class="container">
        <div class="row align-items-center mt-3">
            <div class="col-lg-5 col-sm-12 col-md-6 mb-4">
                <img src="images/team/sg.jpg" alt="feature bg" class="img-fluid">
            </div>

            <div class="col-lg-7 pl-4">
               <div class="mb-5">
                    <h3 class="mb-4">Fallou TOURE <br>Secrétaire général</h3>
                    <p>Dynamique et passionné, j'apprécie le travail en équipe tout en sachant évoluer de manière autonome pour les missions qui le nécessitent. De nature curieuse et polyvalente, j'assume mes responsabilités avec beaucoup de rigueur. Grâce à ma formation, je suis capable d'intervenir dans tout le processus de conception et de développement d'application </p>
                </div>

                <ul class="about-list">
                    <li> <h5 class="mb-2"><i class="icofont icofont-check-circled"></i>Développeur Full-Stack Laravel</h5>
                    </li>
                    <li>
                        <h5 class="mb-2"><i class="icofont icofont-check-circled"> </i>Développeur Front-End Code Igniter</h5>
                    </li>
                </ul>
                <ul class="about-list2 my-4">
                    <li class="mb-2">
                        <ul class="list-unstyled list-inline team-social mt-4">
                            <li class="list-inline-item"><a href=" https://www.instagram.com/tourfallou97/"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="https://github.com/fallougeekeralafunti"><i class="fab fa-github"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.linkedin.com/in/fallou-toure-b655801b3/"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--  SERVICE AREA END  -->
<!--  SECTION VIce-president mbacke seck  -->
<!--  chef de projet  -->
<section class="bg-02">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="head-01">
                        <h2>Chefs de Projet</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-sm-6">
                    <div class="team-main-box">
                        <img src="assets/images/team/9.jpg">
                        <div class="team-content-box">
                            <ul>
                                <li class="list-inline-item"><a href="https://www.instagram.com/wizlaye.officiel/?hl=fr"><i class="fab fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.github.com/abdoukhadre-searching"><i class="fab fa-github"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.linkedin.com/mwlite/in/abdoulaye-ndiaye-151658238"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                            <h3>Abdoulaye NDIAYE</h3>
                            <b>Développeur Angular</b>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-sm-6">
                    <div class="team-main-box">
                        <img src="assets/images/team/7.jpg">
                        <div class="team-content-box">
                            <ul>
                                <li class="list-inline-item"><a href="https://www.instagram.com/abdou_khadre_smcif/"><i class="fab fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.github.com/abdoukhadre-searching"><i class="fab fa-github"></i></a></li>
                                <li class="list-inline-item"><a href="https://linkedin.com/in/abdou-khadre-ndiaye-802211232/"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                            <h3>Abdou Khadre NDIAYE</h3>
                            <b>Administrateur Reseau</b>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-sm-6">
                    <div class="team-main-box">
                        <img src="images/team/chef1.jpg">
                        <div class="team-content-box">
                            <ul>
                                <li class="list-inline-item"><a href="https://gitlab.com/pacadiouf"><i class="fab fa-github"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.linkedin.com/in/paul-cheikh-anta-diouf-473ab6211"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                            <h3>Paul Cheikh Anta DIOUF</h3>
                            <b>Developpeur Code Igniter</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!--  chef de projet END  -->
<!--  communications  -->
<section class="section-padding bg-gray" >
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="mb-5">
                    <h3 class="mb-2">Equipe Communication Digital </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <img src="images/team/team2.jpg" alt="" class="img-fluid rounded w-100">

                <ul class="list-unstyled list-inline team-social mt-4">
                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li class="list-inline-item"><a href="https://gitlab.com/Saliou97"><i class="fab fa-google-plus"></i></a></li>
                </ul>
                <h4 class="mt-3">Serigne Saliou Mbacké DIOME</h4>
                <p>Développeur Front-end CodeIgniter & Designer</p>

            </div>
            <div class="col-lg-4 col-md-6">
                <img src="images/team/faye.jpg" alt="" class="img-fluid rounded w-100">

                <ul class="list-unstyled list-inline team-social mt-4">
                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-google-plus"></i></a></li>
                </ul>
                <h4 class="mt-3">Serigne Saliou FAYE</h4>
                <p>UI/UX Designer && Développeur Full Stack Laravel</p>
            </div>
            <div class="col-lg-4 col-md-6">
                <img src="images/team/team3.jpg" alt="" class="img-fluid rounded w-100">

                <ul class="list-unstyled list-inline team-social mt-4">
                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-google-plus"></i></a></li>
                </ul>
                <h4 class="mt-3">Weyndé Hector DIENG</h4>
                <p>Designer & Développeur Front-end Flutter et Angular</p>
            </div>
        </div>
    </div>
</section>
<!--TEAM communications END  -->
<!--Les Responsables pédagogiques    -->
<section class="section-padding pt-0">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-8">
                <div class="mb-5">
                    <h3 class="mb-2">Les Responsables pédagogiques </h3>
                </div>
            </div>
        <div class="row mt-5">

            <div class="col-lg-6 ">
                <div class="media img-block mb-3 mb-lg-0">
                    <img src="images/team/im3.jpg" alt="" class="img-fluid rounded mr-3">

                    <div class="media-body ">
                        <h4 class="mb-3">Amadou NDIAYE président commission pédagogique</h4>
                        <p>Developpeur full-stack Code Igniter</p>
                        <p>
                            <ul class="list-unstyled list-inline team-social mt-4">
                                <li class="list-inline-item"><a href="https://www.instagram.com/mbacke_sindidi/"><i class="fab fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.instagram.com/mbacke_sindidi/"><i class="fab fa-github"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.linkedin.com/services/page/8541b3316060007486"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="media img-block">
                    <img src="images/team/im6.jpg" alt="" class="img-fluid rounded mr-3">

                    <div class="media-body ">
                        <h4 class="mb-3">El Hadji Serigne MBACKE président adjoint de la commission pédagogique</h4>
                        <p>Developpeur full stack Symphony</p>
                        <p>
                            <ul class="list-unstyled list-inline team-social mt-4">
                                <li class="list-inline-item"><a href="https://www.instagram.com/mbacke_sindidi/"><i class="fab fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="https://gitlab.com/bayeserigne"><i class="fab fa-github"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.linkedin.com/services/page/8541b3316060007486"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Les Responsables pédagogiques fin   -->
<!--  responsables finance  -->
<section class="bg-02">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="head-01">
                    <h2>Les responsables de la finance</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-sm-6">
                <div class="team-main-box">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-sm-6">
                <div class="team-main-box">
                    <img src="images/team/tresorier1.jpg">
                    <div class="team-content-box">
                        <ul>
                            <li class="list-inline-item"><a href=" https://www.instagram.com/invites/contact/?utm_source=ig_contact_invite&utm_medium=whatsapp"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.linkedin.com/in/mame-faye-533028232"><i class="fab fa-linkedin"></i></a></li>
                            <li class="list-inline-item"><a href="https://gitlab.com/Mame2.0"><i class="fab fa-github"></i></a></li>

                        </ul>
                        <h3>lamine Ayoba GUEYE</h3>
                        <b>Développeur Laravel full-stack</b>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-sm-6">
                <div class="team-main-box">
                    <img src="images/team/tresorier2.jpg">
                    <div class="team-content-box">
                        <ul>
                            <li class="list-inline-item"><a href="https://gitlab.com/Lamine785260388"><i class="fab fa-github"></i></a></li>
                            <li class="list-inline-item"><a href="https://linkedin.com/in/abdou-khadre-ndiaye-802211232/"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                        <h3>Mouhamed Moustapha TRAORE</h3>
                        <b>Développeur Code Igniter</b>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-sm-6">
                <div class="team-main-box">
                </div>
            </div>
        </div>
    </div>
</section>
<!--  chef de projet END  -->

<!--  FOOTER AREA START  -->

<section id="footer" class="section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-sm-6 col-md-6">
                <div class="footer-widget footer-text">
                    <h4>Contacts</h4>
                    <p class="mail"><span>Email:</span> teamethicalhackers15@gmail.com</p>
                    <p><span>Téléphone :</span> +221 78 370 99 08</p>
                    <p><span>Localisation:</span> Université Alioune Diop de Bambey, Diourbel, Sénégal</p>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6">
                <div class="footer-widget footer-text">
                    <br> <br>
                    <p><span>Instagram : </span>instagram.com/team_ethical_hackers?igshid=1mf7qqoq8v4nx</p>
                    <p><span>Linkedin : </span>linkedin.com/in/team-ethical-hackers-a623aa203</p>
                    <p><span>Github : </span>github.com/TEAM-ETHICAL-HACKERS</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="footer-copy">
                    © 2022 Team Ethical Hackers. All Rights Reserved.
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

@endsection
