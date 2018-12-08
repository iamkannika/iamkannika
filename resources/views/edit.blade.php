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
    <title>Edit Mook Coffee | Thailand</title>
    
  </head>
   
    <body>
    @section('content')
    <div class="container">
      <h3 align ="center">แก้ไขข้อมูล</h3><br>
      
      
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

          <input type="submit" class="btn btn-primary" value="save"/>
        </form>
        <a href="http://localhost/coffeeshop/public/admin" class="btn btn-default btn-lg" > Back to admin</a>
    </body>
</html>
