# Versi PHP

Nama: Harisa Malfa Lira
NPM: 4525210027

## Deskripsi

Repository ini berisi implementasi beberapa contoh program **Pemrograman Berorientasi Objek (PBO)** menggunakan bahasa pemrograman PHP.

Program-program di dalam repository ini membahas beberapa konsep PBO, mulai dari penggunaan class dan object hingga konsep seperti inheritance, polymorphism, association, composition, abstract class, interface, dan trait.

Setiap materi dipisahkan ke dalam folder masing-masing agar kode lebih mudah dipelajari, dijalankan, dan dikembangkan.

Pada implementasi PHP, setiap class dibuat dalam file `.php` sesuai dengan kebutuhan program. File-file tersebut kemudian dapat digunakan bersama dalam satu program melalui `require` atau `include`.

---

## Struktur Materi

Materi yang tersedia dalam repository ini terdiri dari beberapa bagian:

| Folder                 | Materi yang Dibahas                                                               |
| ---------------------- | --------------------------------------------------------------------------------- |
| `01 Class`             | Class, object, property, constructor, dan getter                                  |
| `02 Constructor`       | Default value pada constructor, optional parameter, getter, dan setter            |
| `03 inheritance`       | Inheritance dan method overriding pada bangun datar serta mahasiswa internasional |
| `04 polymorphism`      | Inheritance pada handphone, polymorphism, dan pengecekan tipe object              |
| `05 asosiasikomposisi` | Association, aggregation, dan composition                                         |
| `06 abstractinterface` | Abstract class, interface, implementasi method, dan trait                         |

---

# Cara Menjalankan Program

Pastikan **PHP sudah terinstall** di perangkat sebelum menjalankan program.

## 1. Mengecek Instalasi PHP

Buka **Terminal** atau **Command Prompt**, kemudian jalankan:

```bash
php --version
```

Jika PHP sudah terinstall, akan muncul informasi versi PHP yang digunakan.

Contoh:

```text
PHP 8.x.x (cli) ...
```

Jika perintah tersebut tidak dikenali, PHP perlu diinstall dan ditambahkan ke PATH terlebih dahulu.

---

## 2. Clone Repository

Jika repository masih berada di GitHub, clone repository menggunakan:

```bash
git clone <URL-REPOSITORY>
```

Kemudian masuk ke folder repository:

```bash
cd <NAMA-REPOSITORY>
```

---

## 3. Menjalankan Program Secara Langsung

Setiap materi memiliki file PHP yang dapat dijalankan melalui terminal.

Format perintahnya:

```bash
php nama_file.php
```

Contohnya, jika terdapat file `Main.php`:

```bash
php Main.php
```

Pastikan posisi terminal berada di folder yang berisi file tersebut.

---

## 4. Menjalankan Materi 01 Class

Masuk ke folder:

```bash
cd "01 Class"
```

Kemudian jalankan file utama:

```bash
php Main.php
```

Jika nama file utama berbeda, sesuaikan dengan nama file `.php` yang terdapat di dalam folder tersebut.

Untuk kembali ke folder utama:

```bash
cd ..
```

---

## 5. Menjalankan Materi 02 Constructor

Masuk ke folder:

```bash
cd "02 Constructor"
```

Kemudian jalankan:

```bash
php Main.php
```

Setelah selesai, kembali ke folder utama:

```bash
cd ..
```

---

## 6. Menjalankan Materi 03 Inheritance

Masuk ke folder:

```bash
cd "03 inheritance"
```

Kemudian jalankan:

```bash
php Main.php
```

Untuk kembali:

```bash
cd ..
```

---

## 7. Menjalankan Materi 04 Polymorphism

Masuk ke folder:

```bash
cd "04 polymorphism"
```

Kemudian jalankan:

```bash
php Main.php
```

Untuk kembali:

```bash
cd ..
```

---

## 8. Menjalankan Materi 05 Asosiasi dan Komposisi

Masuk ke folder:

```bash
cd "05 asosiasikomposisi"
```

Kemudian jalankan:

```bash
php Main.php
```

Untuk kembali:

```bash
cd ..
```

---

## 9. Menjalankan Materi 06 Abstract dan Interface

Masuk ke folder:

```bash
cd "06 abstractinterface"
```

Kemudian jalankan:

```bash
php Main.php
```

Untuk kembali:

```bash
cd ..
```

---

# Alternatif Menjalankan Menggunakan PHP Built-in Server

Selain melalui terminal, program PHP juga dapat dijalankan menggunakan **PHP Built-in Development Server**.

Pastikan terminal berada di folder repository, kemudian jalankan:

```bash
php -S localhost:8000
```

Setelah server berjalan, buka browser dan akses:

```text
http://localhost:8000
```

Jika ingin menjalankan file tertentu melalui browser, gunakan alamat seperti:

```text
http://localhost:8000/Main.php
```

Server dapat dihentikan dengan menekan:

```text
Ctrl + C
```

---

# Catatan

* Pastikan PHP sudah terinstall sebelum menjalankan program.
* Perhatikan penggunaan huruf besar dan kecil pada nama file karena nama file dapat bersifat **case-sensitive** pada beberapa sistem operasi.
* Jika file utama memiliki nama selain `Main.php`, gunakan nama file yang sesuai.
* File class yang digunakan oleh program utama harus berada pada lokasi yang sesuai dengan `require` atau `include` yang digunakan.
* Jalankan perintah dari folder yang benar agar file PHP dapat ditemukan oleh terminal.

---

## Tujuan Repository

Repository ini dibuat sebagai dokumentasi sekaligus implementasi dari materi **Pemrograman Berorientasi Objek (PBO)** menggunakan PHP. Setiap folder mewakili materi yang berbeda sehingga konsep-konsep PBO dapat dipelajari melalui contoh program yang terpisah.
