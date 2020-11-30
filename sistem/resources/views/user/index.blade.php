
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

<script type="text/javascript" language="javascript">
	$(function() {
		
		/* Start Carousel */
		$('#featured-posts').carouFredSel({
			auto: true,
					prev: '#prev2',
					next: '#next2',
		});
		/* End Carousel */
		
		
		/* Start Orbit Slider */
		$(window).load(function() {
			$('.post-gallery').orbit({
				animation: 'fade',
			});
		});
		/* End Orbit Slider */
			
			
		/* Start Super fish */
		jQuery(document).ready(function(){
			jQuery('ul.sf-menu').superfish({
				delay:         100,
				speed:         'fast',
				speedOut:      'fast',
			});
		});
		/* End Of Super fish */
			
	});
</script>
</head>

<body class="home blog">

	@include('section.header')
	
    <!-- Start Featured Carousel -->
    <div class="container zerogrid">
        <div class="list_carousel">
        <ul id="featured-posts">
        
        
        <li class="first carousel-item">
            <div class="post-margin">
                <h6><a href="#">The Lighthouse Effect</a></h6>
                <span><i class="fa fa-clock-o"></i> December 13, 2013</span>
            </div>
            
            <div class="featured-image">
                <img width="290" height="130" src="{{url('public')}}/img/HighRes-290x130.jpg"  />                
                <div class="post-icon">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-picture-o fa-stack-1x fa-inverse"></i>                    
                    </span>
                </div>
            </div>
                        
            <div class="post-margin">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet auctor ligula. Donec eu</p>
            </div>
        </li>

        <li class="first carousel-item">
            <div class="post-margin">
                <h6><a href="#">BELALANG</a></h6>
                <span><i class="fa fa-clock-o"></i> December 13, 2013</span>
            </div>
            
            <div class="featured-image">
                <img width="290" height="130" src="{{url('public')}}/img/one-more-beer-290x130.png"  />                
                <div class="post-icon">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-play-circle-o fa-stack-1x fa-inverse"></i>                    
                    </span>
                </div>
            </div>
                        
            <div class="post-margin">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet auctor ligula. Donec eu</p>
            </div>
        </li>

        <li class="last carousel-item">
            <div class="post-margin">
                <h6><a href="#">Kucing Garong</a></h6>
                <span><i class="fa fa-clock-o"></i> December 13, 2013</span>
            </div>
            
            <div class="featured-image">
                <img width="290" height="130" src="{{url('public')}}/img/Port_Harbor1-290x130.jpg"  />                
                <div class="post-icon">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>                    
                    </span>
                </div>
            </div>
                        
            <div class="post-margin">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet auctor ligula. Donec eu</p>
            </div>
        </li>

        <li class="first carousel-item">
            <div class="post-margin">
                <h6><a href="#">Underground Volcano</a></h6>
                <span><i class="fa fa-clock-o"></i> December 13, 2013</span>
            </div>
            
        <div class="featured-image">
            <img width="290" height="130" src="{{url('public')}}/img/Timothy-J-Reynolds-2560x14401-290x130.jpg"  />            
                <div class="post-icon">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>                    
                    </span>
                </div>
            </div>
                        
            <div class="post-margin">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet auctor ligula. Donec eu</p>
            </div>
        </li>

        <li class="first carousel-item">
            <div class="post-margin">
                <h6><a href="#">We Are not alone</a></h6>
                <span><i class="fa fa-clock-o"></i> December 13, 2013</span>
            </div>
            
        <div class="featured-image">
            <img width="290" height="130" src="{{url('public')}}/img/UFO1-290x130.jpg"  />                
                <div class="post-icon">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>                    
                    </span>
                </div>
            </div>
                        
        <div class="post-margin">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet auctor ligula. Donec eu</p>
        </div>
        </li>

        <li class="last carousel-item">
            <div class="post-margin">
                <h6><a href="#">Bearing water falls</a></h6>
                <span><i class="fa fa-clock-o"></i> December 13, 2013</span>
            </div>
            
        <div class="featured-image">
            <img width="290" height="130" src="{{url('public')}}/img/Diamantina-Full_Landscape-290x130.jpg"  />                
                <div class="post-icon">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>                    
                    </span>
                </div>
            </div>
                       
        <div class="post-margin">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet auctor ligula. Donec eu</p>
        </div>
        </li>
                
        </ul>
        
        <div class="clear"></div>
            <div class="carousel-controls">
                <a id="prev2" class="prev" href="#"><i class="fa fa-angle-left"></i></a>
                <a id="next2" class="next" href="#"><i class="fa fa-angle-right"></i></a>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <!-- Start Featured Carousel -->
    
    	
    
    <!-- Start Main Container -->
    <div class="container zerogrid">
    
        <!-- Start Posts Container -->
        <div class="col-2-3" id="post-container">
 			<div class="wrap-col">
                 
        	<!-- Start Post Item -->
            <div class="post">
            	<div class="post-margin">
                
                <div class="post-avatar">
                    <div class="avatar-frame"></div>
                    <img alt='' src='http://1.gravatar.com/avatar/16afd22c8bf5c2398b206a76c9316a3c?s=70&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D70&amp;r=G' class='avatar avatar-70 photo' height='70' width='70' />                
                </div>
                
                <h4 class="post-title"><a href="#">Friendly</a></h4>
                	<ul class="post-status">
                    <li><i class="fa fa-clock-o"></i>December 13, 2019</li>
                    <li><i class="fa fa-folder-open-o"></i><a href="#" title="View all posts in Illustration" rel="category">Illustration</a></li>
                    <li><i class="fa fa-comment-o"></i>No Comments</li>
                    </ul>
                    <div class="clear"></div>
                </div>
                
            	<div class="featured-image">
                    <img src="{{url('public')}}/img/Port_Harbor1-610x350.jpg" class="attachment-post-standard "  />          
                        <div class="post-icon">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>
                </div>
                                
            <div class="post-margin">
                <p>
                    
                </p>
            </div>
            
             <ul class="post-social">
             <li><a href="#" target="_blank">
             <i class="fa fa-facebook"></i></a>
             </li>
                        
             <li>
             <a href="#" target="_blank">
             <i class="fa fa-twitter"></i></a>
             </li>
                        
             <li>
             <a href="#" target="_blank">
             <i class="fa fa-google-plus"></i></a>
             </li>
            
            <li>
            <a href="#" target="_blank">
            <i class="fa fa-linkedin"></i></a>
            </li>
            
            <li>
            <a href="#" class="readmore">Read More <i class="fa fa-arrow-circle-o-right"></i></a>
            </li>
            </ul>
            
            <div class="clear"></div>
            </div>
            <!-- End Post Item -->
            
                 
        	<!-- Start Post Item -->
            <div class="post">
            	<div class="post-margin">
                
                <div class="post-avatar">
                    <div class="avatar-frame"></div>
                    <img alt='' src='http://1.gravatar.com/avatar/16afd22c8bf5c2398b206a76c9316a3c?s=70&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D70&amp;r=G' class='avatar avatar-70 photo' height='70' width='70' />                
                </div>
                
                <h4 class="post-title"><a href="#">Friendly</a></h4>
                	<ul class="post-status">
                        <li><i class="fa fa-clock-o"></i>December 13, 2013</li>
                        <li><i class="fa fa-folder-open-o"></i><a href="#" title="View all posts in Illustration" rel="category">Illustration</a></li>
                        <li><i class="fa fa-comment-o"></i>No Comments</li>
                    </ul>
                    <div class="clear"></div>
                </div>
                
            	<div class="featured-image">
                    <iframe src="//player.vimeo.com/video/50522981?title=0&amp;byline=0&amp;portrait=0&amp;color=2ecc71" width="450" height="244" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>                    
                        <div class="post-icon">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-play-circle-o fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>
                </div>
                                
            <div class="post-margin">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet auctor ligula. Donec eu placerat lacus, pellentesque tincidunt felis. Aliquam dictum cursus elit, et sagittis nibh tincidunt quis. Vestibulum leo dui, ullamcorper quis erat nec, accumsan imperdiet ligula. Maecenas ut dui sed arcu sodales consequat. Nulla et est ac lacus congue volutpat. Aliquam vehicula tincidunt sem eget cursus. Nam sed mollis diam. Pellentesque id felis ut diam dignissim egestas id non ipsum.

Ut id magna eu eros vehicula sollicitudin at et odio. Mauris consectetur tortor in mauris aliquet feugiat. Etiam</p>
            </div>
            
        <ul class="post-social">
            <li><a href="#" target="_blank">
                <i class="fa fa-facebook"></i></a>
             </li>
                        
             <li>
                <a href="#" target="_blank">
                <i class="fa fa-twitter"></i></a>
             </li>
                        
             <li>
                <a href="#" target="_blank">
                <i class="fa fa-google-plus"></i></a>
             </li>
            
            <li>
                <a href="#" target="_blank">
                <i class="fa fa-linkedin"></i></a>
            </li>
            
            <li>
                <a href="#" class="readmore">Read More <i class="fa fa-arrow-circle-o-right"></i></a>
            </li>
        </ul>
            
        <div class="clear"></div>
            </div>
            <!-- End Post Item -->
            
                 
        	<!-- Start Post Item -->
            <div class="post">
            	<div class="post-margin">
                
                <div class="post-avatar">
                    <div class="avatar-frame"></div>
                    <img alt='' src='http://1.gravatar.com/avatar/16afd22c8bf5c2398b206a76c9316a3c?s=70&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D70&amp;r=G' class='avatar avatar-70 photo' height='70' width='70' />                
                </div>
                
                <h4 class="post-title"><a href="#">Friendly</a></h4>
                	<ul class="post-status">
                        <li><i class="fa fa-clock-o"></i>December 13, 2013</li>
                        <li><i class="fa fa-folder-open-o"></i><a href="#" title="View all posts in Illustration" rel="category">Illustration</a></li>
                        <li><i class="fa fa-comment-o"></i>No Comments</li>
                    </ul>
                    <div class="clear"></div>
                </div>
                
            	<div class="featured-image">
                    <img src="{{url('public')}}/img/Port_Harbor1-610x350.jpg" class="attachment-post-standard "  />                    
                    <div class="post-icon">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                </div>
                                
            <div class="post-margin">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet auctor ligula. Donec eu placerat lacus, pellentesque tincidunt felis. Aliquam dictum cursus elit, et sagittis nibh tincidunt quis. Vestibulum leo dui, ullamcorper quis erat nec, accumsan imperdiet ligula. Maecenas ut dui sed arcu sodales consequat. Nulla et est ac lacus congue volutpat. Aliquam vehicula tincidunt sem eget cursus. Nam sed mollis diam. Pellentesque id felis ut diam dignissim egestas id non ipsum.

Ut id magna eu eros vehicula sollicitudin at et odio. Mauris consectetur tortor in mauris aliquet feugiat. Etiam</p>
            </div>
            
             <ul class="post-social">
                 <li><a href="#" target="_blank">
                    <i class="fa fa-facebook"></i></a>
                 </li>
                        
                 <li>
                     <a href="#" target="_blank">
                     <i class="fa fa-twitter"></i></a>
                 </li>
                            
                 <li>
                     <a href="#" target="_blank">
                     <i class="fa fa-google-plus"></i></a>
                 </li>
                
                <li>
                    <a href="#" target="_blank">
                    <i class="fa fa-linkedin"></i></a>
                </li>
                
                <li>
                    <a href="#" class="readmore">Read More <i class="fa fa-arrow-circle-o-right"></i></a>
                </li>
            </ul>
            
            <div class="clear"></div>
            </div>
            <!-- End Post Item -->
            
                        
        <!-- Start Pagination -->
        <div class="spacing-20"></div><ul class="pagination"><li class='current'><a href=''>1</a></li><li><a href='http://demo.themesmarts.com/euclid/?paged=2'>2</a></li><li><a href='http://demo.themesmarts.com/euclid/?paged=3'>3</a></li><li><a href='http://demo.themesmarts.com/euclid/?paged=4'>4</a></li></ul>
        <!-- End Pagination -->
            
        <div class="clear"></div>
		</div>
        </div>
        <!-- End Posts Container -->
		@include('section.sidebar')
    
    <div class="clear"></div>
    </div>
	<!-- End Main Container -->
    @include('section.footer')


</body>

</html>