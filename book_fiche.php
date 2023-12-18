 <?php

   $connection = mysqli_connect('localhost','root','','book_ab');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $time = $_POST['time'];

      $request = " insert into book_fiche(name, email, phone, address, location, time) values ('$name','$email','$phone','$address','$location','$time')";

      mysqli_query($connection, $request);

      header('location:book.php');
   }else{
       echo 'something went wrong try again';
   }


   ?>