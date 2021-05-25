<nav class="sidebar">
    <div class="sidebar-header">
        <a href="{{url('/')}}" class="sidebar-brand">
            BeconHome<span>Tutors.</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="{{ url('/admin') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">Manage</li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
                  <i class="link-icon" data-feather="user"></i>
                  <span class="link-title">Teacher</span>
                  <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="emails">
                  <ul class="nav sub-menu">
                    <li class="nav-item">
                      <a href="{{ url('/admin/urtas') }}" class="nav-link">URTA</a>
                    </li>
                    <li class="nav-item">
                      <a href="" class="nav-link">Clients</a>
                    </li>
                    <li class="nav-item">
                      <a href="" class="nav-link">RTA</a>
                    </li>
                  </ul>
                </div>
              </li>
            <li class="nav-item">
                <a href="{{ url('/admin/roles') }}" class="nav-link">
                    <i class="link-icon" data-feather="shield"></i>
                    <span class="link-title">Roles</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/admin/permissions') }}" class="nav-link">
                    <i class="link-icon" data-feather="unlock"></i>
                    <span class="link-title">Permissions</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/admin/users') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Users</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
<nav class="settings-sidebar">
    <div class="sidebar-body">
        <a href="#" class="settings-sidebar-toggler">
            <i data-feather="settings"></i>
        </a>
        <h6 class="text-muted">Sidebar:</h6>
        <div class="form-group border-bottom">
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight"
                           value="sidebar-light" checked>
                    Light
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark"
                           value="sidebar-dark">
                    Dark
                </label>
            </div>
        </div>
    </div>
</nav>
