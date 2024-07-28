@extends('frontEnd.dashboard.dashboard_master')
@section('title','Dashboard')
@section('dashboard')

<div class="col-md-7">
    <div class="row">
        <div class="col-md-6 d-flex">
            <div class="ud-content-2 flex-grow-1 mb-3 ajker-shadow">
                <div class="prof-info text-center">
                    <img src="{{asset('defaults/avatar/avatar.png')}}" alt="image">
                    <h5 class="mt-3 mb-0">{{auth()->user()->name}}</h5>
                    <p>{{auth()->user()->email}}</p>

                    <a href="#" data-toggle="modal" data-target="#profile-picture">Change Profile Picture</a>
                    @section('modals')
                    <!--Profile picture modal-->
                    <div class="modal fade" id="profile-picture" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Change Profile Picture</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input id="noImage" type="file" name="image" class="form-control">
                                        <div style='color:red; padding: 0 5px;'>{{($errors->has('image'))?($errors->first('image')):''}}</div>
                                        <img style="padding:4px;border:1px solid #ddd; border-radius: 3px; margin: 10px 0; width:100px; height: 100px;" id="showNoImage" src="{{asset('defaults/avatar/avatar.png')}}" alt="image">
                                        <input type="submit" value="Save Changes" class="btn btn-primary btn-sm">
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    @endsection

                </div>
            </div>
        </div>
        <div class="col-md-6 d-flex">
            <div class="ud-content-2 flex-grow-1 mb-3 ajker-shadow">
                <div class="prof-txt">
                    <span class="prof-info-badge">General</span>
                    <h5>Md. Naemul Islam</h5>
                    <span>Address</span>
                    <p> N/A </p>
                    <span>Phone Number</span>
                    <p>N/A </p>
                    <span>Email Address</span>
                    <p>naemulislam.dev@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
