<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="post.php" method="POST" role="form">
            <legend>Thực hành gửi dữ liệu lên server thông qua phương thức POST</legend>
            
            <div class="form-group">
                <label for="">Mã sinh viên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập mã sinh viên" name="msv">
            </div>

            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập tên đăng nhập" name="user">
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" id="" placeholder="Nhập email" name="email">
            </div>  

            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="text" class="form-control" id="" placeholder="Nhập số điện thoại" name="phone">
            </div>  

            <div class="form-group">
                <label for="">Giới tính</label>
                <br>
                <label for="">Nam <input type="radio" class="form-check" name="gender" value="Nam"></label>
                <br>
                <label for="">Nữ <input type="radio" class="form-check" name="gender" value="Nữ"></label>
                <br>
                <label for="">Khác<input type="radio" class="form-check" name="gender" value="Khác"></label>

            </div>

            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id="" placeholder="Nhập địa chỉ" name="address">
            </div>  
            
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
</body>
</html>