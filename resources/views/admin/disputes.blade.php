@extends('layouts.boostxvn')
@section('content')
<div class="container" style="padding:32px 24px 60px"><h1 style="font-size:32px;margin-bottom:20px">Quản lý tranh chấp</h1><div class="dash-table"><table><thead><tr><th>Đơn</th><th>Người tạo</th><th>Lý do</th><th>Trạng thái</th><th>Ngày</th></tr></thead><tbody>@foreach($disputes as $dispute)<tr><td>{{ $dispute->order?->code }}</td><td>{{ $dispute->creator?->name }}</td><td>{{ $dispute->reason }}</td><td>{{ $dispute->status }}</td><td>{{ $dispute->created_at->format('d/m/Y') }}</td></tr>@endforeach</tbody></table></div><div style="margin-top:20px">{{ $disputes->links() }}</div></div>
@endsection
