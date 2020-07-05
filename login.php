<!DOCTYPE html>


<html>


    <head>
        <title>Sign in</title>
    </head>

    <style>

        *{margin: 0; padding: 0;}
        body{background: #ecf1f4; font-family: sans-serif;}

        .form-wrap{ width: 320px; background: #3e3d3d; padding: 40px 20px; box-sizing: border-box; position: fixed; left: 50%; top: 50%; transform: translate(-50%, -50%);}
        h1{text-align: center; color: #fff; font-weight: normal; margin-bottom: 20px;}

        input{width: 100%; background: none; border: 1px solid #fff; border-radius: 3px; padding: 6px 15px; box-sizing: border-box; margin-bottom: 20px; font-size: 16px; color: #fff;}

        input[type="button"]{ background: #bac675; border: 0; cursor: pointer; color: #3e3d3d;}
        input[type="button"]:hover{ background: #a4b15c; transition: .6s;}

        ::placeholder{color: #fff;}

    </style>

    <body>

<!--  html code-->
        <div class="form-wrap">

            <form action="#" method="post">

                <h1>Sign in</h1>
                <input type="email" name="email" placeholder="Email"/>
                <input type="password" name="password" placeholder="Password"/>
                <input type="submit"  name="login" value="Sign in">

            </form>

        </div>

<!--php code-->
<?php
if(isset($_POST['login'])){
    include 'includes/config.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM students WHERE email = '$email' AND password = '$password'";
    $rs = $conn->query($query);
    $num = $rs->num_rows;
    $rows = $rs->fetch_assoc();
    if($num > 0){
        session_start();
        $_SESSION['id'] = $rows['id'];

        echo "<script type = \"text/javascript\">
                    alert(\"Login Successful. Welcome To Our course view page\");
                    window.location = (\"view.php\")
                    </script>";
    } else{
        echo "<script type = \"text/javascript\">
                    alert(\"Login Failed. Try Again................\");
                    window.location = (\"login.php\")
                    </script>";
    }
}
?>






    </body>



</html>
