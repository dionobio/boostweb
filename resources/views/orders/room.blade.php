@extends('layouts.boostxvn')
@section('content')
<div class="container" style="padding-top:24px;padding-bottom:40px">
  <div class="breadcrumb"><a href="{{ route('orders.show',$order) }}" style="color:inherit;text-decoration:none">{{ $order->code }}</a><span class="bc-sep">›</span><span class="active">Phòng đơn</span></div>
  <div class="room-layout">
    <div class="chat-panel">
      <div class="chat-header"><div class="game-icon gi-lol">{{ $order->game->icon }}</div><div><strong>{{ $order->title }}</strong><div style="font-size:12px;color:var(--text2)">{{ $order->customer->name }} @if($order->booster) ↔ {{ $order->booster->name }} @endif</div></div></div>
      <div class="chat-messages">
        @forelse($order->messages as $msg)
          <div class="msg {{ $msg->user_id===auth()->id() ? 'msg-me' : 'msg-other' }}">
            <div class="msg-bubble">{{ $msg->message ?: 'Đã gửi bằng chứng.' }}</div>
            @if($msg->proof_path)<div class="msg-proof"><div class="proof-img">🖼️</div><a href="{{ asset('storage/'.$msg->proof_path) }}" target="_blank" style="color:var(--accent)">Xem ảnh bằng chứng</a></div>@endif
            <div class="msg-time">{{ $msg->user->name }} · {{ $msg->created_at->diffForHumans() }}</div>
          </div>
        @empty
          <div class="msg msg-other"><div class="msg-bubble">Phòng chat đã sẵn sàng. Hãy trao đổi trong nền tảng để có bằng chứng khi tranh chấp.</div></div>
        @endforelse
      </div>
      <form class="chat-input-row" method="POST" enctype="multipart/form-data" action="{{ route('orders.messages.store',$order) }}">@csrf
        <input type="file" name="proof" class="hidden" id="proofFile"><label for="proofFile" class="icon-btn">📎</label>
        <textarea class="chat-input" name="message" placeholder="Nhập tin nhắn hoặc ghi chú bằng chứng..."></textarea>
        <button class="send-btn" type="submit">➤</button>
      </form>
    </div>
    <div class="room-sidebar">
      <h3>Tiến độ đơn</h3>
      <div class="progress-ring"><div class="progress-ring-num">{{ $order->progress }}%</div><div style="font-size:12px;color:var(--text2)">{{ strtoupper(str_replace('_',' ',$order->status)) }}</div></div>
      <div class="progress-bar"><div class="progress-fill" style="width:{{ $order->progress }}%"></div></div>
      <div style="display:flex;flex-direction:column;gap:10px">
        @if(auth()->id()===$order->booster_id && !in_array($order->status,['submitted','completed']))<form method="POST" action="{{ route('orders.submit',$order) }}">@csrf<button class="btn btn-primary" style="width:100%">Gửi hoàn thành</button></form>@endif
        @if(auth()->id()===$order->customer_id && $order->status==='submitted')<form method="POST" action="{{ route('orders.complete',$order) }}">@csrf<button class="btn btn-green" style="width:100%">Xác nhận hoàn thành</button></form>@endif
        <a class="btn btn-ghost" style="text-decoration:none;text-align:center" href="{{ route('disputes.create', ['order_id'=>$order->id]) }}">Tạo tranh chấp</a>
      </div>
      <div class="progress-log"><div class="log-item"><div class="log-dot done"></div><div class="log-body"><div class="lb-title">Đơn được tạo</div><div class="lb-time">{{ $order->created_at->format('d/m/Y H:i') }}</div></div></div>@if($order->accepted_at)<div class="log-item"><div class="log-dot done"></div><div class="log-body"><div class="lb-title">Booster nhận đơn</div><div class="lb-time">{{ $order->accepted_at->format('d/m/Y H:i') }}</div></div></div>@endif @if($order->submitted_at)<div class="log-item"><div class="log-dot"></div><div class="log-body"><div class="lb-title">Đã gửi hoàn thành</div><div class="lb-time">{{ $order->submitted_at->format('d/m/Y H:i') }}</div></div></div>@endif</div>
    </div>
  </div>
</div>
@endsection
