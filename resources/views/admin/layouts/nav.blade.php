<div class="deznav">
    <div class="deznav-scroll">
		<ul class="metismenu" id="menu">
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
					<i class="flaticon-046-home"></i>
					<span class="nav-text">Home</span>
				</a>
                <ul aria-expanded="false">
					<li><a href="{{ url('/admin/home-banner') }}">Banner</a></li>
					<li><a href="{{ url('/admin/testimonials') }}">Testimonials</a></li>
					<li><a href="{{ url('/admin/gallery') }}">Gallery</a></li>
				</ul>
            </li>
			<li>
				<a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
					<i class="flaticon-money"></i>
					<span class="nav-text">Orders</span>
				</a>
				<ul aria-expanded="false">
					<li><a href="{{ url('/admin/orders/order-details') }}">Order Details</a></li>

				</ul>
			</li>
			<li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
					<i class="flaticon-coffee-cup"></i>
					<span class="nav-text">Cafe</span>
				</a>
                <ul aria-expanded="false">
					<li><a href="{{ url('/admin/cafe-banner') }}">Banner</a></li>
					<li><a href="{{ url('/admin/cafe') }}">Menu</a></li>
				</ul>
            </li>
			<li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
					<i class="flaticon-cutlery"></i>
					<span class="nav-text">Catering</span>
				</a>
                <ul aria-expanded="false">
					<li><a href="{{ url('/admin/catering-banner') }}">Banner</a></li>
					<li><a href="{{ url('/admin/catering/breakfast') }}">Bearkfast</a></li>
					<li><a href="{{ url('/admin/catering/tea') }}">AM/PM Tea</a></li>
					<li><a href="{{ url('/admin/catering/lunch') }}">Lunch</a></li>
					<li><a href="{{ url('/admin/catering/dinner') }}">Dinner</a></li>
					<li><a href="{{ url('/admin/catering/more') }}">More Items</a></li>
				</ul>
            </li>
			<li>
                <a class="has-arrow ai-icon" href="{{ url('/admin/site-settings') }}">
				    <i class="flaticon-setting"></i>
					<span class="nav-text">Site Settings</span>
				</a>
            </li>

			<li>
				<a class="has-arrow ai-icon" href="{{ url('/') }}" target="_blank">
					<i class="flaticon-039-goal"></i>
					<span class="nav-text">View Site</span>
				</a>
			</li>
        </ul>
	</div>
</div>