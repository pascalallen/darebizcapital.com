<nav class="navbar navbar-expand-lg justify-content-end mt-md-5 mr-md-5">
    <button class="text-white navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="p-1 navbar-toggler-icon"><i class="fas fa-bars"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <a class="text-white nav-item nav-link" href="{{ route('welcome') }}">Home</a>
        <div class="nav-item dropdown">
            <a class="text-white nav-link dropdown-toggle" href="#" id="aboutDropdownLink" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                About Us
            </a>
            <div class="dropdown-menu" aria-labelledby="aboutDropdownLink">
                <a class="dropdown-item" href="{{ route('about') }}#our-team">Meet our Team</a>
                <a class="dropdown-item" href="{{ route('about') }}">About Dare Capital</a>
                @auth
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('profile.index') }}">Edit Profile</a>
                @endauth
            </div>
        </div>
        <div class="nav-item dropdown">
            <a class="text-white nav-link dropdown-toggle" href="#" id="resourcesDropdownLink" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                Resources
            </a>
            <div class="dropdown-menu" aria-labelledby="resourcesDropdownLink">
                <a class="dropdown-item" href="{{ route('broker-referral') }}">Broker Referrals</a>
                <a class="dropdown-item" href="{{ route('get-financing') }}">Get Financing</a>
                <a class="dropdown-item" href="{{ route('apply') }}">Application</a>
            </div>
        </div>
        @auth
            <div class="nav-item dropdown">
                <a class="text-white nav-link dropdown-toggle" href="#" id="storiesDropdownLink" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Blog
                </a>
                <div class="dropdown-menu" aria-labelledby="storiesDropdownLink">
                    <a class="dropdown-item" href="{{ route('blog') }}">Blog</a>
                    <a class="dropdown-item" href="{{ route('posts.index') }}">Manage</a>
                    <a class="dropdown-item" href="{{ route('posts.create') }}">Add New</a>
                </div>
            </div>
        @else
            <a class="text-white nav-item nav-link" href="{{ route('blog') }}">Blog</a>
        @endauth
        <a class="text-white nav-item nav-link nav-social" href="https://www.twitter.com/coledoescapital"
           target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
        <a class="text-white nav-item nav-link nav-social" href="https://www.facebook.com/DareBizCapital"
           target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
        <a class="text-white nav-item nav-link nav-social" href="https://www.linkedin.com/company/darecapital"
           target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a>
        @auth
            <a class="text-white nav-item nav-link" href="{{ route('logout') }}"
               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endauth
    </div>
</nav>
