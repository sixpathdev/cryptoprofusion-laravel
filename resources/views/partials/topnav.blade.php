<div class="container-fluid w-100 top__nav__wrapper sticky-top">
    <div class="top__nav__contents py-2">
        <div class="row">
            <div class="col-8">
                <div class=" align-items-center top__nav">
                    <div class="ml-3">
                        <h5>
                            <span style="color: white;">
                                Cryptoprofusion
                            </span>
                            <span class="d-lg-none" id="top__nav__toggle">
                                <i class="fa fa-align-justify"></i>
                            </span>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="text-white float-right">
                    <span style="font-size: 18px;">Holla, </span>
                    <span class="font-weight-bold" style="font-size: 20px;">{{ explode(' ', ucwords($user->fullname))[0] }}</span>
                </div>
            </div>
        </div>
    </div>
</div>