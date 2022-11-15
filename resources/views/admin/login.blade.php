<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet"
        href="{{ asset('assets/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <style>
        .input_invalid {
            /* border-right: 1; */
            border: 1px solid red;

        }

        .invalid-sonu {
            color: red;
        }

    </style>
</head>

<body class="hold-transition login-page">
    <div id="error_msg" class="alert alert-danger">{{ Session::get('error') }}</div>
    <div id="success_msg" class="alert alert-success">{{ Session::get('success') }}</div>
    @if (Session::has('error'))
        <div class="alert alert-danger">{{ Session::get('error') }}</div>
    @endif
    @if (Session::has('success'))
        {{-- @if (Session::get('success') == 'Otp Sent Successfully')
        <script>var otp_sent_sms = '{{ Session::get('success') }}';</script>
        @endif --}}

        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif

    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>Admin Login</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card card-outline card-outline-tabs">

            <div class="card-body login-card-body">


                <form action="{{ url('loginpost') }}" method="post">
                    @csrf

                    <input name="type" type="hidden" value="1">
                    <input id="url" type="hidden" value="{{ url('') }}">
                    <input id="dashboard" type="hidden" value="{{ route('dashboard') }}">
                    <div id="password_block">
                        @if ($errors->has('email'))
                            <span class="help-block invalid-sonu">
                                {{ $errors->first('email') }}
                            </span>
                        @endif
                        <div class="input-group mb-3" id="email">
                            <input type="text"
                                class="form-control{{ $errors->has('email') ? ' input_invalid' : '' }}" name="email"
                                placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>

                            </div>
                        </div>

                        @if ($errors->has('password'))
                            <span class="help-block invalid-sonu">
                                {{ $errors->first('password') }}
                            </span>
                        @endif
                        <div class="input-group mb-3">
                            <input type="password" name="password"
                                class="form-control {{ $errors->has('password') ? ' input_invalid' : '' }}"
                                placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                            </div>
                            <div class="col-12 d-none">
                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>

                    <div id="otp_block">
                        <div id="mobile_div" class="">
                            @if ($errors->has('mobile'))
                                <script>
                                    var mobile_error = '{{ $errors->first('mobile') }}';
                                </script>
                                <span class="help-block invalid-sonu">
                                    {{ $errors->first('mobile') }}
                                </span>
                            @endif
                            <div class="input-group mb-3">
                                <input type="text" id="mobile"
                                    class="form-control {{ $errors->has('mobile') ? ' input_invalid' : '' }}"
                                    name="mobile" placeholder="Mobile">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="otp_div" class="">
                            @if ($errors->has('otp'))
                                <span class="help-block invalid-sonu">
                                    {{ $errors->first('otp') }}
                                </span>
                            @endif
                            <div class="input-group mb-3" id="">
                                <input type="text" name="otp" maxlength="4"
                                    class="form-control {{ $errors->has('otp') ? ' input_invalid' : '' }}"
                                    placeholder="Otp" id="otp">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="button" id="send_otp" class="btn btn-primary btn-block">Send Otp</button>

                                <button type="button" id="confirm_otp" class="btn btn-primary btn-block">Confirm
                                    Otp</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>

                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}">
    </script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>

    {{-- custom --}}
    <script src="{{ asset('custom/login.js') }}"></script>

</body>

</html>
