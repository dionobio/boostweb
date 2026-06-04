@extends('layouts.boostxvn')
@section('content')
<div class="container" style="padding:60px 24px"><div class="section-head"><div class="section-tag">📰 Tin tức</div><h2>Thông báo mới</h2></div><div class="features-grid">@foreach($articles ?? [] as $article)<div class="feature-card"><h3>{{ $article->title }}</h3><p>{{ $article->excerpt ?? \Illuminate\Support\Str::limit($article->content,120) }}</p></div>@endforeach</div></div>
@endsection
