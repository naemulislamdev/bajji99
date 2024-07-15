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
            <div class="col-md-5 mx-auto">
                <div class="register-container">
                    <h1>প্রবেশ করুন</h1>
                    <p>স্বাগতম!</p>
                    <div class="register-box">
                        <div class="row">
                            <div class="col-md-10 mx-auto">
                                <form>
                                    <div class="form-group">
                                        <div class="d-flex justify-content-between">
                                            <label>ব্যবহারকারীর নাম <span class="text-danger">*</span></label> <a class="tooltip-btn" href="#" data-toggle="tooltip" data-placement="top" title="কমপক্ষে ৬ থেকে ১১ টি আক্ষর থাকতে হবে।">?</a>
                                        </div>
                                        <input type="text" name="name" class="form-control" placeholder="এখানে পূ্রন করুন">
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex justify-content-between">
                                            <label>গোপন নম্বর <span class="text-danger">*</span></label> <a class="tooltip-btn" href="#" data-toggle="tooltip" data-placement="top" title="কমপক্ষে ৬ থেকে ১৪ টি আক্ষর থাকতে হবে।">?</a>
                                        </div>
                                        <input type="text" name="name" class="form-control" placeholder="এখানে পাসওয়ার্ড নিশ্চিত করুন">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-warning col-md-12">প্রবেশ করুন</button>
                                    </div>
                                    <div class="form-group text-center">
                                        <p class="m-0"><a href="#" data-toggle="modal" data-target="#forgetPassword">পাসওয়ার্ড ভুলে গেছেন?</a></p>
                                        <span class="text-center" for="">
                                            কোনো একাউন্ট এখনও নেই? <a href="{{ route('front.register')}}"> Register here</a>
                                        </span>
                                      </div>
                                      <hr>
                                      <div>
                                        <span>
                                            আপনি যদি লগ ইন করতে কোনো সমস্যার সম্মুখীন হন, দয়া করে LiveChat এর মাধ্যমে সহায়তার জন্য আমাদের গ্রাহক পরিষেবার সাথে যোগাযোগ করুন৷</span>
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
<!--forget password Modal -->
<div class="modal fade" id="forgetPassword" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
