
<!DOCTYPE html>


<html>


    <head>
        <title>Sign Up</title>
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
        .msg{
          color: red;
        }


    </style>

    <body>



<!-- html code-->
    <div class="form-wrap">

            <form action="#" method="post" onsubmit=" return form_submit()">

                <h1>Sign Up</h1>
                <input type="text" name="first_name" placeholder="First_name" id ="first_name" /> <span class="msg"  id="first_name_message" ></span>
                <input type="text" name="last_name"placeholder="Last_name" id ="last_name"/> <span  class="msg" id="last_name_message"></span>
                <input type="text" name="Student_id"placeholder="Student_id" id ="student_id"/> <span class="msg"  id="student_id_message"></span>
                <input type="email" name="email" placeholder="Email"  id ="email"/>  <span class="msg" id="email_message"></span>
                <input type="password" name="password" placeholder="Password"  id ="password" /> <span class="msg"  id="password_message"></span>

                <input type="submit" name="save" value="Sign Up">

            </form>

        </div>

<!-- php code-->
<?php
if(isset($_POST['save'])){
    include 'includes/config.php';
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $Student_id = $_POST['Student_id'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $qry = "INSERT INTO students (first_name,last_name,id_num,email,password)
              VALUES('$first_name ','$last_name','$Student_id','$email','$password ')";
    $result = $conn->query($qry);
    if($result == TRUE){
        echo "<script type = \"text/javascript\">
                      alert(\"Successfully Registered.\");
                      window.location = (\"login.php\")
                      </script>";
    } else{
        echo "<script type = \"text/javascript\">
                      alert(\"Registration Failed. Try Again\");
                      window.location = (\"signup.php\")
                      </script>";
    }
}

?>







        <script type="text/javascript" src="validation.js">

       </script>



    </body>



</html>
