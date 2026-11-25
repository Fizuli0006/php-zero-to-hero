# Authentication

Qeydiyyat, password_hash, password_verify, login/logout və sessiya yenilənməsi.

## Əsas anlayışlar

Şifrələri açıq mətnlə saxlamayın. password_hash() və password_verify() istifadə edin. Uğurlu girişdən sonra session ID-ni yeniləyin və məlumat dəyişən formalarda CSRF qoruması tətbiq edin.

## Nümunə

Repository-nin əsas qovluğundan başladın:

```bash
php lessons/19-authentication/examples/example.php
```

## Praktika

Tapşırıqlar üçün [`../../exercises/README.md`](../../exercises/README.md) faylına baxın. Nümunə həllərə baxmazdan əvvəl öz həllinizi yazın.

## Əlavə çalışma

- İstifadə olunan funksiya və dil imkanlarını PHP rəsmi sənədlərində oxuyun.
- Nümunəni dəyişdirin və başlamazdan əvvəl nəticəni təxmin edin.
- Kodu öz sözlərinizlə izah edin.
