<html>
    <head>
        
            <title>Confirm Order</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #FFB6C1;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 400;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            div {
                width: 1800px;
                height: 900px;
                background-color: #FFF8DC;
                animation-name: example;
                animation-duration: 10s;
            }


            /* Standard syntax */
            @keyframes example {
            from {background-color: Snow;}
            50%{background-color: #755139;}
            to {background-color: #FFF8DC;}
}
  }
            
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    </head>
    <body>
    <!-- First Container -->
    <div class="container">
            
            <div >
                    <div class="container text-center">
                    <br>
                    <h1>{{$name}}</h1>
                    
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
    <div class="text-center">
        <br>
        <h1>Confirm</h1>
        <a href="http://localhost/coffeeshop/public/menu" class="btn btn-default btn-lg" > Back to menu</a>
    </div>
    </body>
</html>
