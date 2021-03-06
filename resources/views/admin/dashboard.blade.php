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
                <div class="col-12 col-lg-8 offset-lg-2">
                    @if (session("success"))
                    <div class="alert alert-success text-center" role="alert">{{ session("success") }}</div>
                    @endif
                    @if (session("error"))
                    <div class="alert alert-danger text-center" role="alert">{{ session("error") }}</div>
                    @endif
                </div>
                <div class="col-12 mb-2 col-lg-4 mb-lg-0">
                    <div class="card">
                        <div class="card-body py-5">
                            <p class="h5 text-center">Total Deposited</p>
                            <p class="h3 text-center">{{ '$'.$total_deposited_amount }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-2 col-lg-4 mb-lg-0">
                    <div class="card">
                        <div class="card-body py-5">
                            <p class="h5 text-center">Total Referrals</p>
                            <p class="h3 text-center">$0</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-2 col-lg-4 mb-lg-0">
                    <div class="card">
                        <div class="card-body py-5">
                            <p class="h5 text-center">Total Members</p>
                            <p class="h3 text-center">{{$all_users_count->count()}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 col-lg-12">
                    <div class="card">
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
                                            <th scope="col">Action</th>
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
                                            <td>
                                                @if ($mytransactions[$i]->payment_status == 'pending')
                                                <form action="/admin/verifypayment" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="txid"
                                                        value="{{$mytransactions[$i]->id}}">
                                                    <input type="hidden" name="userId"
                                                        value="{{$mytransactions[$i]->userId}}">
                                                    <button type="submit" name="submit"
                                                        class="btn bg-primary text-white">Verify</button>
                                                </form>
                                                @else
                                                <button type="submit" name="submit"
                                                    class="btn bg-success text-white">Verified</button>
                                                @endif
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
            @if (count($user_arr))
                
            <div class="row mt-5">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <span class="d-block h6 font-weight-bold py-2">REFERRAL HISTORY</span>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="text-center text-white">
                                            <th scope="col">S/N</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Referral</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Referral bonus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for ($i = 0; $i < count($user_arr); $i++) <tr class="text-center text-white">
                                            <th scope="row">{{$i+1}}</th>
                                            <td>{{$user_arr[$i]->name}}</td>
                                            <td>{{$user_arr[$i]->referral}}</td>
                                            <td>{{$user_arr[$i]->email}}</td>
                                            <td>{{$user_arr[$i]->bonus}}</td>
                                            </tr>
                                            @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ml-auto mr-3">{{ $user_arr->links() }}</div>
            </div>
            @endif

        </div>
        <!-- Page content ends -->
    </div>
</div>


@endsection