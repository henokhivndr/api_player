# 🏀 Player API — Basketball Player Management

Player API adalah RESTful API sederhana yang dibuat menggunakan **Laravel** untuk mengelola data pemain basket.  
Project ini dirancang sebagai latihan dan implementasi pembuatan **CRUD API**, serta telah diuji menggunakan **Postman** dan berjalan dengan baik.

---

## 🚀 Fitur Utama

- Create (Tambah data pemain)
- Read (Ambil data pemain)
- Update (Ubah data pemain)
- Delete (Hapus data pemain)
- Response JSON
- Validasi request
- Sudah diuji menggunakan **Postman**

---

## 🗂️ Struktur Database

Project ini menggunakan satu tabel utama dengan struktur sebagai berikut:

| Field Name   | Type        | Keterangan                     |
|--------------|------------|--------------------------------|
| id_player    | Integer    | Primary Key (Auto Increment)   |
| player_name  | String     | Nama pemain basket             |
| position     | String     | Posisi pemain (PG, SG, SF, PF, C) |
| skill        | String     | Skill utama pemain             |

---

## 📡 Endpoint API

Base URL:
http://127.0.0.1:8000/api

### 🔹 Get All Players
GET /players


### 🔹 Get Player by ID
GET /players/{id}

### 🔹 Create Player
POST /players


**Body (JSON):**
```json
{
  "player_name": "Stephen Curry",
  "position": "PG",
  "skill": "Shooting"
}

🔹 Update Player
PUT /players/{id}

{
  "player_name": "LeBron James",
  "position": "SF",
  "skill": "Playmaking"
}

🔹 Delete Player
DELETE /players/{id}

🧪 Testing

Seluruh endpoint telah diuji menggunakan Postman dengan hasil:

Request berhasil
Response sesuai
Data tersimpan dan ter-update di database

🛠️ Tech Stack

Laravel
MySQL
Postman
REST API (JSON)

📦 Instalasi & Menjalankan Project

git clone <repository-url>
cd player_api
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve

🎯 Tujuan Project

Project ini dibuat untuk:

- Memahami konsep REST API
- Melatih penggunaan Laravel sebagai backend API
- Implementasi CRUD menggunakan Postman
- Persiapan project backend skala lebih besar