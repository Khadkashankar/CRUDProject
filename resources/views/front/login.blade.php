<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('front/style.css') }}">

</head>

<body>
    <!-- partial:index.partial.html -->
    <html lang="en">

    <head>
        <!-- toaster css cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
            integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>

    <body>
        <div id="form">
            <div class="container">
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-md-8 col-md-offset-2">
                    <div id="userform">
                        <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li class="active"><a href="#login" role="tab" data-toggle="tab">Log in</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="login">

                                <form id="login" action="{{ route('check.login') }}" method="post"
                                    enctype="multipart/form-data" autocomplete="off">
                                    @csrf
                                    <div class="form-group">
                                        <label> Your Email<span class="req">*</span> </label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            value="{{  old('email') }}">
                                        @error('email')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label> Password<span class="req">*</span> </label>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>
                                    <div class="mrgn-30-top">
                                        <button type="submit" class="btn btn-larger btn-block" />
                                        Log in
                                        </button>


                                    </div>
                                </form>
                                <a href="{{ route('register') }}" class="btn btn-larger btn-block" role="button"
                                    aria-disabled="true">Register</a>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </div>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
    <!-- partial -->
    <script src="{{ asset('front/script.js') }}"></script>
    <!-- sweet alert js cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- toastr cdn js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    @if(Session::has('error'))
    swal("Error!", "{{ Session::get('error') }}", 'error', {
            button: true,
            button: "OK",
            timer: 6000,
        }

    );
    @endif
    </script>
    <script>
    toastr.options = {
        'progressBar': true,
        'closeButton': true,
    }
    @if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}");
    @endif
    </script>
</body>


</body>

</html>