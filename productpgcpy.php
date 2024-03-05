<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Product View Page</title>
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
    type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
  <?php
  //if (isset($_POST['submit'])){

    if (isset($row['id'])) {
      echo  $row['id'];
    
    
    $id = $_GET["id"]; //echo $id;
    $sql = "select * from products where id=" . $id;
    $result = mysqli_query($con, $sql);
    //print_r($result);
    $row = mysqli_fetch_assoc($result);
 }
   // print_r($row);
  
  ?>
  <div>
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <!-- <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button></div> -->
        <div class="modal-body text-center pb-5">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title-->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"><?php echo $row["name"]?></h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image-->
                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/<?php echo $row["image"] ?>" alt="..." />
                <!-- Portfolio Modal - Text-->
                <h2>price: <?php echo $row["price"] ?></h2> 
                <!-- <h5>category: <?php //echo $row["category"] ?></h5> -->  
                <p class="mb-4"><?php echo $row["description"] ?>
                </p>
                 <div>

                <?php
                if(isset($_POST['submit'])){
                  $name=$_POST['name'];
                  $category=$_POST['category'];
                  $image=$_POST['image'];
                  $quantity=$_POST['quantity'];
                  $price=$_POST['price'];

                  $sql="insert into `cartdatas` (name,category,image,quantity,price)values('$name','$category','$image','$quantity','$price')";
                  $res=mysqli_query($con,$sql);
                  if($res){
                      echo "Data inserted succesfully";
                      header('location:cart.php');

                  }
                  else{
                      die(mysqli_error($con));
                  }}

                ?>



                <form action="product_page.php" method="post">
                <a class="btn btn-primary" href="index.php" role="button">Back</a>
                <button type="submit" name="add to cart" class="btn btn-primary">add to cart</button>


                    </form>



              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>