<html>

<head>

     <style>
          body {

               background-image: black;
               background-image: url('b.jpg');
               background-size: cover;
               background-attachment: fixed;
          }
     </style>
</head>

<body bgcolor="black">

     <table>
          <?php

          $link = mysqli_connect("localhost", "root", "", "freespace");
          session_start();
          $qry = "select* from updfiles where email='$_SESSION[email]'";
          $s = mysqli_query($link, $qry);
          while ($k = mysqli_fetch_assoc($s)) {
               echo "<tr><img src='$k[uploadfiles]' height=200px width=200px /></tr>";
          }
          ?>

     </table>

</body>

</html>