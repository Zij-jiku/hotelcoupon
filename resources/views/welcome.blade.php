<!DOCTYPE html>
<html>
<head>
  <title>coupon collector</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/one') }}/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <x:notify-messages />
  <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
<body>
  <div class="container">

    <x:notify-messages />
    @notifyJs


    <div class="row px-3">
      <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
        <div class="img-left d-none d-md-flex"></div>

        <div class="card-body">
          <h4 class="title text-center mt-4">
            Get Your coupon code
          </h4>

          <form class="form-box px-3" method="POST" action="{{ route('getcoupon.store') }}">
            @csrf

            {{-- <input type="date" value="" name="date">

            <input type="date" value="" name="date"> --}}

            <div class="form-input">
              <span><i class="fas fa-user"></i></span>
              <input type="text" name="fullname" placeholder="Full Name" tabindex="10" value="{{ old('fullname') }}" required>
            </div>

              @error ('fullname')
                 <span class = "text-danger">{{ $message }}</span>
              @enderror



            <div class="form-input">
              <span><i class="fas fa-envelope"></i></span>
              <input type="email" name="email" placeholder="Email Address" tabindex="10" value="{{ old('email') }}" required>
            </div>
              @error ('email')
              <span class = "text-danger">{{ $message }}</span>
            @enderror


           
            <div class="form-input">
              <span><i class="far fa-building"></i></span>
              <input type="text" name="city" placeholder="Enter city" value="{{ old('city') }}" required>
            </div>

              @error ('city')
                <span class = "text-danger">{{ $message }}</span>
              @enderror


            <select name="hotelname" id="" class="form-control" style="border-radius: 30px; margin-bottom: 5px">
                <option value="">Select Hotel</option>
                
                <option value="B&B Hotel">B&B Hotel</option>
                <option value="Hotel Argegno">Hotel Argegno</option>
                <option value="Hotel Fonte La">Hotel Fonte La</option>
                <option value="B&B Hotel">B&B Hotel</option>
                <option value="Hotel San Marco">Hotel San Marco</option>
                <option value="Albergo Lago Verde">Albergo Lago Verde</option>
                <option value="Albergo Ristorante Uspa">Albergo Ristorante Uspa</option>
                <option value="Alex & Lorenz">Alex & Lorenz</option>
                <option value="Palazzo Circolone">Palazzo Circolone</option>
                <option value="Hotel Sole">Hotel Sole</option>
                <option value="La Torricella">La Torricella</option>
                <option value="Hotel Ristorante Château">Hotel Ristorante Château</option>
                <option value="Hotel Al Verde">Hotel Al Verde</option>
                <option value="Hotel Cylentos">Hotel Cylentos</option>
                <option value="Best Western Hotel">Best Western Hotel</option>
                <option value="La Gustea Hotel">La Gustea Hotel</option>
                <option value="Albergo Miralaghi">Albergo Miralaghi</option>
                <option value="Hotel La Rosa">Hotel La Rosa</option>
                <option value="Hotel Il Crinale">Hotel Il Crinale</option>

            </select>
            @error ('hotelname')
              <span class = "text-danger">{{ $message }}</span>
            @enderror
            



            <div class="mb-3">
              <button type="submit" class="btn btn-block text-uppercase">
                Submit
              </button>
            </div>

           

            <div class="text-center mb-3">
             Subscribe with us
            </div>

            <div class="row mb-3">
              <div class="col-4">
                <a href="https://www.facebook.com/uniboxhotel" class="btn btn-block btn-social btn-facebook" target="_blank">
                  facebook
                </a>
              </div>

              <div class="col-4">
                <a href="https://www.pinterest.com/uniboxhotel/_created/" class="btn btn-block btn-social btn-google" target="_blank">
                  pinterest
                </a>
              </div>

              <div class="col-4">
                <a href="https://twitter.com/uniboxhotel1" class="btn btn-block btn-social btn-twitter" target="_blank">
                  twitter
                </a>
              </div>
            </div>

            <hr class="my-4">

           <!--  <div class="text-center mb-2">
              Don't have an account?
              <a href="#" class="register-link">
                Register here
              </a>
            </div> -->
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>