<div class="nav-header">
    <a href="{{ url('/admin/home-banner') }}" class="brand-logo">
        <?php
			$logo = asset('uploads/logo/'.$site->logo);
		?>
		<img src="{{$logo}}" width="100">
    </a>
    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <ul class="navbar-nav header-right">
					<li class="nav-item dropdown  header-profile">
						<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
							<?php
								$img = 'https://ui-avatars.com/api/?name='.auth()->user()->name;
							?>
							<img src="{{$img}}" width="56" alt=""/>
						</a>
						<div class="dropdown-menu dropdown-menu-end">
							<a href="{{ url('/admin/site-settings') }}" class="dropdown-item ai-icon">
								<span class="ms-2">Site Settings</span>
							</a>
							<a href="{{ route('logout') }}" class="dropdown-item ai-icon" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
								<span class="ms-2">Logout</span>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</a>
						</div>
					</li>
                </ul>
            </div>
		</nav>
	</div>
</div>