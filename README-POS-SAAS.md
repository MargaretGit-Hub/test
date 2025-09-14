# POS SAAS Landing Page

Landing page untuk aplikasi POS SAAS Flutter yang dirancang khusus untuk toko pakaian.

## Fitur Landing Page

### 1. Header Navigation
- Logo POS SAAS dengan emoji icon
- Menu navigasi: Home, About Us, Pricing, Pages, Contact Us
- Tombol Login
- Responsive mobile menu

### 2. Hero Section
- Judul utama: "Sistem POS Terbaik untuk Toko Pakaian"
- Deskripsi aplikasi
- Tombol CTA: "Buy Now" dan "Watch Video"
- QR Code untuk download aplikasi
- Tombol download untuk Google Play dan App Store
- Placeholder image untuk foto orang memegang perangkat POS

### 3. Features Section
16 fitur utama dengan ikon berwarna-warni:
- Sales, Parties, Purchase, Products
- Due List, Income, Expense, Stock
- Loss/Profit, Report, 47+ Languages, Multi Currency
- Subscription, Dashboard, POS Sales, Inventory Sales

### 4. Showcase Section
- Tiga mockup ponsel menampilkan antarmuka aplikasi:
  - Dashboard Interface
  - POS Sales Interface
  - Analytics Interface

### 5. Demo Video Section
- Area untuk video demo aplikasi dengan placeholder

### 6. Pricing Plans
Tiga paket berlangganan:
- **Free** (Rp 0/bulan): 1 Toko, 100 Produk, Basic Report, Email Support
- **Standard** (Rp 299K/bulan): 3 Toko, 1000 Produk, Advanced Report, Priority Support, Multi Currency
- **Premium** (Rp 499K/bulan): Unlimited Toko & Produk, Custom Report, 24/7 Support, API Access, White Label

### 7. Testimonials
Tiga testimoni dari pelanggan:
- Sarah Johnson (Fashion Store Jakarta)
- Ahmad Rizki (Butik Trendy Bandung)
- Maria Santos (International Fashion)

### 8. Blog Section
- Tiga artikel blog utama dengan gambar, judul, tanggal, dan excerpt
- Sidebar dengan 5 artikel populer
- Topics: tips bisnis, manajemen inventory, tren fashion, dll.

### 9. Footer
- Logo dan deskripsi perusahaan
- Link fitur-fitur utama
- Quick links (About, Pricing, Contact, Support, Documentation)
- Tombol download aplikasi
- Copyright notice

## Teknologi yang Digunakan

- **Backend**: PHP
- **Frontend**: HTML5, CSS3, JavaScript
- **Styling**: CSS Grid, Flexbox, CSS Variables
- **Icons**: Unicode Emoji (self-contained, no external dependencies)
- **Responsive**: Mobile-first design dengan breakpoint di 768px

## Fitur Teknis

### Desain Responsif
- Desktop layout dengan grid system
- Mobile-optimized dengan hamburger menu
- Flexible grid layouts yang menyesuaikan ukuran layar

### Interaktivitas
- Smooth scrolling navigation
- Hover effects pada cards dan buttons
- Mobile menu toggle
- Scroll-based animations untuk feature boxes
- Ripple effect pada button clicks
- Navbar background blur effect saat scroll

### Performa
- Self-contained (tidak bergantung pada CDN eksternal)
- Lightweight dengan total file size < 50KB
- Optimized CSS dengan CSS variables untuk konsistensi

### Browser Compatibility
- Modern browsers (Chrome, Firefox, Safari, Edge)
- Fallback support untuk older browsers
- Progressive enhancement approach

## Instalasi dan Penggunaan

1. Salin file `pos-saas-landing-standalone.php` ke web server Anda
2. Akses melalui browser: `http://localhost/pos-saas-landing-standalone.php`
3. Untuk development, gunakan PHP built-in server:
   ```bash
   php -S localhost:8000
   ```

## Kustomisasi

### Mengubah Warna
Edit CSS variables di bagian `:root`:
```css
:root {
    --primary-color: #6366f1;
    --secondary-color: #8b5cf6;
    --accent-color: #f59e0b;
    /* dll */
}
```

### Menambah Fitur
Tambahkan feature box baru di section `.feature-grid`:
```html
<div class="feature-box fade-in">
    <div class="feature-icon">🔧</div>
    <h5 class="feature-title">New Feature</h5>
</div>
```

### Mengubah Harga
Edit pricing cards di section `#pricing`.

## File Structure

```
pos-saas-landing-standalone.php  # Main landing page file
README-POS-SAAS.md              # This documentation
```

## Screenshots

- Desktop view: [Lihat screenshot](https://github.com/user-attachments/assets/3704a50e-b795-416e-b1fd-0fdcaeea922b)
- Mobile view: [Lihat screenshot](https://github.com/user-attachments/assets/30b6ba3e-7e4b-454f-b95b-33b9c873906e)

## TODO / Future Enhancements

- [ ] Integrasi dengan backend untuk form submission
- [ ] Animasi loading untuk video demo
- [ ] Implementasi CMS untuk konten blog
- [ ] A/B testing untuk CTA buttons
- [ ] Analytics tracking (Google Analytics, etc.)
- [ ] SEO optimization dengan meta tags tambahan
- [ ] Multi-language support
- [ ] Dark mode toggle

## Support

Untuk pertanyaan atau dukungan, silakan hubungi tim development.