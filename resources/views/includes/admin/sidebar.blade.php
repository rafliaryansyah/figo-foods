<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="#">Figo Foods</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="#">FF</a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="dropdown{{ request()->is('dashboard') ? ' active' : '' }}">
          <a href="{{ url('/dashboard') }}" class="nav-link active"><i class="fas fa-fire"></i><span>Dashboard</span></a>
        </li>
        <li class="menu-header">Welcome</li>
        <li class="dropdown{{ request()->is('welcome') ? ' active' : '' }}">
          <a href="{{ url('/welcome') }}" class="nav-link"><i class="fas fa-door-open"></i> <span>Welcome</span></a>
        </li>
        <li class="menu-header">Why Choose Us</li>
        <li class="dropdown{{ request()->is('choose') ? ' active' : '' }}">
          <a href="{{ url('/choose') }}" class="nav-link"><i class="fas fa-thumbtack"></i> <span>Why Choose Us</span></a>
        </li>
        <li class="menu-header">History</li>
        <li class="dropdown{{ request()->is('history') ? ' active' : '' }}">
          <a href="{{ url('/history') }}" class="nav-link"><i class="fas fa-history"></i> <span>History</span></a>
        </li>
        <li class="menu-header">Latest News</li>
        <li class="dropdown{{ request()->is('news') ? ' active' : '' }}">
          <a href="{{ url('/news') }}" class="nav-link"><i class="fas fa-newspaper"></i> <span>Latest News</span></a>
        </li>
        <li class="menu-header">Footer</li>
        <li class="dropdown">
          <a href="" class="nav-link"><i class="fas fa-th-large"></i> <span>Footer</span></a>
        </li>
      </ul>
    </aside>
</div>