<!DOCTYPE html>
<html>
<head>
	<title>Download Cupon</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  @notifyCss



  <!-- boostrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

  <div class="container">
    <div class="row mx-auto">

      <div class="col-md-8 col-12 card pt-5 mt-5 mx-auto" style="box-shadow: 0px 25px 42px rgb(0 0 0 / 20%);">

{{-- <style>
  .img {
    transform:  translate(-50%)
  }
</style> --}}
        <img src="https://i.ibb.co/4pHwgqw/unibox-hotel-logo.png" alt="unibox-hotel-logo" border="0" style="position: absolute; top: 35%; left: 50%; transform:  translate(-50%); opacity: .2">


        <div class="card-body">
         <div class="panel mb-0 ">

          <div class="row">
            <div class="col-md-12 text-right">
              <h4 class="">Uni Box Hotel</h4>
              <h5 class="">Date: {{ $coupondata->created_at->format('d / m / Y') }}</h5>
              <h5 class="text-right">info@uniboxhotel.com</h5>
            </div>            
          </div>

          <div class="row">
           <div class="col-md-6">
            <h4>Dear, {{ $coupondata->fullname }}</h4>
          </div>

        </div>

        


        <!--  <h1>Download Your Cupon Code</h1> -->
        <p class="pt-4 card-body text-justify" style="font-size: 17px;">
          Lorem, @ <strong>{{ $coupondata->hotelname }}</strong> dolor sit amet consectetur adipisicing elit. Facere iure adipisci harum ducimus accusantium, repudiandae aperiam
          voluptatum, id ex ratione omnis reiciendis possimus officiis.
        </p>
        <div>
          <h3 class="text-center"><span class="card d-inline p-2" style="text-transform: uppercase; background: transparent;">{{ $coupondata->couponcode }}</span></h3>



        </div>
        <p class="card-body text-justify"  style="font-size: 17px;">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi vitae, tenetur quidem eum aliquid vel labore sint placeat
          ad deserunt consectetur fugit ullam. Eius unde neque ducimus obcaecati ipsum quos vero totam recusandae hic
          expedita nemo sit, illum harum. Quisquam impedit ullam itaque facere et ad molestiae quod reprehenderit excepturi!
        </p>


        <strong class="ml-4"> {{ $coupondata->email }}</strong>

        <div class="text-center cupon-download py-5">

         <button type="button" class="btn btn-danger"  onclick="window.print()">Print Now</button>
         <a type="button" class="btn btn-outline-secondary" href="{{ route('filedownload' , $coupondata->user_id) }}">Download</a>

       </div>


       <div class="text-center cupon-download">

        <a href="{{ route('homepage') }}" type="button" class="btn btn-primary">Go to Home Page</a>
        
      </div>



     </div>
   </div>


 </div>
</div>


  <x:notify-messages />
  @notifyJs


<!-- boostrap content -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</body>
</html>