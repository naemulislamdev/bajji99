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
                                <label for="option1">All</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="game-cagegory-box">
                                <input type="radio" id="option2" name="deposit_option" value="nagad">
                                <label for="option2">Evolution Gaming</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="game-cagegory-box">
                                <input type="radio" id="option3" name="deposit_option" value="nagad">
                                <label for="option3">Pragmatic Play</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="game-cagegory-box">
                                <input type="radio" id="option4" name="deposit_option" value="nagad">
                                <label for="option4">AE Casino</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="game-cagegory-box">
                                <input type="radio" id="option5" name="deposit_option" value="nagad">
                                <label for="option5">Royal</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="game-cagegory-box">
                                <input type="radio" id="option6" name="deposit_option" value="nagad">
                                <label for="option6">Ezugi</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <div class="heading-title">
                            <h3>হট গেমস</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 mb-4">
                        <div class="game-box">
                            <a href="#">
                                <div class="play-box"><i class="fa fa-play"></i></div>
                            </a>
                            <div class="img-box">
                                <img src="{{ asset('assets/frontend/img/bajji-img/g1.jpg') }}" alt="" />
                            </div>
                            <div class="content">
                                <h4>Super Ace</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-4">
                        <div class="game-box">
                            <a href="#">
                                <div class="play-box"><i class="fa fa-play"></i></div>
                            </a>
                            <div class="img-box">
                                <img src="{{ asset('assets/frontend/img/bajji-img/g1.jpg') }}" alt="" />
                            </div>
                            <div class="content">
                                <h4>Super Ace</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-4">
                        <div class="game-box">
                            <a href="#">
                                <div class="play-box"><i class="fa fa-play"></i></div>
                            </a>
                            <div class="img-box">
                                <img src="{{ asset('assets/frontend/img/bajji-img/g1.jpg') }}" alt="" />
                            </div>
                            <div class="content">
                                <h4>Super Ace</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-4">
                        <div class="game-box">
                            <a href="#">
                                <div class="play-box"><i class="fa fa-play"></i></div>
                            </a>
                            <div class="img-box">
                                <img src="{{ asset('assets/frontend/img/bajji-img/g1.jpg') }}" alt="" />
                            </div>
                            <div class="content">
                                <h4>Super Ace</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-4">
                        <div class="game-box">
                            <a href="#">
                                <div class="play-box"><i class="fa fa-play"></i></div>
                            </a>
                            <div class="img-box">
                                <img src="{{ asset('assets/frontend/img/bajji-img/g1.jpg') }}" alt="" />
                            </div>
                            <div class="content">
                                <h4>Super Ace</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-4">
                        <div class="game-box">
                            <a href="#">
                                <div class="play-box"><i class="fa fa-play"></i></div>
                            </a>
                            <div class="img-box">
                                <img src="{{ asset('assets/frontend/img/bajji-img/g1.jpg') }}" alt="" />
                            </div>
                            <div class="content">
                                <h4>Super Ace</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-4">
                        <div class="game-box">
                            <a href="#">
                                <div class="play-box"><i class="fa fa-play"></i></div>
                            </a>
                            <div class="img-box">
                                <img src="{{ asset('assets/frontend/img/bajji-img/g1.jpg') }}" alt="" />
                            </div>
                            <div class="content">
                                <h4>Super Ace</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-4">
                        <div class="game-box">
                            <a href="#">
                                <div class="play-box"><i class="fa fa-play"></i></div>
                            </a>
                            <div class="img-box">
                                <img src="{{ asset('assets/frontend/img/bajji-img/g1.jpg') }}" alt="" />
                            </div>
                            <div class="content">
                                <h4>Super Ace</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
