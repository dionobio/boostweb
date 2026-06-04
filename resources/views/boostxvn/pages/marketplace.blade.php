<!-- ==================== MARKETPLACE PAGE ==================== -->
<div id="page-marketplace" class="page">
  <div class="container" style="padding-top:32px;padding-bottom:60px">
    <div class="breadcrumb">
      <span onclick="goPage('home')">Trang chủ</span>
      <span class="bc-sep">›</span>
      <span class="active">Marketplace</span>
    </div>
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:32px;flex-wrap:wrap;gap:12px">
      <div>
        <h1 style="font-size:32px;margin-bottom:4px">Marketplace Đơn Hàng</h1>
        <p style="color:var(--text2)">Đang có <strong style="color:var(--text)">1.247 đơn</strong> đang mở — Tìm đơn phù hợp với bạn</p>
      </div>
      <button class="btn btn-primary" onclick="showModal('create-order')">+ Đăng đơn mới</button>
    </div>

    <div class="marketplace-layout">
      <!-- FILTERS -->
      <div class="filter-panel">
        <h3>🔍 Bộ lọc</h3>
        
        <div class="filter-group">
          <label>Game</label>
          <div class="filter-chips">
            <div class="chip active" onclick="toggleChip(this)">Tất cả</div>
            <div class="chip" onclick="toggleChip(this)">⚔️ LMHT</div>
            <div class="chip" onclick="toggleChip(this)">🔫 Valorant</div>
            <div class="chip" onclick="toggleChip(this)">📱 Tốc Chiến</div>
            <div class="chip" onclick="toggleChip(this)">🔥 Free Fire</div>
            <div class="chip" onclick="toggleChip(this)">🎯 PUBG</div>
            <div class="chip" onclick="toggleChip(this)">🌸 Genshin</div>
          </div>
        </div>
        
        <div class="filter-group">
          <label>Trạng thái</label>
          <div class="filter-chips">
            <div class="chip active" onclick="toggleChip(this)">Tất cả</div>
            <div class="chip" onclick="toggleChip(this)">🟢 Open</div>
            <div class="chip" onclick="toggleChip(this)">🔵 Đang làm</div>
          </div>
        </div>
        
        <div class="filter-group">
          <label>Ngân sách (₫)</label>
          <div class="range-row" style="flex-direction:column;gap:8px">
            <input type="number" class="range-input" placeholder="Từ: 100.000" />
            <input type="number" class="range-input" placeholder="Đến: 5.000.000" />
          </div>
        </div>
        
        <div class="filter-group">
          <label>Deadline</label>
          <div class="filter-chips">
            <div class="chip" onclick="toggleChip(this)">24h</div>
            <div class="chip" onclick="toggleChip(this)">3 ngày</div>
            <div class="chip" onclick="toggleChip(this)">7 ngày</div>
            <div class="chip" onclick="toggleChip(this)">Linh hoạt</div>
          </div>
        </div>

        <div class="filter-group">
          <label>Sắp xếp</label>
          <select class="range-input">
            <option>Mới nhất</option>
            <option>Giá cao nhất</option>
            <option>Giá thấp nhất</option>
            <option>Deadline gần nhất</option>
          </select>
        </div>
        
        <button class="btn btn-primary" style="width:100%">Áp dụng bộ lọc</button>
      </div>

      <!-- ORDERS LIST -->
      <div>
        <div class="orders-grid">
          <!-- Order 1 -->
          <div class="order-card" onclick="goPage('order-detail')">
            <div class="order-game-icon gi-lol">⚔️</div>
            <div class="order-main">
              <div style="display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:6px">
                <div class="order-title">LMHT · Cày rank Vàng III → Bạch Kim II</div>
                <div class="status-badge status-open">OPEN</div>
              </div>
              <div class="order-meta">
                <span>🎮 Server VN</span>
                <span>⏰ Deadline: 5 ngày</span>
                <span>📅 Đăng: 2 giờ trước</span>
                <span>👁️ 47 lượt xem</span>
              </div>
              <div class="order-tags">
                <div class="tag">Ranked</div>
                <div class="tag">Mid/ADC</div>
                <div class="tag">Ưu tiên sáng</div>
              </div>
              <div class="booster-info">
                <div class="booster-avatar" style="background:linear-gradient(135deg,#4ade80,#16a34a)">KH</div>
                <span>Khách hàng: Minh_Pro · Lần đầu đăng</span>
              </div>
            </div>
            <div class="order-right">
              <div class="price">850.000₫</div>
              <div class="price-sub">Ký quỹ 20%: 170.000₫</div>
              <button class="btn btn-primary btn-sm" style="margin-top:12px;width:100%">Nhận đơn</button>
            </div>
          </div>

          <!-- Order 2 -->
          <div class="order-card" onclick="goPage('order-detail')">
            <div class="order-game-icon gi-val">🔫</div>
            <div class="order-main">
              <div style="display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:6px">
                <div class="order-title">Valorant · Rank Bronze → Gold III</div>
                <div class="status-badge status-inprog">ĐANG LÀM</div>
              </div>
              <div class="order-meta">
                <span>🎮 SEA</span>
                <span>⏰ Còn: 36 giờ</span>
                <span>📅 Đăng: 5 giờ trước</span>
                <span>✅ Tiến độ: 60%</span>
              </div>
              <div class="order-tags">
                <div class="tag">Rank Solo</div>
                <div class="tag">Không stream</div>
              </div>
              <div class="booster-info">
                <div class="booster-avatar" style="background:var(--accentG)">PV</div>
                <span>Booster: PhucVN · ⭐4.9 · 234 đơn</span>
              </div>
            </div>
            <div class="order-right">
              <div class="price">620.000₫</div>
              <div class="price-sub">Đang tiến hành</div>
            </div>
          </div>

          <!-- Order 3 -->
          <div class="order-card" onclick="goPage('order-detail')">
            <div class="order-game-icon gi-ff">🔥</div>
            <div class="order-main">
              <div style="display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:6px">
                <div class="order-title">Free Fire · Cày skin + rank Heroic</div>
                <div class="status-badge status-open">OPEN</div>
              </div>
              <div class="order-meta">
                <span>🎮 Server VN</span>
                <span>⏰ Deadline: 3 ngày</span>
                <span>📅 Đăng: 1 giờ trước</span>
                <span>👁️ 23 lượt xem</span>
              </div>
              <div class="order-tags">
                <div class="tag">Rank</div>
                <div class="tag">Cày event</div>
                <div class="tag">Có thể stream</div>
              </div>
              <div class="booster-info">
                <div class="booster-avatar" style="background:linear-gradient(135deg,#f59e0b,#d97706)">LT</div>
                <span>Khách hàng: LinhThu_FF · 3 đơn đã đăng</span>
              </div>
            </div>
            <div class="order-right">
              <div class="price">450.000₫</div>
              <div class="price-sub">Ký quỹ 20%: 90.000₫</div>
              <button class="btn btn-primary btn-sm" style="margin-top:12px;width:100%">Nhận đơn</button>
            </div>
          </div>

          <!-- Order 4 -->
          <div class="order-card" onclick="goPage('order-detail')">
            <div class="order-game-icon gi-pubg">🎯</div>
            <div class="order-main">
              <div style="display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:6px">
                <div class="order-title">PUBG Mobile · Cày Conqueror + 10 wins</div>
                <div class="status-badge status-open">OPEN</div>
              </div>
              <div class="order-meta">
                <span>🎮 VN/TH</span>
                <span>⏰ Deadline: 7 ngày</span>
                <span>📅 Đăng: 30 phút trước</span>
                <span>🔥 Đơn hot</span>
              </div>
              <div class="order-tags">
                <div class="tag">Conqueror</div>
                <div class="tag">Squad</div>
                <div class="tag">Gấp</div>
              </div>
            </div>
            <div class="order-right">
              <div class="price">1.200.000₫</div>
              <div class="price-sub">Ký quỹ 20%: 240.000₫</div>
              <button class="btn btn-primary btn-sm" style="margin-top:12px;width:100%">Nhận đơn</button>
            </div>
          </div>

          <!-- Order 5 -->
          <div class="order-card" onclick="goPage('order-detail')">
            <div class="order-game-icon" style="background:linear-gradient(135deg,#1de9b6,#00897b)">🌸</div>
            <div class="order-main">
              <div style="display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:6px">
                <div class="order-title">Genshin Impact · Cày Abyss Floor 12 + Weapon</div>
                <div class="status-badge status-open">OPEN</div>
              </div>
              <div class="order-meta">
                <span>🖥️ PC/Mobile</span>
                <span>⏰ Deadline: 2 ngày</span>
                <span>📅 Đăng: 3 giờ trước</span>
              </div>
              <div class="order-tags">
                <div class="tag">Spiral Abyss</div>
                <div class="tag">Cần AR 55+</div>
              </div>
            </div>
            <div class="order-right">
              <div class="price">320.000₫</div>
              <div class="price-sub">Ký quỹ 20%: 64.000₫</div>
              <button class="btn btn-primary btn-sm" style="margin-top:12px;width:100%">Nhận đơn</button>
            </div>
          </div>
        </div>

        <!-- Pagination -->
        <div style="display:flex;justify-content:center;gap:8px;margin-top:32px;align-items:center">
          <button class="btn btn-ghost btn-sm">‹</button>
          <button class="btn btn-primary btn-sm">1</button>
          <button class="btn btn-ghost btn-sm">2</button>
          <button class="btn btn-ghost btn-sm">3</button>
          <span style="color:var(--text2)">...</span>
          <button class="btn btn-ghost btn-sm">24</button>
          <button class="btn btn-ghost btn-sm">›</button>
        </div>
      </div>
    </div>
  </div>
</div>
