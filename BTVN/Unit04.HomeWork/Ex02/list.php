<?php 
    session_start();
    if(isset($_SESSION['info'])){
        $data_arr = $_SESSION['info'];

    }else{
        $data_arr = array();
    }
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>Zent</title>
      <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
 </head>
 <body>
    <div class="container-fluid">
        <h2 align="center">Danh Sách Người Dùng</h2>
        <a href="student.php" class="btn btn-primary">Thêm mới</a>
        <?php 
            if(isset($_COOKIE['msg'])){
         ?>
         <div class="alert alert-success">
             <p>Thông báo:</p> <?php echo $_COOKIE['msg']; ?>
         </div>
     <?php } ?>
     <table class="table">
         <thead>
             <tr>
                 <th>#</th>
                 <th>Mã sinh viên</th>
                 <th>Email</th>
             </tr>
         </thead>

         <tbody>
             <?php 
                $i=0;
                foreach ($data_arr as $value) {
                    $i++;
                
              ?>
              <tr>
                  
                  <td>
                      <a href="post.php?code" class="btn btn-success">Detail</a>
                      <a href="delete.php?code" class="btn btn-danger">Delete</a>

                  </td>
              </tr>
          <?php } ?>
         </tbody>
     </table>
    </div>
     
 </body>
 </html>

