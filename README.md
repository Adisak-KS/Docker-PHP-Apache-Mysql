# 📖 Docker PHP Apache MySQL (จำลองสภาพแวดล้อม)

###### ✏️ แก้ไขเมื่อ : 14/05/2567
###### 👨‍💻 ผู้จัดทำ : Adisak
___

 เป็นการสร้าง Container เพื่อจำลองสภาพแวดล้อมให้เหมาะสมกับโปรเจ็คที่พัฒนาขึ้น

___

### ⭐ ฟีเจอร์ (Feature)
        ✅ รองรับการใช้งาน Apache
        ✅ รองรับการใช้งาน phpMyAdmin (MySQL) Version 5.2.1
        ✅ รองรับการเขียน PHP(MySQLi & PDO) Version 8.2.8 
___

### ✍️ ภาษาที่ใช้ในการพัฒนาระบบ
        1. Docker
        2. PHP(MySQLi & PDO)
___

### 🛠️ เครื่องมือที่ใช้
        1. Visual Studio Code
        2. Docker Desktop
        3. Microsoft Edge
___

### 📥วิธีติดตั้งเว็บไซต์
        1. ติดตั้งโดยใช้  Git Clone
        2. เปิดใช้งานโปรแกรม Docker Desktop
        3. เปิด Terminal ใน VsCode และใช้คำสั่ง docker-compose up เพื่อติดตั้งหรือใช้งาน และใช้คีย์ลัด CTRL + C เพื่อยกเลิกการทำงาน
___

### 🕯️วิธีเข้าใช้งาน
        1. เปิด Terminal ใน VsCode และใช้คำสั่ง docker-compose up เพื่อใช้งาน
        2. ทดสอบการ Connect Database โดยเข้าที่ http://localhost:8080/
        3. เข้าใช้งาน phpMyadmin โดยเข้าที่ http://localhost:8000/
        4. สร้างตาราง หรือ import ข้อมูลมาไว้ที่ Database ชื่อ MYSQL_DATABASE
        5. ใช้คีย์ลัด CTRL + C เพื่อยกเลิกการทำงาน
___

### 📑ข้อมูลสำหรับ Login phpMyAdmin 
        Username : root
        Password : MYSQL_ROOT_PASSWORD
___
### 💻 ตัวอย่างเว็บไซต์

1. โปรแกรม Docker Desktop

![index](https://github.com/Adisak-KS/Docker-PHP-Apache-Mysql/blob/main/previews/01_docker_desktop.png)

2. หน้า Login phpMyAdmin

![index](https://github.com/Adisak-KS/Docker-PHP-Apache-Mysql/blob/main/previews/02_login_phpmyadmin.png)

3. หน้า phpMyadmin

![index](https://github.com/Adisak-KS/Docker-PHP-Apache-Mysql/blob/main/previews/03_index_phpmyadmin.png)


