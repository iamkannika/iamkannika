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
          
            <form action="http://localhost/coffeeshop/public/admin" method="post">
              @csrf
                <div class="form-group">
                  <label>Name</label>
                  <input name="name" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>Price</label>
                  <input name="price" type="text" class="form-control" placeholder="">
                </div>

                <div class="form-group">
                  <label>Hot/Cold</label>
                  <input name="type" type="text" class="form-control" placeholder="">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
               
               
              </div>
          
              <!-- Left and right controls -->
              
            
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
						<div class="banner-content col-lg-7">
							<h6 class="text-white text-uppercase">Now you can feel the Energy</h6>
						</div> 
                           											
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
            {{$coffee->name}} - {{$coffee->type}}
          </a></h3>
        @endforeach
        </div>

        <div
            class="ProductListElement__cup-size"
            style="width: 69px">&nbsp;</div>
            <span class="ProductListElement__price">&nbsp;</span>
            <div
            class="ProductListElement__add-to-basket"
            style="width: 255px">&nbsp;</div>
        </div>
        <div class="ProductListElement__intensity">
        Intensity</div>
    
    </body>
</html>
