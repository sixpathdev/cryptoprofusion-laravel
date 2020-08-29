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
                    <div class="table-responsive">
                        <table class="table table-hovder">
                            <thead>
                                <tr>
                                    <th scope="col">S/N</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Wallet Address</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($users_list) > 0)
                                @foreach ($users_list as $user_list)
                                <tr>
                                    <th scope="row">{{$user_list->id}}</th>
                                    <td>{{$user_list->fullname}}</td>
                                    <td>{{$user_list->wallet->address}}</td>
                                    <td>{{$user_list->email}}</td>
                                    <td>
                                    <a href="/admin/user/{{$user_list->id}}">View User</a>    
                                    </td>
                                    </tr>
                                @endforeach
                                    @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="ml-auto mt-2 mr-3">{{ $users_list->links() }}</div>
                </div>
            </div>
        </div>
        <!-- Page content ends -->
    </div>
</div>

@endsection