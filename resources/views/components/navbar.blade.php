<Style>
  .navbar {
    width: calc(100% - 1.5rem * 2 - 16.25rem);
    left: 278px;
    top: 18px;
    border-radius: 10px;
  }

  .main-navbar:before {
    -webkit-backdrop-filter: saturate(200%) blur(10px);
    backdrop-filter: saturate(200%) blur(10px);
    background: linear-gradient(180deg, rgba(37, 41, 60, 0.7) 44%, rgba(37, 41, 60, 0.43) 73%, rgba(37, 41, 60, 0));
    -webkit-mask: linear-gradient(#25293c, #25293c 18%, transparent 100%);
    mask: linear-gradient(#25293c, #25293c 18%, transparent 100%);
  }

  #header-3{
    .search-box {
      position: absolute;
      right: 48px;
      height: 100%;
      width: 0;
      padding: 0;
      opacity: 0;
      transition: all 0.3s;

      .search-input {
        border: 0;
        width: 100%;
        height: 100%;
        background-color: transparent;
      }

      .search-toggle {
        width: 14px;
        height: 14px;
        padding: 0;
        position: absolute;
        left: 5px;
        top: 50%;
        transform: translateY(-50%);
      }
    }

    &.show {

      .menu {

        li {
          opacity: 0;
          transition: all 0.3s;

          &:nth-child(even) {
            transform: translateY(-100%);
          }

          &:nth-child(odd) {
            transform: translateY(100%);
          }
        }
      }

      .search-box {
        width: calc(100% - 5em);
        opacity: 1;
        transition: all 0.3s 0.3s;
      }
    }
  }

</Style>

<!-- <header id="header-3" class="header">
  <nav class="header-nav">
    <div class="search-button">
      <a href="#" class="search-toggle" data-selector="#header-3"></a>
    </div>
    <ul class="menu">
      <li><a href="#">For Business</a></li>
      <li><a href="#">For Personal</a></li>
      <li><a href="#">Pricing</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
    <form action="" class="search-box">
      <input type="text" class="text search-input" placeholder="Type here to search..." />
    </form>
  </nav>
</header> -->

<header id="header-3" class="header">
  <nav class="navbar navbar-expand-lg main-navbar sticky header-nav">
    <div class="form-inline mr-auto">
      <div class="search-button">
        <a href="#" class="search-toggle" data-selector="#header-3"></a>
      </div>
      <ul class="navbar-nav mr-3 menu">
        <form action="" class="search-box">
          <input type="text" class="text search-input" placeholder="Type here to search..." />
        </form>
        <li><a href="javascript:void(0);" data-toggle="sidebar" class="nav-link nav-link-lg
              collapse-btn"> <i data-feather="align-justify"></i></a></li>
        <li><a href="javascript:void(0);" class="nav-link nav-link-lg fullscreen-btn">
            <i data-feather="maximize"></i>
          </a></li>
        <li>
        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
          <div class="navbar-nav align-items-center">
            <div class="nav-item navbar-search-wrapper mb-0">
              <a class="nav-item nav-link search-toggler d-flex align-items-center px-0" href="javascript:void(0);">
                <i class="fa fa-search ti-md me-2"></i>
                <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
              </a>
            </div>
          </div>
        </div>
        </li>
      </ul>
    </div>
    <ul class="navbar-nav navbar-right">
      <li class="dropdown"><a href="javascript:void(0);" data-toggle="dropdown"
          class="nav-link dropdown-toggle nav-link-lg nav-link-user"> 
          @if(Auth::user()->image == '')
            <img src="{{ asset('/uploads/default/default.png') }}" class="user-img-radious-style">
          @else
            <img src="{{ asset(''.Auth::user()->image) }}" class="user-img-radious-style">
          @endif
            <span class="d-sm-none d-lg-inline-block"></span></a>
        <div class="dropdown-menu dropdown-menu-right pullDown">
          <div class="dropdown-title"><b>{{ Auth::user()->name }}</b></div>
          <div class="dropdown-divider"></div>
          <a href="{{ route('users.changePassword') }}" 
            onclick="" 
            class="dropdown-item has-icon text-danger"> 
            <i class="fa fa-key" aria-hidden="true"></i>
              Change Password
          </a>
          <a href="{{ route('users.userProfile', Auth::user()->id) }}" 
            onclick="" 
            class="dropdown-item has-icon text-danger"> 
            <i class="fas fa-user"></i>
              Profile
          </a>
          <a href="{{ route('logout') }}" 
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" 
            class="dropdown-item has-icon text-danger"> 
            <i class="fas fa-sign-out-alt"></i>
              Logout
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </li>
    </ul>
  </nav>
</header>

<script>
  $('.header').on('click', '.search-toggle', function(e) {
  var selector = $(this).data('selector');

  $(selector).toggleClass('show').find('.search-input').focus();
  $(this).toggleClass('active');

  e.preventDefault();
});
</script>