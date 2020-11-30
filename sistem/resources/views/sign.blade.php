
<!DOCTYPE html lang="en-US">
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Friendly</title>

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
            
        <!-- Start Sign -->

          <div id="card">
            <div id="card-content">
              <div id="card-title">
                <h2>LOGIN</h2>
                <div class="underline-title"></div>
              </div>
              <form action="{{url('base')}}" method="post" class="form">
                <label for="user-email" style="padding-top:13px">
                    &nbsp;Email
                  </label>
                <input id="user-email" class="form-content" type="email" name="email" autocomplete="on" required />
                <div class="form-border"></div>
                <label for="user-password" style="padding-top:22px">&nbsp;Password
                  </label>
                <input id="user-password" class="form-content" type="password" name="password" required />
                <div class="form-border"></div>
                <a href="#">
                  <legend id="forgot-pass">Forgot password?</legend>
                </a>
                <input id="submit-btn" type="submit" name="submit" value="LOGIN" />
                <a href="{{url('/create')}}" id="signup">Don't have account yet?</a>
              </form>
            </div>
          </div>

          <!-- End Sign -->

           <!-- CSS -->

    <style type="text/css">
      a {
  text-decoration: none;
}
body {
  background: -webkit-linear-gradient(bottom, #2dbd6e, #a6f77b);
  background-repeat: no-repeat;
}
label {
  font-family: "Raleway", sans-serif;
  font-size: 11pt;
}
#forgot-pass {
  color: #2dbd6e;
  font-family: "Raleway", sans-serif;
  font-size: 10pt;
  margin-top: 3px;
  text-align: right;
}
#card {
  background: #fbfbfb;
  border-radius: 8px;
  box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
  height: 410px;
  margin: 6rem auto 8.1rem auto;
  width: 329px;
}
#card-content {
  padding: 12px 44px;
}
#card-title {
  font-family: "Raleway Thin", sans-serif;
  letter-spacing: 4px;
  padding-bottom: 23px;
  padding-top: 13px;
  text-align: center;
}
#signup {
  color: #2dbd6e;
  font-family: "Raleway", sans-serif;
  font-size: 10pt;
  margin-top: 16px;
  text-align: center;
}
#submit-btn {
  background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
  border: none;
  border-radius: 21px;
  box-shadow: 0px 1px 8px #24c64f;
  cursor: pointer;
  color: white;
  font-family: "Raleway SemiBold", sans-serif;
  height: 42.3px;
  margin: 0 auto;
  margin-top: 50px;
  transition: 0.25s;
  width: 153px;
}
#submit-btn:hover {
  box-shadow: 0px 1px 18px #24c64f;
}
.form {
  align-items: left;
  display: flex;
  flex-direction: column;
}
.form-border {
  background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
  height: 1px;
  width: 100%;
}
.form-content {
  background: #fbfbfb;
  border: none;
  outline: none;
  padding-top: 14px;
}
.underline-title {
  background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
  height: 2px;
  margin: -1.1rem auto 0 auto;
  width: 89px;
}
    </style>

    <!-- Akhir CSS -->
    
    
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