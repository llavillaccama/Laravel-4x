@include('layout.header')

  <!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
   <!-- Brand and toggle get grouped for better mobile display -->
   <div class="navbar-header page-scroll">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
     <span class="sr-only">Toggle navigation</span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
   </button>

   <a class="navbar-brand logo" href="#page-top">{{ HTML::image('img/logo.png') }}Web Design JC</a>
 </div>
 <!-- Collect the nav links, forms, and other content for toggling -->
 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav navbar-right">
   <li class="hidden">
    <a href="#page-top"></a>
  </li>
  <li class="page-scroll">
    <a href="#portfolio">Tecnologías</a>
  </li>
  <li class="page-scroll">
    <a href="#about">Perfil</a>
  </li>
  <li class="page-scroll">
    <a href="#contact">Contacto</a>
  </li>
  @if(Auth::check())
  <li class="page-scroll"><a href="sign-out">Salir</a></li>
  @else
  <li class="page-scroll"><a href="{{ URL::route('account-sign-in') }}">Entrar</a></li>
  @endif




</ul>
</div>
<!-- /.navbar-collapse -->
</div>
<!-- /.container-fluid -->
</nav>
<!-- User  Menu -->
<div class="user-content">
  <div class="container">
    @section('content')
    @if (Auth::check())
    <div class="user-name">Hello, {{ Auth::user()->username }}</div>
    @else 
    @endif
    @stop

    @if(Session::has('global'))
    <p class="alert alert-danger">{{ Session::get('global') }}</p>
    @endif

    @if(Session::has('message'))
    <p class="alert alert-success">{{ Session::get('message') }}</p>
    @endif


    @include('layout.navigation')
    @yield('content')
  </div>
</div>
<!-- Header -->
<header>
  <div class="container">
   <div class="row">
    <div class="col-lg-12">
     <img class="img-responsive" src="img/profile.png" alt="">
     <div class="intro-text">
      <span class="name">Julio C. Llavilla Ccama</span>
      <hr class="star-light">
      <span class="skills">Web Developer</span>
    </div>
  </div>
</div>
</div>
</header>
<!-- Portfolio Grid Section -->
<section id="portfolio">
  <div class="container">
   <div class="row">
    <div class="col-lg-12 text-center">
     <h2>Tecnologías</h2>
     <hr class="star-primary">
   </div>
 </div>
 <div class="row">

  <div class="col-sm-4 portfolio-item">
   <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
    <div class="caption">
     <div class="caption-content">
      <i class="fa fa-search-plus fa-3x"></i>
    </div>
  </div>
  <img src="img/portfolio/cabin.png" class="img-responsive" alt="">
</a>
</div>

<div class="col-sm-4 portfolio-item">
 <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
  <div class="caption">
   <div class="caption-content">
    <i class="fa fa-search-plus fa-3x"></i>
  </div>
</div>
<img src="img/portfolio/cake.png" class="img-responsive" alt="">
</a>
</div>

<div class="col-sm-4 portfolio-item">
 <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
  <div class="caption">
   <div class="caption-content">
    <i class="fa fa-search-plus fa-3x"></i>
  </div>
</div>
<img src="img/portfolio/submarine.png" class="img-responsive" alt="">
</a>
</div>
</div>
</div>
</section>

<!-- About Section -->
<section class="success" id="about">
  <div class="container">
   <div class="row">
    <div class="col-lg-12 text-center">
     <h2>Perfil</h2>
     <hr class="star-light">
   </div>
 </div>
 <div class="row">
  <div class="perfil">
   <p>Desarrollador web  autodidacta, con amplia experiencia  en el desarrollo de páginas web  aplicando lo ultimo de la tecnología en CMS, y Frameworks.</p>
   <p>Cuento con conocimientos en: Git, Mysql, jQuery Mobile, Laravel, Yii,  AngularJS, PHP, HTML5, CSS3, jQuery, Drupal, Joomla, WordPress, Posicionamiento Web (SEO).</p>
 </div>

 <div class="col-lg-8 col-lg-offset-2 text-center">
   <a href="#" class="btn btn-lg btn-outline">
    <i class="fa fa-phone"></i> 943973537
  </a>
</div>
</div>
</div>
</section>

@include('contact.contacto')

<!-- Footer -->
<footer class="text-center">
  <div class="footer-above">
   <div class="container">
    <div class="row">
     <div class="footer-col col-md-4">

     </div>
     <div class="footer-col col-md-4">
      <h3>Encuéntrame en:</h3>
      <ul class="list-inline">
       <li>
        <a href="https://www.facebook.com/juliocesarllavillaccama" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
      </li>
      <li>
        <a href="https://plus.google.com/u/0/+JulioCesarLlavillaCcama/posts" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
      </li>
      <li>
        <a href="https://twitter.com/llavillaccama?lang=es" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
      </li>
      <li>
        <a href="https://pe.linkedin.com/pub/julio-cesar-llavilla-ccama/8a/79/895" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
      </li>
    </ul>
  </div>
  <div class="footer-col col-md-4">
  </div>
</div>
</div>
</div>
<div class="footer-below">
 <div class="container">
  <div class="row">
   <div class="col-lg-12">
    Copyright &copy; Web Design JC 2014
  </div>
</div>
</div>
</div>
</footer>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll visible-xs visble-sm">
  <a class="btn btn-primary" href="#page-top">
   <i class="fa fa-chevron-up"></i>
 </a>
</div>

<!-- Portfolio Modals -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
   <div class="close-modal" data-dismiss="modal">
    <div class="lr">
     <div class="rl">
     </div>
   </div>
 </div>
 <div class="container">
  <div class="row">
   <div class="col-lg-8 col-lg-offset-2">
    <div class="modal-body">
     <h2>Project Title</h2>
     <hr class="star-primary">
     <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
     <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
     <ul class="list-inline item-details">
      <li>Client:
       <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
       </strong>
     </li>
     <li>Date:
       <strong><a href="http://startbootstrap.com">April 2014</a>
       </strong>
     </li>
     <li>Service:
       <strong><a href="http://startbootstrap.com">Web Development</a>
       </strong>
     </li>
   </ul>
   <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
 </div>
</div>
</div>
</div>
</div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
   <div class="close-modal" data-dismiss="modal">
    <div class="lr">
     <div class="rl">
     </div>
   </div>
 </div>
 <div class="container">
  <div class="row">
   <div class="col-lg-8 col-lg-offset-2">
    <div class="modal-body">
     <h2>Project Title</h2>
     <hr class="star-primary">
     <img src="img/portfolio/cake.png" class="img-responsive img-centered" alt="">
     <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
     <ul class="list-inline item-details">
      <li>Client:
       <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
       </strong>
     </li>
     <li>Date:
       <strong><a href="http://startbootstrap.com">April 2014</a>
       </strong>
     </li>
     <li>Service:
       <strong><a href="http://startbootstrap.com">Web Development</a>
       </strong>
     </li>
   </ul>
   <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
 </div>
</div>
</div>
</div>
</div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
   <div class="close-modal" data-dismiss="modal">
    <div class="lr">
     <div class="rl">
     </div>
   </div>
 </div>
 <div class="container">
  <div class="row">
   <div class="col-lg-8 col-lg-offset-2">
    <div class="modal-body">
     <h2>Project Title</h2>
     <hr class="star-primary">
     <img src="img/portfolio/submarine.png" class="img-responsive img-centered" alt="">
     <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
     <ul class="list-inline item-details">
      <li>Client:
       <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
       </strong>
     </li>
     <li>Date:
       <strong><a href="http://startbootstrap.com">April 2014</a>
       </strong>
     </li>
     <li>Service:
       <strong><a href="http://startbootstrap.com">Web Development</a>
       </strong>
     </li>
   </ul>
   <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
 </div>
</div>
</div>
</div>
</div>
</div>
@include('layout.footer')