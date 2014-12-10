  @include('layout.header')
  <!-- User  Menu -->
        <div class="user-content">
            <div class="container">
                @if(Session::has('global'))
               <p class="alert alert-danger">{{ Session::get('global') }}</p>
                @endif
                @include('layout.navigation')
                @yield('content')
            </div>
        </div>
        @include('layout.footer')