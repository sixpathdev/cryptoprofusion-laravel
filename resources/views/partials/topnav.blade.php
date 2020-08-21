<div class="container-fluid w-100 top__nav__wrapper sticky-top">
    <div class="top__nav__contents py-2">
        <div class="row">
            <div class="col-6 col-lg-8">
                <div class=" align-items-center top__nav">
                    <div class="ml-lg-3">
                        <h6>
                            <span class="d-lg-none" id="top__nav__toggle">
                                <i class="fa fa-align-justify"></i>
                            </span>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-4">
                <div class="text-white float-right mr-1 mr-lg-3" style="display: flex;">
                    <span class="mr-2">
                    <img src="{{$user->photo}}" alt="P" class="img-fluid rounded-circle" width="40px" height="40px" />
                    </span>
                    <span style="font-size: 16px;">Hi, </span>
                    <span style="font-size: 14px;">{{ explode(' ', ucwords($user->fullname))[0] }}</span>
                </div>
            </div>
        </div>
    </div>
</div>