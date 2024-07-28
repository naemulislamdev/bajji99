@extends('frontEnd.layout')
@section('content')
@php
$request = request();
@endphp
<section class="user-dashboard clearfix py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="ud-sidebar ajker-shadow" id="sidebar" style="transform: translate(0);">
                    <div class="ud-account">
                        <h5 class="p-3 mb-0">Welcome Back! {{auth()->user()->name}}</h5>
                    </div>
                    <div class="ud-nav">
                        <a class="{{$request->routeIs('user.deposit')? 'ud-active': '' }}" href="{{ route('user.deposit')}}"><i class="fa fa-angle-double-right mr-1"></i> Deposit</a>
                        <a class="" href=""><i class="fa fa-angle-double-right mr-1"></i> Withdrawal</a>
                        <a class="{{$request->routeIs('user.profile')? 'ud-active': '' }}" href="{{ route('user.profile')}}"><i class="fa fa-angle-double-right mr-1"></i> My Profile</a>
                        <a class="" href=""><i class="fa fa-angle-double-right mr-1"></i> Voucher</a>
                        <a class="" href=""><i class="fa fa-angle-double-right mr-1"></i> Bet History</a>
                        <a class="" href=""><i class="fa fa-angle-double-right mr-1"></i> History</a>
                        <a class="" href=""><i class="fa fa-angle-double-right mr-1"></i> Turnover History</a>
                        <a class="" href=""><i class="fa fa-angle-double-right mr-1"></i> Bank Details</a>
                        <a class="" href=""><i class="fa fa-angle-double-right mr-1"></i> Change Password</a>
                        <a class="" href=""><i class="fa fa-angle-double-right mr-1"></i> Inbox</a>
                        <a class="" href=""><i class="fa fa-angle-double-right mr-1"></i> Referal</a>
                        <a class="" href=""><i class="fa fa-angle-double-right mr-1"></i> Wheel Of Fortune</a>
                        <a class="" href=""><i class="fa fa-angle-double-right mr-1"></i> Rewards</a>
                        <a href="{{ route('user.logout')}}"><i class="fa fa-sign-out"></i> Logout</a>
                    </div>
                </div>
            </div>
            @yield('dashboard')
        </div>
    </div>
</section>
@endsection
@push('script')
@stack('js')
@endpush
