@extends('layout2')
@section('content')

@include('partials.topnav')
<div class="container-fluid pb-5">
    <div class="row">
        <!-- side nav -->
        @include('partials.sidenav')
        <!-- side nav ends -->
        <!-- page content -->
        <div class="col-lg-9 ml-sm-auto col-xl-10 pl-3 pr-5 px-xl-5 pt-1">
            <div class="row pt-md-4">
                <div class="col-12">
                    <h4 class="text-muted">All Members</h4>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-12 col-lg-8 offset-lg-2">
                    @if (session("success"))
                    <div class="alert alert-success text-center" role="alert">{{ session("success") }}</div>
                    @endif
                    @if (session("error"))
                    <div class="alert alert-danger text-center" role="alert">{{ session("error") }}</div>
                    @endif
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-lg-8 offset-lg-2">
                                    <button class="btn mt-2 mb-3" style="background: white;" onclick="window.history.back()">Go
                                        Back</button>
                                    <form action="">
                                        <div class="form-group">
                                            <label for="fullname">Name</label>
                                            <input type="text" class="form-control" readonly
                                                value="{{$user->fullname}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="referral">Referral</label>
                                            <input type="text" class="form-control" readonly
                                                value="{{$directDescendant}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input type="text" class="form-control" readonly value="{{$user->email}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control" readonly value="{{$user->phone}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="wallet">Bitcoin Address</label>
                                            <input type="text" class="form-control" readonly
                                                value="{{$user->wallet->address}}">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content ends -->
    </div>
</div>

@endsection