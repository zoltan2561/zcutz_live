# Z Cutz Barber

Z Cutz Barber időpontfoglalásra és alap adminisztrációra készült weboldala.

## Technológiák

- Frontend: HTML, CSS, JavaScript
- Backend: PHP, MySQL
- Integráció: Google Calendar API

## Főbb funkciók

- nyilvános bemutatkozó oldal
- szolgáltatások és árlista megjelenítése
- időpontfoglalási felület
- admin felület foglalások és vendégek kezeléséhez
- opcionális Google Naptár szinkron

## Konfiguráció

A Gitben nincs éles adatbázis jelszó vagy Google credential fájl.

Az adatbázis kapcsolat helyi/éles beállításához a `config.example.php` alapján kell létrehozni egy `config.local.php` fájlt a szerveren. Ez a fájl `.gitignore` alatt van, ezért az autodeploy nem írja felül.

Példa:

```php
<?php

return array(
    'host' => 'localhost',
    'name' => 'database_name',
    'user' => 'database_user',
    'pass' => 'database_password',
);
```

## Deploy

A cél az, hogy a GitHubon lévő kód tükrözze az éles szerveren használt verziót, miközben a szerverhez kötött fájlok ne kerüljenek fel a repóba.

Nem kerül Gitbe:

- `vendor/`
- adatbázis dumpok
- Google credential és token fájlok
- éles lokális konfiguráció
- teszt és backup fájlok

## Készítő

By: P. Zoltán
