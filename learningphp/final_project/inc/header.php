<?php 
    include "./config/config.php";
    include "./lib/Database.php";
    $db = new Database();


    
    $site_info = $db->select("select * from site_info");
    if($site_info){
        $site_info_result = $site_info->fetch_assoc();
    }else{
        var_dump($site_info);
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/bootswatch.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar">
    

    <!-- navbar start  -->

    <nav class="navbar navbar-expand-lg py-4 fixed-top  navbar-light bg-body ">
        <div class="container">
          <a class="navbar-brand" href="#"><h4 class="fw-bold"><?php echo $site_info_result['logo']; ?>.</h4></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav ms-auto">
             
              <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#work">work</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#skill">skills</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#testimonials">testimonials</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">contact</a>
              </li>
              
            </ul>
            
          </div>
        </div>
      </nav>

    <!-- navbar end  -->

    <!-- home start -->

    <section id="home" class="home section-padding divider">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img src="<?php echo $site_info_result['profile_image']; ?>" class="img-fluid" alt="" data-aos="fade-down">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold" data-aos="fade-left"><?php echo $site_info_result['qoute']; ?></h1>
                    <p data-aos="fade-left"><?php echo $site_info_result['qoute_des']; ?></p>
                    <a href="#work" class="btn btn-outline-info me-3" data-aos="fade-left">My Work</a>
                    <a href="#contact" class="btn btn-info" data-aos="fade-left">Contact Me</a>
                </div>
            </div>
        </div>
    </section>

    <!-- home end -->
