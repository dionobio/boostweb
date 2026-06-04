<!-- ==================== HOME PAGE ==================== -->
<div id="page-home" class="page active">

  <!-- HERO -->
  <div class="hero">
    <div class="hero-bg"></div>
    <div class="hero-grid"></div>
    <div class="hero-content">
      <div>
        <div class="hero-badge">🇻🇳 Nền tảng #1 Việt Nam · 24/7 An toàn</div>
        <h1>Nền tảng<br><span class="grad">Cày Thuê Game</span><br>Uy tín nhất VN</h1>
        <p class="hero-sub">Kết nối người chơi với booster chuyên nghiệp. Thanh toán an toàn qua ký quỹ, theo dõi tiến độ thời gian thực.</p>
        <div class="hero-actions">
          <button class="btn btn-primary" style="font-size:16px;padding:14px 32px" onclick="goPage('marketplace')">🎮 Đăng đơn ngay</button>
          <button class="btn btn-neon" style="font-size:16px;padding:14px 32px" onclick="showModal('register')">💰 Nhận đơn kiếm tiền</button>
        </div>
        <div class="hero-stats">
          <div class="hero-stat"><strong>12.400+</strong><small>Đơn hoàn thành</small></div>
          <div class="hero-stat"><strong>3.200+</strong><small>Booster uy tín</small></div>
          <div class="hero-stat"><strong>98.5%</strong><small>Tỷ lệ thành công</small></div>
          <div class="hero-stat"><strong>4.9⭐</strong><small>Đánh giá TB</small></div>
        </div>
      </div>
      <div class="hero-visual">
        <div class="hero-card">
          <div class="hc-head">
            <div class="hc-game">
              <div class="game-icon gi-lol">⚔️</div>
              <div>
                <div style="font-size:15px;font-weight:700;font-family:var(--fs)">Liên Minh Huyền Thoại</div>
                <div style="font-size:12px;color:var(--text2)">Server VN · Ranked</div>
              </div>
            </div>
            <div class="status-badge status-open">OPEN</div>
          </div>
          <div class="hc-body">
            <strong>Cày rank từ Vàng III → Bạch Kim II</strong>
            <div style="font-size:13px;color:var(--text2);margin-top:6px">Deadline: 5 ngày · Đường giữa/Xạ thủ</div>
            <div class="reward">850.000 ₫</div>
            <div style="font-size:12px;color:var(--text2)">Ký quỹ: 170.000 ₫ · Phí platform: 8%</div>
          </div>
          <div class="hc-footer">
            <div class="booster-info">
              <div class="booster-avatar" style="background:var(--accentG)">PV</div>
              <span>PhucVN · ⭐4.9 · 234 đơn</span>
            </div>
            <button class="btn btn-primary btn-sm" onclick="goPage('order-detail')">Nhận đơn</button>
          </div>
        </div>
        <div class="mini-cards">
          <div class="mini-card" onclick="goPage('marketplace')">
            <div style="display:flex;align-items:center;gap:10px">
              <div class="game-icon gi-val" style="width:36px;height:36px;font-size:16px">🔫</div>
              <div>
                <div style="font-size:14px;font-weight:600">Valorant · Rank Iron→Gold</div>
                <div style="font-size:12px;color:var(--text2)">Còn 2 slot · 48 giờ</div>
              </div>
            </div>
            <div style="font-family:var(--fs);font-weight:800;color:var(--gold)">620.000₫</div>
          </div>
          <div class="mini-card" onclick="goPage('marketplace')">
            <div style="display:flex;align-items:center;gap:10px">
              <div class="game-icon gi-pubg" style="width:36px;height:36px;font-size:16px">🎯</div>
              <div>
                <div style="font-size:14px;font-weight:600">PUBG · Top 10 challenge</div>
                <div style="font-size:12px;color:var(--text2)">Đang hot · 24 giờ</div>
              </div>
            </div>
            <div style="font-family:var(--fs);font-weight:800;color:var(--gold)">380.000₫</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- GAMES -->
  <section style="padding-top:0">
    <div class="container">
      <div class="section-head">
        <div class="section-tag">🎮 Danh mục game</div>
        <h2>Hỗ trợ 50+ tựa game</h2>
        <p>Từ MOBA, FPS đến RPG — chúng tôi đều có booster chuyên nghiệp</p>
      </div>
      <div class="games-grid">
        <div class="game-card" onclick="filterGame('lol')">
          <span class="game-emoji">⚔️</span>
          <div class="game-name">Liên Minh Huyền Thoại</div>
          <div class="game-count">847 đơn · Phổ biến nhất</div>
        </div>
        <div class="game-card" onclick="filterGame('valorant')">
          <span class="game-emoji">🔫</span>
          <div class="game-name">Valorant</div>
          <div class="game-count">623 đơn · Hot</div>
        </div>
        <div class="game-card" onclick="filterGame('tdc')">
          <span class="game-emoji">📱</span>
          <div class="game-name">Tốc Chiến</div>
          <div class="game-count">412 đơn</div>
        </div>
        <div class="game-card" onclick="filterGame('pubg')">
          <span class="game-emoji">🎯</span>
          <div class="game-name">PUBG Mobile</div>
          <div class="game-count">318 đơn</div>
        </div>
        <div class="game-card" onclick="filterGame('freefire')">
          <span class="game-emoji">🔥</span>
          <div class="game-name">Free Fire</div>
          <div class="game-count">524 đơn</div>
        </div>
        <div class="game-card" onclick="filterGame('genshin')">
          <span class="game-emoji">🌸</span>
          <div class="game-name">Genshin Impact</div>
          <div class="game-count">209 đơn</div>
        </div>
        <div class="game-card" onclick="filterGame('honkai')">
          <span class="game-emoji">⚡</span>
          <div class="game-name">Honkai: Star Rail</div>
          <div class="game-count">176 đơn</div>
        </div>
        <div class="game-card" onclick="filterGame('other')">
          <span class="game-emoji">🎲</span>
          <div class="game-name">Game khác</div>
          <div class="game-count">200+ tựa game</div>
        </div>
      </div>
    </div>
  </section>

  <!-- PROCESS -->
  <section style="background:var(--bg2)">
    <div class="container">
      <div class="section-head">
        <div class="section-tag">⚡ Quy trình</div>
        <h2>Đơn giản — Nhanh chóng — An toàn</h2>
      </div>
      <div class="process-steps">
        <div class="process-step">
          <div class="step-num">01</div>
          <div class="step-icon">📝</div>
          <h3>Tạo đơn hàng</h3>
          <p>Mô tả yêu cầu, chọn game, đặt deadline và ngân sách. Hệ thống tự động gợi ý mức giá phù hợp.</p>
        </div>
        <div class="process-step">
          <div class="step-num">02</div>
          <div class="step-icon">🔒</div>
          <h3>Thanh toán ký quỹ</h3>
          <p>Nạp tiền vào ví nền tảng. Tiền được khóa an toàn cho đến khi xác nhận hoàn thành.</p>
        </div>
        <div class="process-step">
          <div class="step-num">03</div>
          <div class="step-icon">🤝</div>
          <h3>Booster nhận đơn</h3>
          <p>Booster uy tín xem và nhận đơn. Bạn có thể xem profile, rating trước khi chấp nhận.</p>
        </div>
        <div class="process-step">
          <div class="step-num">04</div>
          <div class="step-icon">📊</div>
          <h3>Theo dõi tiến độ</h3>
          <p>Chat trực tiếp, nhận cập nhật và ảnh chứng minh tiến độ trong suốt quá trình.</p>
        </div>
        <div class="process-step">
          <div class="step-num">05</div>
          <div class="step-icon">✅</div>
          <h3>Xác nhận & Thanh toán</h3>
          <p>Sau khi hài lòng, xác nhận hoàn thành. Hệ thống tự động chuyển tiền cho booster.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FEATURES -->
  <section>
    <div class="container">
      <div class="section-head">
        <div class="section-tag">🛡️ Tại sao chọn chúng tôi</div>
        <h2>An toàn. Uy tín. Chuyên nghiệp.</h2>
      </div>
      <div class="features-grid">
        <div class="feature-card">
          <div class="feature-icon fi-blue">🔒</div>
          <h3>Thanh toán ký quỹ</h3>
          <p>Tiền của bạn được bảo vệ hoàn toàn. Chỉ giải phóng khi bạn xác nhận hoàn thành, không mất tiền oan.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon fi-green">⭐</div>
          <h3>Booster được xét duyệt</h3>
          <p>100% booster qua xét duyệt kỹ năng thực tế. Hệ thống đánh giá minh bạch từ người thuê trước.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon fi-gold">⚡</div>
          <h3>Theo dõi thời gian thực</h3>
          <p>Chat trong đơn hàng, cập nhật tiến độ, ảnh/video chứng minh. Luôn biết mọi thứ đang xảy ra.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon fi-neon">🛡️</div>
          <h3>Bảo mật tài khoản</h3>
          <p>Thông tin game chỉ chia sẻ sau khi ghép đôi thành công. Cảnh báo nếu giao dịch ngoài nền tảng.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon fi-blue">⚖️</div>
          <h3>Xử lý tranh chấp công bằng</h3>
          <p>Đội admin 24/7 xem xét bằng chứng và xử lý khiếu nại trong vòng 24 giờ.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon fi-green">💰</div>
          <h3>Phí thấp, thu nhập cao</h3>
          <p>Chỉ 8% phí nền tảng. Booster giữ 92% doanh thu, rút tiền linh hoạt hằng ngày.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section style="background:var(--bg2)">
    <div class="container" style="text-align:center">
      <h2 style="font-size:40px;margin-bottom:16px">Sẵn sàng bắt đầu?</h2>
      <p style="font-size:18px;color:var(--text2);margin-bottom:40px">Tham gia cộng đồng 50.000+ người chơi và booster</p>
      <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap">
        <button class="btn btn-primary" style="font-size:16px;padding:16px 40px" onclick="showModal('create-order')">🎮 Đăng đơn ngay — Miễn phí</button>
        <button class="btn btn-ghost" style="font-size:16px;padding:16px 40px" onclick="showModal('register')">💼 Trở thành Booster</button>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <div class="container">
      <div class="footer-grid">
        <div class="footer-brand">
          <div class="logo"><div class="logo-icon">⚡</div><span>Boost</span>XVN</div>
          <p>Nền tảng marketplace dịch vụ game boosting uy tín hàng đầu Việt Nam. Kết nối người chơi với booster chuyên nghiệp một cách an toàn và minh bạch.</p>
          <div style="display:flex;gap:10px;margin-top:16px">
            <div class="f-badge">🔒 SSL Secure</div>
            <div class="f-badge">✅ Đã xác minh</div>
          </div>
        </div>
        <div class="footer-col">
          <h4>Dịch vụ</h4>
          <div class="footer-links">
            <a onclick="goPage('marketplace')">Marketplace đơn hàng</a>
            <a onclick="filterGame('lol')">Liên Minh Huyền Thoại</a>
            <a onclick="filterGame('valorant')">Valorant</a>
            <a onclick="filterGame('freefire')">Free Fire</a>
            <a>Tất cả game</a>
          </div>
        </div>
        <div class="footer-col">
          <h4>Hỗ trợ</h4>
          <div class="footer-links">
            <a>Trung tâm trợ giúp</a>
            <a>Hướng dẫn đăng đơn</a>
            <a>Hướng dẫn nhận đơn</a>
            <a>Quy định xử phạt</a>
            <a>Liên hệ Admin</a>
          </div>
        </div>
        <div class="footer-col">
          <h4>Công ty</h4>
          <div class="footer-links">
            <a>Về chúng tôi</a>
            <a>Điều khoản dịch vụ</a>
            <a>Chính sách bảo mật</a>
            <a>Tin tức cập nhật</a>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div>© 2025 BoostXVN. Bảo lưu mọi quyền.</div>
        <div>Made with ❤️ in Vietnam 🇻🇳</div>
      </div>
    </div>
  </footer>
</div>
