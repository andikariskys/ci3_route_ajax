###################
How to Instalation
###################
1. Create database name 
    menu
2. make table use command 
    CREATE TABLE daftar_menu (
    id varchar(36) PRIMARY_KEY,
    nama varchar(35),
    jenis enum("makanan", "minuman", "snack"),
    harga int(11)
    );
3. insert your table, example: 
    INSERT INTO daftar_menu VALUES(uuid(), "Milk Shake", "minuman", 8000);
4. clone this project into your php server (ex. XAMPP on ``C:\xampp\htdocs\`` or Laragon on ``C:\Laragon\wwww\`` )
5. if you use XAMPP, open your browser and address ``localhost/ci3_route_ajax``. if you use Laragon, address on browser ``ci3_route_ajax.{domain}`` example ``ci3_route_ajax.test``
6. copy address, then change ``application/config/config.php`` on line 26
7. finish