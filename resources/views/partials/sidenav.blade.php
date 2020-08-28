<div class="col-lg-3 col-xl-2 d-md-block sicky-top">
    <div class="sidenav sidenav__unactive" id="sideNav">
        <div class="pl-3">
            <img src="/img/logo/logo3.png" class="img-fluid" />
        </div>
        <ul class="sidenav_links d-sm text-center">
            @if (Auth::user()->type == 'superadmin')
            <li class="mb-1"><a style="font-size: 14px;" href="/admin/dashboard">Admin Dashboard</a></li>
            <li class="my-1"><a style="font-size: 14px;" href="/admin/payment-proofs">Payment proofs</a></li>
            <li class="my-1"><a style="font-size: 14px;" href="/admin/id-proofs">Uploaded Ids</a></li>
            @endif
            <li class="my-1"><a style="font-size: 14px;" href="/user/dashboard">Dashboard</a></li>
            <li class="my-1"><a style="font-size: 14px;" href="/user/payment-plan">Make Payment</a></li>
            <li class="my-1"><a style="font-size: 14px;" href="/user/profile">Profile</a></li>
            <li class="my-1"><a style="font-size: 14px;" href="/logout">Logout</a></li>
        </ul>
    </div>

    <div id="body__click"></div>
</div>