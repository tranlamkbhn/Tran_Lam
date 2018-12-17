<!-- <?php
require ("process.php"); 
// Biến lưu trữ data và error
// Biến này phải khai báo ở đây để ở dưới sử dụng sẽ không bị lỗi
$data = array();
$errors = array();
 
// Biến kiểm tra có phải action edit hay không
$is_update_action = false;
 
// Trường hợp edit thì ta lấy thông tin để show ra cho người dùng thấy
if (!empty($_GET['id']))
{
    $data = getStudent($_GET['id']);
    $is_update_action  = true;
}
 
// Nếu người dùng click vào nút submit
if (!empty($_POST['add_student']))
{
     
    // Lấy thông tin
    $data['msv'] = isset($_POST['id']) ? $_POST['id'] : '';
    $data['user'] = isset($_POST['name']) ? $_POST['name'] : '';
    $data['email'] = isset($_POST['email']) ? $_POST['email'] : '';
    $data['phone'] = isset($_POST['phone']) ? $_POST['phone'] : '';
    $data['gender'] = isset($_POST['gender']) ? $_POST['gender'] : '';
    $data['address'] = isset($_POST['address']) ? $_POST['address'] : '';
     updateStudent($data['msv'], $data['user'], $data['email'], $data['phone'],$data['gender'],$data['address']);
    header("Location:list.php");
    
}
 ?> -->

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
        <form action="list.php" method="POST" role="form">
            <legend>Thực hành lưu dữ liệu</legend>
            
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
            
            <button type="submit" class="btn btn-primary" name="add_student">Lưu thông tin</button>
        </form>
    </div>
</body>
</html>