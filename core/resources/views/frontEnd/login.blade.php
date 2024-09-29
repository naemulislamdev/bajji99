@extends('frontEnd.layout')
@section('title', $PageTitle)
@section('content')
    <style>
        .tooltip-btn {
            background: #000;
            text-decoration: none;
            color: #fff;
            display: block;
            width: 20px;
            height: 20px;
            text-align: center;
            border-radius: 50%;
            font-size: 18px;
            font-weight: 700;
            padding: 0px 0px;
        }

        .tooltip-btn:hover {
            text-decoration: none;
            color: #fff;
        }

        label {
            color: #000;
            font-size: 17px;
            font-weight: 500;
        }
    </style>
    <section class="regisnter-seciton">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <div class="register-container">
                        <h1>Login</h1>
                        <p>Welcome back!</p>
                        <div class="register-box">
                            <div class="row">
                                <div class="col-md-10 mx-auto">
                                    <form action="{{ route('login.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <div class="d-flex justify-content-between">
                                                <label>Username <span class="text-danger">*</span></label> <a
                                                    class="tooltip-btn" href="#" data-toggle="tooltip"
                                                    data-placement="top" title="Must have at least 6 to 11 characters.">?</a>
                                            </div>
                                            <input type="text" name="username" class="form-control"
                                                placeholder="Fill up here">
                                            @error('username')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="d-flex justify-content-between">
                                                <label>Password <span class="text-danger">*</span></label> <a
                                                    class="tooltip-btn" href="#" data-toggle="tooltip"
                                                    data-placement="top" title="Must have at least 6 to 14 characters.">?</a>
                                            </div>
                                            <input type="password" name="password" class="form-control"
                                                placeholder="Fill up here">
                                            @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-warning col-md-12">Login</button>
                                        </div>
                                    </form>
                                    <div class="form-group text-center">
                                        <p class="m-0"><a href="#" data-toggle="modal"
                                                data-target="#forgetPassword">Forgot Password?</a></p>
                                        <span class="text-center" for="">
                                            Don’t have an account yet? <a href="{{ route('front.register') }}"> Register
                                                here</a>
                                        </span>
                                    </div>
                                    <hr>
                                    <div>
                                        <span>
                                            If you encounter any issue logging in, please contact our customer service for assistance via LiveChat.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--forget password Modal -->
    <div class="modal fade" id="forgetPassword" tabindex="-1" role="dialog" data-backdrop="static"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">পাসওয়ার্ড রিসেট করুন</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
