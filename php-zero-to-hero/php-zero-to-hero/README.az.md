# PHP Zero to Hero

PHP proqramlaşdırmasını sıfırdan başlayaraq müasir backend inkişafına qədər öyrədən praktik və ikidilli (Azərbaycan/İngilis) açıq mənbəli kurs.

> **Status:** Kurs hazırlanma mərhələsindədir. Əsas hədəf PHP 8.4+, PHP 8.5 ilə uyğun nümunələrdir.

## Nələri öyrənəcəksiniz?

- PHP sintaksisi, tiplər, şərtlər, dövrlər, massivlər və funksiyalar
- Formalar, sorğu məlumatları, validasiya, sessiyalar və cookie-lər
- Fayllarla iş, istisnalar və obyekt-yönümlü proqramlaşdırma
- PDO vasitəsilə MySQL, prepared statements və CRUD
- Autentifikasiya əsasları və veb təhlükəsizliyi
- Kiçik PHP tətbiqinin hazırlanması və yoxlanılması

## Tələblər

- PHP 8.4 və ya daha yeni versiya (PHP 8.5 uyğunluğu)
- Kod redaktoru və terminal
- Verilənlər bazası bölmələri üçün MySQL 8+ və ya uyğun MariaDB
- İlk mövzularda Composer məcburi deyil

Quraşdırmanı yoxlayın:

```bash
php -v
php -m
```

İlk nümunəni başladın:

```bash
php lessons/01-introduction/examples/hello.php
```

Lokal server:

```bash
php -S localhost:8000 -t projects/hello-web
```

Brauzerdə `http://localhost:8000` ünvanını açın.

## Kurs proqramı

| № | Modul | Mövzular |
|---|---|---|
| 01 | Giriş | PHP, işləmə mühiti, ilk skript |
| 02 | Sintaksis | PHP teqləri, əmrlər, şərhlər |
| 03 | Dəyişənlər və sabitlər | Dəyişənlər, scope, sabitlər |
| 04 | Məlumat tipləri | Sadə tiplər, massivlər, null, tip elanları |
| 05 | Operatorlar | Riyazi, müqayisə, məntiqi operatorlar |
| 06 | Şərtlər | if, elseif, match |
| 07 | Dövrlər | for, while, foreach |
| 08 | Massivlər | İndeksli, assosiativ, çoxölçülü massivlər |
| 09 | Funksiyalar | Parametrlər, return type, closure |
| 10 | Formalar | GET, POST, validasiya, təhlükəsiz çıxış |
| 11 | Superglobal dəyişənlər | Request, server, environment |
| 12 | Sessiyalar və cookie-lər | Sessiya və cookie əsasları |
| 13 | Fayllarla iş | Oxuma, yazma, fayl yükləmə təhlükəsizliyi |
| 14 | OOP | Siniflər, obyektlər, irsiyyət, interfeyslər |
| 15 | Xətaların idarə edilməsi | Exception, error, log |
| 16 | MySQL əsasları | Cədvəllər, sxem, bağlantı anlayışı |
| 17 | PDO | Prepared statement və təhlükəsiz sorğular |
| 18 | CRUD | Əlavə et, oxu, yenilə, sil |
| 19 | Autentifikasiya | Şifrə hash-i, giriş prosesi, sessiyalar |
| 20 | Təhlükəsizlik | XSS, CSRF, SQL injection, konfiqurasiya |

## Öyrənmə qaydası

1. Mövzunun izahını oxuyun.
2. Bütün nümunələri özünüz başladın.
3. Tapşırıqları həllərə baxmadan edin.
4. Nəticənizi nümunə həll ilə müqayisə edin.
5. Kodda dəyişiklik edib nəticəni izah edin.
6. Kursun sonunda layihələri hazırlayın.

## Töhfə vermək

Düzəliş, tərcümə, yeni nümunə və tapşırıqlar üçün [CONTRIBUTING.md](CONTRIBUTING.md) faylına baxın.

## Lisenziya

MIT. Ətraflı məlumat üçün [LICENSE](LICENSE) faylına baxın.

## Qeyd

Bu repository tədris məqsədlidir. Təhlükəsizlik nümunələri istehsal mühitində tam təhlükəsizlik auditini əvəz etmir.
