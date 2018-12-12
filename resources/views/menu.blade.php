<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="template/linearicons.css">
			<link rel="stylesheet" href="template/font-awesome.min.css">
			<!-- <link rel="stylesheet" href="template/bootstrap.css"> -->
			<link rel="stylesheet" href="template/magnific-popup.css">
			<link rel="stylesheet" href="template/nice-select.css">			
			<link rel="stylesheet" href="template/animate.min.css">
			<link rel="stylesheet" href="template/owl.carousel.css">
			<link rel="stylesheet" href="template/main.css">
    <title>Mook Coffee | Thailand</title>
    <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .bg-1 { 
      background-color: #bf8040; /* brown */
      color: #555555;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  </style>
    </head>
    <body>
    <!-- First Container -->
    <div class="container">
            
            <div >
                    <div class="container text-center">
                    <br>
                    <h1>{{$name}}</h1>
                    <img src="https://i.pinimg.com/564x/16/6e/d6/166ed60319d51a75561a22fbed74f4a0.jpg" alt="coffee" class="img-circle"  width="250" height="200">
                    <p>A COFFEE A DAY KEEPS THE GRUMPY AWAY</p>
                </div>
                </div>
            
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>
          
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
          
                <div class="item active">
                  <img src="https://i.pinimg.com/564x/53/53/b8/5353b88c1ddb61f89eb1aea5bfa3112c.jpg" alt="place1" style="width:100%;">
                  <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>LA is always so much fun!</p>
                  </div>
                </div>
          
                <div class="item">
                  <img src="https://i.pinimg.com/564x/62/63/f7/6263f78e019b1c73b7739b05ea227df8.jpg" alt="Chicago" style="width:100%;">
                  <div class="carousel-caption">
                    <h3>Chicago</h3>
                    <p>Thank you, Chicago!</p>
                  </div>
                </div>
              
                <div class="item">
                  <img src="https://i.pinimg.com/564x/dc/b8/ab/dcb8abf19c5396aa5a244ca656a5cfda.jpg" alt="New York" style="width:100%;">
                  <div class="carousel-caption">
                    <h3>New York</h3>
                    <p>We love the Big Apple!</p>
                  </div>
                </div>
            
              </div>
          
              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
    
    <!-- start banner Area -->
			
            <div >
                <div class="container text-center">
                <br>
                <h3><p>A COFFEE A DAY KEEPS THE GRUMPY AWAY</p></h3>
            </div>
            </div>
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-start">
						 
                           											
					</div>
				</div>
			
			<!-- End banner Area -->	

    <div class="text-center">
        <h2>OUR MENU</h2>  				
    </div>    
        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
       
        <div class="container text-center">
        @foreach($coffees as $coffee)
        <h3><a href="{{route('order')}}" class="btn btn-default btn-lg">
            {{$coffee->name}}
            {{$coffee->price}}
            {{$coffee->type}}
          
          </a></h3>
        @endforeach
        </div>

        
    
    </body>
</html>
