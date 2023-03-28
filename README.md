<<<<<<< HEAD
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
1. ทำการออกแบบ database โดยในที่นี้ออกแบบไว้ 2 version เป็นแบบ simple 1 table (news_db_v1.jpg)และหลาย table (news_db.drawio) ซึ่งต้องไป join ใช้อีกที<br>
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
=======
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
>>>>>>> ed5e562 (first commit)
