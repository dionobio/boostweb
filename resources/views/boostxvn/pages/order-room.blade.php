<!-- ==================== ORDER ROOM PAGE ==================== -->
<div id="page-order-room" class="page">
  <div class="container" style="padding-top:24px;padding-bottom:24px">
    <div class="breadcrumb">
      <span onclick="goPage('home')">Trang chủ</span>
      <span class="bc-sep">›</span>
      <span onclick="goPage('dashboard')">Dashboard</span>
      <span class="bc-sep">›</span>
      <span class="active">Phòng đơn #ORD-08471</span>
    </div>

    <div class="room-layout">
      <!-- CHAT -->
      <div class="chat-panel">
        <div class="chat-header">
          <div class="game-icon gi-lol" style="width:36px;height:36px;font-size:16px">⚔️</div>
          <div>
            <div style="font-weight:700;font-size:15px">LMHT · Vàng III → Bạch Kim II</div>
            <div style="font-size:12px;color:var(--text2)">PhucVN đang online · Tiến độ: 65%</div>
          </div>
          <div class="status-badge status-inprog" style="margin-left:auto">ĐANG LÀM</div>
        </div>

        <div class="chat-messages">
          <!-- System -->
          <div style="text-align:center;font-size:12px;color:var(--text3);background:var(--bg2);padding:6px 16px;border-radius:100px;align-self:center">
            📅 Đơn bắt đầu lúc 10:30 - 03/06/2025
          </div>

          <!-- Booster msg -->
          <div class="msg msg-other">
            <div class="msg-bubble">Chào anh/chị! Em là PhucVN, em đã nhận đơn và sẽ bắt đầu ngay. Anh/chị cung cấp thông tin đăng nhập vào đây nhé 🎮</div>
            <div class="msg-time">PhucVN · 10:32</div>
          </div>

          <!-- Customer msg -->
          <div class="msg msg-me">
            <div class="msg-bubble">OK em, anh đã gửi rồi nhé. Nhớ chỉ chơi mid và ADC thôi nhé, không nên chơi những role khác</div>
            <div class="msg-time">Bạn · 10:35</div>
          </div>

          <!-- Progress update -->
          <div style="align-self:center;text-align:center">
            <div class="msg-proof" style="max-width:280px;border-color:rgba(91,106,240,0.3)">
              <div class="proof-img">📸</div>
              <div style="font-weight:600;font-size:13px;margin-bottom:4px">📊 Cập nhật tiến độ</div>
              <div style="font-size:12px;color:var(--text2)">Vàng III 45LP → Vàng I 12LP<br>Đã chơi 8 game, thắng 6</div>
            </div>
            <div class="msg-time" style="margin-top:4px">PhucVN · 14:20</div>
          </div>

          <div class="msg msg-other">
            <div class="msg-bubble">Anh xem ảnh nhé, em vừa lên Vàng I rồi 💪 Chiều nay em sẽ tiếp tục cố gắng leo lên Bạch Kim</div>
            <div class="msg-time">PhucVN · 14:21</div>
          </div>

          <div class="msg msg-me">
            <div class="msg-bubble">Tốt lắm em! Cố gắng lên nhé, nếu cần thêm thời gian thì nhắn anh</div>
            <div class="msg-time">Bạn · 14:25</div>
          </div>

          <!-- Latest update -->
          <div style="align-self:center;text-align:center">
            <div style="font-size:12px;color:var(--text3);background:var(--bg2);padding:4px 12px;border-radius:100px">
              📊 Cập nhật gần nhất: 17:00 hôm nay
            </div>
          </div>

          <div class="msg msg-other">
            <div class="msg-bubble">Anh ơi, em đã vào Bạch Kim IV rồi! Còn khoảng 2 cấp nữa là xong ạ. Em sẽ cố hoàn thành trước deadline 🏆</div>
            <div class="msg-time">PhucVN · 17:02</div>
          </div>
        </div>

        <div class="chat-input-row">
          <div class="icon-btn" title="Gửi ảnh bằng chứng">📷</div>
          <div class="icon-btn" title="File">📎</div>
          <textarea class="chat-input" placeholder="Nhập tin nhắn..." rows="1" onkeydown="if(event.key==='Enter'&&!event.shiftKey){event.preventDefault();sendMsg()}"></textarea>
          <button class="send-btn" onclick="sendMsg()">➤</button>
        </div>
      </div>

      <!-- SIDEBAR -->
      <div class="room-sidebar">
        <h3>📊 Tiến độ đơn hàng</h3>
        
        <div class="progress-ring">
          <div class="ring-container">
            <svg width="100" height="100" class="ring-svg">
              <circle cx="50" cy="50" r="42" fill="none" stroke="rgba(91,106,240,0.15)" stroke-width="8"/>
              <circle cx="50" cy="50" r="42" fill="none" stroke="url(#ringGrad)" stroke-width="8" 
                stroke-dasharray="263.9" stroke-dashoffset="92.4" stroke-linecap="round"/>
              <defs><linearGradient id="ringGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#5b6af0"/>
                <stop offset="100%" stop-color="#7c3aed"/>
              </linearGradient></defs>
            </svg>
          </div>
          <div class="progress-ring-num">65%</div>
          <div style="font-size:12px;color:var(--text2)">Vàng I → Bạch Kim IV</div>
        </div>

        <div style="background:var(--bg2);border-radius:var(--r);padding:16px">
          <div style="display:flex;justify-content:space-between;font-size:13px;margin-bottom:10px">
            <span style="color:var(--text2)">Rank hiện tại</span>
            <span style="font-weight:700;color:var(--gold)">Bạch Kim IV</span>
          </div>
          <div style="display:flex;justify-content:space-between;font-size:13px;margin-bottom:10px">
            <span style="color:var(--text2)">Mục tiêu</span>
            <span style="font-weight:700">Bạch Kim II</span>
          </div>
          <div style="display:flex;justify-content:space-between;font-size:13px;margin-bottom:10px">
            <span style="color:var(--text2)">Số game đã chơi</span>
            <span style="font-weight:700">18</span>
          </div>
          <div style="display:flex;justify-content:space-between;font-size:13px">
            <span style="color:var(--text2)">Tỷ lệ thắng</span>
            <span style="font-weight:700;color:var(--green)">67%</span>
          </div>
        </div>

        <div>
          <h3 style="font-size:15px;margin-bottom:12px">📝 Log tiến độ</h3>
          <div class="progress-log">
            <div class="log-item">
              <div class="log-dot done"></div>
              <div class="log-body">
                <div class="lb-title">Vàng III → Vàng I</div>
                <div class="lb-time">Sáng nay · 10:30 - 14:00</div>
              </div>
            </div>
            <div class="log-item">
              <div class="log-dot done"></div>
              <div class="log-body">
                <div class="lb-title">Vàng I → Bạch Kim IV</div>
                <div class="lb-time">Chiều · 14:00 - 17:30</div>
              </div>
            </div>
            <div class="log-item">
              <div class="log-dot"></div>
              <div class="log-body">
                <div class="lb-title" style="color:var(--text2)">Bạch Kim IV → Bạch Kim II</div>
                <div class="lb-time">Đang chờ...</div>
              </div>
            </div>
          </div>
        </div>

        <div style="border-top:1px solid var(--border);padding-top:16px;display:flex;flex-direction:column;gap:8px">
          <button class="btn btn-green" style="width:100%" onclick="showToast('Đã xác nhận hoàn thành! Tiền sẽ được chuyển cho booster.','success')">✅ Xác nhận hoàn thành</button>
          <button class="btn btn-red" style="width:100%" onclick="showModal('dispute')">⚖️ Tạo tranh chấp</button>
        </div>

        <div class="warning-box">⏰ Deadline còn: <strong>3 ngày 14 giờ 22 phút</strong></div>
      </div>
    </div>
  </div>
</div>
