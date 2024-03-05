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
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
  <?php


  $id = $_GET["id"]; //echo $id;
  $sql = "select * from products where id=" . $id;
  $result = mysqli_query($con, $sql);
  //print_r($result);
  $row = mysqli_fetch_assoc($result);
  
  
  
  
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
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">
                  <?php echo $row["name"] ?>
                </h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image-->
                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/<?php echo $row["image"] ?>" alt="..." />
                <!-- Portfolio Modal - Text-->
                <h2>price:
                  <?php echo $row["price"] ?>
                </h2>
                <!-- <h5>category: <?php //echo $row["category"] ?></h5> -->
                <p class="mb-4">
                  <?php echo $row["description"] ?>
                </p>
                <div>

                  <?php
                   if (isset($_POST['submit'])) {
                    //  $name = $_POST['name'];
                    //  $category = $_POST['category'];
                    //  $image = $_POST['image'];
                    //  $quantity = $_POST['quantity'////];
                    //  $price = $_POST['price'];

                      //print_r($row);
                     
                      $res = "INSERT INTO `cartdatas` (name, category, image, quantity, price) VALUES ('".$row['name']."', '".$row['category']."', '".$row['image']."', 1, '".$row['price']."')";
                      if(mysqli_query($con, $res)) {
                        echo "Data inserted successfully";
                        header('location:cart.php');
                      } else {
                       echo "Error: " . mysqli_error($con);
                      }

                      
                    }
                    //function addToCart($row)
                    //{


                      // Insert the data from $row to another table
                          
                    // $sql = "insert into `cartdatas` (id,name,category,image,quantity,price) values('$id','$name','$category','$image','$quantity','$price')";
                    // $res = mysqli_query($con, $sql);
                    // if ($res) {
                    //   echo "Data inserted succesfully";
                    //   header('location:cart.php');

                    // } 
                    // else {
                    //   die(mysqli_error($con));
                   //} //}
                  

                  
                  // if (array_key_exists('add-to-cart', $_POST)) {
                  //   addToCart($row['id']);
                  // }
                  // function addToCart($id)
                  // {
                  //   include 'config.php';
                  //   $sql = "insert into cartdatas (id,name,category,image,quantity,price) values('$id','$name','$category','$image','$quantity','$price')";
                  //   mysqli_query($con, $sql);
                   
                  //   // add alert for success message
                  // } }

                  ?>

                  <form method="post">

                  <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                  <?php
                  // Get the product details from the database
                  $id = $_GET["id"];
                  $sql = "SELECT * FROM products WHERE id=" . $id;
                  $result = mysqli_query($con, $sql);
                  $row = mysqli_fetch_assoc($result);

                  // Store the id value into a hidden variable
                  ?>
                  

                
                    <a class="btn btn-primary" href="index.php" role="button">Back</a>
                    <button type="submit" name="submit" value="Button1" class="btn btn-primary">add to cart</button>

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