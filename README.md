# crud-RDS-EC2
deploy database use RDS to IP Public from ec2


 buat VPC yang terdapat subnet public
 buat instance di EC2 dengan AMI ubuntu
 setting network dengan VPC IP public, Security Group add rule ssh, http, dan mysql
 buat RDS MySQL pilih free tiar dan matikan enable backup untuk mengurangi biaya pemakaian
 connect ec2 agar masuk ke ubuntu dengan ssh

 ```
sudo apt update && sudo apt upgrade -y
sudo apt install apache2 mysql-client php libapache2-mod-php php-mysql unzip -y
sudo systemctl start apache2
sudo systemctl enable apache2
```
