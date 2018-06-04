<?php 

  session_start();
  if(!isset($_SESSION['username'])){
    header('location:home.php');
  }

$con = mysqli_connect('localhost','root','1234');


mysqli_select_db($con,'quizbase');

?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

</head>
<body>
        <div class="container">
          <h1 class="text-center text-primary">SHUBHAM TECHNICAL WEBDEVELOPER QUIZ</h1><br>

        <h2 style="text-align: center; color: green;">Welcome <?php echo $_SESSION['username'];?></h2>
  <div class="col-lg-8 m-auto d-block">    
       <div class="card">
         
            <h3 class="text-center card-header">Welcome <?php echo $_SESSION['username'];?> You have to select only one out of four.</h3>

       </div> <br>
          <form action="check.php" method="post">
       <?php 

          for ($i=1; $i < 21 ; $i++ )  { 
          $q = "select * from questions where qid = $i";
          $query = mysqli_query($con, $q);

          while($rows = mysqli_fetch_array($query)){

       ?>

       <div class="card">
          <h4 class="card-header"> <?php echo $rows['question'] ?> </h4>
         

              <?php 

                $q = "select * from answers where ans_id = $i";
          $query = mysqli_query($con, $q);

          while($rows = mysqli_fetch_array($query)){
 
              ?>
                  
                  <div class="card-body">

                    <input type="radio" name="quizcheck[<?php  echo $rows['ans_id'];?>]" value="<?php echo $rows['aid'];?>">
                    <?php echo  $rows['answer']?>
                    


                  </div>       

       
       

        <?php
      }
   }   
       }
      ?>


      <input type="submit" name="submit" value="submit" class="btn btn-success m-auto d-block">
      </form> 
        </div>
  </div> <div class="m-auto d-block">    
       <br><a href="logout.php" class="btn btn-primary">Logout</a>
          </div>
          <br><div>
            
            <h5 class="text-center">   © 2018 Shubham Technical pvt. Ltd. </h5>
          </div><br>

        </div>


            <footer>
  <p>Posted by: SHUBHAM SHARMA</p>
  <p>Contact information: <a href=" https://www.google.com/gmail/">rsubhamsharma19@gmail.com</a>.</p>
</footer>

</body>
</html>