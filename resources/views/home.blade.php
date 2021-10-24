<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --}}
  
  
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  
  <title>e_traslados</title>
  
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
  
  
  <!--axios-->
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
  
  
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  
  
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  
  
  
</head>
<body>
  
  
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
    <div class="container">
      <a class="navbar-brand" href="#">pez turismo</a>
      <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
      >
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <div class="mx-auto"></div>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="btn btn-outline-danger nav-link text-white" href="#">Seja um guia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Banner Image  -->
<div class="banner-image w-100 vh-100 d-flex justify-content-center" >
  
  <div class="busca content text-center">
    <div class="form-check form-check-inline"> 
      
      Check in: <input type="text" id="calendario" name="data" autocomplete="off" class="form-control"/>
      <p>Check out: <input type="text" id="calendario" name="data" autocomplete="off" class="form-control"/></p>
      <button class="btn btn-primary btn-block"><i class="fas fa-search"></i></button>
    </div>
  </div>
  
</div>

<br>

<!-- Images  -->

<section class="galery">
  <div class="row row-cols-1 row-cols-md-3">
    <div class="col mb-4">
      <div class="card">
        <img src="{{ asset('img/rio_negro.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Rio Negro, Rondonia</h5>
          {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card">
        <img src="{{ asset('img/rio_taquari.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Rio Taquari, Sergipe</h5>
          {{-- <p class="card-text">This is a short card.</p> --}}
        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card">
        <img src="{{ asset('img/rio_miranda.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Rio Miranda, Paraná</h5>
          {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p> --}}
        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card">
        <img src="{{ asset('img/rio_amazonas.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Rio Amazonas, Manaus</h5>
          {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
        </div>
      </div>
    </div>
  </div>
  
  
  <div class="row row-cols-1 row-cols-md-3">
    <div class="col mb-4">
      <div class="card h-100">
        <img src="{{ asset('img/rio_a.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card h-100">
        <img src="{{ asset('img/rio_b.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          {{-- <p class="card-text">This is a short card.</p> --}}
        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card h-100">
        <img src="{{ asset('img/rio_c.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p> --}}
        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card h-100">
        <img src="{{ asset('img/rio_d.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
        </div>
      </div>
    </div>
  </div>
  
</section>  

<!-- Guias  -->
<section class="guides">
  
  
  {{-- <div class="row">
    
    
    <div class="col lg-4">
      
      <div class="card main_guide">
        <img src="{{ asset('img/img_guia_principal.jpg')}}" class="card-img-top highlighted" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
        </div>
      </div>
      
    </div>
    
    
    
    <div class="col-lg-8">
      <div class="row">
        
        <div class="col mb-4">
          <div class="card">
            <img src="{{ asset('img/rio_e.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
            </div>
          </div>
          
        </div>
        
        <div class="col mb-4">
          <div class="card">
            <img src="{{ asset('img/rio_f.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
            </div>
          </div>
        </div>
      </div>
      
      
      <div class="row">
        
        <div class="col mb-4">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
            </div>
          </div>
        </div>
        
        
        <div class="col mb-4">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
            </div>
          </div>
        </div>
        
      </div> 
    </div>
    
    
  </div> --}}
  
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-8 col-lg-6">
        <!-- Section Heading-->
        <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
          <h1><b>Conheça nossos guias</b></h1>
          <p>Aqui colocamos um texto falando sobre os guias &amp; algo que inspire segurança e processo de validação.</p>
          <div class="line"></div>
        </div>
      </div>
    </div>
    


  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row">
          <!-- Single Advisor-->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
              <!-- Team Thumb-->
              <div class="advisor_thumb"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                <!-- Social Info-->
                <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
              </div>
              <!-- Team Details-->
              <div class="single_advisor_details_info">
                <h6>Samantha Sarah</h6>
                <p class="designation">Founder &amp; CEO</p>
              </div>
            </div>
          </div>
          <!-- Single Advisor-->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
              <!-- Team Thumb-->
              <div class="advisor_thumb"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="">
                <!-- Social Info-->
                <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
              </div>
              <!-- Team Details-->
              <div class="single_advisor_details_info">
                <h6>Nazrul Islam</h6>
                <p class="designation">UI Designer</p>
              </div>
            </div>
          </div>
          <!-- Single Advisor-->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
              <!-- Team Thumb-->
              <div class="advisor_thumb"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
                <!-- Social Info-->
                <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
              </div>
              <!-- Team Details-->
              <div class="single_advisor_details_info">
                <h6>Riyadh Khan</h6>
                <p class="designation">Developer</p>
              </div>
            </div>
          </div>
          <!-- Single Advisor-->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
              <!-- Team Thumb-->
              <div class="advisor_thumb"><img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="">
                <!-- Social Info-->
                <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
              </div>
              <!-- Team Details-->
              <div class="single_advisor_details_info">
                <h6>Niloy Islam</h6>
                <p class="designation">Marketing Manager</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <!-- Single Advisor-->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
              <!-- Team Thumb-->
              <div class="advisor_thumb"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                <!-- Social Info-->
                <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
              </div>
              <!-- Team Details-->
              <div class="single_advisor_details_info">
                <h6>Samantha Sarah</h6>
                <p class="designation">Founder &amp; CEO</p>
              </div>
            </div>
          </div>
          <!-- Single Advisor-->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
              <!-- Team Thumb-->
              <div class="advisor_thumb"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="">
                <!-- Social Info-->
                <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
              </div>
              <!-- Team Details-->
              <div class="single_advisor_details_info">
                <h6>Nazrul Islam</h6>
                <p class="designation">UI Designer</p>
              </div>
            </div>
          </div>
          <!-- Single Advisor-->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
              <!-- Team Thumb-->
              <div class="advisor_thumb"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
                <!-- Social Info-->
                <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
              </div>
              <!-- Team Details-->
              <div class="single_advisor_details_info">
                <h6>Riyadh Khan</h6>
                <p class="designation">Developer</p>
              </div>
            </div>
          </div>
          <!-- Single Advisor-->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
              <!-- Team Thumb-->
              <div class="advisor_thumb"><img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="">
                <!-- Social Info-->
                <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
              </div>
              <!-- Team Details-->
              <div class="single_advisor_details_info">
                <h6>Niloy Islam</h6>
                <p class="designation">Marketing Manager</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <!-- Single Advisor-->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
              <!-- Team Thumb-->
              <div class="advisor_thumb"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                <!-- Social Info-->
                <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
              </div>
              <!-- Team Details-->
              <div class="single_advisor_details_info">
                <h6>Samantha Sarah</h6>
                <p class="designation">Founder &amp; CEO</p>
              </div>
            </div>
          </div>
          <!-- Single Advisor-->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
              <!-- Team Thumb-->
              <div class="advisor_thumb"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="">
                <!-- Social Info-->
                <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
              </div>
              <!-- Team Details-->
              <div class="single_advisor_details_info">
                <h6>Nazrul Islam</h6>
                <p class="designation">UI Designer</p>
              </div>
            </div>
          </div>
          <!-- Single Advisor-->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
              <!-- Team Thumb-->
              <div class="advisor_thumb"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
                <!-- Social Info-->
                <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
              </div>
              <!-- Team Details-->
              <div class="single_advisor_details_info">
                <h6>Riyadh Khan</h6>
                <p class="designation">Developer</p>
              </div>
            </div>
          </div>
          <!-- Single Advisor-->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
              <!-- Team Thumb-->
              <div class="advisor_thumb"><img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="">
                <!-- Social Info-->
                <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
              </div>
              <!-- Team Details-->
              <div class="single_advisor_details_info">
                <h6>Niloy Islam</h6>
                <p class="designation">Marketing Manager</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</section>

<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section
  class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
  <!-- Left -->
  <div class="me-5 d-none d-lg-block">
    <span>Conecte-se conosco nas redes sociais:</span>
  </div>
  <!-- Left -->
  
  <!-- Right -->
  <div>
    <a href="" class="me-4 text-reset">
      <i class="fab fa-facebook-f"></i>
    </a>
    <a href="" class="me-4 text-reset">
      <i class="fab fa-twitter"></i>
    </a>
    <a href="" class="me-4 text-reset">
      <i class="fab fa-google"></i>
    </a>
    <a href="" class="me-4 text-reset">
      <i class="fab fa-instagram"></i>
    </a>
    <a href="" class="me-4 text-reset">
      <i class="fab fa-linkedin"></i>
    </a>
    <a href="" class="me-4 text-reset">
      <i class="fab fa-github"></i>
    </a>
  </div>
  <!-- Right -->
</section>
<!-- Section: Social media -->

<!-- Section: Links  -->
<section class="">
  <div class="container text-center text-md-start mt-5">
    <!-- Grid row -->
    <div class="row mt-3">
      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
        <!-- Content -->
        <h6 class="text-uppercase fw-bold mb-4">
          <i class="fas fa-map-marked me-3"></i> Pez Turismo
        </h6>
        <p>
          Aqui colocamos algum texto falando um pouco sobre os serviços prestados.
        </p>
      </div>
      <!-- Grid column -->
      
      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
        <!-- Links -->
        <h6 class="text-uppercase fw-bold mb-4">
          Roteiros
        </h6>
        <p>
          <a href="#!" class="text-reset">Região Norte</a>
        </p>
        <p>
          <a href="#!" class="text-reset">Região Sul</a>
        </p>
        <p>
          <a href="#!" class="text-reset">Região Leste</a>
        </p>
        <p>
          <a href="#!" class="text-reset">Região Oeste</a>
        </p>
      </div>
      <!-- Grid column -->
      
      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
        <!-- Links -->
        <h6 class="text-uppercase fw-bold mb-4">
          Guias
        </h6>
        <p>
          <a href="#!" class="text-reset">Quem são os guias</a>
        </p>
        <p>
          <a href="#!" class="text-reset">Seja um guia Pez</a>
        </p>
        <p>
          <a href="#!" class="text-reset">Seja um anfitrião</a>
        </p>
        <p>
          <a href="#!" class="text-reset">Help</a>
        </p>
      </div>
      
      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
        <!-- Links -->
        <h6 class="text-uppercase fw-bold mb-4">
          Contato
        </h6>
        <p><i class="fas fa-home me-3"></i> São Paulo, SP 03908-000, SP</p>
        <p>
          <i class="fas fa-envelope me-3"></i>
          info@pez.com.br
        </p>
        <p><i class="fas fa-phone me-3"></i> + 55 11 94598-9898</p>
        <p><i class="fas fa-print me-3"></i> + 55 11 94598-9898</p>
      </div>
      <!-- Grid column -->
    </div>
    <!-- Grid row -->
  </div>
</section>
<!-- Section: Links  -->

<!-- Copyright -->
<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
  © 2021 Copyright:
  <a class="text-reset fw-bold" href="https://mdbootstrap.com/">pez.com.br</a>
</div>
<!-- Copyright -->
</footer>
<!-- Footer -->

</body>
</html>


<script src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
  var nav = document.querySelector('nav');
  
  window.addEventListener('scroll', function () {
    if (window.pageYOffset > 100) {
      nav.classList.add('bg-dark', 'shadow');
    } else {
      nav.classList.remove('bg-dark', 'shadow');
    }
  });
</script>
<script>
  
  
  $(function() {
    
    let array; 
    
    axios.get('get_roteiros/')
    .then(function (response) {
      array = response.data
      $('#calendario').datepicker({
        beforeShowDay: function(date){
          var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
          return [ array.indexOf(string) > -1 ]
        }
      });
    });
    
  });
  
</script> 



{{-- <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="titulo_banner">Encontre seu próximo destino</h1>
    {!! Form::open(['route'=>'data_roteiro','method'=>'get']) !!} 
    <div class="row justify-content-center">
      <div class="bloco_search">
        <div class="form-check form-check-inline">
          <div class="container text-center">
            <p>Data: <input type="text" id="calendario" name="data" autocomplete="off" class="form-control"/></p>
          </div>  
          <button class="btn btn-primary btn-block"><i class="fas fa-search"></i></button>
        </div>
      </div>
    </div>
    {!! Form::close() !!}
    
    
  </div>
  
  
</div>
</div> --}}

{{-- 
</body>
</html>



