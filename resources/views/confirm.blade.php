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
        <title>Confirm Order</title>
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
              color: #ffffff;
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
                  <img src="https://i.pinimg.com/564x/ed/c8/76/edc876ae8ff93c292a5e986208af129c.jpg"  style="width:100%;">
                  <div class="carousel-caption">
                    <h2>Happy Every Day</h2>
                    <p>Life is always so much fun!</p>
                  </div>
                </div>
          
                <div class="item">
                  <img src="https://i.pinimg.com/564x/43/be/36/43be36d2bdcdbf93b47ce280ef32525a.jpg"  style="width:100%;">
                  <div class="carousel-caption">
                    <h2>Start your day with smile and coffee!</h2>
                    <p>Thank you, Coffee!</p>
                  </div>
                </div>
              
                <div class="item">
                  <img src="https://i.pinimg.com/564x/a7/76/2d/a7762dfe293957cdd80d40574373560a.jpg" style="width:100%;">
                  <div class="carousel-caption">
                    <h2>A great cup of coffee</h2>
                    <p>We love the Big Cup!</p>
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

    <div class="text-center">
        <br>
        <h1>Confirm</h1>
        <div class="container text-center">
          @foreach($confirm_coffee as $coffee)
          <h3><a href="{{route('order')}}?id={{$coffee->id}}" class="btn btn-default btn-lg">
            {{$coffee->name}}
            {{$coffee->price}}
            {{$coffee->Date}}
            
            </a></h3>
          @endforeach
          </div>
          
        <a href="http://localhost/coffeeshop/public/menu" class="btn btn-default btn-lg" > Back to menu</a>
    </div>
    </body>
</html>
