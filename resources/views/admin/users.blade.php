@extends('layouts.boostxvn')
@section('content')
<div class="container" style="padding:32px 24px 60px"><h1 style="font-size:32px;margin-bottom:20px">Quản lý người dùng</h1><div class="dash-table"><table><thead><tr><th>Tên</th><th>Email</th><th>Role</th><th>Rating</th><th>Đơn hoàn thành</th></tr></thead><tbody>@foreach($users as $user)<tr><td>{{ $user->name }}</td><td>{{ $user->email }}</td><td>{{ $user->role }}</td><td>{{ $user->rating }}</td><td>{{ $user->completed_orders }}</td></tr>@endforeach</tbody></table></div><div style="margin-top:20px">{{ $users->links() }}</div></div>
@endsection
