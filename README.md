## Content
- login
- quản lý toà nhà
- quản lý phòng
- quản lý tiền phòng trọ 
- thống kê
- log ?

## màn	- Api Name - 	url	 - method
## login	
  đăng nhập	api/login/	POST
	đăng ký	api/register/	POST
	logout	api/logout/	GET
	Quên mật khẩu	api/forgot-password	GET
			
## quản lý toà nhà	
  list toà nhà	api/apartments	GET
	thêm toà nhà	api/apartment/add	POST
	sửa toà nhà	api/apartment/edit/{id}	PUT?
	xoá toà nhà	api/apartment/delete/{id}	DELETE
	tìm kiếm theo tên hoặc địa chỉ	api/apartment/search	
			
## Quản lý căn hộ	
  list căn hộ theo toà nhà	api/apartments/{id}/	GET
	thêm phòng	api/apartment-room/add	POST
	sửa phòng	api/apartment-room/edit/{id}	PUT?
	xoá phòng	api/apartment-room/delete/{id}	DELETE
	tìm kiếm theo toà nhà, số phòng	api/apartment-room/search	
			
## Quản lý tiền trọ hàng tháng	
  room detail	api/apartment-room/{id}	GET
	nhập thông tin: điện, nước, tổng số tiền cần thanh toán (tự bind), 	api/apartment-room/{id}/edit/{month}	POST
	tổng số tiền dã thanh toán, ngày thanh toán, load ảnh nữa :(		
			
## Thống kê	
  gửi mail khi chưa gửi tiền trước ngày mùng 10		
	các phòng chưa thanh toán	api/apartment-room/unpaid	GET


