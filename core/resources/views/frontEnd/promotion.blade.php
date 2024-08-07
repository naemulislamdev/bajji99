@extends('frontEnd.layout')
@section('title', $PageTitle)
@section('content')
<style>
    .game-box > .img-box {
    height:100%;
}
</style>
<section class="my-3">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="game-categories mb-3">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="game-cagegory-box">
                                <input type="radio" id="option1" name="deposit_option" value="nagad">
                                <label for="option1">সব</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="game-cagegory-box">
                                <input type="radio" id="option2" name="deposit_option" value="nagad">
                                <label for="option2">খেলাধুলা</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="game-cagegory-box">
                                <input type="radio" id="option3" name="deposit_option" value="nagad">
                                <label for="option3">লাইভ ক্যাসিনো</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="game-cagegory-box">
                                <input type="radio" id="option4" name="deposit_option" value="nagad">
                                <label for="option4">স্লট</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="game-cagegory-box">
                                <input type="radio" id="option5" name="deposit_option" value="nagad">
                                <label for="option5">টেবিল গেম</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="game-cagegory-box">
                                <input type="radio" id="option6" name="deposit_option" value="nagad">
                                <label for="option6">VIP</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="game-cagegory-box">
                                <input type="radio" id="option7" name="deposit_option" value="nagad">
                                <label for="option7">ক্র্যাশ</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="game-cagegory-box">
                                <input type="radio" id="option8" name="deposit_option" value="nagad">
                                <label for="option8">টুর্নামেন্ট</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="promotion-box">
                            <img src="{{ asset('assets/frontend/img/bajji-img/promotion1.jpg') }}" alt="">
                            <div class="promotion-content">
                                <h3>ডিপোজিট ৳3,888 করে বোনাস পান ৳1,188</h3>
                                <p>শীঘ্রই এই বিশেষ BABU88 জন্মদিনের অফারটি নিন!</p>
                                <div class="promotion-action">
                                    <a href="#" class="btn btn-primary mr-2">আরও পড়ুন</a>
                                    <a href="#" class="btn btn-warning">দাবি করুন</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="promotion-box">
                            <img src="{{ asset('assets/frontend/img/bajji-img/promotion2.jpg') }}" alt="">
                            <div class="promotion-content">
                                <h3>ডিপোজিট ৳3,888 করে বোনাস পান ৳1,188</h3>
                                <p>শীঘ্রই এই বিশেষ BABU88 জন্মদিনের অফারটি নিন!</p>
                                <div class="promotion-action">
                                    <a href="#" class="btn btn-primary mr-2">আরও পড়ুন</a>
                                    <a href="#" class="btn btn-warning">দাবি করুন</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
