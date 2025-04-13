# 🔧 Deploy MySQL RDS via EC2 (Public IP)

Project catatan simpel untuk deploy database MySQL di Amazon RDS dan diakses dari EC2 Ubuntu dengan IP publik. Cocok buat latihan cloud computing dasar.

---

## 👤 Author
by `Brieliana-miaxaul` 

---

## 📌 Yang Dilakukan

- Bikin VPC + Subnet publik
- Launch EC2 (Ubuntu) dengan IP publik
- Atur Security Group: SSH (22), HTTP (80), MySQL (3306)
- Buat RDS MySQL (Free Tier, tanpa backup)
- SSH ke EC2 dan connect ke database RDS

---

## 🛠️ Tools

- Amazon EC2 (Ubuntu)
- Amazon RDS (MySQL)
- VPC & Subnet
- Security Group

---

## 🚀 Langkah Singkat

1. **Buat VPC**
   - CIDR: `10.0.0.0/16`
   - Tambahkan 1 public subnet (contoh: `10.0.1.0/24`)
   - Attach Internet Gateway

2. **Launch EC2**
   - Gunakan AMI Ubuntu
   - Enable Auto-assign Public IP
   - Security Group: buka SSH, HTTP, dan MySQL

3. **Buat RDS**
   - Pilih MySQL
   - Aktifkan Free Tier
   - Nonaktifkan backup
   - Jangan aktifkan public access

4. **SSH ke EC2**
   ```bash
   ssh -i your-key.pem ubuntu@public-ip


 Instalation Package APT
 ```
sudo apt update && sudo apt upgrade -y
sudo apt install apache2 mysql-client php libapache2-mod-php php-mysql unzip -y
sudo systemctl start apache2
sudo systemctl enable apache2
sudo apt install php
```

connect EC2 to mysql
```
mysql -h <RDS-Endpoint> -u <MasterUsername> -p
```

```
SHOW DATABASES;
```
pilih database yang tadi sudah dibuat lalu 'USE (nama database);'

buat table dan isi dari tablenya
```
	    CREATE TABLE barang (
    id_barang INT(11) AUTO_INCREMENT PRIMARY KEY,
    nama_barang VARCHAR(255),
    stok INT(11),
    harga_barang INT(11),
    tgl_masuk VARCHAR(255)
);
```

lalu exit dengan 'quit' lalu kita masuk ke direkroti untuk memindahkan dan mengedit file php yang ada
```
cd /var/www/html
```
```
sudo nano index.php
```
salin saja script code yang ada


```
    sudo nano koneksi.php
```
pada bagian koneksi edit pagian header script dengan:
```
    sudo nano koneksi.php
$user  = 'admin'; (MasterUsername dari RDS)
        $pass = 'Dbmiax10'; (pasword di RDS)
        try {
                // buat koneksi dengan database
                $koneksi = new PDO('mysql:host=isidenganendpointRDS;dbname=nama database dimysql;',$user,$pass);
```
begitu juga file lainnya seperti edit.php, tambah.php, hapus.php


setelah itu bisa testing via ip public ec2
http://ip-public-ec2/index.php


