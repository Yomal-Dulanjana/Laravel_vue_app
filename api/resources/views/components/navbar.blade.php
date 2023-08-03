<!-- header section strats -->
  <header class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html"><img width="250" src="images/icons.png"
                    alt="#" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('book') }}">Book List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                @if (Auth::user())
        <form method="POST" action="{{ route('logout') }}" x-data>
          @csrf

          <x-dropdown-link href="{{ route('logout') }}"
                   @click.prevent="$root.submit();">
              {{ __('Log Out') }}
          </x-dropdown-link>
      </form>
        @else
        <button href="{{ route('login',$book->id) }}" class="btn btn-danger">Lgin</a></button>
        @endif
            </div>
        </nav>
    </div>
</header>
<!-- end header section -->