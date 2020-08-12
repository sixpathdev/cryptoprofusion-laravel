@extends('layout2')
@section('content')

@include('partials.topnav')
<div class="container-fluid pb-5" style="overflow-y: hidden;">
    <div class="row">
        <!-- side nav -->
        @include('partials.sidenav')
        <!-- side nav ends -->
        <!-- page content -->
        <div class="col-lg-9 ml-sm-auto col-xl-10 pl-3 pr-5 px-xl-5 pt-1">
            <div class="row pt-md-4">
                <div class="col-12">
                    <h3 class="text-muted">{{ ucwords('Plan - '.$plan->name) }}</h3>
                </div>
            </div>
            <div class="row offset-3 mt-2 mt-lg-5">
                <div class="col-7">
                    <div class="card">
                        <div class="card-body py-5 px-3">
                            <form action="/user/initialize-transaction" method="POST">
                                @csrf
                                <div class="form-group mb-4">
                                    <input type="email" class="form-control form-control-md"
                                placeholder="Email Address" name="user_email" value="{{$user->email}}" disabled />
                                </div>
                                <div class="form-group mb-4">
                                    <input type="number" name="amount" min="100" max="800" class="form-control form-control-md" placeholder="Amount" />
                                </div>
                                <button type="submit" class="btn font-weight-bold w-100" style="background-color:white;color:#76A140;">Make
                                    Payment</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection