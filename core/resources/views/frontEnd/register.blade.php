@extends('frontEnd.layout')
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
.tooltip-btn:hover {text-decoration: none; color: #fff;}
label {
    color: #000;
    font-size: 17px;
    font-weight: 500;
}
</style>
<section class="regisnter-seciton">
    <div class="container">
        <div class="row">
            <div class="col-md-7 mx-auto">
                <div class="register-container">
                    <h1>একাউন্ট তৈরি করুন</h1>
                    <p>আসুন আপনাকে No.1 ক্রিকেট এক্সচেঞ্জ এবং বেটিং প্ল্যাটফর্মে নিবন্ধন করিয়ে দিই</p>
                    <div class="register-box">
                        <div class="row">
                            <div class="col-md-7 mx-auto">
                                <form action="{{ route('register.store')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <div class="d-flex justify-content-between">
                                            <label>ব্যবহারকারীর নাম <span class="text-danger">*</span></label> <a class="tooltip-btn" href="#" data-toggle="tooltip" data-placement="top" title="কমপক্ষে ৬ থেকে ১১ টি আক্ষর থাকতে হবে।">?</a>
                                        </div>
                                        <input type="text" id="username" name="username" autocomplete="off" class="form-control" placeholder="এখানে পূ্রন করুন">
                                            <span id="username-error" class="text-danger"></span>
                                        @error('username')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex justify-content-between">
                                            <label>গোপন নম্বর <span class="text-danger">*</span></label> <a class="tooltip-btn" href="#" data-toggle="tooltip" data-placement="top" title="কমপক্ষে ৬ থেকে ১৪ টি আক্ষর থাকতে হবে।">?</a>
                                        </div>
                                        <input type="password" name="password" class="form-control" placeholder="এখানে পাসওয়ার্ড নিশ্চিত করুন">
                                        @error('password')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                            <label>পাসওয়ার্ড নিশ্চিত করুন <span class="text-danger">*</span></label>
                                        <input type="password" name="confirm_password" class="form-control" placeholder="পাসওয়ার্ড নিশ্চিত করুন">
                                        @error('confirm_password')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                            <label>মুদ্রা <span class="text-danger">*</span></label>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <img src="{{asset('assets/frontend/img/bajji-img/bdt.svg')}}" width="38px;" alt="">
                                            </div>
                                            <div class="col-md-10">
                                                <select class="form-control" name="currency">
                                                    <option value="bdt">BDT</option>
                                                    <option value="inr">INR</option>
                                                    <option value="npr">NPR</option>
                                                </select>
                                            </div>
                                        </div>
                                        @error('currency')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                            <label>মোবাইল নম্বর <span class="text-danger">*</span></label>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <input type="text" placeholder="+880" value="+880" readonly class="form-control">
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="এখানে পূ্রন করুন" name="phone" class="form-control">
                                            </div>
                                        </div>
                                        @error('phone')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>ভেরিফিকেশন কোড <span class="text-danger">*</span></label>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <input type="text" placeholder="এখানে কোড টি লিখুন" name="verify_code" id="verify" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" name="verify-code" id="verify-code" readonly>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text re-generate" id="basic-addon2"><i class="fa fa-refresh"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12"><span id="validation-message" class="form-text text-danger text-bold"></span></div>
                                            @error('verify_code')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-warning col-md-12">নিবন্ধন</button>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <span class="form-check-label" for="defaultCheck1">
                                            রেজিস্টার বোতামে ক্লিক করে, আমি এতদ্বারা স্বীকার করছি যে আমার বয়স 18 বছরের বেশি এবং আমি আপনার শর্তাবলী পড়েছি এবং মেনে নিয়েছি।
                                        </span>
                                      </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('script')
<script>
    $(document).ready(function(){
        function generateCode() {
            return Math.floor(1000 + Math.random() * 9000); // Generate a 4-digit code
        }

        function setNewCode() {
            var newCode = generateCode();
            $('#verify-code').val(newCode);
            console.log(newCode);
        }

        // Set an initial code
        setNewCode();

        // Event listener for re-generate button
        $('.re-generate').on('click', function(){
            // alert('Ok');
            setNewCode();
            $('#validation-message').text(''); // Clear validation message
        });

        // Event listener for input verification
        $('#verify').on('input', function(){
            var inputCode = $(this).val();
            var generatedCode = $('#verify-code').val();

            if(inputCode === generatedCode){
                $('#validation-message').text('Code is valid').removeClass('text-danger').addClass('text-success');
            } else {
                $('#validation-message').text('Code is invalid').removeClass('text-success').addClass('text-danger');
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#username').on('input', function() {
            validateUsername();
        });

        function validateUsername() {
            var username = $('#username').val();
            var usernameError = $('#username-error');
            var regex = /^[a-zA-Z0-9]{6,13}$/;

            if (username === '') {
                usernameError.text('This is a mandatory field.');
            } else if (!regex.test(username)) {
                usernameError.text('Must contain 6 to 13 characters/numbers and letters only.');
            } else {
                usernameError.text('');
            }
        }
    });
    </script>

@endpush
