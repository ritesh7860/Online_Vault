<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script type="text/javascript">
function f1()
{
   var result=true; 
  var a= document.frm1.umail.value;
 if(a=="")
 {
    document.getElementById('nm').innerHTML="*Enter Email";
    result=false;
 }  
 else
 {
    document.getElementById('nm').innerHTML="";
 }
  a= document.frm1.pass.value;
 if(a=="")
 {
      document.getElementById('pd').innerHTML="*Enter Password";
    result=false;
 }
 else
 {
    document.getElementById('pw').innerHTML="";
 }
 return result;
 }
 
</script>
     <style>
                     body{

                        background-image: black;
                        background-image: url('login-bg.jpg');
                        background-size: cover;
                        background-attachment: fixed;
                        
                        
                        }
                        input, select, textarea
                        {
                            color: white;
                        }
         .nav-item{
                                          padding:0 20px;
                                          font-size: 16px;
                                          font-family:cursive;
                                  }
                                  
                                  .form{
                               color:#e5ecf7 ;
                               font-size: 16px;
                              position:absolute;
                              right:550px;
                              bottom: 170px;
                               width:20%;
                               height:38%;
                               border:0px solid gray;
                              
                               }

                               div form input[type=submit]{
                              border: 4px solid rgb(71, 80, 82);
                              background-color: #9fa591;
                              color: #171718;
                              font-size: 20px;
                              padding: 10px 30px;
                              }
                              div form input[type=email],div form input[type=password]{

                                background-color:transparent;
                               font-size:16px;
                              }
                              hr{
                                border-top: 3px solid rgb(138, 153, 156);
                              }
                              div form input[type=email]:focus,div form input[type=password]:focus
                      {
                        border: 5px solid rgb(163, 170, 172);
                      }
                              
         </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="document.php"><h2>FreeSpace</h2></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="FreeSpace.php">HOME </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contact_us.php">CONTACT US</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="privacy.php">PRIVACY</a>
              </li>
             </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
      <div class="form">
          <form align="center" name="frm1"onsubmit="return f1()">
              <img src="login icon.png"height="100px" width="100px"><br><hr></hr><br>
              <table>
                 Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" placeholder=" Email" name="umail" /> <b id="nm"></b>  <br><hr></hr><br>
                 Password:<input type="password" placeholder=" Password" name="pass"> <b id="pd"></b><br><hr></hr><br>
                  <input type="submit" name="logBtn" value="Login" >
             </table>
          </form>
      </div>
    </body>
</html>
<?php
extract($_REQUEST);
if(isset($logBtn))
{
    $link=mysqli_connect("localhost","root","","freespace");
    $qry="select email from regdata where email='$umail' and  password='$pass'";
    $r=mysqli_query($link,$qry);
    $c=mysqli_num_rows($r);
    if($c==1)
    {
        $qry= "select sum(fsize) from updfiles where email='$umail'";
        $r=mysqli_query($link,$qry);
        $a=mysqli_fetch_row($r);
        session_start();
        $_SESSION['email']=$umail;
        $_SESSION['filesize']=$a[0];
        header("location:updfile.php");
        echo $a[0];
    }
    else{
        echo "Invalid email or password";
    }
}