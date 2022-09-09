<?php
  
  include '../config/config.php';
  session_start();
  
  class login extends Connection{
  
    public function loginuser(){ 

      if (isset($_POST['login'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        $sqlselect_users = "SELECT * FROM users WHERE username = ?";
        $stmt = $this->conn()->prepare($sqlselect_users);
        $stmt->execute([$username]);

        if ($stmt->rowcount() > 0) {

          $row = $stmt->fetch();

          if (password_verify($password, $row['password'])) {

              header('location:../admin/dashboard.php?dashboard=dashboard');
              $_SESSION['users_id'] = $row['users_id'];
              $_SESSION['type'] = $row['type'];

          } else {

            echo "<script type='text/javascript'>alert('Invalid Username And Password');</script>";
            echo "<script>window.location.href='../index.php';</script>";

          }

        } else {

            echo "<script type='text/javascript'>alert('Invalid Username And Password');</script>";
            echo "<script>window.location.href='../index.php';</script>";

        } 
       
      } 

      if (isset($_POST['addnote'])) {

        $notes = $_POST['addnote'];

        $sqlselect_users = "SELECT * FROM notes WHERE notes = ?";
        $stmt = $this->conn()->prepare($sqlselect_users);
        $stmt->execute([$notes]);

        if ($stmt->rowcount() > 0) {

          echo json_encode(array("statusCode"=>2));

        } else {

          $sql = "INSERT INTO notes (notes) VALUES (?)";
          $stmt = $this->conn()->prepare($sql);
          $stmt->execute([$notes]);

          echo json_encode(array("statusCode"=>1));

        } 
       
      } 
         
    }

  }

  $loginrun = new login();
  $loginrun->loginuser();

?>



