<div class="navigation">
    <a href="/" id="top" class="navigation_logo">
        @if($app_banner)
            <img src="data:{{ $app_banner_type }};base64, {{ $app_banner }}" class="banner-image img-responsive">
        @else
            <img src="img/voxbone-logo.svg" class="banner-image img-responsive">
        @endif
    </a>
    <div class="navigation_extras"><a href="/" class="">
            Status
        </a><span class="btn navigation_log-in"><a href="/dashboard" class="nav_btn diagonal-green"><strong>Dashboard</strong></a></span>
    </div>
</div>




