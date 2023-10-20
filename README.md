# Service Tools

Website ini adalah sebuah web yang dimana dia website seperti kelas online untuk programmer 
yang dimana dia dalam weeb tersebut sudah tersedia 3 role admin staff dan user

## Fitur

-   Transaksi Simple
-   Create Kelas 

## Jalankan Secara Lokal

-   Pastikan sudah terinstall php 8.1+ untuk menjalankan laravel 9.5

**Clone**

```shell
git clone https://github.com/Bayu-Sumantri/Banh_Code-laravvel.git
```

**Go to Directory**

```shell
cd ServiceTools
```

**Go to Directory Git Bash**

```shell
code .
```


**Setting Database Config in Env**

```
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

**Migrate Database**

```shell
php artisan migrate --seed
```

**Link Storage**

```shell
php artisan storage:link
```

**Run Local Server**

```shell
php artisan serve
```

## Environment Variables

jika sudah uppload foto tetapi foto nya tidak muncul atau tidak nampil bisa dengan merubah dan mengkonfigurasi file .env , dan ganti dengan url yang kita jalan kan pada project ini 

contoh: `http://127.0.0.1:8000`

```
APP_URL
```

## Developer

-   [@Banh_Code](https://github.com/Bayu-Sumantri)
