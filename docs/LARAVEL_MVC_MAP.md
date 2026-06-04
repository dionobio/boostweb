# Laravel MVC map

- Route: `routes/web.php`
- Controller: `app/Http/Controllers/*`
- Model: `app/Models/*`
- View Blade: `resources/views/*`
- Migration: `database/migrations/*`
- Seeder: `database/seeders/*`
- Logic nghiệp vụ: `app/Services/*`

## Luồng ký quỹ

1. Customer nạp ví demo tại `/wallet`.
2. Customer tạo đơn tại `/orders/create`.
3. `OrderService::createOpenOrder()` tạo order, tính phí 8%, gọi `WalletService::lockEscrow()`.
4. Booster nhận đơn bằng `OrderController::accept()`.
5. Hai bên trao đổi trong `/orders/{order}/room`.
6. Booster submit, customer complete.
7. `WalletService::releaseToBooster()` trừ locked balance, cộng tiền cho booster, ghi transaction phí nền tảng.
