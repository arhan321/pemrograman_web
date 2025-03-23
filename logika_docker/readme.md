# Logika Docker

## apa itu Docker ?
Docker adalah platform open-source yang digunakan untuk mengembangkan, mengirim, dan menjalankan aplikasi dalam container. Container adalah lingkungan yang ringan dan terisolasi, yang memungkinkan aplikasi berjalan secara konsisten di berbagai lingkungan, mulai dari Development hingga Production.

## Mengapa Harus Menggunakan Docker ? 
Docker menawarkan banyak keuntungan dibandingkan metode tradisional, seperti:

✅ Portabilitas → Aplikasi dapat berjalan di mana saja tanpa masalah "It works on my machine".

✅ Konsistensi → Lingkungan yang sama dari Development hingga production.

✅ Efisiensi Sumber Daya → Lebih ringan dibandingkan dengan virtual machine (VM).

✅ Kecepatan Deployment → Container dapat dijalankan dalam hitungan detik.

✅ Skalabilitas → Mudah diperbanyak atau dikurangi sesuai kebutuhan.

✅ Mendukung Microservices → Memudahkan pengelolaan aplikasi berbasis layanan kecil.

## Kapan Docker Dibutuhkan?

Docker digunakan dalam berbagai situasi, antara lain:

- Saat ingin menjalankan aplikasi di berbagai sistem operasi tanpa perlu khawatir tentang dependensi.

- Saat ingin meningkatkan efisiensi pengembangan dan deployment aplikasi.

- Saat menggunakan arsitektur microservices, di mana setiap layanan berjalan dalam container terpisah.

## Di Mana Docker Digunakan?
Docker dapat digunakan di berbagai lingkungan, seperti:

- `Local development` → Untuk membangun dan menguji aplikasi di komputer developer (Case Yang terjadi sekarang pada WSL UBUNTU ).

- `Server` → Untuk menjalankan aplikasi di lingkungan production.

- `Cloud` (AWS, GCP, Azure, Biznet Gio, Digital Ocean, dll.) → Untuk menjalankan aplikasi secara scalable dan fleksibel.

## Siapa yang Menggunakan Docker ?
- `Developer` → Untuk membuat aplikasi yang dapat dijalankan di berbagai lingkungan tanpa masalah kompatibilitas.

- `DevOps Engineer` → Untuk mengotomatisasi deployment dan pengelolaan aplikasi.

## Bagaimana Docker Berjalan ?
Docker berjalan dengan memanfaatkan containerization, yang memungkinkan aplikasi berjalan dalam lingkungan terisolasi dengan efisiensi tinggi. Dengan fitur seperti image, container, networking, dan volume, Docker mempermudah deployment dan manajemen aplikasi di berbagai sistem tanpa masalah kompatibilitas.

## Kelebihan docker : 
✅ Portabilitas Tinggi → Docker memungkinkan aplikasi berjalan di mana saja tanpa masalah lingkungan.

✅ Efisiensi Sumber Daya → Lebih ringan dibandingkan virtual machine (VM) karena berbagi kernel host.

✅ Deployment Cepat → Container dapat dijalankan dalam hitungan detik, tidak seperti VM yang butuh waktu lama untuk booting.

✅ Konsistensi Lingkungan → Aplikasi berjalan dengan cara yang sama dari pengembangan hingga produksi.

✅ Skalabilitas Mudah → Container dapat diperbanyak dengan cepat, cocok untuk microservices dan arsitektur cloud.

✅ Dukungan Ekosistem yang Kuat → Banyak tools dan layanan mendukung Docker (Docker Hub, Kubernetes, OpenShift, dll.).

## Kekurangan Docker :
⚠ Keamanan Lebih Rentan → Karena berbagi kernel dengan host, container lebih rentan terhadap eksploitasi jika tidak dikonfigurasi dengan benar.

⚠ Manajemen Storage & Data yang Kompleks → Data dalam container bersifat ephemeral (hilang jika container dihapus), sehingga memerlukan strategi penyimpanan yang baik.

⚠ Konsumsi Resource Lebih Besar Dibandingkan Native Apps → Meskipun lebih ringan dari VM, menjalankan banyak container tetap memakan sumber daya CPU dan RAM.

⚠ Harus Niat Belajar Lebih Lanjut → Pengguna baru perlu memahami konsep seperti Dockerfile, volume, networking, dan orchestrasi (Kubernetes, Docker Swarm).

## Peluang Bagus Docker :
💡 Adopsi Microservices & Cloud Computing → Banyak perusahaan beralih ke cloud-native development dan microservices, yang sangat cocok dengan Docker.

💡 Dukungan untuk Edge Computing & IoT → Docker dapat digunakan untuk menjalankan aplikasi pada perangkat kecil dengan sumber daya terbatas.

💡 Integrasi dengan Kubernetes & Orkestrasi Container → Semakin banyak organisasi yang mengadopsi Kubernetes untuk mengelola container dalam skala besar.

💡 Peningkatan Keamanan & Manajemen Container → Perkembangan tools seperti Docker Security Scanning dan container runtime yang lebih aman (contoh: gVisor, Kata Containers).

💡 Ekosistem & Komunitas yang Kuat → Docker terus berkembang dengan dukungan komunitas open-source yang aktif.

## Ancaman Docker
🔴 Kompleksitas Orkestrasi → Untuk skala besar, Docker memerlukan Kubernetes atau Docker Swarm, yang bisa sulit dikelola tanpa keahlian khusus.

🔴 Ancaman Keamanan Serangan Supply Chain → Jika image yang diunduh dari Docker Hub tidak aman, itu bisa menjadi celah serangan.

🔴 Kompleksitas Manajemen → Semakin kompleks lingkungan kontainer, maka semakin sulit untuk di kelola.

## Logika Dasar Docker
`Image` → Blueprint atau template yang berisi sistem operasi ringan + aplikasi.

`Container` → Instance yang berjalan dari image, seperti menjalankan aplikasi di dalam kotak terisolasi.

`Dockerfile` → Script untuk membuat image, berisi instruksi seperti "pakai OS ini", "install ini", dan "jalankan ini".

`Docker Compose` → File YAML untuk mengatur beberapa container sekaligus, misalnya database + backend + frontend.

`Volume` → Tempat penyimpanan data agar tidak hilang saat container mati.

`Network` → Menghubungkan beberapa container agar bisa saling berkomunikasi.

## installation docker
Terdapat 2 cara installasi nya : 

1.  menggunakan docker CLI 

perintah nya pada ubuntu : 
```
curl -sSL https://get.docker.com/ | CHANNEL=stable bash
```
after curl : 
```
systemctl enable --now docker
```

2. pake docker aplikasi

silahkan download pada link : 

https://docs.docker.com/desktop/setup/install/windows-install/

setelah berhasil download docker nya, silahkan buka `settings` setelah itu ke `resource` lalu ke Wsl Integration lalu setelah itu klik yang di bawah : `Enable integration with additional distros:` lalu aktifkan dari ubuntu

## logika mengoprasikan docker

- contoh jika kita ingin membuat konfig `docker laravel` yang biasanya di pake oleh Pak Jefry 

```bash
|-- db (folder server database)
|    |-- data (folder engine database)
|    |-- conf.d (folder untuk kebutuhan tune up SERVER DB (optional) )
|    
|-- nginx (folder untuk memanggil depedency / kebutuhan NGINX)
|    |--dockerfile (memanggil depedency nginx)
|    |--default.conf (mengkonfig webserver nginx)
|    
|-- php (folder untuk memanggil depedency / kebutuhan PHP)
|    |-- docker-entrypoint.sh (memanggil kebutuhan php for laravel)
|    |-- dockerfile (memanggil depedency php, composer)
|    |-- local.ini (untuk mengkonfigurasi memory_limit & upload_max_filesize dan yang lain lain)
|    |-- www.conf (untuk mengkonfig php supaya bisa terhubung dengan webserver nginx)
|
|-- src (project LARAVEL)
|-- .env (mengatur sebuah nama container)
|-- docker-compose.yml (memanggil service yang kita butuhkan berbasis container)
```

- contoh lagi jika kita ingin cukup memakai service webserver saja karena tidak butuh db dan yang lain2, karena kita ingin hosting frontend nya saja :

setingan docker-compose.yml : 
```bash
version: '3'

services:
  apache:
    build: ./php
    container_name: apache
    image: latest
    volumes:
      - ./src:/var/www/html
      - ./php/httpd.vhost.conf:/etc/apache2/sites-available/000-default.conf
    ports:
      - 80:80
```
lalu pada `Dockerfile` kita secara otomatis `image` yang kita butuhkan cuman mengisi kebutuhan untuk `webserver` nya saja :
```bash
# Use the official PHP image with Apache
FROM php:8.2-apache

# Set the working directory
WORKDIR /var/www/html

# Configure Apache
COPY httpd.vhost.conf /etc/apache2/sites-available/000-default.conf

# Copy local code to the container
COPY . /var/www/html

# Expose port 80 for HTTP
EXPOSE 80

```
setelah itu pada konfig sedikit pada httpd.vhost.conf untuk setingan apache nya : 
```bash 

<Directory /var/www/html>
    Options FollowSymLinks
    AllowOverride All
    Require all granted
</Directory>
```
terakhir membuat `.env` untuk mengatur sebuah nama container : 
```bash 
COMPOSE_PROJECT_NAME=testing
REPOSITORY_NAME=testing
IMAGE_TAG=latest
```
struktur folder : 
```bash
├── docker-compose.yml
└── php
    ├── Dockerfile
    └── httpd.vhost.conf
└── .env
```

## perintah dasar docker
1. build container
```
docker compose up -d --build
```
di dalam folder yang ada file docker-compose.yml nya, jika ingin di build silahkan lakukan perintah tersebut

2. execute containernya 
```
docker exec -it (nama container) bash
```
pada excute `container` ini, disni jika kita misalkan sudah `pull registry composer` pada `container php`, maka jika kita ingin lakukan `composer` kita harus excute `container` nya terlebih dahulu

3. Melihat container yang sedang berjalan
```
docker ps 
```
docker ps adalah perintah untuk melihat container yang sedang berjalan

4. stop container yang sedang berjalan
```
docker stop (nama ontainer) 
```
5. remove container yang pernah berjalan di docker
```
docker rm (nama container)
```
fungsinya remove nama container yang pernah berjalan adalah, jika kita lupa taro folder yang berisikan docker-compose.yml nya, nah kita bisa stop container nya terlebih dahulu lalu setelah itu bisa remove nama container nya

6. perintah untuk prune atau menghilangkan volumes, (hati2 karena perintah ini benar benar menghapus volumes dan membuat kita harus pull registry nya secara ulang / download ulang)
```
docker system prune --volumes -a 
```
perintah ini benar benar untuk menghapus sampah volumes yang mungkin membuat storage kita habis

7. perintah docker melihat volumes yang sudah di pull 
```
docker volume ls
```
perintah ini untuk melihat volumes yang sudah terinstall pada docker anda

8. perintah untuk melihat detail volumes 
```
docker volume inspect (nama volumes)
```
perintah ini untuk melihat data volumes tersebut

9. perintah untuk melihat logs container 
```
docker logs (nama container)
```
perintah ini berfungsi melihat log container jika tidak mau jalan container nya

10. memeriksa network docker : 
```
docker network ls
```
untuk melihat network docker container

11. perintah untuk melihat isi container dari network tersebut
```
docker network inspect (nama network nya)
``` 
12. perintah untuk connect in container dan network nya :
```
docker network connect (nama network nya) (nama container nya)
```

## Kesimpulan : 
Docker memiliki banyak keunggulan dalam hal portabilitas, efisiensi, dan skalabilitas, yang menjadikannya pilihan utama dalam dunia DevOps dan cloud computing. Namun, ada tantangan terkait keamanan, manajemen storage, serta persaingan dengan teknologi lain.

# SEKIAN DAN TERIMAKASIH