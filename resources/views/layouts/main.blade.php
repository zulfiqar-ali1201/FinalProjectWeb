<!DOCTYPE html>
<html lang="en">
    <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title>ECIC</title>
     <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >
     <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
     <link rel="stylesheet" type="text/css" href="{{ url('/css/fixed.css') }}" />
     <link rel="stylesheet" type="text/css" href="{{url('/css/lightbox.min.css')}}">
     <link rel="title icon" type="img/png" href={{URL::asset('/images/logo-icon.png')}}>
     <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
     <script src="{{url('/js/lightbox-plus-jquery.min.js')}}"></script>
     <script src="{{url('/js/jquery.filterizr.min.js')}}"></script>
    
    </head>
    <body data-spy="scroll" data-target="#navbarResponsive">
        <div id="home">
            @yield('top')
            
         
        </div>
       
       
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script type="text/javascript">
          
          var filterizd = $('.filtr-container').filterizr({
     
        
          });
             
             
                       // Add active class to the current button (highlight it)
               var header = document.getElementById("btn_controller");
               var btns = header.getElementsByClassName("btn");
               for (var i = 0; i < btns.length; i++) {
                 btns[i].addEventListener("click", function() {
                 var current = document.getElementsByClassName("active");
                 current[0].className = current[0].className.replace(" active", "");
                 this.className += " active";
                 });
   }
         </script>
         <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
    </body>
</html>
