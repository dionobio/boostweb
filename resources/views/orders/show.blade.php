@extends('layouts.boostxvn')
@section('content')
<div class="container" style="padding-top:32px;padding-bottom:60px">
  <div class="breadcrumb"><a href="{{ route('home') }}" style="color:inherit;text-decoration:none">Trang chủ</a><span class="bc-sep">›</span><a href="{{ route('marketplace.index') }}" style="color:inherit;text-decoration:none">Marketplace</a><span class="bc-sep">›</span><span class="active">{{ $order->code }}</span></div>
  <div class="detail-layout">
    <div class="detail-main">
      <div class="detail-header">
        <div class="detail-game-row"><div class="game-icon gi-lol">{{ $order->game->icon }}</div><div><div style="font-size:13px;color:var(--text2);font-weight:600">{{ $order->game->name }} · {{ $order->server }}</div><div style="font-size:11px;color:var(--text3);margin-top:2px">ID Đơn: {{ $order->code }}</div></div><div class="status-badge status-open" style="margin-left:auto">{{ strtoupper(str_replace('_',' ',$order->status)) }}</div></div>
        <div class="detail-title">{{ $order->title }}</div>
        <p style="font-size:14px;color:var(--text2);line-height:1.7;margin-top:8px">{{ $order->notes ?: 'Khách hàng chưa thêm ghi chú.' }}</p>
        <div class="detail-meta-grid">
          <div class="detail-meta-item"><div class="dml">💰 Thù lao</div><div class="dmv" style="color:var(--gold)">{{ number_format($order->budget,0,',','.') }} ₫</div></div>
          <div class="detail-meta-item"><div class="dml">⏰ Deadline</div><div class="dmv">{{ $order->deadline_at?->diffForHumans() }}</div></div>
          <div class="detail-meta-item"><div class="dml">🎯 Mục tiêu</div><div class="dmv">{{ $order->target }}</div></div>
          <div class="detail-meta-item"><div class="dml">🖥️ Server</div><div class="dmv">{{ $order->server }}</div></div>
          <div class="detail-meta-item"><div class="dml">📊 Tiến độ</div><div class="dmv">{{ $order->progress }}%</div></div>
          <div class="detail-meta-item"><div class="dml">📅 Đăng lúc</div><div class="dmv">{{ $order->created_at?->diffForHumans() }}</div></div>
        </div>
      </div>
      <div class="detail-section"><h3>📋 Yêu cầu</h3><div class="req-list">@foreach(preg_split('/\r\n|\r|\n/', $order->requirements ?: 'Không giao dịch ngoài nền tảng.\nGửi bằng chứng tiến độ trong order room.\nKhông thay đổi thông tin tài khoản.') as $req)<div class="req-item">{{ $req }}</div>@endforeach</div></div>
      @auth
        @if(auth()->id()===$order->customer_id || auth()->id()===$order->booster_id || auth()->user()->role==='admin')
          <div class="detail-section"><h3>🔐 Thông tin tài khoản game</h3><p style="color:var(--text2);line-height:1.7">Chỉ người liên quan mới thấy phần này.</p><div class="detail-meta-grid"><div class="detail-meta-item"><div class="dml">Login</div><div class="dmv">{{ $order->account_login }}</div></div><div class="detail-meta-item"><div class="dml">Password</div><div class="dmv">{{ $order->account_password }}</div></div></div></div>
        @endif
      @endauth
    </div>
    <div class="detail-sidebar">
      <div class="sidebar-card"><div class="price-big">{{ number_format($order->budget,0,',','.') }}₫</div><div class="price-note">Tiền đã/được khóa ký quỹ trong ví khách</div><div style="margin-top:18px"><div class="escrow-row"><span>Ký quỹ</span><span class="amount">{{ number_format($order->escrow_amount,0,',','.') }}₫</span></div><div class="escrow-row"><span>Phí nền tảng 8%</span><span class="amount">{{ number_format($order->platform_fee,0,',','.') }}₫</span></div><div class="escrow-row"><span>Booster nhận</span><span class="amount">{{ number_format($order->booster_receive,0,',','.') }}₫</span></div></div>
        <div style="margin-top:18px;display:flex;flex-direction:column;gap:10px">
          @guest <a class="btn btn-primary" style="text-decoration:none;text-align:center" href="{{ route('login') }}">Đăng nhập để nhận đơn</a> @endguest
          @auth
            @if(auth()->user()->role==='booster' && $order->status==='open')<form method="POST" action="{{ route('orders.accept',$order) }}">@csrf<button class="btn btn-primary" style="width:100%">Nhận đơn</button></form>@endif
            @if(auth()->id()===$order->customer_id || auth()->id()===$order->booster_id || auth()->user()->role==='admin')<a class="btn btn-neon" style="text-decoration:none;text-align:center" href="{{ route('orders.room',$order) }}">Vào phòng đơn</a>@endif
          @endauth
        </div>
        <div class="warning-box">⚠️ Không giao dịch ngoài nền tảng. Mọi bằng chứng nên gửi trong phòng đơn.</div>
      </div>
      <div class="sidebar-card"><h3>Người đăng</h3><p style="color:var(--text2);margin-top:10px">{{ $order->customer->name }} · ⭐{{ $order->customer->rating }}</p></div>
    </div>
  </div>
</div>
@endsection
