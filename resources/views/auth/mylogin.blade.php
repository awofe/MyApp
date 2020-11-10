<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mylogin</title>
     <!-- Scripts -->
    
    <!-- Styles -->
    <link href="{{ asset('css/app1.css') }}" rel="stylesheet">
</head>
<body>
    
    <div class="container" >
        <div class="c1">
           
           <div class="c11">
            <h1 class="mainhead">WELCOME TO MY PAGE</h1>
              <h2 class="mainhead">PICK YOUR SPOT</h2>
              <p class="mainp">Just click the buttons below to toggle between SignIn & SignUp</p>
           </div>
           <div id="left"><h1 class="s1class"><span>SIGN</span><span class="su">IN</span>
           </h1></div>
           <div id="right"><h1 class="s2class"><span>SIGN</span><span class="su">UP</span></h1></div>
        </div>
        <div class="c2">
           <form class="signup" method="POST" action="{{ route('register') }}">
           
              <h1 class="signup1">SIGN UP</h1>
              <br><br><br><br>
              <div>
              <input id="name" type="text"  @error('name') is-invalid @enderror name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name*" class="username"/>
              @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
            <div>
            <input id="email" type="email"  @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email*" class="username"/>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>   
     <div>
            <input id="password" type="password"  @error('password') is-invalid @enderror name="password" required autocomplete="new-password" placeholder="Password*" class="username"/>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div>
        <input id="password-confirm" type="password"  @error('password') is-invalid @enderror name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password*" class="username"/>
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
         <button type="submit" class="btn btn-primary">
        {{ __('Register') }}
            </button>
           </form>
           <form class="signin" method="POST" action="{{ route('login') }}">
            @csrf
              <h1 class="signup1">SIGN IN</h1>
              <br><br><br><br>
              <div class="col-md-6">
              <input id="email" type="email" @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="username"/>
              @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
              </div>    
              <div class="col-md-6">
                <input id="password" type="password"  @error('password') is-invalid @enderror name="password" required autocomplete="current-password" class="username"/>

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
              
                 <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>
              
              <br><br><br><br>
              <a href=""><p class="signup2">Forget Password?</p></a>
           </form>
           
        </div>
     </div>

     <script
     src="https://code.jquery.com/jquery-3.4.1.min.js"
     integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
     crossorigin="anonymous"></script>
     <script src="{{ asset('js/app1.js') }}" ></script>
</body>
</html>

