<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>New Booking</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v3.10.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>

  

@yield('content')
<section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-color: grey ">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-12">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      New Booking
                    </h5>
                  </div>
                  <div>
                    
                    
                    <form  method="post" action="{{url('save-student')}}" >
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label class="form-lebel">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Name">
                              @error('name')
                              <div class="alert alert-danger" role="alert">
                                  {{$message}}
                              </div>
                              @enderror
                              </div>
                          <div class="col-md-12 mb-3">
                          <label class="form-lebel">Time</label>
                                <input type="text" class="form-control" name="time" placeholder="Enter Time">
                                @error('name')
                              <div class="alert alert-danger" role="alert">
                                  {{$message}}
                              </div>
                              @enderror
                          </div>
                          <div class="col-md-12 mb-3">
                          <label class="form-lebel">Mahallah</label>
                                <input type="text" class="form-control" name="mahallah" placeholder="Enter Mahallah">
                                @error('name')
                              <div class="alert alert-danger" role="alert">
                                  {{$message}}
                              </div>
                              @enderror
                              </div>
                          <div class="col-md-12 mb-3">
                          <label class="form-lebel">Position</label>
                                <input type="text" class="form-control" name="position" placeholder="Enter Position">
                                @error('name')
                              <div class="alert alert-danger" role="alert">
                                  {{$message}}
                              </div>
                              @enderror
                          </div>
                          <div class="col-md-12 mb-3">
                            <label class="form-lebel">Phone No</label>
                                <input type="text" class="form-control" name="phoneNo" placeholder="Enter Phone no">
                                @error('name')
                              <div class="alert alert-danger" role="alert">
                                  {{$message}}
                              </div>
                              @enderror
                          </div>
                          <div class="col-md-12 text-center">
                            {{-- <button type="submit" class="button button-a button-big button-rouded">Save</button> --}}
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="homepage" class="btn btn-danger">Back</a>
                          </div>
                        </div>
                      </form>

                  </div>
                </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Contact Section -->



  
</body>

</html>