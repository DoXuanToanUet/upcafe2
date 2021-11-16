<nav class="navbar navbar-expand fixed-top be-top-header" style="background-color: #B0D5B9;">
    <div class="container-fluid">
        <div class="be-navbar-header">
            <a class="navbar-brand" href="{{ url('/') }}">
            <?php
                $logo = asset('uploads/logo/'.$site->logo);
            ?>
            <img src="{{$logo}}" alt="U cafe" width="60%">
            </a>
        </div>
        <div class="page-title">
            <!-- =======================    top botton  ====================== -->
            <div class="main-page">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="checkbox pb-4 float-right">
                                <input type="checkbox" class="checkbox">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="button-section" style="transform: translate(-46px, -1px);">
                                <ul class=" d-flex">
                                    <li> <a class="{{ empty($currentPage) || $currentPage == 'catering' ? 'show' : '' }}" href="/catering/breakfast">Select</a> <span></span></li>
                                    <li> <a class="{{ !empty($currentPage) && $currentPage == 'review' ? 'show' : '' }} ml-2" href="/review">Review</a> <span></span></li>
                                    <li> <a class="{{ !empty($currentPage) && $currentPage == 'details' ? 'show' : '' }} ml-2" href="/details">Details</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="page-title"><span>Dashboard</span></div> -->
        <div class="be-right-navbar finger-food">
            <!-- <ul class="nav navbar-nav float-right be-user-nav">
                <span style="font-size: 17px; color: black;    transform: translate(6px, 11px);" > 4 </span>
                <li class="mt-5 ">
                    <input type="checkbox" class="check">
                </li>
            </ul> -->
            <ul class="nav navbar-nav float-right be-icons-nav">
                <li class="nav-item "><a class="nav-link be-toggle-right-sidebar" href="#" role="button" aria-expanded="false"><span class="icon mdi mdi-settings"> <span  class="line" style="font-size: 16px; font-weight: 500 !important;"> <img src="/assets/front/assets/img/all user.png" width="10%" >&nbsp; Minimum Order </span>  <span style="font-size: 16px;font-weight: 500 !important;"><img src="/assets/front/assets/img/single user.png" width="5%">&nbsp; Price per person </span></span></a> </li>
            </ul>
        </div>
    </div>
</nav>