

<html>
    <head>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<style>
    .register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
</style>
    </head>
<body>


<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from earning your own money!</p>
                        <input type="submit" name="" value="Login"/><br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Register</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Login</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Register</h3>
                                  <form  method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                                <div class="row register-form">
                                                      
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                            
                                            <input type="text" class="form-control" placeholder="Name *"  name="name" value="{{ old('name') }}" required autofocus />
                                             @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="E-Mail Address *" name="email1" value="{{ old('email1') }}" required />
                                            @if ($errors->has('email1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email1') }}</strong>
                                    </span>
                                @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="date" class="form-control" placeholder="Birthdate *" name="birthdate" value="{{ old('birthdate') }}" required />
                                            @if ($errors->has('birthdate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthdate') }}</strong>
                                    </span>
                                @endif
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  placeholder="Country*" name="country" value="{{ old('country') }}" required  />
                                            @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" name="password1" required />
                                            @if ($errors->has('password1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password1') }}</strong>
                                    </span>
                                @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="password"  class="form-control" placeholder="Confirm Password *" name="password1_confirmation" required />
                                        </div>
                                       
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                   
                                    </div>
                         
                                </div>
                        </form>
                            </div>
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Login</h3>
                                 <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                                <div class="row register-form">
                                                       
                                    <div class="col-md-6">
                                         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <input type="email" class="form-control" placeholder="Email *" name="email" value="{{ old('email') }}" required autofocus />
                                             @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6">
                                       
                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <input type="password" class="form-control" placeholder="Password *"  name="password" required />
                                             @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                        </div>
                                        
                                        <input type="submit" class="btnRegister"  value="Login"/>
                                    </div>
                                    
                                </div>
                                                                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </body>
</html>
