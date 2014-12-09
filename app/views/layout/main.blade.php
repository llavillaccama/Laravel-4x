 <!-- User  Menu -->
        <div class="user-content">
            <div class="container">
                @if(Session::has('global'))
                <p>{{ Session::get('global') }}</p>
                @endif
                @include('layout.navigation')
                @yield('content')
            </div>
        </div>