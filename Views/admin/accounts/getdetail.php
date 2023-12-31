<?php 
	include "function.php";
	$id = $_GET['id'];
	$user = getdetailbyid($id);
	$data = $user[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <title>Xem chi tiet tai khoan</title>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-4">
        <h2 class="text-center mb-4">Xem chi tiet tai khoan</h2>
        <form method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" disabled placeholder="Enter your username" value="<?php echo $data['username']; ?>">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" id="password" name="password" disabled placeholder="Enter your password" value="<?php echo $data['password']; ?>">
          </div>
		  <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" disabled placeholder="Enter your name" value="<?php echo $data['name']; ?>">
          </div>
		  <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" disabled placeholder="Enter your email" value="<?php echo $data['email']; ?>">
          </div>
		  <div class="form-group">
			<input type="radio" id="role-admin" name="role" value="1" disabled <?php if(isset($data['role']) && $data['role'] == '1') echo 'checked'; ?>>
			<label for="role-admin">Quan tri vien</label><br>
			<input type="radio" id="role-content" name="role" value="2" disabled <?php if(isset($data['role']) && $data['role'] == '2') echo 'checked'; ?>>
			<label for="role-content">Quan tri noi dung</label><br>
			<input type="radio" id="role-customer" name="role" value="3" disabled <?php if(isset($data['role']) && $data['role'] == '3') echo 'checked'; ?>>
			<label for="role-customer">Khach hang</label><br>
			<!-- Add more radio buttons for other roles if needed -->
		</div>
          
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>