
<section id="imprNoti">
    <div class="container">
        <div class="notify">
            <span class="icon">
                <i class="fa fa-envelope"></i> {{ $site->email }}
            </span>
            <span class="icon">
                <i class="fa fa-phone"></i> {{ $site->contact }}
            </span>
        </div>
    </div>
</section>
<div id="header_area" class="<?=(isset($indexPage)) ? 'index-page-menu' : ''?>">
    <nav class='desktop'>
        <div class="container-1">
            <?php
                $logo = asset('uploads/logo/'.$site->logo);
            ?>
            <a href="{{ url('/') }}" class="logo">
                <img src="{{$logo}}" alt="logo" class="logo-img">
            </a>
            <ul>
                <li><a href="{{ url('/cafe') }}" class="<?=(isset($pageName) && $pageName == 'cafe') ? 'active-nav' : ''?>">CAFE</a></li>
                <li><a href="{{ url('/catering') }}" class="<?=(isset($pageName) && $pageName == 'catering') ? 'active-nav' : ''?>">CATERING</a></li>
                @if(isset($pageName) && $pageName == 'catering'))
                    <a href="/catering/breakfast" class="order-home-head"> <li>ORDER ONLINE</li></a>
                @elseif(!isset($setCafe))
                    <a href="mailto: <?=$site->email?>" class="order-home-head"> <li>PRE-ORDER</li></a>
                @endif
            </ul>
        </div>
    </nav>
</div>
<nav class="mobile">
    <ul>
        <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> <span>HOME</span></a></li>
        <li><a href="{{ url('/cafe') }}"><i class="fa fa-bars"></i> <span>CAFE</span></a></li>
        <li><a href="{{ url('/catering') }}"><i class="fa fa-bars"></i> <span>CATERING</span></a></li>
        <li><a href="{{ url('/contact-us') }}"><i class="fa fa-phone"></i> <span>CONTACT</span></a></li>
        <li><a href="{{ url('/catering/breakfast') }}"><i class="fa fa-bars"></i><span>ORDER ONLINE</span></a> </li>
    </ul>
</nav>