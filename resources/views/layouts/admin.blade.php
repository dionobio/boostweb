@extends('layouts.app')
@section('content')
<div class="container-x py-8">
  <div class="grid gap-6 lg:grid-cols-[250px_1fr]">
    <aside class="card p-4 h-max">
      <div class="mb-4 px-4 font-display text-lg font-extrabold">Admin<span class="text-red-400">X</span></div>
      <a class="sidebar-link" href="{{ route('admin.index') }}">📊 Tổng quan</a>
      <a class="sidebar-link" href="{{ route('admin.orders') }}">📦 Đơn hàng</a>
      <a class="sidebar-link" href="{{ route('admin.users') }}">👥 Người dùng</a>
      <a class="sidebar-link" href="{{ route('admin.disputes') }}">⚖️ Tranh chấp</a>
    </aside>
    <section>@yield('admin')</section>
  </div>
</div>
@endsection
