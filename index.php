<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>M&M Crosstown Delivery</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]--z

</head>

<body>

    <div class="brand">Business Casual</div>
    <div class="address-bar">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">M&M Crosstown</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#top">Home</a>
                    </li>
                    <li>
                        <a href="#services">Services</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <img class="img-responsive img-border img-full" src="img/img-1.jpg" alt="">
                    </div>
                    <br><br>
                    <h1 class="brand-name">M&M Crosstown</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <i> "You Call, We Haul"</i>
                    </h2>
                </div>
            </div>
        </div>

        <div id="services" class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h1 class=" text-center">
                        <strong>Services</strong>
                    </h2>
                    <hr>
                    
                    <img class="img-responsive img-border img-full" src="img/img-2.jpg" alt="">
                    <hr class="visible-xs">
                    <br>
                    <p> Here at M&M Crosstown , we offer a variety of sevices including : </p>
                    <ul>
                        <li>Moving</li>
                        <li>Furniture Delivery </li>
                        <li>Storeage packing and unpacking </li>
                        <li>Furniture assembly (We do house calls!)</li>
                        <li>Furnirue Haul-off</li>
                    </ul>
                    
                    <p>
                </div>
            </div>
        </div>

        <div id="contact"class="row ">
            <div class="box">
                <div class="col-lg-12">
                   
                    <div class="item contact padding-top-0 padding-bottom-0" id="contact1">
    	
    		<div class="wrapper grey">
    	
    			<div class="container">
    		
    				<div class="col-md-5">
    			
    					<h3 class="margin-bottom-40 editContent">Get a FREE Quote</h3>
    				
                                        <form role="form" action="send_mail.php">
    				
    						<div class="form-group">
    				    		<input type="text" class="form-control input-lg" id="name" name="name" placeholder="Your name *">
    				  		</div>
    				  	    				  	
    				  		<div class="form-group">
    				  			<input type="email" class="form-control input-lg" id="email" name="email" placeholder="Your email *">
    				  		</div>
    				  	
    				  		<div class="form-group">
    				  			<input type="phone" class="form-control input-lg" id="phone" name="phone" placeholder="Your phone number">
    				  		</div>
    				  		
    				  		<div class="form-group">
    				  			<textarea class="form-control" rows="4" placeholder="Add comment..."></textarea>
    				  		</div>
    				  
    				    	
    				  	
    				  		<hr>
    				  	
    				  		<button type="submit" class="btn btn-primary btn-embossed btn-lg btn-wide">Submit</button>
    				
    					</form>
    			
    				</div><!-- /.col-md-5 -->
    			
    				<div class="col-md-6 col-md-offset-1">
	    				
	    				<div class="editContent">
    					<h1>Contact Us:</h1>
    				
    					<p class="text-light margin-bottom-40">
    						Best Times to reach us are 9am- 8pm.
                                                <br>
                                                We are avaibile everyday.
    					</p>
	    				</div><!-- /.editContent -->
    				
    					
    				
    					<p>
    						<b class="chead"><span class="fa fa-phone"></span> PHONE</b><br>
    						<span class="editContent">615-812-2229</span>
    					</p>
    				
    					<p>
    						<b class="chead"><span class="fa fa-envelope"></span> EMAIL</b><br>
    						<a href="#" class="editContent">info@something.com</a>
    					</p>
    			
    				</div><!-- /.col-md-6 -->
    		
    			</div><!-- /.container -->
    		
    		</div><!-- /.wrapper -->
    	
    	</div>
                
                    
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; M&M Crosstown 2014</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
   //  $('.carousel').carousel({
   //     interval: 5000 //changes the speed
   // })
    </script>

</body>

</html>
