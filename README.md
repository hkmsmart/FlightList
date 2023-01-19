<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Uçuş Listesi Projesi

### Kurulum
Projeyi locale kloneladıktan sonra, .env.example dosyasını düzenleyiniz. ve yeniden adlandırın ".env"

komut satırını açın ve proje diznine giriniz.

Aşağıdaki kod ile laravel kütüphanlerini indiriniz.

- composer install

Laravel key oluşturmak için aşağıdaki komutu çalıştırınız.

- php artisan key:generate

Proje tabloları:database/migrations klasörünün altındadır.
tobloları veritabanına eklemek için aşağıdaki komutu çalıştırınız.

- php artisan migrate

Proje örnek veriler:database/seeders klasörünün altındadır.
örnek verileri tabloya aktarmak için aşağıdaki komutu çalıştırınız.

- php artisan db:seed

Projeyi başlatmak için aşağıdaki komutu çalıştırınız.

kurulum bitmiştir.

Aşağıdaki komut ile projeyi başlatabilirsiniz, veya localhost yolundan erişebilirsiniz.

- php artisan serve

### Projede Yapılanlar

1. Kaptanlar ve uçuş bilgilerinin olduğu iki ayrı tablo oluşturuldu.
2. Eloquent ORM kullanılarak verilerin getirilmesi.
3. İki ayrı model dosyayı.
4. Jquery datatable kullanılmıştır.
5. Arama, sıralama ve sayfalama doğru eklenmiştir.
6. Status true ise “Done”, aksi takdirde “Planned” belirlenmiştir.
7. Uçuş listesi dakika bir, ajax ile yenilenmektedir.
