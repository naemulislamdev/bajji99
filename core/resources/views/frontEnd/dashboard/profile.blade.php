@extends('frontEnd.dashboard.dashboard_master')
@section('title', 'Deposit')
@section('dashboard')
    <div class="col-md-9">
        <div class="main-panel">
            <div class="row">
                <div class="col">
                    <div class="heading-title d-flex">
                        <h4 class="mr-3">My Profile</h4>
                        <a href="#" data-toggle="modal" data-target="#exampleModalLong" class="profile-edit-icon"><i class="fa fa-pencil-square-o"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" value="{{Auth::user()->name}}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Date of birth</label>
                        <input type="date" name="date_of_birth" class="form-control" value="{{Auth::user()->userDetails->date_of_birth}}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="full_name" class="form-control" value="{{Auth::user()->userDetails->full_name}}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Currency</label>
                        <input type="text" name="currency" class="form-control" value="{{Str::upper(Auth::user()->userDetails->currency)}}" readonly>
                    </div>
                        <div class="heading-title">
                            <h4>Contact Details</h4>
                        </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="eamil" class="form-control" value="{{Auth::user()->email}}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Primary Number</label>
                        <input type="number" name="number" class="form-control" value="{{Auth::user()->userDetails->phone}}" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Profile</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{route('user.profile.update',Auth::user()->id)}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Email <span class="text-danger">*</span></label>
                <input type="email" name="email" class="form-control" value="{{Auth::user()->email ?? ''}}" placeholder="Enter your email">
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Username <span class="text-danger">*</span></label>
                <input type="text" name="username" class="form-control" value="{{Auth::user()->name}}" readonly>
            </div>
            <div class="form-group">
                <label>Date of birth <span class="text-danger">*</span></label>
                <input type="date" name="date_of_birth" class="form-control" placeholder="Enter your date of birth" value="{{Auth::user()->userDetails->date_of_birth}}">
                @error('date_of_birth')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Phone <span class="text-danger">*</span></label>
                <input type="number" name="phone" class="form-control" value="{{Auth::user()->userDetails->phone}}" readonly>
                @error('phone')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Full Name <span class="text-danger">*</span></label>
                <input type="text" name="full_name" class="form-control" placeholder="Enter your full name" value="{{Auth::user()->userDetails->full_name}}">
                @error('full_name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-warning w-100">Submit</button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endsection
