<!doctype html>
<html lang="en">
  <?php 
  include "partials/dbconct.php";
  $_SESSION["loggedin"]=true;
  if(isset($_POST['submit']) && $_SESSION["loggedin"]==true){
    echo "inside";
    $c_id= 'clw'.rand(10,1000).'';
    $c_name=$_POST["c_name"];
    $admin="deebansir";
    $admin_id=RA15224;
    $sql="INSERT INTO `classroom` (`admin`, `c_code`, `students`, `assignment`, `announcement`, `c_name`, `admin_id`) VALUES ('deebansir ji', '$c_id', '', '', '', '$c_name', 'RA778557');";
    $result=mysqli_query($conn,$sql);
    if($result){
      echo"success";
    }
    else{
      echo"failed";
    }
  }
  ?>
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/classroom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Create Classroom</title>
  </head>
  <body>
    <?php include "partials/nav.php"; ?>
    <div class="form">

    
    <form action="" method="POST">
      <div class="mb-3">
        <label for="c_name" class="form-label">Class Name</label>
        <input type="text" class="c_name" id="c_name" name="c_name" aria-describedby="emailHelp">
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Create</button>
    </form>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    
  </body>
</html>