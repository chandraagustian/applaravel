<!DOCTYPE html>
 <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ini halaman home</title>

    <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }} "/>
  <link rel="stylesheet" href="{{ URL::asset('dist/css/bootstrap-material-design.min.css') }} "/>
  <link rel="stylesheet" href="{{ URL::asset('dist/css/ripples.min.css') }} "/>
<style>
      body{
        padding-top: 50px;
        background-color: #ffffff;
      }
    </style>

    <!-- Latest compiled and minified CSS -->

<!-- Optional theme -->

<!-- Latest compiled and minified JavaScript -->
<!--materialdesign-->


    <!--end-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!---->
  <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('dist/js/material.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('dist/js/ripples.min.js') }}"></script>
  <script>
      $.material.init();
    </script>

 
  <script type="text/javascript" src="{{ URL::asset('/js/js/jquery-2.2.4.min.js') }}"></script>


  <body style="padding-top:60px;">   
    
    <!-- Put Navigation bar here  -->
<!--bagian navigation-->
    <div class="navbar navbar-fixed-top navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"/></span>
            <span class="icon-bar"/></span>
            <span class="icon-bar"/></span>
          </button>
          <a href=”#” class = "navbar-brand">Training Bootstrap</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="home.html">Home</a></li>
            <li><a href="profile.html">Profile</a></li>
            <li><a href="contact.htm">Contact</a></li>
          </ul>
        </div>  
      </div>
    </div>
    
    <!--Put Content website here -->
 <!-- Bagian Content -->
  

  <!-- Wrapper for slides -->


<!--start-->
<div class="row">
  <div class="col-xs-6"><h1>Riku</h1><h2>kiranatama</h2><img src="avtr.jpg" size="" width="90px" alt="..." class="img-circle"></div>
  <div class="col-xs-6">
  <table class="table">
  <tr>
    <td>nama</td>
    <td>Riku Kiranatama</td>
   
  </tr>
  <tr>
    <td>tempat tanggal lahir</td>
    <td>Bandung,7 oktober 1989</td>
    
  </tr>
  <tr>
    <td>jenis kelamin</td>
    <td>Pria</td>
   <tr>
    <td>Alamat Domisili</td>
    <td>jl.soekarno Hatta no.104</td>
  </tr>
</table></div>
</div>
<!--end-->

 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   
    <!--jsmaterialdesign-->

 
  </body>
 </html>