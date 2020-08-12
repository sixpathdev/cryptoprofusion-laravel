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
                    <h5 class="text-muted">Profile</h5>
                </div>
            </div>

            <div class="row offset-1 mt-2 mt-lg-5">
                <div class="col-10">
                    @if (session("error"))
                    <div class="alert alert-danger" role="alert">{{ session("error") }}</div>
                    @endif
                    @if (session("success"))
                    <div class="alert alert-success" role="alert">{{ session("success") }}</div>
                    @endif
                    <form method="POST" action="/user/profile">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-4">
                            <input type="fullname" class="form-control form-control-lg" name="fullname" placeholder="Fullname"
                                id="fullname" value="{{$user->fullname}}">
                        </div>
                        <div class="form-row mb-2">
                            <div class="form-group col-md-6">
                                <input type="fullname" class="form-control form-control-lg" name="email" placeholder="Email"
                                    id="email" value="{{$user->email}}">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="tel" class="form-control form-control-lg" name="phone" placeholder="Phone"
                                    value="{{$user->phone}}">
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <input type="text" class="form-control form-control-lg" name="address" placeholder="Wallet Address"
                                value="{{ $user->wallet->address }}">
                        </div>
                        <button type="submit" name="submit" class="btn px-5 py-2 text-white"
                            style="background: #76A140;">Update</button>
                    </form>
                </div>
            </div>

        </div>
        <!-- Page content ends -->
    </div>
</div>


@endsection