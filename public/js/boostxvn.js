// ======================== NAVIGATION ========================
function goPage(id){
  document.querySelectorAll('.page').forEach(p=>p.classList.remove('active'));
  const pg=document.getElementById('page-'+id);
  if(pg){pg.classList.add('active');window.scrollTo(0,0)}
}

function setNav(el){
  document.querySelectorAll('.nav-link').forEach(n=>n.classList.remove('active'));
  el.classList.add('active');
}

// ======================== MODAL ========================
function showModal(id){
  document.getElementById('modal-'+id).classList.remove('hidden');
  document.body.style.overflow='hidden';
}
function closeModal(id){
  document.getElementById('modal-'+id).classList.add('hidden');
  document.body.style.overflow='';
}
function closeModalBg(e,id){
  if(e.target===document.getElementById('modal-'+id))closeModal(id);
}
document.addEventListener('keydown',e=>{
  if(e.key==='Escape'){
    document.querySelectorAll('.modal-bg:not(.hidden)').forEach(m=>{
      m.classList.add('hidden');
      document.body.style.overflow='';
    });
  }
});

// ======================== TOAST ========================
function showToast(msg,type='info'){
  const c=document.getElementById('toastContainer');
  const t=document.createElement('div');
  t.className=`toast toast-${type}`;
  const icon=type==='success'?'✅':type==='error'?'❌':'ℹ️';
  t.innerHTML=`${icon} ${msg}`;
  c.appendChild(t);
  setTimeout(()=>{t.style.animation='toastOut .3s ease forwards';setTimeout(()=>t.remove(),300)},3000);
}

// ======================== CHIP TOGGLE ========================
function toggleChip(el){
  el.parentElement.querySelectorAll('.chip').forEach(c=>c.classList.remove('active'));
  el.classList.add('active');
}

// ======================== MISC ========================
function filterGame(game){goPage('marketplace')}
function acceptOrder(){
  showModal('register');
  setTimeout(()=>showToast('Đăng nhập để nhận đơn!','info'),100);
}
function sendMsg(){
  const inp=document.querySelector('.chat-input');
  if(inp.value.trim()){
    showToast('Tin nhắn đã gửi!','success');
    inp.value='';
  }
}

// Quick tabs interaction
document.querySelectorAll('.tab').forEach(t=>{
  t.addEventListener('click',function(){
    this.closest('.tabs').querySelectorAll('.tab').forEach(x=>x.classList.remove('active'));
    this.classList.add('active');
  });
});

// Animated bars on admin page
function animateBars(){
  document.querySelectorAll('.bar').forEach((b,i)=>{
    const h=b.style.height;
    b.style.height='0';
    setTimeout(()=>{b.style.height=h;b.style.transition='height .6s cubic-bezier(.4,0,.2,1)'},i*80+100);
  });
}
document.querySelector('[onclick*="admin"]')&&document.querySelector('[onclick*="admin"]').addEventListener('click',()=>setTimeout(animateBars,300));

// Show the expected SPA section when Laravel serves the same Blade for demo paths.
document.addEventListener('DOMContentLoaded', () => {
  const path = window.location.pathname.replace(/\/$/, '');
  const map = {
    '/marketplace': 'marketplace',
    '/orders/demo': 'order-detail',
    '/dashboard': 'dashboard',
    '/wallet-demo': 'wallet',
    '/admin-demo': 'admin'
  };
  if (map[path]) goPage(map[path]);
});
