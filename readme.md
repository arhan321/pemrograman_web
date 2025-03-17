# PEMROGRAMAN WEB 
## TI & SI 23

# Tools 
- Navicat (tools untuk `DB`) 

Link Download :
https://shared.djncloud.my.id/tools_tempur

- docker 

Link Download : 
https://www.docker.com/products/docker-desktop/

- WSL2 ([Distro Ubuntu])

Link Tutorial install :
https://github.com/teamanubot/Rahasia-Umum

- Postman

Link Download : 
https://www.postman.com/downloads/

# Dasar Web
- `HTML`
- `CSS`
- `JS`

## Referensi Belajar HTML CSS JS UNTUK PEMULA (Source Vidio By Sandhika Galih)
Link Belajar `HTML` :

https://www.youtube.com/watch?v=NBZ9Ro6UKV8&list=PLFIM0718LjIVuONHysfOK0ZtiqUWvrx4F

Link Belajar `CSS` Dasar : 

https://www.youtube.com/watch?v=CleFk3BZB3g&list=PLFIM0718LjIUBrbm6Gdh6k7ZUvPIAZm7p

Link Belajar `JS` DASAR : 

https://www.youtube.com/watch?v=RUTV_5m4VeI&list=PLFIM0718LjIWXagluzROrA-iBY9eeUt4w

# FRAMEWORK WEB YANG DI GUNAKAN (MVC)
```
LARAVEL
LUMEN (MICRO FRAMWORK [API])
```

# UNTUK PUBLISH WEBSITE (HOSTING)
- `Webserver`: Server yang akan meng-host dan melayani konten website.
- `Domain`: Nama unik yang mengidentifikasi website di internet, seperti https://siakad.esaunggul.ac.id
- `Firewall`: Pengamanan untuk melindungi server dari ancaman eksternal.
- `SSL`: `Secure Socket Layer`, Sertifikat yang mengenkripsi data antara server dan pengguna untuk keamanan.
- `IP PUBLIC`: Alamat IP server tempat website Akan di lakukan Reverse Proxy.
- `Port`: Menentukan saluran komunikasi antara server dan pengunjung, biasanya port 80 (HTTP) atau 443 (HTTPS).
- `Name Server`: Server yang mengarahkan nama domain ke Management DNS Record Seperti contoh nya `Cloudflare`.
- `Cloudflare`: Layanan untuk Management DNS Record, keamanan website, termasuk proteksi DDoS dan cache.
- `VPS`: VPS (Virtual Private Server) adalah jenis layanan hosting di mana server fisik dibagi menjadi beberapa server virtual, dan setiap server virtual berfungsi seperti server fisik yang terpisah. Meskipun VPS berbagi sumber daya dengan pengguna lain pada server yang sama, setiap VPS memiliki sistem operasi dan ruang penyimpanan yang terisolasi. Artinya, Anda dapat mengonfigurasi dan mengelola server VPS seolah-olah itu adalah server pribadi Anda.
- `SSH`: SSH (Secure Shell) adalah protokol jaringan yang digunakan untuk mengakses dan mengelola perangkat jarak jauh secara aman melalui koneksi terenkripsi. SSH sering digunakan untuk login ke server atau perangkat lain untuk mengelola sistem

# TOOLS PENTING UNTUK PUBLISH (HOSTING)
## NGINX PROXY MANAGER
`Nginx Proxy Manager` adalah aplikasi berbasis antarmuka grafis `(GUI)` yang digunakan untuk mengelola Nginx sebagai `reverse proxy` dengan lebih mudah. Nginx sendiri adalah server web dan proxy terbalik yang digunakan untuk mengalihkan lalu lintas jaringan ke server lain atau aplikasi yang berjalan di belakangnya. Dengan Nginx Proxy Manager, pengguna dapat mengonfigurasi pengaturan seperti:

- `Reverse Proxy`: Mengarahkan permintaan ke server internal berdasarkan domain atau URL.
- `SSL/TLS`: Memungkinkan pengaturan sertifikat SSL untuk enkripsi HTTPS dengan mudah.
- `Access Control`: Mengatur akses ke aplikasi tertentu, termasuk otentikasi pengguna.
- `Dashboard`: Menyediakan antarmuka grafis untuk mengelola konfigurasi Nginx tanpa harus mengedit file konfigurasi secara manual.
Secara umum, Nginx Proxy Manager membuat pengelolaan reverse proxy lebih sederhana dan efisien, terutama bagi pengguna yang tidak ingin berurusan dengan baris perintah.

link konfig npm : 
https://github.com/arhan321/NGINX-PROXY-MANAGER.git

# CONTOH KONFIG NAMESERVER DOMAIN KE CLOUDFLARE
Perhatikan Gambar Contoh_domain.png, nameserver.png, domain_pointingcloudflare.png

# PENJELASAN SINGKAT TENTANG API, JSON, XML 
## API : 
API (Application Programming Interface) adalah sekumpulan aturan dan mekanisme yang memungkinkan satu aplikasi untuk berkomunikasi dengan aplikasi lain. API menentukan cara permintaan data dan respon yang akan ditukar, sehingga memudahkan pengembang untuk memanfaatkan layanan atau fungsi yang disediakan oleh sistem lain tanpa perlu mengetahui detail internal sistem tersebut.
## JSON 
(JavaScript Object Notation) adalah format pertukaran data yang ringan dan mudah dibaca manusia. JSON populer digunakan dalam pengembangan web untuk mengirim data antara server dan klien. Karena sintaks JSON lebih ringkas, format ini lebih efisien di jaringan serta lebih mudah diproses oleh banyak bahasa pemrograman.
## XML 
(Extensible Markup Language) adalah format berbasis teks yang dirancang untuk menyimpan dan mengangkut data secara terstruktur. XML menggunakan tag yang dapat didefinisikan sendiri (custom tags) sehingga fleksibel untuk berbagai jenis data, namun cenderung lebih verbose atau “panjang” dibandingkan JSON.

# CONTOH API JSON, XML 
## API JSON
```
GET https://api.djncloud.my.id/api/v1/mobil
Accept: application/json
```
Respown Balikan nya :
```bash
[
  {
    "id": 2,
    "nama": "BMW X5",
    "merk": "BMW",
    "model": "SUV",
    "transmisi": "MATIC",
    "bahan_bakar": "SOLAR",
    "cc": "2.500",
    "warna": "HITAM LEGAM",
    "tahun": "2019",
    "harga": "1500000000",
    "image": "images/mobils/RYNTgUDmFpPWsiHWZp2M1R2tBfeG6DUiid05VAIN.jpg",
    "penjual": "RANDI PANGALIA",
    "kontak_penjual": "0821-1212-5738",
    "created_at": "2024-12-09 10:10:20",
    "updated_at": "2024-12-09 10:10:20",
    "image_url": "http://api.djncloud.my.id/storage/images/mobils/RYNTgUDmFpPWsiHWZp2M1R2tBfeG6DUiid05VAIN.jpg"
  },
  {
    "id": 3,
    "nama": "FORTUNER",
    "merk": "TOYOTA",
    "model": "SUV",
    "transmisi": "MATIC",
    "bahan_bakar": "SOLAR",
    "cc": "2.800",
    "warna": "HITAM LEGAM",
    "tahun": "2023",
    "harga": "734500000",
    "image": "images/mobils/u2YvP6L2uHK3RkVTEutmUPlLVD6kXtehMn9CNekL.jpg",
    "penjual": "ARHAN MALIK ALRASYID",
    "kontak_penjual": "0821-1212-8569",
    "created_at": "2024-12-09 10:23:32",
    "updated_at": "2024-12-09 10:30:39",
    "image_url": "http://api.djncloud.my.id/storage/images/mobils/u2YvP6L2uHK3RkVTEutmUPlLVD6kXtehMn9CNekL.jpg"
  },
]
```
## XML 
```
GET https://api.djncloud.my.id/api/v1/mobil
Accept: application/xml
```
```bash
<cars>
    <car>
        <id>2</id>
        <nama>BMW X5</nama>
        <merk>BMW</merk>
        <model>SUV</model>
        <transmisi>MATIC</transmisi>
        <bahan_bakar>SOLAR</bahan_bakar>
        <cc>2500</cc>
        <warna>HITAM LEGAM</warna>
        <tahun>2019</tahun>
        <harga>1500000000</harga>
        <image>images/mobils/RYNTgUDmFpPWsiHWZp2M1R2tBfeG6DUiid05VAIN.jpg</image>
        <penjual>RANDI PANGALIA</penjual>
        <kontak_penjual>0821-1212-5738</kontak_penjual>
        <created_at>2024-12-09 10:10:20</created_at>
        <updated_at>2024-12-09 10:10:20</updated_at>
        <image_url>http://api.djncloud.my.id/storage/images/mobils/RYNTgUDmFpPWsiHWZp2M1R2tBfeG6DUiid05VAIN.jpg</image_url>
    </car>
    <car>
        <id>3</id>
        <nama>FORTUNER</nama>
        <merk>TOYOTA</merk>
        <model>SUV</model>
        <transmisi>MATIC</transmisi>
        <bahan_bakar>SOLAR</bahan_bakar>
        <cc>2800</cc>
        <warna>HITAM LEGAM</warna>
        <tahun>2023</tahun>
        <harga>734500000</harga>
        <image>images/mobils/u2YvP6L2uHK3RkVTEutmUPlLVD6kXtehMn9CNekL.jpg</image>
        <penjual>ARHAN MALIK ALRASYID</penjual>
        <kontak_penjual>0821-1212-8569</kontak_penjual>
        <created_at>2024-12-09 10:23:32</created_at>
        <updated_at>2024-12-09 10:30:39</updated_at>
        <image_url>http://api.djncloud.my.id/storage/images/mobils/u2YvP6L2uHK3RkVTEutmUPlLVD6kXtehMn9CNekL.jpg</image_url>
    </car>
</cars>
```
# HAPPY CODING !!!!!!!!