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
            <div class="row offset-3 mt-2 mt-lg-3">
                <div class="col-8">
                    @if (session("error"))
                    <div class="alert alert-danger text-center" role="alert"><small>{{ session("error") }}</small></div>
                    @endif
                    @if (session("success"))
                    <div class="alert alert-success text-center" role="alert"><small>{{ session("success") }}</small></div>
                    @endif
                    <div class="card">
                        <div class="card-body py-4 px-3">
                            <form action="/user/uploadproof" method="POST" enctype="multipart/form-data">
                                @csrf

                                {{-- Add initial details --}}
                                <div id="step_one">
                                    <div class="form-group mb-4">
                                        <input type="hidden" name="plan" value="{{$plan->name}}" />
                                        <div class="form-group mb-4">
                                            <label for="email">Email Address</label>
                                            <input type="email" id="email" class="form-control form-control-md"
                                                placeholder="Email Address" name="user_email" value="{{$user->email}}"
                                                readonly />
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="email">Amount</label>
                                            <input type="number" name="amount" min="300" max="85000"
                                                class="form-control form-control-md" placeholder="Amount" />
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="">Payment Method</label>
                                            <input type="text" name="payment_method" placeholder="Bitcoin"
                                                class="form-control form-control-md" value="Bitcoin" readonly />
                                        </div>
                                        <button type="button" id="proceed_stepOne" class="btn w-100"
                                            style="background-color:white;color:#76A140;">Proceed</button>
                                    </div>
                                </div>

                                {{-- Upload proof form --}}
                                <div id="upload_proof" style="display: none;">
                                    <span class="d-block h5 font-weight-bold">MAKE DEPOSIT</span>
                                    <p>All Bitcoin payments should be sent to the bitcoin address below:</p>
                                    <p class="my-3 font-weight-bold">3GyEims5zYT2EK6ho8hmiEavTTRTo6bqK4</p>
                                    <p>Please note that your deposit amount should be sent else your funding would
                                        be marked
                                        as
                                        pending.</p>
                                    <div style="background: #fff;" class="pt-2">
                                        <p class="text-center text-danger font-weight-bold">* Do well to upload
                                            proof of
                                            payment
                                            below for reference purpose, after your transfer</p>
                                        <div class="p-2">
                                            <div class="custom-file">
                                                <input type="file" name="image_proof">
                                                {{-- <label class="custom-file-label" for="customFile">Choose file</label> --}}
                                            </div>
                                            <button type="submit" class="btn mt-1"
                                                style="background-color:#76A140;color:#fff;">Upload</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

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
                                        @for ($i = 0; $i < count($mytransactions); $i++)
                                            <tr class="text-center text-white">
                                        <th scope="row">{{$i+1}}</th>
                                            <td>{{$mytransactions[$i]->bitcoin_address}}</td>
                                            <td>{{$mytransactions[$i]->created_at}}</td>
                                            <td class="font-weight-bold {{$mytransactions[$i]->payment_status == 'pending' ? 'text-danger' : 'text-success'}}"><span class="p-2" style="background: white;border-radius:20px;">{{$mytransactions[$i]->payment_status}}</span></td>
                                        </tr>
                                        @endfor
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                <div class="ml-auto mr-3">{{ $mytransactions->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection