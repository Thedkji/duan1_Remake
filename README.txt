|----------- Dự Án 1 Remake -------------|
|----------------------------------------|


|-----------Công nghệ sử dụng -----------|

+ HTML , CSS (SCSS) , JS , PHP 

|----------------------------------------|



|-----------------------------Phần mềm--------------------------------|

+ Vscode | Version: 1.89.0 (user setup)
	 | Commit: b58957e67ee1e712cebf466b995adf4c5307b2bd
	 | Date: 2024-05-01T02:09:22.859Z
	 | Electron: 28.2.8
	 | ElectronBuildId: 27744544
	 | Chromium: 120.0.6099.291
	 | Node.js: 18.18.2
	 | V8: 12.0.267.19-electron.0	
	 | OS: Windows_NT x64 10.0.22631

+ Laragon | Bản full v6.0 220916
	  | php v8.3.4-Win32-vs16-x64
	  | phpmyadmin v5.2.1
	  | mysql v8.0.36

+composer |version 2.7.2 2024-03-11 17:12:18
	  |"phroute/phroute": "^2.2",
          |"eftec/bladeone": "^4.13"

|---------------------------------------------------------------------|


|----------------------------------------Cấu trúc thư mục------------------------------------------------|

+Sử dụng mô hình MVC
|.vscode| : thư mực chứa câu lệnh dùng để chạy phím tắt biên dịch sass

|app|: thư mục chứa các thư mục con trong mvc như model , view , controller và 1 vài thư mục khác

	|common|: thư mục chứa file cấu hình route (route.php)

	|controllers| : thư mục chứa các điều khiển , sử lý các thao tác của người dùng đến database

	|model| : thư mục chứa các câu lệnh sql dùng để truy vấn , chỉnh sửa dữ liệu , ...

	|views| : thư mục chứa giao diện người dùng

|asset| : thư mục chứa các thành phần sử dụng chung như css , js , img ,...

|vendor| : thư mục của composer

|-------------------------------------------------------------------------------------------------------|



|--------------------------------------------Cách sử dụng dự án-----------------------------------------|

Bước 1 : Cài đặt vscode , laragon hoặc xampp , composer , sass (Có thể sử dụng các trình viết khác)

Bước 2: Mở thư mục dự án lên bằng xampp , laragon , hoặc bất kỳ server nào khác

Bước 3: Nếu dùng vscode thì chọn Terminal ở thanh công cụ phía trên đầu chọn run task -> run sass -> continue without scanning the task oputput
để biên dịch sass sang css , nếu ko dùng sass bỏ qua bước này hoặc ko dùng vscode thì có thể biên dịch bằng terminal (xem trên youtube)

Lưu ý : Nếu ko chạy dc vui lòng cài đặt phiên bản phần mềm tương ứng như ở trên 

