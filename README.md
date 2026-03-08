# 🛡️ Faith — Admin Panel & Client License Management System

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-9.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel 9">
  <img src="https://img.shields.io/badge/PHP-8.0+-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP 8.0+">
  <img src="https://img.shields.io/badge/MySQL-8.0-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
  <img src="https://img.shields.io/badge/License-MIT-green?style=for-the-badge" alt="MIT License">
  <img src="https://img.shields.io/badge/CI/CD-GitLab-FC6D26?style=for-the-badge&logo=gitlab&logoColor=white" alt="GitLab CI">
</p>

> **Faith** — Laravel 9 asosidagi ko'p-rolali admin panel va mijozlar litsenziyasini boshqarish tizimi. Tizim mijoz saytlari uchun litsenziya muddati va foydalanuvchilar limitini tekshirishni ta'minlaydi, shuningdek Telegram orqali ariza qabul qiladi.

---

## 📋 Mundarija

- [Xususiyatlar](#-xususiyatlar)
- [Texnologiyalar](#-texnologiyalar)
- [Arxitektura](#-arxitektura)
- [Rollar tizimi](#-rollar-tizimi)
- [O'rnatish](#-ornatish)
- [Muhit sozlamalari](#-muhit-sozlamalari)
- [Ma'lumotlar bazasi](#-malumotlar-bazasi)
- [API endpointlari](#-api-endpointlari)
- [CI/CD](#-cicd)
- [Litsenziya](#-litsenziya)

---

## ✨ Xususiyatlar

- 🔐 **Ko'p-rolali autentifikatsiya** — Super Admin, Admin, Manager va Buyer rollari
- 👥 **Admin boshqaruvi** — Foydalanuvchi qo'shish, tahrirlash, o'chirish va qidirish
- 🧾 **Mijozlar litsenziyasi** — Mijoz URL, muddat va foydalanuvchilar limiti
- 🔍 **Litsenziya tekshiruvi API** — Tashqi saytlar `/expire` endpoint orqali o'z litsenziyasini tekshira oladi
- 📬 **Telegram ariza tizimi** — Saytdan kelgan arizalar Telegram botga yuboriladi
- 📄 **Pagination** — Mijozlar ro'yxatida sahifalash
- 🏞️ **Rasm yuklash** — Foydalanuvchilar profil rasmini yuklay oladi
- 🚀 **GitLab CI/CD** — `master` branchga push qilinganda avtomatik deploy

---

## 🛠️ Texnologiyalar

| Texnologiya       | Versiya    | Maqsad                          |
|-------------------|------------|---------------------------------|
| **Laravel**       | ^9.2       | Asosiy backend freymvork        |
| **PHP**           | ^8.0.2     | Dasturlash tili                 |
| **MySQL/MariaDB** | 8.0 / 10.4 | Ma'lumotlar bazasi              |
| **Laravel Sanctum** | ^2.14.1  | API Token autentifikatsiyasi    |
| **Laravel UI**    | ^3.4       | Auth scaffolding                |
| **Guzzle HTTP**   | ^7.2       | Telegram API integratsiyasi     |
| **Laravel Mix**   | —          | Frontend asset bundling         |
| **GitLab CI**     | —          | Avtomatik deployment            |

---

## 🏗️ Arxitektura

```
faith/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── AdminController.php    # Admin CRUD (Super Admin/Admin/Manager)
│   │   │   ├── BuyerController.php    # Buyer ro'yxatini ko'rish
│   │   │   ├── ClientController.php   # Mijoz litsenziyalari CRUD
│   │   │   └── HomeController.php     # Asosiy sahifa
│   │   ├── Middleware/
│   │   │   ├── SuperAdmin.php         # Super Admin middleware
│   │   │   ├── Admin.php              # Admin middleware
│   │   │   └── Manager.php            # Manager middleware
│   ├── Models/
│   │   ├── User.php                   # Foydalanuvchi (rol bilan)
│   │   ├── Client.php                 # Mijoz litsenziyasi
│   │   └── Role.php                   # Rollar
├── database/
│   ├── migrations/                    # DB migratsiyalari
│   └── seeders/                       # Boshlang'ich ma'lumotlar
├── resources/views/
│   ├── admin/                         # Admin panel view'lari
│   ├── auth/                          # Login/Register sahifalari
│   └── welcome.blade.php              # Landing sahifa (ariza formasi)
├── routes/
│   └── web.php                        # Barcha marshrutlar
└── panel_en.sql                       # DB dump (boshlang'ich ma'lumotlar bilan)
```

---

## 👤 Rollar tizimi

| Rol ID | Rol nomi      | Huquqlar                                                    |
|--------|---------------|-------------------------------------------------------------|
| `1`    | **Super Admin** | To'liq huquq: admin qo'shish/o'chirish/tahrirlash, mijozlar |
| `2`    | **Admin**      | Admin ro'yxatini ko'rish, o'z profilini tahrirlash          |
| `3`    | **Manager**    | Adminlar va buyerlarni ko'rish, indeksni boshqarish         |
| `0`    | **Buyer**      | Oddiy foydalanuvchi (mahsulot xaridori)                     |

---

## ⚙️ O'rnatish

### Talablar

- PHP >= 8.0.2
- Composer
- MySQL >= 5.7 yoki MariaDB >= 10.4
- Node.js & NPM

### Qadamlar

**1. Repozitoriyni klonlash**
```bash
git clone <repository-url> faith
cd faith
```

**2. PHP paketlarini o'rnatish**
```bash
composer install
```

**3. Node paketlarini o'rnatish**
```bash
npm install && npm run dev
```

**4. Muhit faylini sozlash**
```bash
cp .env.example .env
php artisan key:generate
```

**5. `.env` faylini tahrirlash** (quyidagi bo'limga qarang)

**6. Ma'lumotlar bazasini yaratish va migratsiya**
```bash
php artisan migrate
```

> **Yo'nalish:** Boshlang'ich ma'lumotlar bilan yuklash uchun `panel_en.sql` faylini to'g'ridan-to'g'ri import qiling:
> ```bash
> mysql -u root -p your_database_name < panel_en.sql
> ```

**7. Storage havolasini yaratish**
```bash
php artisan storage:link
```

**8. Serverni ishga tushirish**
```bash
php artisan serve
```

Dastur `http://localhost:8000` manzilida ishga tushadi.

---

## 🔧 Muhit sozlamalari

`.env` faylida quyidagi maydonlarni to'ldiring:

```dotenv
APP_NAME="Faith Panel"
APP_ENV=local
APP_KEY=           # php artisan key:generate bilan hosil qilinadi
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=faith_db      # O'z DB nomingizni kiriting
DB_USERNAME=root
DB_PASSWORD=              # O'z parolingizni kiriting

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
```

> ⚠️ **Diqqat:** `.env` faylini hech qachon repository'ga qo'shmang, u `.gitignore`da ko'rsatilgan.

---

## 🗄️ Ma'lumotlar bazasi

### Jadvallar

| Jadval nomi             | Tavsif                                        |
|-------------------------|-----------------------------------------------|
| `users`                 | Foydalanuvchilar (rol, rasm, email, parol)    |
| `roles`                 | Rollar (Buyer, Super Admin, Admin, Manager)   |
| `clients`               | Mijozlar litsenziyasi (URL, muddat, limit)    |
| `personal_access_tokens`| Sanctum API tokenlari                         |
| `password_resets`       | Parol tiklash tokenlari                       |
| `failed_jobs`           | Xatoga uchragan queue ishlari                 |

### `clients` jadval tuzilishi

| Ustun  | Tur         | Tavsif                                 |
|--------|-------------|----------------------------------------|
| `id`   | bigint (PK) | Yagona identifikator                   |
| `name` | varchar     | Mijoz nomi                             |
| `phone`| varchar     | Telefon raqami                         |
| `url`  | varchar     | Mijoz saytining URL manzili            |
| `date` | date/varchar| Litsenziya tugash sanasi               |
| `limit`| integer     | Foydalanuvchilar limiti                |

---

## 🔌 API Endpointlari

### Litsenziyani tekshirish

Tashqi saytlar o'z litsenziyasini tekshirish uchun ushbu endpointga murojaat qiladi:

```
GET /expire?url=https://misol-sayt.uz
```

**Muvaffaqiyatli javob (200):**
```json
{
  "status": true,
  "data": "2025-12-31",
  "limit": 100,
  "message": "Active"
}
```

**Topilmadi javob:**
```json
{
  "status": false,
  "data": "2020-01-01",
  "limit": 0,
  "message": "Topilmadi"
}
```

### Ariza yuborish (Telegram)

```
POST /message
```

| Maydon    | Tur    | Tavsif               |
|-----------|--------|----------------------|
| `name`    | string | Murojaatchi ismi     |
| `phone`   | string | Telefon raqami       |
| `center`  | string | Markaz nomi          |
| `comment` | string | Izoh                 |

> Ariza yuborilganda, Telegram botga xabar ketади va foydalanuvchiga redirect qilinib, muvaffaqiyat xabari ko'rsatiladi.

---

## 🚀 CI/CD

Loyiha GitLab CI/CD orqali avtomatik deploy qilinadi. `.gitlab-ci.yml` faylida konfiguratsiya mavjud.

### Kerakli GitLab CI o'zgaruvchilari

GitLab → Settings → CI/CD → Variables bo'limiga quyidagilarni qo'shing:

| O'zgaruvchi       | Tavsif                        |
|-------------------|-------------------------------|
| `SSH_PRIVATE_KEY` | Server SSH private key        |
| `SSH_HOST`        | Server IP manzili             |
| `SSH_USER`        | SSH foydalanuvchi nomi        |
| `WORK_DIR`        | Serverdagi loyiha yo'li       |

### Deploy jarayoni

`master` branchga har bir `push` qilinganda avtomatik ravishda:

1. SSH orqali serverga ulanadi
2. `git pull origin master` — so'nggi kodni oladi
3. `composer install` — paketlarni yangilaydi
4. `php artisan migrate` — migratsiyalarni bajaradi
5. `php artisan optimize:clear` — keshni tozalaydi

---

## 🗃️ Boshlang'ich ma'lumotlar (Test uchun)

`panel_en.sql` import qilingandan so'ng quyidagi test hisoblar mavjud bo'ladi:

| Ism        | Email                        | Rol          |
|------------|------------------------------|--------------|
| Islombek   | onlymarch567@gmail.com       | Super Admin  |
| Bekzod     | ali@gmail.com                | Admin        |
| Ziyodulla  | vali@gmail.com               | Manager      |
| Azizov domla | abdurahmanislam304@gmail.com | Manager    |
| gani       | gani@gmail.com               | Buyer        |

> ⚠️ **Xavfsizlik:** Ishlab chiqarish (production) muhitda ushbu hisob ma'lumotlarini **darhol** almashtiring.

---

## 📁 Qo'shimcha fayllar

| Fayl              | Tavsif                                              |
|-------------------|-----------------------------------------------------|
| `.env.example`    | Muhit o'zgaruvchilari shabloni                      |
| `panel_en.sql`    | Database dump (rollar va test foydalanuvchilar bilan)|
| `.gitlab-ci.yml`  | GitLab CI/CD deploy konfiguratsiyasi               |
| `.editorconfig`   | Kod formatlash qoidalari                            |
| `webpack.mix.js`  | Laravel Mix asset bundling konfiguratsiyasi         |

---

## 📄 Litsenziya

Ushbu loyiha [MIT litsenziyasi](https://opensource.org/licenses/MIT) ostida tarqatiladi.

---

<p align="center">
  Laravel 9 asosida qurilgan · PHP 8.0+ · MySQL
</p>
