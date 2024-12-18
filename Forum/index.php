<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>iforum</title>
</head>

<body>
  <?php include 'partials/_header.php' ?>
  <?php include 'partials/_dbconnect.php' ?>

  <!--slider---->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://picsum.photos/1600/400/?apple,code" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://picsum.photos/1600/400/?programmers,microsoft" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://picsum.photos/1600/400/?coding,apple" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!--Category container start --->
  <div class="container my-4">
    <h2 class="text-center">iForum - Categories</h2>
    <div class="row my-4">
      <!--Fetch all categories -->
      <?php 
      $sql='SELECT * FROM `categories`';
      $result=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_assoc($result)){
        //echo $row['category_id'];
        //echo $row['category_name'];
        $id=$row['category_id'];
        $cat=$row['category_name'];
        $desc = $row['cateogry_description'];
        echo'<div class="col-md-4 my-3">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="https://picsum.photos/500/400/?'.$cat.',python" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><a href="threadlist.php?catid='.$id.'">'.$cat.'</a></h5>
      <p class="card-text">' . $desc . '</p>
      <a href="threadlist.php?catid='.$id.'" class="btn btn-primary">View Threads</a>

    </div>
  </div>
  </div>';
  }

  ?>
    </div>
  </div>

  <?php include 'partials/_footer.php' ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
</body>

</html>