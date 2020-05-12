<!DOCTYPE html>
<html lang="en">
<head>
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>
<body>
    <div class="header">
        @section('header')
        <nav class="navbar navbar-expand-lg navbar-inverse bg-dark">
            <a class="navbar-brand" href="#">Laravel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="/create">Create</a>
                <a class="nav-item nav-link" href="/userlist">Userlist</a>
                <a class="nav-item nav-link" href="#"></a>
              </div>
            </div>
          </nav>
        @show
    </div>
    
    <div class="content">
        @section('content')
        
        @show
    </div>
    
    <div class="footer">
        @section('footer')
        <h1>Footer Section</h1>
        @show
    </div>
</body>
</html>