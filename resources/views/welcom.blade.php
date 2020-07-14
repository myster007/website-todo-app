
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>#1 Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> -->
<link href="{{ asset('css/welcom.css') }}" rel="stylesheet">
</head>
<body>

<!-- <div id="example"></div>
 <script src="{{asset('js/app.js')}}">  </script>  -->


    <header class="header">

  <nav class="navigation">
      <section class="logo"></section>

      <section class="navigation__icon">
        <span class="topBar"></span>
        <span class="middleBar"></span>
        <span class="bottomBar"></span>
      </section>
      

      <ul class="navigation__ul">
        <li><a href="/">HOME</a></li>
        <li><a href="/about">ABOUT</a></li>
        <li><a href="home">TODO APP</a></li>
        <li><a href="/page">PAGE</a></li>
      </ul>
  </nav>

<div class="animation-area">
  <ul class="box-area">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>

  <div class="container">
    <p>Coding is <span class="typed-text"></span><span class="cursor">&nbsp;</span></p>  
  </div>
  <script src="js/type.js"></script>
 
</div>





</header>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script>
    
        
   
     $(function() {
   $(".navigation__icon").click(function() {
     $(".navigation").toggleClass('navigation-open');
   });
 });
  

    
    </script>
    
</body>
</html>