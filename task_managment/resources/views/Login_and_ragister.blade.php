<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <link rel="stylesheet" href="{{ url('/')}}/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    
</head>
<body>

  <div class="container mt-5 mb-5">
    <div >
        <div class="row">
          <div class="col-3"></div>
          <div class="col-6">
            <!-- Pills navs -->
            <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link show @if (\Session::has('page'))  @else active @endif" id="tab-login" data-mdb-toggle="pill" href="javascrip:void(0)" href1="#pills-login" role="tab"
                aria-controls="pills-login" aria-selected="true">Login</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link @if (\Session::has('page')) active @else  @endif" id="tab-register" data-mdb-toggle="pill" href="javascript:void(0)" href1="#pills-register" role="tab"
                aria-controls="pills-register" aria-selected="false">Register</a>
              </li>
            </ul>
            <!-- Pills navs -->
            
            <!-- Pills content -->
            <div class="tab-content">
              <div class="tab-pane " id="pills-login"  aria-labelledby="tab-login" style="display: @if (\Session::has('page')) none @else block @endif ">
                <form action="{{ url('login') }}" method="post" id="login_form">

                  <div class="text-center mb-3">
                    <p>Sign in with:</p>
                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="fab fa-facebook-f"></i>
                    </button>
                    
                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="fab fa-google"></i>
                    </button>
                    
                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="fab fa-twitter"></i>
                    </button>
                    
                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="fab fa-github"></i>
                    </button>
                  </div>
            
                  {{-- <p class="text-center">or:</p> --}}
            
                  {{ csrf_field() }}
                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <label class="form-label" for="loginName">Email</label>
                    <input type="email" id="loginName" class="form-control" name="email" placeholder="email@gmail.com...."/>
                  </div>
            
                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <label class="form-label" for="loginPassword">Password</label>
                    <input type="password" id="loginPassword" class="form-control" name="password" placeholder="Enter password ...." />
                  </div>
                  
                  <!-- 2 column grid layout -->
                  <div class="row mb-4">
                    {{-- <div class="col-md-6 d-flex justify-content-center">
                      <!-- Checkbox -->
                      <div class="form-check mb-3 mb-md-0">
                        <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                        <label class="form-check-label" for="loginCheck"> Remember me </label>
                      </div>
                    </div> --}}
                    
                    {{-- <div class="col-md-6 d-flex justify-content-center">
                      <!-- Simple link -->
                      <a href="#!">Forgot password?</a>
                    </div> --}}
                  </div>
            
                  <!-- Submit button -->
                  <button type="button"  id='login_btn' class="btn btn-primary btn-block mb-4">Sign in</button>
                  <button type="submit"  id='login_submit' style="display: none" >Sign in</button>
                  
                  <!-- Register buttons -->
                  <div class="text-center">
                    <p>Not a member? <a href="#!">Register</a></p>
                  </div>
                </form>
              </div>
              <div class="tab-pane" id="pills-register"  aria-labelledby="tab-register" 
              style="
                  display:@if (\Session::has('page') && \Session::get('page') == 'ragistration') block @else none @endif
              ">
                <form method="post" action="{{ url('ragistration') }}" id="ragister_form">
                  {{ csrf_field() }}
                  <div class="text-center mb-3">
                    <p>Sign up with:</p>
                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="fab fa-facebook-f"></i>
                    </button>
            
                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="fab fa-google"></i>
                    </button>
            
                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="fab fa-twitter"></i>
                    </button>
                    
                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="fab fa-github"></i>
                    </button>
                  </div>
            
                  {{-- <p class="text-center">or:</p> --}}
            
                  <!-- Name input -->
                  <div class="form-outline mb-4">
                    <label class="form-label" for="registerName">Name</label>
                    <input type="text" id="registerName" value="{{ old('name') }}" name="name" placeholder="Enter Name ...." class="form-control @error('name') is-invalid @enderror" />
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
            
                  <!-- Username input -->
                  <div class="form-outline mb-4">
                    <label class="form-label" for="registerUsername">Mobile No</label>
                    <input type="text" id="registerUsername" value="{{ old('mobile') }}" placeholder="Enter Mobile No ...." name="mobile" class="form-control @error('mobile') is-invalid @enderror" />
                    @error('mobile')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  
                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <label class="form-label" for="registerEmail">Email</label>
                    <input type="email" id="registerEmail" name="email" value="{{ old('email') }}" placeholder="Enter Email ...." class="form-control @error('email') is-invalid @enderror" />
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  
                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <label class="form-label" for="registerPassword">Password</label>
                    <input type="password" id="registerPassword" name="password" placeholder="Enter password" class="form-control @error('password') is-invalid @enderror" />
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  
                  <!-- Repeat Password input -->
                  <div class="form-outline mb-4">
                    <label class="form-label" for="registerRepeatPassword">Confirm password</label>
                    <input type="password" id="registerRepeatPassword" name="password_confirmation" placeholder="Please confirm password" class="form-control @error('password_confirmation') is-invalid @enderror" />
                    @error('password_confirmation')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    
                  </div>
            
                  <!-- Checkbox -->
                  {{-- <div class="form-check d-flex justify-content-center mb-4">
                    <input class="mr-1" type="checkbox" value="" id="registerCheck" checked
                    aria-describedby="registerCheckHelpText" />
                    <label class="form-check-label" for="registerCheck">
                      I have read and agree to the terms
                    </label>
                  </div> --}}
            
                  <!-- Submit button -->
                  <button type="submit" class="btn btn-primary btn-block mb-3">Sign in</button>
                </form>
              </div>
              <div class="col-3"></div>
            </div>
            <div class="container" id="loader" style="display: none">
              <div class="row">
                <div class="col-12">
                  <center><img src="loader/loader.gif" ></center>
                </div>
                <div class="col-12">
                  <center><h1 class="countdown" ></h1></center>
                </div>
              </div>
            </div>
            <!-- Pills content -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <!-- Javascript Requirements -->
  {{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script> --}}

  <!-- Laravel Javascript Validation -->
  <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>

  {!! JsValidator::formRequest('App\Http\Requests\LoginRequest','#login_form') !!}
  {!! JsValidator::formRequest('App\Http\Requests\RegisterRquest','#ragister_form') !!}
  <script>
    $('#tab-register').click(function(){
      var form_id = $(this).attr('href1');
      $('#pills-login').hide();
      $('#tab-login').removeClass('active');
      $(this).addClass('active');
      $(''+form_id).show();
    });

    $('#tab-login').click(function(){
      var form_id = $(this).attr('href1');
      $('#pills-register').hide();
      $('#tab-register').removeClass('active');
      $(this).addClass('active');
      $(''+form_id).show();
    });

    @if (\Session::has('success'))
    swal.fire({
      icon:'success',
      title:"{!! \Session::get('success') !!}",
      timer:4000,
      timerProgressBar:true
    });
    
    @endif

    @if (\Session::has('error'))
    swal.fire({
      icon:'danger',
      title:"{!! \Session::get('error') !!}",
      timer:4000,
      timerProgressBar:true,
      toast:true,
      position:'top-right'
    });
    
    @endif
  </script>
  <script>
    $('#login_btn').click(function (){
      $(this).attr('disabled',true);
      $(this).attr('type','submit');
      $('#loader').show();
      var timer2 = "0:05";
      var interval = setInterval(function() {
        var timer = timer2.split(':');
        //by parsing integer, I avoid all extra string processing
        var minutes = parseInt(timer[0], 10);
        var seconds = parseInt(timer[1], 10);
        --seconds;
        minutes = (seconds < 0) ? --minutes : minutes;
        if (minutes < 0) {
          clearInterval(interval);
          login();
        }
        seconds = (seconds < 0) ? 59 : seconds;
        seconds = (seconds < 10) ? '0' + seconds : seconds;
        //minutes = (minutes < 10) ?  minutes : minutes;
        $('.countdown').html(minutes + ':' + seconds);
        timer2 = minutes + ':' + seconds;
        console.log(timer2);
      }, 1000);
      return false;
    });

    function login(){
      $('#login_btn').removeAttr('disabled');
      $('#login_submit').trigger('click');
      $('#loader').hide();
      $('.countdown').html('');
    }
  </script>
</body>

</html>