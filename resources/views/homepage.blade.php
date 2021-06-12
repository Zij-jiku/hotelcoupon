<!DOCTYPE html>
<html>
<head>
	<title>simple Landing Page</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- boostrap css -->
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    @notifyCss

    <!-- Main Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/two') }}/css/style.css">
</head>
<body data-spy="scroll" data-target="#scroll_spy">

	<header>

    
		
		
		<!-- nav here -->
      <nav class="navbar navbar-expand-lg navbar-dark">

      <div class="container">
        
        <a class="navbar-brand" href="{{ route('homepage') }}">uniboxhotel.com</a>
        <button class="navbar-toggler syst" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('homepage') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link" href="#offer">Offer Hotel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact_part">contact</a>
            </li>
          
          </ul>
        </div>
      </div>

      </nav>

		<!-- nav end -->




		<!-- main body content here -->

		<main class="mt-3">
		
		<section class="main-content">
			
			<h3>Welcome To Italy</h3>
			<h1>Do Come & Visit <span class="change-content"></span> </h1>
			<p>"Get 5% Offer"</p>
			
			<a href="#offer" class="sel-1"> <button class="btn btn-success px-4 py-2 cupon">Click Here Get Cupon</button> </a>
			



		</section>
 
	</main>

	</header>




	<!-- about us -->

	<section class="histori-area" id="about">

		<div class="container">

			<div class="row text-center">
				
				<div class="col-lg-8 col-md-8 col-sm-12 offset-lg-2 offset-md-2 history-text">

					<h1>About Us</h1>
					<div class="mar"><img src="{{ asset('frontend/two') }}/image/mark.png"></div>
					<p>Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. 
Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus. Curabitur aliquet quam id dui posuere blandit. 
Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. 
Vivamus suscipit tortor eget felis porttitor volutpat. Cras ultricies ligula sed magna dictum porta. 
Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>


					

				</div>
			</div>
			

		</div>
		

	</section>


	<!-- about us end -->




	<!-- offer section -->


	<div class="container m-t-md" id="offer">
      <!-- First row -->
      {{-- <div class="row">
        <div class="col-xs-12 col-md-4">
          <!-- Card -->
          <article class="card animated fadeInLeft">
            <img class="card-img-top img-responsive" src="{{ asset('frontend/two') }}/image/42dc0f937b61e241629aff6028ab81b6.jpg" alt="Deer in nature" />
            <div class="card-block px-2 py-2 mt-2">
              <h4 class="card-title text-center">Hotel</h4>
              <h6 class="text-muted text-center">Get 5% offer</h6>
              <p class="card-text">Tired of their servitude to man, a group of farm animals revolt and establish their own society, only to be betrayed into worse servitude by their leaders, the pigs. This satire addresses the communist philosophy the Soviet Union.</p>
              <a href="file:///C:/Users/Touhid%20Uzz%20Jaman/Desktop/landing/Blue%20Creative%20Login%20Form/login.html" class="btn btn-block btn-dark px-4 py-2">Get Offer</a>
            </div>
          </article><!-- .end Card -->
        </div>

        <div class="col-xs-12 col-md-4">
          <!-- Card -->
          <article class="card animated fadeInLeft">
            <img class="card-img-top img-responsive" src="{{ asset('frontend/two') }}/image/42dc0f937b61e241629aff6028ab81b6.jpg" alt="Deer in nature" />
            <div class="card-block px-2 py-2 mt-2">
              <h4 class="card-title text-center">Hotel</h4>
              <h6 class="text-muted text-center">Get 6 % off</h6>
              <p class="card-text">Tired of their servitude to man, a group of farm animals revolt and establish their own society, only to be betrayed into worse servitude by their leaders, the pigs. This satire addresses the communist philosophy the Soviet Union.</p>
               <a href="file:///C:/Users/Touhid%20Uzz%20Jaman/Desktop/landing/Blue%20Creative%20Login%20Form/login.html" class="btn btn-block btn-dark px-4 py-2">Get Offer</a>
            </div>
          </article><!-- .end Card -->
        </div>

        <div class="col-xs-12 col-md-4">
          <!-- Card -->
          <article class="card animated fadeInLeft">
            <img class="card-img-top img-responsive" src="{{ asset('frontend/two') }}/image/42dc0f937b61e241629aff6028ab81b6.jpg" alt="Deer in nature" />
            <div class="card-block px-2 py-2 mt-2">
              <h4 class="card-title text-center">Hotel</h4>
              <h6 class="text-muted text-center">Get 8% Off</h6>
              <p class="card-text">Tired of their servitude to man, a group of farm animals revolt and establish their own society, only to be betrayed into worse servitude by their leaders, the pigs. This satire addresses the communist philosophy the Soviet Union.</p>
                <a href="file:///C:/Users/Touhid%20Uzz%20Jaman/Desktop/landing/Blue%20Creative%20Login%20Form/login.html" class="btn btn-block btn-dark px-4 py-2">Get Offer</a>
            </div>
          </article><!-- .end Card -->
        </div>
      
        </div>
      </div><!-- .end Second row --> --}}



    </div>


	<!-- offersection end -->


	<!-- contact us form -->


	<div class="contact-section">

  <h1 id="contact_part">Contact Us</h1>
  <div class="border"></div>

      <form class="contact-form" action="{{ route('contact.store') }}" method="post">
        @csrf

        <input type="text" class="contact-form-text" placeholder="Your name" name="fullname">

          @error ('fullname')
          <span class = "text-danger">{{ $message }}</span>
        @enderror


        <input type="email" class="contact-form-text" placeholder="Your email" name="email">

          @error ('email')
          <span class = "text-danger">{{ $message }}</span>
        @enderror

        
        <textarea class="contact-form-text" placeholder="Your message" name="messages"></textarea>

          @error ('messages')
          <span class = "text-danger">{{ $message }}</span>
        @enderror


        <input type="submit" class="contact-form-btn" value="Send">
      </form>
</div>

	<!-- contactus form end here -->
	<footer class="py-4">
		<div class="container"></div>	
	</footer>


    <!-- Scroll Button Part Start -->
    <div id="bto_part">
        <div class="bto">
            <i class="fas fa-chevron-up"></i>
        </div>
    </div><!-- /.section end -->
    <!--Scroll Button Part End -->

    <x:notify-messages />
    @notifyJs


	<!-- boostrap content -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- <script>
  // Menu fixed
      var navoff = $('header').offset().top;

      $(window).scroll(function () {
          var scrolling = $(this).scrollTop();

          if (scrolling > navoff) {
              $('header').addClass('menufix');
          } else {
              $('header').removeClass('menufix');
          }

      });
</script> -->

<script>
   // Scroll To Top
   $(".bto").click(function () {
        $("html,body").animate({
            scrollTop: 0,
        }, 2000);
    });

    $(window).scroll(function () {
        var scrolling = $(this).scrollTop();

        if (scrolling > 130) {
            $(".bto").fadeIn();
        } else {
            $(".bto").fadeOut();
        }
    });
</script>

</body>
</html>