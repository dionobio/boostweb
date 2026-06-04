@extends('layouts.boostxvn')
@section('content')
<div class="container" style="padding-top:32px;padding-bottom:60px;max-width:860px">
  <div class="breadcrumb"><a href="{{ route('home') }}" style="color:inherit;text-decoration:none">Trang chủ</a><span class="bc-sep">›</span><span class="active">Tạo đơn</span></div>
  <div class="sidebar-card"><h1 style="font-size:32px;margin-bottom:8px">Tạo đơn cày thuê</h1><p style="color:var(--text2);margin-bottom:24px">Khi tạo đơn, hệ thống sẽ khóa 100% ngân sách trong ví của bạn.</p>
    <form method="POST" action="{{ route('orders.store') }}">@csrf
      <div class="detail-meta-grid" style="grid-template-columns:1fr 1fr">
        <div class="form-group"><label>Game</label><select class="form-select" name="game_id" required>@foreach($games as $game)<option value="{{ $game->id }}" @selected(old('game_id')==$game->id)>{{ $game->icon }} {{ $game->name }}</option>@endforeach</select></div>
        <div class="form-group"><label>Server</label><input class="form-input" name="server" value="{{ old('server','VN') }}" required></div>
      </div>
      <div class="form-group"><label>Tiêu đề đơn</label><input class="form-input" name="title" value="{{ old('title') }}" placeholder="VD: LMHT · Cày rank Vàng III → Bạch Kim II" required></div>
      <div class="detail-meta-grid" style="grid-template-columns:1fr 1fr"><div class="form-group"><label>Tài khoản game</label><input class="form-input" name="account_login" value="{{ old('account_login') }}" required></div><div class="form-group"><label>Mật khẩu game</label><input class="form-input" name="account_password" value="{{ old('account_password') }}" required></div></div>
      <div class="form-group"><label>Mục tiêu</label><input class="form-input" name="target" value="{{ old('target') }}" placeholder="VD: Vàng III → Bạch Kim II" required></div>
      <div class="detail-meta-grid" style="grid-template-columns:1fr 1fr"><div class="form-group"><label>Ngân sách</label><input class="form-input" type="number" name="budget" value="{{ old('budget',500000) }}" min="50000" required></div><div class="form-group"><label>Deadline</label><input class="form-input" type="datetime-local" name="deadline_at" value="{{ old('deadline_at', now()->addDays(3)->format('Y-m-d\TH:i')) }}" required></div></div>
      <div class="form-group"><label>Ghi chú</label><textarea class="form-textarea" name="notes">{{ old('notes') }}</textarea></div>
      <div class="form-group"><label>Yêu cầu</label><textarea class="form-textarea" name="requirements">{{ old('requirements','Không đổi thông tin tài khoản. Gửi bằng chứng sau mỗi mốc tiến độ.') }}</textarea></div>
      <button class="btn btn-primary" style="width:100%;padding:14px">Tạo đơn và khóa ký quỹ</button>
    </form>
  </div>
</div>
@endsection
