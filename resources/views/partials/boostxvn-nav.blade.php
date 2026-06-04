<nav>
  <div class="nav-inner">
    <a class="logo" href="{{ route('home') }}" style="text-decoration:none">
      <div class="logo-icon">⚡</div>
      <span>Boost</span>XVN
    </a>
    <div class="nav-links">
      <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Trang chủ</a>
      <a class="nav-link {{ request()->routeIs('marketplace.*') ? 'active' : '' }}" href="{{ route('marketplace.index') }}">Marketplace</a>
      @auth
        <a class="nav-link {{ request()->routeIs('dashboard*') ? 'active' : '' }}" href="{{ route('dashboard') }}">Dashboard</a>
        <a class="nav-link {{ request()->routeIs('wallet.*') ? 'active' : '' }}" href="{{ route('wallet.index') }}">Ví tiền</a>
        @if(auth()->user()->role === 'admin')
          <a class="nav-link {{ request()->routeIs('admin.*') ? 'active' : '' }}" href="{{ route('admin.index') }}">Admin</a>
        @endif
      @endauth
      <a class="nav-link {{ request()->routeIs('help.*') ? 'active' : '' }}" href="{{ route('help.index') }}">Trợ giúp</a>
    </div>
    <div class="nav-btns">
      @guest
        <a class="btn btn-ghost" href="{{ route('login') }}">Đăng nhập</a>
        <a class="btn btn-primary" href="{{ route('register') }}">Đăng ký</a>
      @else
        <span style="font-size:13px;color:var(--text2)">{{ auth()->user()->name }}</span>
        <form method="POST" action="{{ route('logout') }}" style="display:inline">@csrf<button class="btn btn-ghost" type="submit">Đăng xuất</button></form>
      @endguest
    </div>
  </div>
</nav>
