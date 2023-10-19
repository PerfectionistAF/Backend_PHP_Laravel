<?php
include_once("admin/includes/conn.php");
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $table = "cars";
try{
    $sql = "SELECT * FROM `$table` WHERE id =?";##change *
	$stmt = $conn->prepare($sql);
	$stmt->execute([$id]);
    $result = $stmt->fetch();
    $title = $result["title"];
  }catch(PDOException $e){
    echo "FAILED:" . $e->getMessage();
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo (isset($title))? $title:"Invalid"; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php
    #if(isset($_GET["id"])){
        #<!-- Topbar -->
        include_once("includes/topBar.php");
        #<!-- Navbar -->
        include_once("includes/navBar.php");
        #<!-- Search -->
        include_once("includes/search.php");
        #<!-- Page Header -->
        include_once("includes/header.php");
        #<!-- Detail --> 
        include_once("includes/detail.php");
        #<!-- Related Car -->
        #include_once("includes/related.php");
        #<!-- Vendor -->
        include_once("includes/vendor.php");
        #<!-- Footer --> #<!-- Back to Top -->
        include_once("includes/footer.php");
    ?>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <?php
    #}
    #else{
    #    echo "INVALID REQUEST";
    #}?>
</body>

</html>