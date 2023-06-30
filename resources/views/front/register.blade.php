<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Registration</title>
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
                            <li class="active"><a href="#signup" role="tab" data-toggle="tab">Sign up</a></li>
                            <!-- <li><a href="#login" role="tab" data-toggle="tab">Log in</a></li> -->
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="signup">
                                <!-- @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif -->

                                <form id="signup" method="post" action="{{ route('user.store') }}"
                                    enctype="multipart/form-data" autocomplete="off">
                                    @csrf
                                    <div class=" form-group">
                                        <label> Name<span class="req">*</span> </label>
                                        <input type="text" class="form-control" id="Name" name="name"
                                            value="{{ old('name') }}">
                                        <p class="help-block text-danger"></p>
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label> Your Email<span class="req">*</span> </label>
                                        <input type="text" class="form-control" id="email" name="email"
                                            value="{{old('email') }}">
                                        <p class="help-block text-danger"></p>
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label> Your Phone<span class="req">*</span> </label>
                                        <input type="text" class="form-control" id="phone" name="phone">
                                        <p class="help-block text-danger"></p>
                                        @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label> Your Address<span class="req">*</span> </label>
                                        <input type="text" class="form-control" id="address" name="address">
                                        <p class="help-block text-danger"></p>
                                        @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label> Password<span class="req">*</span> </label>
                                        <input type="password" class="form-control" id="password" name="password">
                                        <p class="help-block text-danger"></p>
                                        @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mrgn-30-top">
                                        <button type="submit" class="btn btn-larger btn-block">
                                            Sign up
                                        </button>
                                    </div>
                                    <div>
                                        <a href="{{ route('/') }}" class="btn btn-larger btn-block" role="button"
                                            aria-disabled="true">Log in</a>
                                    </div>
                                </form>

                            </div>
                            <!-- login -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </div>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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

    </html>