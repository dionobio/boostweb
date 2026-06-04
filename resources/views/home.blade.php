@extends('layouts.boostxvn')
@section('content')
<div class="hero">
  <div class="hero-bg"></div><div class="hero-grid"></div>
  <div class="hero-content">
    <div>
      <div class="hero-badge">🇻🇳 Nền tảng cày thuê trung gian · Ký quỹ an toàn</div>
      <h1>Nền tảng<br><span class="grad">Cày Thuê Game</span><br>Uy tín nhất VN</h1>
      <p class="hero-sub">Kết nối người thuê cày game với booster. Đăng đơn, khóa tiền ký quỹ, chat trong phòng đơn, gửi bằng chứng và giải ngân tự động khi hoàn thành.</p>
      <div class="hero-actions">
        @auth
          <a class="btn btn-primary" style="font-size:16px;padding:14px 32px;text-decoration:none" href="{{ route('orders.create') }}">🎮 Đăng đơn ngay</a>
          <a class="btn btn-neon" style="font-size:16px;padding:14px 32px;text-decoration:none" href="{{ route('marketplace.index') }}">💰 Nhận đơn kiếm tiền</a>
        @else
          <a class="btn btn-primary" style="font-size:16px;padding:14px 32px;text-decoration:none" href="{{ route('register') }}">🎮 Bắt đầu miễn phí</a>
          <a class="btn btn-neon" style="font-size:16px;padding:14px 32px;text-decoration:none" href="{{ route('login') }}">Đăng nhập</a>
        @endauth
      </div>
      <div class="hero-stats">
        <div class="hero-stat"><strong>{{ number_format($topOrders->count() + 12400) }}+</strong><small>Đơn hoàn thành</small></div>
        <div class="hero-stat"><strong>3.200+</strong><small>Booster uy tín</small></div>
        <div class="hero-stat"><strong>98.5%</strong><small>Tỷ lệ thành công</small></div>
        <div class="hero-stat"><strong>4.9⭐</strong><small>Đánh giá TB</small></div>
      </div>
    </div>
    <div class="hero-visual">
      @php($featured = $topOrders->first())
      <div class="hero-card">
        <div class="hc-head">
          <div class="hc-game">
            <div class="game-icon gi-lol">{{ $featured?->game?->icon ?? '⚔️' }}</div>
            <div><div style="font-size:15px;font-weight:700;font-family:var(--fs)">{{ $featured?->game?->name ?? 'Liên Minh Huyền Thoại' }}</div><div style="font-size:12px;color:var(--text2)">{{ $featured?->server ?? 'Server VN' }} · Ranked</div></div>
          </div>
          <div class="status-badge status-open">{{ strtoupper(str_replace('_',' ', $featured?->status ?? 'open')) }}</div>
        </div>
        <div class="hc-body">
          <strong>{{ $featured?->title ?? 'Cày rank từ Vàng III → Bạch Kim II' }}</strong>
          <div style="font-size:13px;color:var(--text2);margin-top:6px">Deadline: {{ optional($featured?->deadline_at)->diffForHumans() ?? '5 ngày' }}</div>
          <div class="reward">{{ number_format($featured?->budget ?? 850000,0,',','.') }} ₫</div>
          <div style="font-size:12px;color:var(--text2)">Ký quỹ: {{ number_format($featured?->escrow_amount ?? 850000,0,',','.') }} ₫ · Phí platform: 8%</div>
        </div>
        <div class="hc-footer">
          <div class="booster-info"><div class="booster-avatar" style="background:var(--accentG)">BX</div><span>{{ $featured?->customer?->name ?? 'Khách hàng Demo' }}</span></div>
          <a class="btn btn-primary btn-sm" style="text-decoration:none" href="{{ $featured ? route('orders.show',$featured) : route('marketplace.index') }}">Xem đơn</a>
        </div>
      </div>
      <div class="mini-cards">
        @foreach($topOrders->skip(1)->take(2) as $order)
          <a class="mini-card" href="{{ route('orders.show',$order) }}" style="text-decoration:none;color:inherit">
            <div style="display:flex;align-items:center;gap:10px"><div class="game-icon" style="width:36px;height:36px;font-size:16px;background:var(--accentG)">{{ $order->game->icon }}</div><div><div style="font-size:14px;font-weight:600">{{ $order->title }}</div><div style="font-size:12px;color:var(--text2)">{{ $order->deadline_at?->diffForHumans() }}</div></div></div>
            <div style="font-family:var(--fs);font-weight:800;color:var(--gold)">{{ number_format($order->budget,0,',','.') }}₫</div>
          </a>
        @endforeach
      </div>
    </div>
  </div>
</div>

<section style="padding-top:0">
  <div class="container">
    <div class="section-head"><div class="section-tag">🎮 Danh mục game</div><h2>Hỗ trợ các tựa game hot</h2><p>Chọn game để xem đơn đang mở trong marketplace.</p></div>
    <div class="games-grid">
      @foreach($games as $game)
        <a class="game-card" href="{{ route('marketplace.index', ['game'=>$game->slug]) }}" style="text-decoration:none;color:inherit">
          <span class="game-emoji">{{ $game->icon }}</span><div class="game-name">{{ $game->name }}</div><div class="game-count">{{ $game->orders_count ?? '' }} Đang có đơn</div>
        </a>
      @endforeach
    </div>
  </div>
</section>

<section style="background:var(--bg2)">
  <div class="container"><div class="section-head"><div class="section-tag">⚡ Quy trình thật</div><h2>Đăng đơn → Ký quỹ → Nhận đơn → Hoàn thành</h2></div>
    <div class="process-steps">
      @foreach([['📝','Tạo đơn hàng','Điền game, server, tài khoản, mục tiêu, deadline và ngân sách.'],['🔒','Khóa ký quỹ','Hệ thống trừ ví khả dụng và khóa tiền trong ví khách.'],['🤝','Booster nhận đơn','Booster đăng nhập vai trò người nhận đơn và bấm nhận đơn.'],['📊','Chat & bằng chứng','Hai bên trao đổi trong order room, booster gửi ảnh tiến độ.'],['✅','Giải ngân','Khách xác nhận, hệ thống trừ phí 8% và chuyển tiền cho booster.']] as $i=>$s)
      <div class="process-step"><div class="step-num">{{ str_pad($i+1,2,'0',STR_PAD_LEFT) }}</div><div class="step-icon">{{ $s[0] }}</div><h3>{{ $s[1] }}</h3><p>{{ $s[2] }}</p></div>
      @endforeach
    </div>
  </div>
</section>
@endsection
