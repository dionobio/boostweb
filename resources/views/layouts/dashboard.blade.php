@extends('layouts.app')
@section('content')
<div class="container-x py-8">
  <div class="grid gap-6 lg:grid-cols-[250px_1fr]">
    <aside class="card p-4 h-max">
      <div class="mb-4 px-4 text-xs font-bold uppercase tracking-widest text-slate-500">Dashboard</div>
      <a class="sidebar-link {{ request()->routeIs('dashboard.customer') ? 'sidebar-link-active' : '' }}" href="{{ route('dashboard.customer') }}">👤 Khách hàng</a>
      <a class="sidebar-link {{ request()->routeIs('dashboard.booster') ? 'sidebar-link-active' : '' }}" href="{{ route('dashboard.booster') }}">⚡ Booster</a>
      <a class="sidebar-link {{ request()->routeIs('wallet.index') ? 'sidebar-link-active' : '' }}" href="{{ route('wallet.index') }}">💳 Ví tiền</a>
      <a class="sidebar-link" href="{{ route('disputes.create') }}">⚖️ Tranh chấp</a>
    </aside>
    <section>@yield('dashboard')</section>
  </div>
</div>
@endsection
