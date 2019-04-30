<!DOCTYPE html>
<html lang="en">
    <!-- uso yield para inyectar contenido en welcome.blade.php; main es mi plantilla -->
<head>
    <meta charset="UTF-8">
    <title> @yield('title','MyMusic: Login') </title>
   
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
   
</head>
<body>

        @include('layouts.app')

    <div class="container">
        @include('flash::message')

         <!-- Mensaje flash  --> 
        @if ($errors->any())
        <div class="alert  alert-danger" role="alert">
                <ul>
                        @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                        @endforeach
                </ul>
        </div>
        @endif

        @yield('content')  
    </div>

    <footer class="fixed-bottom">
        @include('template.footer.footer')
    </footer>
   

    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>

    
</body>
</html>