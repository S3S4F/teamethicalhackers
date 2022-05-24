<nav class="navbar navbar-expand-lg fixed-top trans-navigation">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">
            <img width="160" src="images/TEHlogo.png" alt="" class="img-fluid b-logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="fa fa-bars"></i>
            </span>
          </button>

        <div class="collapse navbar-collapse justify-content-end" id="mainNav">
            <ul class="navbar-nav ">
               <li class="nav-item dropdown">
                    <a class="nav-link" href="{{url('/')}}" id="navbarWelcome" role="button" data-toggle="" aria-haspopup="true" aria-expanded="false">
                        Accueil
                    </a>
                    
                </li>
                <li class="nav-item">
                    <a class="nav-link smoth-scroll" href="{{url('/about')}}">Membres</a>

                </li>
               
                <li class="nav-item">
                    <a class="nav-link smoth-scroll" href="{{ url('/service') }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link smoth-scroll" href="{{url('/contact')}}">Nos Projets</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--MAIN HEADER AREA END -->
