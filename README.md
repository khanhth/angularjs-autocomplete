# Tạo Form Autocomplete với AngularJS và PHP

## Yêu Cầu
Máy tính cần được cài đặt PHP, MySQL và web server (Apache hoặc NginX).

## Thiết Lập Ứng Dụng
Để có thể chạy được ứng dụng bạn cần hoàn tất các bước thiết lập dưới đây:

*Bước 1:* Tạo database cho ứng dụng với tên `angular_autocomplete`.
*Bước 2:* Import dữ liệu vào database mới tạo sử dụng file `angular_autocomplete.sql` kèm trong source code.
*Bước 3:* Mở file `config_db.php` và thay đổi các giá trị của biến `$user` và `$password` của user có trên MySQL trên máy local.

Sau đó truy cập vào địa chỉ URL chạy ứng dụng để kiểm tra lại bằng cách nhập chữ cái `j` vào ô tìm kiếm nếu thiết lập đúng bạn thấy một menu sổ xuống với một item trong menu với giá trị là `John Doe`.

## Links
Tham khảo giải thích về source code này tại địa chỉ bài viết <strong><a href="http://www.codehub.vn/Tao-Chuc-Nang-Autocomplete-trong-AngularJS-voi-PHP-va-MySQL" title="Autocomplete trong AngularJS với PHP và MySQL">Tạo Chức Năng Autocomplete trong AngularJS với PHP và MySQL</a></strong>.

Nguồn: <a href="http://www.codehub.vn">Codehub.vn</a>.
