<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta Tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="images/favicon.ico">

    <!--	Fonts
	========================================================-->
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

    <!--	Css Link
	========================================================-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/layerslider.css">
    <link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!--	Title
	=========================================================-->
    <title>Selamat datang di GBKP Tanjung Balai</title>
    <style>
        /* Tambahkan gaya CSS untuk membuat video full width */
        video {
            width: 100%;
            height: auto;
        }
    </style>
</head>

<body>

    <!--	Page Loader  -->
    <!--<div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div>  -->
    <!--	Page Loader  -->

    <div id="page-wrapper">
        <div class="row">
            <!--	Header start  -->
            <?php include("include/header.php");?>
            <!--	Header end  -->

            <div class="container">
                <h1>Selamat Menyaksikan Video GBKP Tanjung Balai</h1>

                <div>
                    <?php
                    $video_file = "videoGBKP.mp4"; // Ganti dengan nama file video Anda
                    if (file_exists($video_file)) {
                        echo '<video width="640" height="360" controls>';
                        echo '<source src="' . $video_file . '" type="video/mp4">';
                        echo 'Your browser does not support the video tag.';
                        echo '</video>';
                    } else {
                        echo '<p>Video tidak ditemukan.</p>';
                    }
                    ?>
                </div>
            </div>

            <!--	Header start  -->
            <?php include("include/footer.php");?>
            <!--	Header end  -->
</body>

</html>
