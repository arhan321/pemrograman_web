# Logika Docker

# Penjelasan sederhana tentang docker
Docker adalah platform yang memungkinkan kamu untuk menjalankan aplikasi dalam container. Container ini seperti `kotak ajaib` yang berisi semua yang dibutuhkan aplikasi untuk berjalan, termasuk kode, dependensi, dan konfigurasi.

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

# SEKIAN DAN TERIMAKASIH