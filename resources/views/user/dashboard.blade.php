@extends('layout2')
@section('content')

@include('partials.topnav')
<div class="container-fluid pb-5">
    <div class="row">
        <!-- side nav -->
        @include('partials.sidenav')
        <!-- side nav ends -->
        <!-- page content -->
        @if (empty(Auth::user()->wallet->address))
        <div class="col-lg-9 ml-sm-auto col-xl-10 pl-3 pr-5 px-xl-5 pt-1">
            <div style="display: flex;justify-content:center;align-items:center;margin-top:130px;">
            <div class="card" style="width: 30vw">
                <div class="card-body px-3 py-4">
                    <span class="d-block text-center">Please update your <b>BITCOIN WALLET ADDRESS</b> before making your first deposit.</span>
                    <div class="mt-5" style="position: relative;left:100px;">
                        <a href="/user/profile" class="btn btn-primary mx-auto" style="border-radius: 0px;">Click to Proceed</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
        @else
        <div class="col-lg-9 ml-sm-auto col-xl-10 pl-3 pr-5 px-xl-5 pt-1">
            <div class="row pt-md-4">
                <div class="col-12">
                    <h4 class="text-muted">Dashboard</h4>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-12 mb-2 col-lg-6 mb-lg-0">
                    <div class="card">
                        <div class="card-body py-5">
                            <p class="h3 text-center">Deposited Amount</p>
                            <p class="h3 text-center">{{ '$'.$total_deposited_amount }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-2 col-lg-6 mb-lg-0">
                    <div class="card">
                        <div class="card-body py-5">
                            <p class="h3 text-center">Referral Bonus</p>
                            <p class="h3 text-center">{{ '$'.$total_referral_amount }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 col-lg-12">
                    <div class="card" style="background: #719248;">
                        <div class="card-body">
                            <span class="d-block h6 font-weight-bold py-2">DEPOSIT HISTORY</span>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="text-center text-white">
                                            <th scope="col">Payment ID</th>
                                            <th scope="col">Wallet Address</th>
                                            <th scope="col">Payment Date</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for ($i = 0; $i < count($mytransactions); $i++) <tr
                                            class="text-center text-white">
                                            <th scope="row">{{$i+1}}</th>
                                            <td>{{$mytransactions[$i]->bitcoin_address}}</td>
                                            <td>{{$mytransactions[$i]->created_at}}</td>
                                            <td
                                                class="font-weight-bold {{$mytransactions[$i]->payment_status == 'pending' ? 'text-danger' : 'text-success'}}">
                                                <span class="p-2"
                                                    style="background: white;border-radius:20px;">{{$mytransactions[$i]->payment_status}}</span>
                                            </td>
                                            </tr>
                                            @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ml-auto mr-3">{{ $mytransactions->links() }}</div>
            </div>
        </div>
        @endif

        

        <!-- Page content ends -->
    </div>
</div>


@endsection