<?php
include "connection.php";
include "navbar.php";
?>

<!DOCTYPE html>
<html>

<head>
  <title>Books</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style type="text/css">
    .srch {
      padding-left: 1000px;
    }

    body {
      background-color: #024629;
      font-family: "Lato", sans-serif;
      transition: background-color .5s;
    }

    #main {
      transition: margin-left .5s;
      padding: 16px;
    }

    /* .img-circle {
      margin-left: 20px;
    } */

    .h:hover {
      color: white;
      width: 300px;
      height: 50px;
      background-color: #00544c;
    }

    .book {
      width: 400px;
      margin: 0px auto;
    }

    .form-control {
      background-color: #080707;
      color: white;
      height: 40px;
    }
  </style>
</head>

<body>


  <div id="main">
    <div class="container" style="text-align: center;">
      <h2 style="color:black; font-family: Lucida Console; text-align: center"><b>Add New Books</b></h2>

      <form class="book" action="" method="post">

        <input type="text" name="bid" class="form-control" placeholder="Book id" required=""><br>
        <input type="text" name="name" class="form-control" placeholder="Book Name" required=""><br>
        <input type="text" name="authors" class="form-control" placeholder="Authors Name" required=""><br>
        <input type="text" name="edition" class="form-control" placeholder="Edition" required=""><br>
        <input type="text" name="status" class="form-control" placeholder="Status" required=""><br>
        <input type="text" name="quantity" class="form-control" placeholder="Quantity" required=""><br>
        <input type="text" name="department" class="form-control" placeholder="Department" required=""><br>

        <button style="text-align: center;" class="btn btn-default" type="submit" name="submit">ADD</button>
      </form>
    </div>
    <?php
    if (isset($_POST['submit'])) {
      if (isset($_SESSION['login_user'])) {
        mysqli_query($db, "INSERT INTO books VALUES ('$_POST[bid]', '$_POST[name]', '$_POST[authors]', '$_POST[edition]', '$_POST[status]', '$_POST[quantity]', '$_POST[department]') ;");
    ?>
    <script type="text/javascript">
      alert("Book Added Successfully.");
    </script>

    <?php

      } else {
    ?>
    <script type="text/javascript">
      alert("You need to login first.");
    </script>
    <?php
      }
    }
    ?>
  </div>
</body>