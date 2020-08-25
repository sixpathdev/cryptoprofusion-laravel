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
                    <h4 class="text-muted">Pending payment proofs</h4>
                </div>
            </div>

            <div class="container">
                <div class="row mt-2">
                    @if (session("success"))
                    <div class="alert alert-success" role="alert">{{ session("success") }}</div>
                    @endif
                    @if (session("error"))
                    <div class="alert alert-danger" role="alert">{{ session("error") }}</div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-muted" style="font-weight: 400;">S/N</th>
                                    <th scope="col" class="text-muted" style="font-weight: 400;">Wallet Address</th>
                                    <th scope="col" class="text-muted" style="font-weight: 400;">Amount</th>
                                    <th scope="col" class="text-muted" style="font-weight: 400;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($paymentproofs) > 0)
                                @for ($i = 0; $i < count($paymentproofs); $i++) 
                                <tr>
                                    <th scope="row">{{$i+1}}</th>
                                    <td>{{$paymentproofs[$i]->bitcoin_address}}</td>
                                    <td>{{$paymentproofs[$i]->amount}}</td>
                                    <td><a href="{{$paymentproofs[$i]->proof}}" target="_blank" class="text-primary">View</a></td>
                                </tr>
                                @endfor
                                @else
                                <tr><td><div class="text-center text-muted">No uploaded id yet</div></td></tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="ml-auto mr-3">{{ $paymentproofs->links() }}</div>
                </div>
            </div>

        </div>
        <!-- Page content ends -->
    </div>
</div>


@endsection