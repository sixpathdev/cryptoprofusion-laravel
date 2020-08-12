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
                    <h4 class="text-muted">Dashboard</h4>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-12 mb-2 col-lg-4 mb-lg-0">
                    <div class="card">
                        <div class="card-body">
                            <p class="h5 text-center">Plan</p>
                            <p class="h3 text-center">Bronze</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-2 col-lg-4 mb-lg-0">
                    <div class="card">
                        <div class="card-body">
                            <p class="h5 text-center">Deposited</p>
                            <p class="h3 text-center">$0</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-2 col-lg-4 mb-lg-0">
                    <div class="card">
                        <div class="card-body">
                            <p class="h5 text-center">Referals</p>
                            <p class="h3 text-center">0</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Page content ends -->
    </div>
</div>


@endsection