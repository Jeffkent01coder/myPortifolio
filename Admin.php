<?php 

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $db = 'portfolio';
    
            $conn =  mysqli_connect($dbhost, $dbuser, $dbpass, $db);
            
            $sql = "SELECT * FROM contacts order by id desc";
            $data = mysqli_query($conn, $sql);

    if(isset($_GET['del']))
    {
  $id = $_GET['del'];
  $ql = "DELETE FROM contacts where id = '$id'";

  if(mysqli_query($conn, $ql))
  {
    header('Location: ./Admin.php');
  }
    }
   
  
         
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Admin Dashboard</title>
    <style>
      table {
        width: 50%;
        border-collapse: collapse;
        position: center;
        z-index: 2;
        box-shadow: 2px 2px 5px #888888;
        border-radius: 12px 12px 0 0;
        left: 50%;
        right: 50%;
        text-align: center;

      }
      th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: center;
      }
      th {
        background-color: #546bcf;
      }
      ul{
        display: inline-block;
        list-style: none;
        margin: 10px 20px;
      }
      img{
        width: 80px;
        margin-top: 10px;
        margin-left: 50px;
      }
      li{
         display: inline-block;
         list-style: none;
         margin: 10px 20px;
      }
      a{
        text-decoration: none;
        color: black;
        float: inline-end;
      }
      h3{
        margin-bottom: 30px;
        text-align: center;
      }
      
    </style>
</head>
<body>
    <img src="images/logo.png" alt="" class="logo">
 
    <div class="container">
        <h3>Table of Clients from Portiflio</h3>
    <table>
      <tr>
        <th>Name</th>
        <th>Email</th> 
        <th>Subject</th>
        <th>Delete</th>
      </tr>
      <?php
        while($row = $data->fetch_assoc())
        {
            echo sprintf('<tr>
                <td>%s</td>
                <td>%s</td> 
                <td>%s</td>
                 <td><a href="?del=%s">Del</a></td>
              </tr>', $row['name'],
              $row['email'],
              $row['message'],
              $row['id']
            
            );
        }
      ?>
     
    </table>
    </div>
   
</body>
</html>