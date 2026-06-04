<div class="toast-container" id="toastContainer">
  @if(session('success'))
    <div class="toast toast-success">✅ {{ session('success') }}</div>
  @endif
  @if(session('error'))
    <div class="toast toast-error">❌ {{ session('error') }}</div>
  @endif
  @if($errors->any())
    <div class="toast toast-error">❌ {{ $errors->first() }}</div>
  @endif
</div>
