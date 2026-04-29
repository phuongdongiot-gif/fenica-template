# Fenica Template 🏙️

Fenica là một mẫu giao diện website (Template) bất động sản / dự án cao cấp, được thiết kế với phong cách hiện đại (Modern Aesthetic), hiệu ứng 3D ấn tượng và tối ưu hóa hiệu suất tối đa.

## 🌟 Điểm nổi bật (Features)
- **3D Wave Background**: Sử dụng WebGL (Three.js) để tạo hiệu ứng sóng chuyển động. Được tối ưu hóa chia làm 2 luồng: Sóng nạp trang (Preloader) nhanh, sáng và Sóng nền (Background) chậm rãi, tiết kiệm pin.
- **Glassmorphism Header**: Thanh điều hướng dạng kính mờ (backdrop-blur) với hiệu ứng thu nhỏ thông minh khi cuộn chuột, được tối ưu State Tracking để loại bỏ giật lag (jank).
- **Smooth Scrolling**: Tích hợp Lenis mang lại cảm giác cuộn mượt mà như bơ.
- **Lazy Load Video/TikTok**: Kỹ thuật Facade Pattern che đi Iframe nặng nề của YouTube và TikTok, chỉ tải mã nguồn khi người dùng thực sự bấm xem, giúp tối ưu điểm số Google PageSpeed.
- **GSAP & AOS Animations**: Các thành phần xuất hiện mượt mà khi cuộn tới.
- **Responsive Design**: Tương thích hoàn hảo trên mọi kích thước màn hình nhờ sức mạnh của Tailwind CSS.

## 🛠 Công nghệ sử dụng (Tech Stack)
- **HTML5 & Vanilla JavaScript**: Thuần tuý, nhẹ nhàng, không phụ thuộc Framework.
- **Tailwind CSS**: Dùng qua CDN cho tốc độ phát triển giao diện siêu tốc.
- **Three.js**: Thư viện đồ hoạ 3D mạnh mẽ cho WebGL.
- **GSAP + ScrollTrigger**: Hoạt ảnh cuộn chuyên nghiệp.
- **Swiper.js**: Trình chiếu Carousel mượt mà cho thư viện ảnh và video.
- **GLightbox**: Popup xem ảnh và video chất lượng cao.
- **Lenis**: Smooth scrolling engine.

## 📂 Cấu trúc thư mục (Folder Structure)

```text
fenica-template/
│
├── assets/
│   ├── css/
│   │   └── style.css            # Custom CSS bổ trợ cho Tailwind
│   │
│   ├── js/
│   │   ├── main.js              # Logic dùng chung, cấu trúc Map, GSAP Animations
│   │   ├── menu.js              # Logic Mobile Menu & Thu nhỏ Header (Đã tối ưu)
│   │   ├── wave-preloader.js    # Khởi tạo 2 lớp sóng 3D (Preload & Background)
│   │   ├── gallery-init.js      # Swiper config & Lazy Load TikTok
│   │   └── plans.js             # Logic xử lý cho trang Mặt Bằng
│   │
│   ├── images/                  # Thư mục chứa toàn bộ hình ảnh
│   └── videos/                  # Thư mục chứa các file video cục bộ
│
├── index.html                   # Trang chủ
├── overview.html                # Trang Tổng quan dự án
├── location.html                # Trang Vị trí dự án
├── plans.html                   # Trang Mặt bằng điển hình
├── ults.html                    # Trang Tiện ích nội/ngoại khu
├── plans-ults.html              # Trang Mặt bằng & Tiện ích kết hợp
├── gallary.html                 # Trang Thư viện Ảnh / Video
├── news.html                    # Trang Tin tức
└── contact.html                 # Trang Liên hệ
```

## 🚀 Hướng dẫn phát triển (Development Guide)

### 1. Cách chỉnh sửa Sóng 3D (3D Waves)
Toàn bộ hiệu ứng nền nằm ở file `assets/js/wave-preloader.js`. 
- Hàm `initPreloaderWave()`: Điều khiển sóng lúc đang tải trang (hiện trong 1.5s đầu). Sóng chạy nhanh, sáng và xoay vòng.
- Hàm `initBackgroundWave()`: Điều khiển sóng nền nằm dưới đáy (`-z-10`). Sóng chậm, mờ, và không xoay.
> **Lưu ý:** Nếu muốn tăng giảm số lượng đường sóng để tối ưu máy yếu, hãy thay đổi biến `lineCount`, `pointsCount` và `separation`.

### 2. Cách thêm/sửa Video TikTok trong thư viện
File `gallary.html` sử dụng kỹ thuật "Facade Lazy Load". Nếu bạn copy một mã nhúng TikTok mới, hãy đảm bảo đặt cấu trúc như sau để script không tự tải làm nặng trang:
```html
<blockquote class="tiktok-embed" ...> ... </blockquote>
<!-- Facade Overlay che lên trên -->
<div class="video-overlay absolute inset-0 ... bg-black">
    <img src="ảnh-bìa.jpg" ...>
    <!-- Nút Play SVG -->
</div>
```
File `gallery-init.js` sẽ lo phần tự động chèn script của TikTok khi nút Play được bấm.

### 3. Cách thêm trang mới
Để giữ tính đồng bộ, khi bạn tạo file HTML mới, vui lòng giữ nguyên cấu trúc thẻ `<head>` (để nạp Tailwind, GSAP, Swiper...) và đảm bảo ở cuối trang (trước thẻ `</body>`) gọi đủ các file JS cốt lõi theo thứ tự:
```html
<!-- Background & Preloader -->
<div id="bg-canvas" style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; z-index: -10; background-color: #09121d;"></div>
<div id="preloader" style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; z-index: 9999; background-color: #09121d; transition: opacity 0.8s ease-out, visibility 0.8s ease-out; pointer-events: none;">
    <div id="preloader-canvas" style="width: 100%; height: 100%;"></div>
</div>

...
<script src="assets/js/main.js"></script>
<script src="assets/js/menu.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script src="assets/js/wave-preloader.js"></script>
```

## 📝 Bản Quyền & Tác Giả
Thiết kế và phát triển dựa trên yêu cầu hiện đại hóa và tối ưu hiệu năng. Vui lòng tôn trọng cấu trúc mô đun JS để dễ dàng bảo trì.