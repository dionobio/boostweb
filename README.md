# BoostXVN Full Laravel MVC

Bản này đã chuyển từ giao diện demo SPA sang Laravel MVC thật:

- Route thật: `/`, `/marketplace`, `/orders/{id}`, `/orders/create`, `/wallet`, `/dashboard`, `/admin`
- Controller thật: Home, Marketplace, Order, Wallet, Chat, Dispute, Dashboard, Admin, Auth
- Form POST thật: đăng nhập, đăng ký, tạo đơn, nạp ví, nhận đơn, gửi chat/bằng chứng, submit hoàn thành, xác nhận hoàn thành, tạo tranh chấp
- Database MySQL qua migration/seeder
- CSS/JS nằm trong `public/css/boostxvn.css` và `public/js/boostxvn.js`, không phụ thuộc Vite/Tailwind

## Cài đặt XAMPP/phpMyAdmin

```powershell
cd D:\xamp\htdocs\boostxvn-full-laravel
composer install
copy .env.example .env
php artisan key:generate
```

Tạo database trong phpMyAdmin:

```sql
CREATE DATABASE booster CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

Chạy migration và seed:

```powershell
php artisan optimize:clear
php artisan migrate:fresh --seed
php artisan storage:link
php artisan serve
```

Mở:

```txt
http://127.0.0.1:8000
```

## Tài khoản demo

```txt
customer@demo.vn / 123456
booster@demo.vn / 123456
admin@demo.vn / 123456
```

## Lưu ý

Nếu báo thiếu `vendor/autoload.php`, bạn chưa chạy `composer install`.
Nếu báo bảng đã tồn tại, dùng `php artisan migrate:fresh --seed` hoặc xóa database `booster` rồi tạo lại.
