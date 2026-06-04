<!-- ==================== WALLET PAGE ==================== -->
<div id="page-wallet" class="page">
  <div class="container" style="padding-top:32px;padding-bottom:60px">
    <div class="breadcrumb">
      <span onclick="goPage('home')">Trang chủ</span>
      <span class="bc-sep">›</span>
      <span class="active">Ví tiền</span>
    </div>
    
    <div class="wallet-hero">
      <div style="font-size:13px;color:var(--text2);margin-bottom:4px;font-weight:600;letter-spacing:.5px">SỐ DƯ HIỆN TẠI</div>
      <div class="wallet-balance"><span>₫</span> 2.340.000</div>
      <div style="font-size:14px;color:var(--text2);margin-top:4px">
        Đang ký quỹ: <strong style="color:var(--gold)">850.000 ₫</strong> · 
        Có thể rút: <strong style="color:var(--green)">1.490.000 ₫</strong>
      </div>
      <div class="wallet-actions">
        <button class="btn btn-primary" onclick="showModal('deposit')">+ Nạp tiền</button>
        <button class="btn btn-ghost" onclick="showModal('withdraw')">↗ Rút tiền</button>
      </div>
    </div>

    <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:16px;margin-bottom:32px">
      <div class="stat-card">
        <div class="sc-label">Đã nạp</div>
        <div class="sc-value" style="font-size:22px">5.200.000₫</div>
        <div class="sc-change" style="color:var(--text2)">Tổng cộng</div>
      </div>
      <div class="stat-card">
        <div class="sc-label">Đã chi</div>
        <div class="sc-value" style="font-size:22px">2.860.000₫</div>
        <div class="sc-change" style="color:var(--text2)">18 đơn hàng</div>
      </div>
      <div class="stat-card">
        <div class="sc-label">Phí platform</div>
        <div class="sc-value" style="font-size:22px">228.800₫</div>
        <div class="sc-change" style="color:var(--text2)">8% mỗi đơn</div>
      </div>
      <div class="stat-card">
        <div class="sc-label">Đã rút</div>
        <div class="sc-value" style="font-size:22px">100.000₫</div>
        <div class="sc-change sc-up">Đã xử lý</div>
      </div>
    </div>

    <div class="tx-list">
      <div class="tx-header" style="display:flex;justify-content:space-between;align-items:center">
        <h3>📋 Lịch sử giao dịch</h3>
        <div class="tabs" style="margin-bottom:0;background:var(--bg3)">
          <div class="tab active">Tất cả</div>
          <div class="tab">Nạp tiền</div>
          <div class="tab">Thanh toán</div>
          <div class="tab">Rút tiền</div>
        </div>
      </div>

      <div class="tx-item">
        <div class="tx-icon tx-lock">🔒</div>
        <div class="tx-body">
          <div class="tb-title">Ký quỹ đơn #ORD-08471 · LMHT Rank</div>
          <div class="tb-sub">03/06/2025 10:32 · Đang ký quỹ cho đơn đang chạy</div>
        </div>
        <div style="text-align:right">
          <div class="tx-amount locked">-850.000 ₫</div>
          <div style="font-size:11px;color:var(--gold)">Đang ký quỹ</div>
        </div>
      </div>

      <div class="tx-item">
        <div class="tx-icon tx-in">↓</div>
        <div class="tx-body">
          <div class="tb-title">Nạp tiền qua VNPay</div>
          <div class="tb-sub">02/06/2025 20:15 · Mã GD: VNP20250602201534</div>
        </div>
        <div style="text-align:right">
          <div class="tx-amount pos">+2.000.000 ₫</div>
          <div style="font-size:11px;color:var(--green)">Thành công</div>
        </div>
      </div>

      <div class="tx-item">
        <div class="tx-icon tx-out">↑</div>
        <div class="tx-body">
          <div class="tb-title">Thanh toán hoàn thành đơn #ORD-08312 · Free Fire</div>
          <div class="tb-sub">01/06/2025 18:40 · Booster: HungKing</div>
        </div>
        <div style="text-align:right">
          <div class="tx-amount neg">-450.000 ₫</div>
          <div style="font-size:11px;color:var(--red)">Đã thanh toán</div>
        </div>
      </div>

      <div class="tx-item">
        <div class="tx-icon tx-fee">%</div>
        <div class="tx-body">
          <div class="tb-title">Phí platform 8% · Đơn #ORD-08312</div>
          <div class="tb-sub">01/06/2025 18:40 · Phí tự động trừ</div>
        </div>
        <div style="text-align:right">
          <div class="tx-amount" style="color:var(--text2)">-36.000 ₫</div>
          <div style="font-size:11px;color:var(--text2)">Phí dịch vụ</div>
        </div>
      </div>

      <div class="tx-item">
        <div class="tx-icon tx-in">↓</div>
        <div class="tx-body">
          <div class="tb-title">Hoàn tiền tranh chấp #DSP-012 · Valorant</div>
          <div class="tb-sub">28/05/2025 14:22 · Admin xử lý: hoàn toàn bộ</div>
        </div>
        <div style="text-align:right">
          <div class="tx-amount pos">+620.000 ₫</div>
          <div style="font-size:11px;color:var(--green)">Đã hoàn tiền</div>
        </div>
      </div>

      <div class="tx-item">
        <div class="tx-icon tx-in">↓</div>
        <div class="tx-body">
          <div class="tb-title">Nạp tiền qua MoMo</div>
          <div class="tb-sub">25/05/2025 09:10 · Mã GD: MM2025052509104</div>
        </div>
        <div style="text-align:right">
          <div class="tx-amount pos">+1.000.000 ₫</div>
          <div style="font-size:11px;color:var(--green)">Thành công</div>
        </div>
      </div>
    </div>
  </div>
</div>
