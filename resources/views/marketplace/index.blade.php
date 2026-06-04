@extends('layouts.boostxvn')
@section('content')
<div class="container" style="padding-top:32px;padding-bottom:60px">
  <div class="breadcrumb"><a href="{{ route('home') }}" style="color:inherit;text-decoration:none">Trang chủ</a><span class="bc-sep">›</span><span class="active">Marketplace</span></div>
  <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:32px;flex-wrap:wrap;gap:12px">
    <div><h1 style="font-size:32px;margin-bottom:4px">Marketplace Đơn Hàng</h1><p style="color:var(--text2)">Đang có <strong style="color:var(--text)">{{ $orders->total() }}</strong> đơn — dữ liệu lấy từ MySQL.</p></div>
    @auth <a class="btn btn-primary" style="text-decoration:none" href="{{ route('orders.create') }}">+ Đăng đơn mới</a> @else <a class="btn btn-primary" style="text-decoration:none" href="{{ route('login') }}">Đăng nhập để đăng đơn</a> @endauth
  </div>
  <div class="marketplace-layout">
    <form class="filter-panel" method="GET" action="{{ route('marketplace.index') }}">
      <h3>🔍 Bộ lọc thật</h3>
      <div class="filter-group"><label>Game</label><select class="range-input" name="game"><option value="">Tất cả game</option>@foreach($games as $game)<option value="{{ $game->slug }}" @selected(request('game')===$game->slug)>{{ $game->icon }} {{ $game->name }}</option>@endforeach</select></div>
      <div class="filter-group"><label>Trạng thái</label><select class="range-input" name="status"><option value="">Tất cả</option>@foreach(['open'=>'Open','accepted'=>'Accepted','submitted'=>'Submitted','completed'=>'Completed','disputed'=>'Disputed'] as $k=>$v)<option value="{{ $k }}" @selected(request('status')===$k)>{{ $v }}</option>@endforeach</select></div>
      <button class="btn btn-primary" style="width:100%">Áp dụng bộ lọc</button>
    </form>
    <div>
      <div class="orders-grid">
        @forelse($orders as $order)
          @php($statusClass = in_array($order->status,['open'])?'status-open':($order->status==='completed'?'status-comp':($order->status==='disputed'?'status-dispute':'status-inprog')))
          <a class="order-card" href="{{ route('orders.show',$order) }}" style="text-decoration:none;color:inherit">
            <div class="order-game-icon gi-lol">{{ $order->game->icon }}</div>
            <div class="order-main">
              <div style="display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:6px"><div class="order-title">{{ $order->title }}</div><div class="status-badge {{ $statusClass }}">{{ strtoupper(str_replace('_',' ',$order->status)) }}</div></div>
              <div class="order-meta"><span>🎮 {{ $order->server }}</span><span>⏰ {{ $order->deadline_at?->diffForHumans() }}</span><span>📅 {{ $order->created_at?->diffForHumans() }}</span><span>🎯 {{ $order->target }}</span></div>
              <div class="order-tags"><div class="tag">{{ $order->game->name }}</div><div class="tag">Ký quỹ</div><div class="tag">Phí 8%</div></div>
              <div class="booster-info"><div class="booster-avatar" style="background:var(--accentG)">{{ mb_substr($order->customer->name,0,1) }}</div><span>Khách hàng: {{ $order->customer->name }} @if($order->booster) · Booster: {{ $order->booster->name }} @endif</span></div>
            </div>
            <div class="order-right"><div class="price">{{ number_format($order->budget,0,',','.') }}₫</div><div class="price-sub">Booster nhận {{ number_format($order->booster_receive,0,',','.') }}₫</div><span class="btn btn-primary btn-sm" style="margin-top:12px;width:100%;display:inline-block">Chi tiết</span></div>
          </a>
        @empty
          <div class="sidebar-card">Chưa có đơn phù hợp bộ lọc.</div>
        @endforelse
      </div>
      <div style="margin-top:28px">{{ $orders->links() }}</div>
    </div>
  </div>
</div>
@endsection
