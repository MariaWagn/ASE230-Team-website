<?php
require_once('data.php');
require_once('member-age-function.php');
require_once('work-experience-function.php');
$index=$_GET['index'];
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title><?= $team[$index]['name'],'\'s Resume'; ?></title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $team[$index]['name']?>'s resume">
    <meta name="author" content="<?= $team[$index]['name']?>">    
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
		<?php /* Only the following line changed from the file in the previous assignment */ ?>
		<div class="mb-4"><a href="index.php" class="btn btn-primary"><?php echo 'Back to index'; ?></a></div>
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="assets/images/<?= $team[$index]['pictures'][0]?>" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?= $team[$index]['name'] , '(', age($team[$index]['birthyear']) , ')'?></h1>
							    <div class="title mb-3"><?= $team[$index]['title'] ?></div>
							    <ul class="list-unstyled">
								    <li class="mb-2"><a class="text-link" href="mailto:<?= $team[$index]['email']?>"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?= $team[$index]['email']?></a></li>
								    <li><a class="text-link" href="tel:<?= $team[$index]['phone']?>"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?= $team[$index]['phone']?></a></li>
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href="http://<?= $team[$index]['link1']?>"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?= $team[$index]['link1']?></a></li>
					                <li class="mb-3"><a class="text-link" href="http://<?= $team[$index]['link2']?>"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?= $team[$index]['link2']?></a></li>
							    </ul>
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Summary'; ?></h2>
				    <div class="resume-section-content">
					    <p class="mb-0"><?= $team[$index]['bio']?></p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Work Experience'; ?></h2>
						    <div class="resume-section-content">
							<?php 
							for($q=0;$q<count($team[$index]['work']);$q++) displayExperience($team[$index]['work'][$q]);
							?>
						    </div>
					    </section><!--//projects-section-->
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Skills &amp; Tools'; ?></h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <ul class="list-unstyled mb-4">
									<?php 
									foreach($team[$index]['skills'] as $key=>$value){
										?>
										<li class="mb-2">
								            <div class="resume-skill-name"><?php echo $key; ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: <?php echo $value; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
									<?php
									}
									?>
							        </ul>
						        </div><!--//resume-skill-item-->
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold"><?php echo 'Others'; ?></h4>
						            <ul class="list-inline">
									<?php 
									for($k=0;$k<count($team[$index]['other']);$k++){
										?>
							            <li class="list-inline-item"><span class="badge badge-light"><?= $team[$index]['other'][$k]?></span></li>
							        <?php
									}
									?>
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Education'; ?></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								<?php 
								for($t=0;$t<count($team[$index]['education']);$t++){
									?>
								    <li class="mb-2">
								        <div class="resume-degree font-weight-bold"><?php echo $team[$index]['education'][$t][0]?></div>
								        <div class="resume-degree-org"><?php echo $team[$index]['education'][$t][1]?></div>
								        <div class="resume-degree-time"><?php echo $team[$index]['education'][$t][2]?></div>
								    </li>
								<?php
								}
								?>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Awards &amp; Honors'; ?></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">
								<?php 
								foreach($team[$index]['award'] as $key=>$value){
									?>
									<li class="mb-2 ps-4 position-relative">
										<i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name"><?php echo $key; ?></div>
								        <div class="resume-award-desc"><?php echo $value; ?></div>
									</li>
								<?php
								}
								?>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Languages'; ?></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
								<?php 
								foreach($team[$index]['language'] as $key=>$value){
									?>
									<li class="mb-2"><span class="resume-lang-name font-weight-bold"><?php echo $key; ?></span> <small class="text-muted font-weight-normal"><?php echo $value; ?></small></li>
							    <?php
								}
								?>
								</ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo 'Interests'; ?></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								<?php 
								for($i=0;$i<count($team[$index]['interests']);$i++){
									?>
								    <li class="mb-1"><?= $team[$index]['interests'][$i]?></li>
								<?php
								}
								?>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    
				    </div>
			    </div><!--//row-->
				
		    </div><!--//resume-body-->
		    
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright"><?php echo 'Designed with '; ?><span class="sr-only"><?php echo 'love'; ?></span><i class="fas fa-heart"></i><?php echo ' by Maria Wagner, Levi King, Ava Nash'; ?></small>
    </footer>


</body>
</html> 

