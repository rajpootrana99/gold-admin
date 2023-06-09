<!-- BEGIN: Header-->
<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow">
    <div class="navbar-container d-flex content">

        <ul class="nav navbar-nav align-items-center ml-auto">
            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span class="user-name font-weight-bolder">{{ Auth::user()->name }}</span><span class="user-status">Admin</span></div><span class="avatar"><img class="round" src="{{ asset('app-assets/images/portrait/small/avatar-s-11.jpg') }}" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user"><a class="dropdown-item" href="page-profile.html"><i class="mr-50" data-feather="user"></i> Profile</a>
                    <div class="dropdown-divider"></div>
                    <form action="{{ route('logout') }}" style="display: none;" method="post" id="lgut">
                        @csrf
                        <input type="submit" id="logoutbtn">
                    </form>
                    <a class="dropdown-item" type="button" onclick="$('#lgut').submit()"><i class="mr-50" data-feather="power"></i> Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!-- END: Header-->