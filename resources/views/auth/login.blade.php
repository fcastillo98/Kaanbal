<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Kaanbal</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="assets/vendors/bootstrap/dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/vendors/bootstrap/dist/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="assets/vendors/matrix/matrix-login.css" />
        <link href="assets/vendors/font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
        <link href="public/css/font-login.css" />

    </head>
    <body>
        
        <div id="loginbox">            
            <form method="POST" action="{{ route('login') }}">
                        @csrf
				<div class="control-group normal_text"> <h3><img src="assets/img/logo3.png" alt="Logo" /></h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" placeholder="Correo Electrónico" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus/>
                            @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" placeholder="Contraseña" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required/>
                            @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-left"><a href="{{ route('register') }}" class="flip-link btn btn-danger" id="to-recover">{{ __('Registrarse') }}</a></span>
                    
                    <button class="pull-right"><a  class="flip-link btn btn-success" /> {{ __('Entrar') }}</a></button>
                    
                </div>
            </form>
        </div>
        
        <script src="assets/vendors/jquery/dist/jquery.min.js"></script>  
        <script src="assets/vendors/matrix/matrix.login.js"></script> 

    </body>

</html>
