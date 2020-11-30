
<!DOCTYPE html lang="en-US">
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Friendly</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel='stylesheet' id='reset-css'  href="{{url('public')}}/css/reset.css" type='text/css' media='all' />
<link rel='stylesheet' id='superfish-css'  href="{{url('public')}}/css/superfish.css" type='text/css' media='all' />
<link rel='stylesheet' id='fontawsome-css'  href="{{url('public')}}/css/font-awsome/css/font-awesome.css" type='text/css' media='all' />
<link rel='stylesheet' id='orbit-css-css'  href="{{url('public')}}/css/orbit.css" type='text/css' media='all' />
<link rel='stylesheet' id='style-css'  href="{{url('public')}}/css/style.css" type='text/css' media='all' />
<link rel='stylesheet' id='color-scheme-css'  href="{{url('public')}}/css/color/green.css" type='text/css' media='all' />
<link rel="stylesheet" href="{{url('public')}}/css/zerogrid.css" type="text/css" media="screen">
<link rel="stylesheet" href="{{url('public')}}/css/responsive.css" type="text/css" media="screen">
<script type='text/javascript' src="{{url('public')}}/js/jquery.js"></script>
<script type='text/javascript' src="{{url('public')}}/js/jquery-migrate.min.js"></script>
<script type='text/javascript' src="{{url('public')}}/js/jquery-1.10.2.min.js"></script>
<script type='text/javascript' src="{{url('public')}}/js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script type='text/javascript' src="{{url('public')}}/js/hoverIntent.js"></script>
<script type='text/javascript' src="{{url('public')}}/js/superfish.js"></script>
<script type='text/javascript' src="{{url('public')}}/js/orbit.min.js"></script>
 <script src="{{url('public')}}/js/css3-mediaqueries.js"></script>


</head>

<body>   
            @include('section.header')
    <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block"></div>
                <div class="col-lg-6">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">LOGIN BLOG ADMIN</h1>
                    </div>
                    @include('utils.notif')
                    <form class="user" action="{{url('admin')}}" method="post">
                      @csrf
                      <div class="form-group">
                        <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                      </div>
                      <div class="form-group">
                        <div class="custom-control custom-checkbox small">
                          <input type="checkbox" class="custom-control-input" id="customCheck">
                          <label class="custom-control-label" for="customCheck">Remember Me</label>
                        </div>
                      </div>
                      <input type="submit" class="btn btn-primary btn-user btn-block" value="LOGIN">
                      <hr>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

      </div>

    </div>        
  
    
    
    <!-- Start Footer -->
    <div class="spacing-30"></div>
    <div class="container zerogrid">
        <div id="footer-container" class="col-full">
        <div class="wrap-col">  
            <!-- Footer Copyright -->
            <p>Copyrigh &copy; 2020 Tio Akbar. All Rights Reserved.</p>
            <!-- End Footer Copyright -->
            
            <!-- Footer Logo -->
      <img src="{{url('public')}}/images/footer-logo.png" id="footer-logo" />
            <!-- End Footer Logo -->
        
        <div class="clear"></div>
    </div>
        </div>
    </div>
    <!-- End Footer -->


</body>

</html>