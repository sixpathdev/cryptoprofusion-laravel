@extends('layout2')
@section('content')

@include('partials.topnav')
@include('modal.uploadphoto-modal')
<div class="container-fluid pb-5">
    <div class="row">
        <!-- side nav -->
        @include('partials.sidenav')
        <!-- side nav ends -->
        <!-- page content -->
        <div class="col-lg-9 ml-sm-auto col-xl-10 pl-3 pr-5 px-xl-5 pt-1">
            {{-- {{dd($user->wallet->address)}} --}}
            <div class="row pt-md-4">
                <div class="col-12">
                    <h5 class="text-muted">Profile</h5>
                </div>
            </div>

            <div class="row offset-lg-1 ml-1 mt-2 mt-lg-5">
                <div class="col-12 col-lg-10">
                    @if (session("error"))
                    <div class="alert alert-danger text-center" role="alert">{{ session("error") }}</div>
                    @endif
                    @if (session("success"))
                    <div class="alert alert-success text-center" role="alert">{{ session("success") }}</div>
                    @endif
                    <div class="row">
                        <div class="col-12 col-lg-7 offset-lg-4">
                            <img class="img-fluid rounded-circle" style="width: 240px;height:240px;border:1px solid rgb(52, 226, 52);" src="{{$user->photo}}" alt="profile_picture" />
                        </div>
                        <div class="col-12 col-lg-7 offset-lg-5 mt-lg-2">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#staticBackdropphoto">Upload image</button>
                        </div>
                        <div class="col-12">
                            <form method="POST" action="/user/profile">
                                @csrf
                                @method('PUT')
                                <div class="form-group mb-4">
                                    <label for="fullname" class="text-muted">Full Name</label>
                                    <input type="fullname" class="form-control form-control-lg" name="fullname"
                                        placeholder="Fullname" id="fullname" value="{{$user->fullname}}" required>
                                </div>
                                <div class="form-row mb-2">
                                    <div class="form-group col-md-6">
                                        <label for="email" class="text-muted">Email</label>
                                        <input type="fullname" class="form-control form-control-lg" name="email"
                                            placeholder="Email" id="email" value="{{$user->email}}" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="phone" class="text-muted">Phone</label>
                                        <input type="tel" id="phone" class="form-control form-control-lg" name="phone"
                                            placeholder="Phone" value="{{$user->phone}}" required>
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <label for="phone" class="text-muted">Bitcoin Address</label>
                                    <input type="text" class="form-control form-control-lg" name="wallet_address"
                                        placeholder="Wallet Address"
                                        value="{{ empty($user->wallet->address) ? '' : $user->wallet->address }}"
                                        required>
                                </div>
                                <button type="submit" class="btn px-5 py-2 text-white"
                                    style="background: #76A140;">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Page content ends -->
    </div>
</div>


@endsection