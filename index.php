<?php
require_once('data.php');
require_once('index-card-function.php');
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title><?php echo 'Our amazing team'; ?></title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="team's resume">
    <meta name="author" content="Maria Wagner">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head> 

<body>
    <article class="resume-wrapper text-center position-relative">
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
			<h1 class="py-4 text-center"><?php echo 'OUR AMAZING TEAM'; ?></h1>
			<?php
			for($i=0;$i<count($team);$i++) displayMember($team[$i],$i);
			?>
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright"><?php echo 'Designed with '; ?> <span class="sr-only"><?php echo 'love'; ?></span><i class="fas fa-heart"></i><?php echo ' by Maria Wagner, Levi King, Ava Nash'; ?></small>
    </footer>

    

</body>
</html> 

