@if(session('success'))<div class="container-x mt-4"><div class="rounded-xl border border-emerald-500/30 bg-emerald-500/10 p-4 text-emerald-300">{{ session('success') }}</div></div>@endif
@if($errors->any())<div class="container-x mt-4"><div class="rounded-xl border border-red-500/30 bg-red-500/10 p-4 text-red-300">{{ $errors->first() }}</div></div>@endif
