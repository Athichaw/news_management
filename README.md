# News_Content_Management
This is a project in programmer examination of Bangkok Post Public Company Limited.<br>
Requirement: Design database and manage back-end system about news content by using MySQL Database with Laravel Framework.<br>
<br>
Running Steps:<br>
1. หลังจาก clone git ด้วยคำสั่ง git clone https://github.com/Athichaw/News_Content_Management.git ให้ทำการ cd เข้าในไฟล์ที่ clone<br> 
2. ติดตั้ง packet กับ library ที่ laravel ต้องใช้ ด้วยคำสั่ง composer install<br>
3. ทำการ copy environment ด้วยคำสั่ง cp .env.example .env และสั่ง generate key ของตัวเอง ด้วยคำสั่ง php artisan key:generate<br>
4. เมื่อเตรียมความพร้อมเสร็จแล้ว ทำการอัปเดท migrate ฐานข้อมูลด้วยคำสั่ง php artisan migrate:refresh<br>
5. รันโปรเจ็คด้วยคำสั่ง php artisan serve โดย url เป็น localhost >>> http://127.0.0.1:8000/path ;path ที่ตั้งไว้ในตัว routes<br>
ในที่นี้จะได้ http://127.0.0.1:8000/news/<br>
<br>
Designing Steps:<br>
1. ทำการออกแบบ database โดยในที่นี้ออกแบบไว้ 2 version เป็นแบบ simple 1 table (news_db_v1.jpg)และหลาย table (news_db.drawio หรือ new_db_v2.jpg) ซึ่งต้องไป join ใช้อีกที<br>
2. สำหรับการทำ Create Read Update Delete ด้วย Laravel<br>
อธิบายในมุมของ MVC คือ มีส่วนเก็บข้อมูล ส่วนแสดงผลและการทำงาน และส่วนควบคุม<br>
โดยหลักๆที่ใช้ในโปรเจคนี้ หลังออกแบบ database และ create data table และทำการ migrate แล้ว <br>
1. สร้างตัว models เพื่อใช้ในเป็นตัวติดต่อกับ database <br>
2. สร้างตัว views ได้แก่ index, create, show, update สำหรับเป็นหน้า interface และแสดงผล<br>
3. สร้างตัว controllers ซึ่งใน class ของ controllers จะรวมหลายๆฟังก์ชัน ซึ่งจะทำงานตามคำสั่งที่ได้รับมาอย่างเช่นในที่นี้คือ request ที่เรากดผ่านหน้า views ไป โดยฟังก์ชันที่ทำไว้มี 6 ตัว index สำหรับ action ที่หน้าแรก, create สำหรับไปที่หน้า create, store สำหรับการเพิ่มข้อมูลเข้า database, edit สำหรับไปที่หน้า edit, update สำหรับการแก้ไขข้อมูลที่ database, และ destroy สำหรับลบข้อมูล<br>
<br>
InComplete Parts:<br>
- สามารถแก้ไขข้อมูลได้<br>
- สามารถเลือกหมวดข่าวและสถานะของข่าวได้<br>
<br>
Credit Reference: https://www.webslesson.info/2022/07/build-laravel-9-crud-application-with-mysql-bootstrap-5.html and https://github.com/ohmiler/laravel-9-crud-app
