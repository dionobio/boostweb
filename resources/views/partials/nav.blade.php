<nav class="glass-nav">
  <div class="container-x flex h-16 items-center justify-between">
    <a href="{{ route('home') }}" class="flex items-center gap-2 font-display text-2xl font-extrabold"><span class="brand-gradient flex h-9 w-9 items-center justify-center rounded-xl text-base">⚡</span><span class="text-gradient">Boost</span>XVN</a>
    <div class="hidden items-center gap-1 md:flex">
      <a class="rounded-xl px-4 py-2 text-sm font-semibold text-slate-400 hover:bg-panel2 hover:text-white" href="{{ route('home') }}">Trang chủ</a>
      <a class="rounded-xl px-4 py-2 text-sm font-semibold text-slate-400 hover:bg-panel2 hover:text-white" href="{{ route('marketplace.index') }}">Marketplace</a>
      @auth
      <a class="rounded-xl px-4 py-2 text-sm font-semibold text-slate-400 hover:bg-panel2 hover:text-white" href="{{ route('wallet.index') }}">Ví tiền</a>
      <a class="rounded-xl px-4 py-2 text-sm font-semibold text-slate-400 hover:bg-panel2 hover:text-white" href="{{ auth()->user()->role === 'booster' ? route('dashboard.booster') : route('dashboard.customer') }}">Dashboard</a>
      @if(auth()->user()->role === 'admin')<a class="rounded-xl px-4 py-2 text-sm font-semibold text-red-300 hover:bg-panel2" href="{{ route('admin.index') }}">Admin</a>@endif
      @endauth
      <a class="rounded-xl px-4 py-2 text-sm font-semibold text-slate-400 hover:bg-panel2 hover:text-white" href="{{ route('help.index') }}">Trợ giúp</a>
    </div>
    <div class="flex items-center gap-2">
      @guest
        <a class="btn-ghost" href="{{ route('login') }}">Đăng nhập</a><a class="btn-primary" href="{{ route('register') }}">Đăng ký</a>
      @else
        <span class="hidden text-sm text-slate-400 sm:block">{{ auth()->user()->name }}</span>
        <form method="POST" action="{{ route('logout') }}">@csrf<button class="btn-ghost">Thoát</button></form>
      @endguest
    </div>
  </div>
</nav>
