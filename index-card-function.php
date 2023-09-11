<?php
/*This function displays each member's information on the index page. The function accepts the member's information (array) and the index of the member (number) as parameters, and it displays the code for the card filled with the member's information.
It also requires the member age function because that function is a part of the information that needs to be displayed on the index page.*/

require_once('member-age-function.php');
function displayMember($member,$index){
	?>
		<header class="resume-header pt-4 pt-md-0">
			<div class="row">
				<div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
					<img class="picture" src="assets/images/<?= $member['pictures'][0]?>" alt="">
				</div><!--//col-->
				<div class="col">
					<div class="row p-4 justify-content-center justify-content-md-between">
						<div class="primary-info col-auto">
							<h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?= $member['name'], ' (',age($member['birthyear']),')' ?></h1>
							<div class="title mb-3"><?= $member['role'] ?></div>
							<a href="detail.php?index=<?= $index ?>" class="btn btn-secondary"><?php echo 'See full profile'; ?></a>
						</div><!--//primary-info-->
						<div class="secondary-info col-auto mt-2">
						</div><!--//secondary-info-->
					</div><!--//row-->
					    
				</div><!--//col-->
			</div><!--//row-->
		</header>
		</br>
	<?php
}
?>