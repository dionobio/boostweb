<!-- ==================== ADMIN PAGE ==================== -->
<div id="page-admin" class="page">
  <div class="dashboard-layout">
    <div class="sidebar admin-sidebar">
      <div class="admin-logo">⚡ Boost<span>X</span>VN<br><span style="font-size:11px;font-weight:400;color:var(--text2)">Admin Dashboard</span></div>
      <div class="sidebar-section">
        <div class="sidebar-label">Tổng quan</div>
        <div class="sidebar-item active"><span class="sidebar-icon">📊</span>Dashboard</div>
        <div class="sidebar-item"><span class="sidebar-icon">💹</span>Doanh thu</div>
        <div class="sidebar-item"><span class="sidebar-icon">📦</span>Đơn hàng<div class="sidebar-badge">12</div></div>
      </div>
      <div class="sidebar-section">
        <div class="sidebar-label">Quản lý</div>
        <div class="sidebar-item"><span class="sidebar-icon">👥</span>Người dùng</div>
        <div class="sidebar-item"><span class="sidebar-icon">💰</span>Ví & Giao dịch</div>
        <div class="sidebar-item"><span class="sidebar-icon">⚖️</span>Tranh chấp<div class="sidebar-badge" style="background:var(--red)">3</div></div>
        <div class="sidebar-item"><span class="sidebar-icon">📰</span>CMS Bài viết</div>
      </div>
      <div class="sidebar-section">
        <div class="sidebar-label">Cấu hình</div>
        <div class="sidebar-item"><span class="sidebar-icon">⚙️</span>Cài đặt phí</div>
        <div class="sidebar-item"><span class="sidebar-icon">🎮</span>Danh mục game</div>
        <div class="sidebar-item"><span class="sidebar-icon">🚨</span>Nhật ký hệ thống</div>
      </div>
    </div>

    <div class="dash-content">
      <div class="dash-header">
        <h1 style="display:flex;align-items:center;gap:10px">
          📊 Admin Dashboard 
          <span class="status-badge status-open" style="font-size:11px">LIVE</span>
        </h1>
        <p>Cập nhật lúc 17:30 · 03/06/2025</p>
      </div>

      <!-- REVENUE CHART -->
      <div class="revenue-chart">
        <div style="display:flex;justify-content:space-between;align-items:center">
          <h3>📈 Doanh thu 7 ngày gần đây</h3>
          <div style="font-family:var(--fs);font-size:22px;font-weight:800;color:var(--gold)">48.200.000 ₫</div>
        </div>
        <div class="chart-bars">
          <div class="bar-col"><div class="bar" style="height:60%"></div><div class="bar-label">T2</div></div>
          <div class="bar-col"><div class="bar" style="height:80%"></div><div class="bar-label">T3</div></div>
          <div class="bar-col"><div class="bar" style="height:45%"></div><div class="bar-label">T4</div></div>
          <div class="bar-col"><div class="bar" style="height:90%"></div><div class="bar-label">T5</div></div>
          <div class="bar-col"><div class="bar" style="height:100%;background:var(--neon)"></div><div class="bar-label">T6</div></div>
          <div class="bar-col"><div class="bar" style="height:75%"></div><div class="bar-label">T7</div></div>
          <div class="bar-col"><div class="bar" style="height:88%"></div><div class="bar-label">CN</div></div>
        </div>
      </div>

      <!-- ADMIN STATS -->
      <div class="admin-top-row">
        <div class="admin-stat" data-icon="📦">
          <div class="as-label">Tổng đơn hôm nay</div>
          <div class="as-value">247</div>
          <div class="as-note">↑ 23% so với hôm qua</div>
        </div>
        <div class="admin-stat" data-icon="💰">
          <div class="as-label">Phí platform hôm nay</div>
          <div class="as-value">7.8M ₫</div>
          <div class="as-note">↑ 15% so với hôm qua</div>
        </div>
        <div class="admin-stat" data-icon="👥">
          <div class="as-label">User mới hôm nay</div>
          <div class="as-value">134</div>
          <div class="as-note">↑ 8% so với hôm qua</div>
        </div>
        <div class="admin-stat" data-icon="⚖️">
          <div class="as-label">Tranh chấp chờ xử lý</div>
          <div class="as-value" style="color:var(--red)">3</div>
          <div class="as-note" style="color:var(--gold)">⚠️ Cần xử lý gấp</div>
        </div>
      </div>

      <!-- ADMIN TABLES -->
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px">
        <div class="dash-table">
          <div class="dash-table-header">
            <h3>⚖️ Tranh chấp cần xử lý</h3>
            <div class="status-badge status-dispute">3 Chờ xử lý</div>
          </div>
          <table>
            <thead>
              <tr>
                <th>ID Tranh chấp</th>
                <th>Đơn hàng</th>
                <th>Hành động</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div style="font-weight:600">#DSP-021</div>
                  <div style="font-size:11px;color:var(--red)">Gấp · 2 giờ trước</div>
                </td>
                <td>
                  <div style="font-size:13px">LMHT · 850k₫</div>
                  <div style="font-size:11px;color:var(--text2)">Khách: Minh vs Booster: TuanAnh</div>
                </td>
                <td>
                  <div style="display:flex;gap:6px">
                    <button class="action-btn ab-blue">👁️ Xem</button>
                    <button class="action-btn ab-green">✅</button>
                    <button class="action-btn ab-red">❌</button>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div style="font-weight:600">#DSP-020</div>
                  <div style="font-size:11px;color:var(--gold)">5 giờ trước</div>
                </td>
                <td>
                  <div style="font-size:13px">Free Fire · 450k₫</div>
                  <div style="font-size:11px;color:var(--text2)">Khách: LinhThu vs Booster: DungVN</div>
                </td>
                <td>
                  <div style="display:flex;gap:6px">
                    <button class="action-btn ab-blue">👁️ Xem</button>
                    <button class="action-btn ab-green">✅</button>
                    <button class="action-btn ab-red">❌</button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="dash-table">
          <div class="dash-table-header">
            <h3>📦 Đơn hàng gần đây</h3>
          </div>
          <table>
            <thead>
              <tr>
                <th>Đơn hàng</th>
                <th>Trạng thái</th>
                <th>Phí</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div style="font-size:13px;font-weight:600">#ORD-08471</div>
                  <div style="font-size:11px;color:var(--text2)">LMHT · 850k₫</div>
                </td>
                <td><div class="status-badge status-inprog">ĐANG LÀM</div></td>
                <td style="color:var(--green);font-weight:700">68.000₫</td>
              </tr>
              <tr>
                <td>
                  <div style="font-size:13px;font-weight:600">#ORD-08470</div>
                  <div style="font-size:11px;color:var(--text2)">Valorant · 620k₫</div>
                </td>
                <td><div class="status-badge status-comp">HOÀN THÀNH</div></td>
                <td style="color:var(--green);font-weight:700">49.600₫</td>
              </tr>
              <tr>
                <td>
                  <div style="font-size:13px;font-weight:600">#ORD-08469</div>
                  <div style="font-size:11px;color:var(--text2)">PUBG · 380k₫</div>
                </td>
                <td><div class="status-badge status-wait">CHỜ TT</div></td>
                <td style="color:var(--text2)">Chờ</td>
              </tr>
              <tr>
                <td>
                  <div style="font-size:13px;font-weight:600">#ORD-08468</div>
                  <div style="font-size:11px;color:var(--text2)">FF · 450k₫</div>
                </td>
                <td><div class="status-badge status-dispute">TRANH CHẤP</div></td>
                <td style="color:var(--red)">Đang xử lý</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
