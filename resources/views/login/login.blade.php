@extends('layout')
@section('content')
<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;1,500&display=swap" rel="stylesheet">
    <title>login</title>
    <link rel="stylesheet" href="{{asset('assets/css/style1.css')}}">
  </head>
  <body>
    <form action="{{route('login.auth')}}" method="POST">
      @csrf
    <section class="login d-flex">
      
                  
        <div class="login-center w-100 h-100">
            <div class="row justify-content-center align-items-center">
                <div class="col-4">
                    @if(Session::get('notAllowed'))
                    <div class="alert alert-danger">
                      {{session('notAllowed')}}
                    </div>
                    @endif
                    
                    @if($errors->any())
                    <div class="alert alert-danger">
                      <ul>@foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
          @endif
                   <div class="card">
                    <div class="header"> 
                      <h1>Login</h1>
                      <p>Masuk ke Akun PPDB-mu</p>
                  </div>
                    <div class="username mb-3">
                      <label class="sr-only" for="username">Email</label>
                      <input id="username" name="email" type="text" class="form-control username" >
                    </div>
                    <div class="password mb-3">
                      <label class="sr-only" for="signin-password">Password</label>
                      <input id="signin-password" name="password" type="password" class="form-control signin-password">
                    </div>
                    <div class="pt-1 mb-4 d-flex">
                      <button type="submit" class="btn btn-dark w-50 theme-btn mx-auto">Login</button>
                      <a href="/" class="btn btn-dark w-40 theme-btn mx-auto">Back</a>
                      <br>                    
                    </div>
                   </div>
                </div>
            </div>
        </div>
   

        </form>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    -->
  </body>
</html>