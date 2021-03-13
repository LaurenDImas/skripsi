<div class="header-top">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Left-->
        <div class="d-none d-lg-flex align-items-center mr-3">
            <!--begin::Logo-->
            <a href="index.html" class="mr-20">
                <img alt="Logo" src="{{asset('assets/media/logos/logo-letter-9.png')}}" class="max-h-35px" />
            </a>
            <!--end::Logo-->
            <!--begin::Tab Navs(for desktop mode)-->
            <h5 class="text-white my-1" style="letter-spacing: 1.5px; font-weight: 700">Daily Work Reports</h5>
            <!--begin::Tab Navs-->
        </div>
        <!--end::Left-->
        <!--begin::Topbar-->
        <div class="topbar bg-primary">
            <!--begin::User-->
            <div class="topbar-item">
                <div class="btn btn-icon btn-hover-transparent-white w-sm-auto d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                    <div class="d-flex flex-column text-right pr-sm-3">
                        <span class="text-white opacity-50 font-weight-bold font-size-sm d-none d-sm-inline">{{isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email}}</span>
                        <span class="text-white font-weight-bolder font-size-sm d-none d-sm-inline">Manager Development</span>
                    </div>
                    <span class="symbol symbol-35">
                        <span class="symbol-label font-size-h5 font-weight-bold text-white bg-white-o-30">S</span>
                    </span>
                </div>
            </div>
            <!--end::User-->
        </div>
        <!--end::Topbar-->
    </div>
    <!--end::Container-->
</div>