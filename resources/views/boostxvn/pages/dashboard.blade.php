<!-- ==================== DASHBOARD PAGE ==================== -->
<div id="page-dashboard" class="page">
  <div class="dashboard-layout">
    <!-- Sidebar -->
    <div class="sidebar">
      <div class="sidebar-section">
        <div class="sidebar-label">Khách hàng</div>
        <div class="sidebar-item active">
          <span class="sidebar-icon">📊</span>Tổng quan
        </div>
        <div class="sidebar-item" onclick="goPage('order-room')">
          <span class="sidebar-icon">📦</span>Đơn hàng của tôi
          <div class="sidebar-badge">3</div>
        </div>
        <div class="sidebar-item" onclick="goPage('wallet')">
          <span class="sidebar-icon">💰</span>Ví tiền
        </div>
        <div class="sidebar-item">
          <span class="sidebar-icon">💬</span>Tin nhắn
          <div class="sidebar-badge">2</div>
        </div>
        <div class="sidebar-item">
          <span class="sidebar-icon">⭐</span>Đánh giá
        </div>
      </div>
      <div class="sidebar-section">
        <div class="sidebar-label">Booster</div>
        <div class="sidebar-item" onclick="goPage('marketplace')">
          <span class="sidebar-icon">🏪</span>Marketplace
        </div>
        <div class="sidebar-item">
          <span class="sidebar-icon">⚡</span>Đơn đang làm
          <div class="sidebar-badge">1</div>
        </div>
        <div class="sidebar-item">
          <span class="sidebar-icon">📈</span>Thu nhập
        </div>
        <div class="sidebar-item">
          <span class="sidebar-icon">🏆</span>Xếp hạng
        </div>
      </div>
      <div class="sidebar-section">
        <div class="sidebar-label">Tài khoản</div>
        <div class="sidebar-item">
          <span class="sidebar-icon">👤</span>Hồ sơ
        </div>
        <div class="sidebar-item">
          <span class="sidebar-icon">⚙️</span>Cài đặt
        </div>
        <div class="sidebar-item">
          <span class="sidebar-icon">🚪</span>Đăng xuất
        </div>
      </div>
    </div>

    <!-- Main Content -->
    <div class="dash-content">
      <div class="dash-header">
        <h1>Xin chào, Minh Pro 👋</h1>
        <p>Thứ Ba, 03/06/2025 · Ví: <strong style="color:var(--gold)">2.340.000 ₫</strong></p>
      </div>

      <div class="stats-row">
        <div class="stat-card">
          <div class="sc-label">Đơn đang chạy</div>
          <div class="sc-value">3</div>
          <div class="sc-change sc-up">↑ 1 đơn mới hôm nay</div>
          <div class="sc-icon">📦</div>
        </div>
        <div class="stat-card">
          <div class="sc-label">Đã hoàn thành</div>
          <div class="sc-value">18</div>
          <div class="sc-change sc-up">↑ 98.5% tỷ lệ thành công</div>
          <div class="sc-icon">✅</div>
        </div>
        <div class="stat-card">
          <div class="sc-label">Số dư ví</div>
          <div class="sc-value">2.340k</div>
          <div class="sc-change" style="color:var(--text2)">≈ 234.000 đang ký quỹ</div>
          <div class="sc-icon">💰</div>
        </div>
        <div class="stat-card">
          <div class="sc-label">Đánh giá trung bình</div>
          <div class="sc-value">4.9 ⭐</div>
          <div class="sc-change sc-up">Xếp top 5% người dùng</div>
          <div class="sc-icon">🌟</div>
        </div>
      </div>

      <div class="dash-grid">
        <div class="dash-table">
          <div class="dash-table-header">
            <h3>📦 Đơn hàng gần đây</h3>
            <button class="btn btn-ghost btn-sm" onclick="goPage('marketplace')">Xem tất cả</button>
          </div>
          <table>
            <thead>
              <tr>
                <th>Đơn hàng</th>
                <th>Game</th>
                <th>Booster</th>
                <th>Trạng thái</th>
                <th>Giá</th>
                <th>Hành động</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div style="font-weight:600">#ORD-08471</div>
                  <div style="font-size:12px;color:var(--text2)">LMHT Rank Gold→Plat</div>
                </td>
                <td>⚔️ LMHT</td>
                <td>
                  <div class="booster-info">
                    <div class="booster-avatar" style="background:var(--accentG)">PV</div>
                    PhucVN
                  </div>
                </td>
                <td><div class="status-badge status-inprog">ĐANG LÀM</div></td>
                <td style="font-weight:700;font-family:var(--fs)">850k₫</td>
                <td><button class="btn btn-ghost btn-sm" onclick="goPage('order-room')">💬 Chat</button></td>
              </tr>
              <tr>
                <td>
                  <div style="font-weight:600">#ORD-08312</div>
                  <div style="font-size:12px;color:var(--text2)">FF Rank Heroic</div>
                </td>
                <td>🔥 Free Fire</td>
                <td>
                  <div class="booster-info">
                    <div class="booster-avatar" style="background:linear-gradient(135deg,#f43f5e,#be123c)">HK</div>
                    HungKing
                  </div>
                </td>
                <td><div class="status-badge status-comp">HOÀN THÀNH</div></td>
                <td style="font-weight:700;font-family:var(--fs)">450k₫</td>
                <td><button class="btn btn-ghost btn-sm">⭐ Đánh giá</button></td>
              </tr>
              <tr>
                <td>
                  <div style="font-weight:600">#ORD-08098</div>
                  <div style="font-size:12px;color:var(--text2)">Valorant Iron→Gold</div>
                </td>
                <td>🔫 Valorant</td>
                <td><span style="color:var(--text3)">Chưa nhận</span></td>
                <td><div class="status-badge status-open">OPEN</div></td>
                <td style="font-weight:700;font-family:var(--fs)">620k₫</td>
                <td><button class="btn btn-ghost btn-sm">👁️ Xem</button></td>
              </tr>
            </tbody>
          </table>
        </div>

        <div style="display:flex;flex-direction:column;gap:16px">
          <div class="mini-stat">
            <h3>🎮 Phân bổ đơn theo game</h3>
            <div class="progress-item" style="margin-top:16px">
              <div class="pi-row"><span class="pi-name">⚔️ LMHT</span><span class="pi-val">8 đơn (44%)</span></div>
              <div class="progress-bar"><div class="progress-fill" style="width:44%"></div></div>
            </div>
            <div class="progress-item">
              <div class="pi-row"><span class="pi-name">🔥 Free Fire</span><span class="pi-val">5 đơn (28%)</span></div>
              <div class="progress-bar"><div class="progress-fill" style="width:28%;background:var(--gold)"></div></div>
            </div>
            <div class="progress-item">
              <div class="pi-row"><span class="pi-name">🔫 Valorant</span><span class="pi-val">3 đơn (17%)</span></div>
              <div class="progress-bar"><div class="progress-fill" style="width:17%;background:var(--green)"></div></div>
            </div>
            <div class="progress-item">
              <div class="pi-row"><span class="pi-name">Khác</span><span class="pi-val">2 đơn (11%)</span></div>
              <div class="progress-bar"><div class="progress-fill" style="width:11%;background:var(--neon)"></div></div>
            </div>
          </div>

          <div class="sidebar-card">
            <h3 style="font-size:15px;margin-bottom:16px">⚡ Hành động nhanh</h3>
            <div style="display:flex;flex-direction:column;gap:8px">
              <button class="btn btn-primary" style="width:100%" onclick="showModal('create-order')">+ Tạo đơn mới</button>
              <button class="btn btn-ghost" style="width:100%" onclick="goPage('wallet')">💰 Nạp tiền</button>
              <button class="btn btn-neon" style="width:100%" onclick="goPage('marketplace')">🏪 Xem Marketplace</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
