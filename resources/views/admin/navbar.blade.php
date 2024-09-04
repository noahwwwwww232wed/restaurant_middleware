<link rel="stylesheet" href="{{asset('css/navbar.css') }}">

<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
        <img class="logo" src="{{asset('logo.jpeg')}}" alt="Logo">
          
        </a>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/dashboard">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard/menu">Menu admin</a>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard/overons">Contact admin</a>
                    </li>
                </ul>
                <span class="navbar-text">
          <div class="hidden sm:flex sm:items-center sm:ms-6 d-flex flex-row">
              <!-- User name display -->
              <div class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white">
                  {{ Auth::user()->name }}
              </div>
            
              <!-- Profile link -->
              <a href="{{ route('profile.edit') }}" class="ml-4 inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                  {{ __('Profile') }}
              </a>
 
              <!-- Logout form -->
              <form method="POST" action="{{ route('logout') }}" class="ml-4">
                  @csrf
                  <button type="submit" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                      {{ __('Log Out') }}
                  </button>
              </form>
          </div>
        </span>
                </ul>
            </div>
        </div>
        <a class="login-button" href="login" >Log in</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>