# crud-RDS-EC2
deploy database use RDS to IP Public from ec2


 buat VPC yang terdapat subnet public
 buat instance di EC2 dengan AMI ubuntu
 setting network dengan VPC IP public, Security Group add rule ssh, http, dan mysql
 buat RDS MySQL pilih free tiar dan matikan enable backup untuk mengurangi biaya pemakaian
 connect ec2 agar masuk ke ubuntu dengan ssh



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


