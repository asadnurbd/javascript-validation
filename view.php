<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}


#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

  <?php
  session_start();

  if(!isset($_SESSION['id'])){
      header('Location:login.php');
  }
  ?>


<table id="customers">
  <tr>
    <th>Course name</th>
    <th>credit</th>
  </tr>
  <?php
       $id=$_SESSION["id"];
        include 'includes/config.php';
        $sel = "SELECT name,credit FROM courses c WHERE c.id=ANY (SELECT course_id FROM course_registration cr WHERE cr.student_id=$id)";
        $rs = $conn->query($sel);
        while($rws = $rs->fetch_assoc()){
  ?>
  <tr>
    <td><?php echo $rws["name"] ?></td>
    <td><?php echo $rws["credit"] ?></td>

  </tr>

  <?php
    }
  ?>

</table>

</body>
</html>
