
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

<body class="home blog">   
       @include('section.header')
            
       <!-- Begin Page Content -->
      <div class="container zerogrid">
        <div class="row">
          <div class="col-md-12 mt-5">
            <div class="card">
              <div class="card-header">
                DAFTAR
              </div>
               @include('utils.notif')
                <div class="card-body">
                  <form action="{{url('user')}}" method="post">
                    @csrf
                  <div class="form-group">
                    <label for="" class="control-label">Username </label>
                    <input type="text" class="form-control" name="username">
                  </div>

                  <div class="form-group">
                    <label for="" class="control-label">Email </label>
                    <input type="text" class="form-control" name="email">
                  </div>

                  <div class="form-group">
                    <label for="" class="control-label">Nama </label>
                    <input type="text" class="form-control" name="nama">
                  </div>

                  <div class="form-group">
                    <label for="" class="control-label">Password </label>
                    <input type="password" class="form-control" name="password">
                  </div>
                  
                  <button class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
                </form>
                </div>
              </div>
            </div>    
          </div>
        </div>
      </div>
      <!-- End of Content Wrapper -->        

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