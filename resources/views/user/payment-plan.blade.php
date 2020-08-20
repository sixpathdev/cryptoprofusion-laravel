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
                    <h5 class="text-muted">Select Payment</h5>
                </div>
            </div>
            <div class="row offset-1 mt-2 mt-lg-5">
                @foreach ($plans as $plan)
                <div class="col-12 col-lg-6 mx-auto">
                    <div class="card" style="width: 16em;">
                        <div class="card-body" style="padding: 0px;">
                            <div class="title text-center py-1" style="background: white;">
                                <span class="text-dark font-weight-bold h4 text-muted">{{ Ucwords($plan->name) }}</span>
                            </div>
                            <div>
                                <img src="/img/bitcoin-image.png" class="img-fluid" />
                            </div>
                            <div class="text-center py-2" style="background: white;">
                                <a href="/user/plan/{{$plan->name}}" style="color: #76A140;font-size:16px;">Continue to deposit</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


@endsection