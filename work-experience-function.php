<?php
/*This function displays each work experience item on the detail page. The function accepts one work experience item as a parameter, 
and it displays the code for the work experience filled with the employment information.*/

function displayExperience($item){
?>
	<div class="resume-timeline position-relative">
		<article class="resume-timeline-item position-relative pb-5">
									    
			<div class="resume-timeline-item-header mb-2">
				<div class="d-flex flex-column flex-md-row">
					<h3 class="resume-position-title font-weight-bold mb-1"><?php echo $item[0]?></h3>
					<div class="resume-company-name ms-auto"><?php echo $item[1]?></div>
				</div><!--//row-->
				<div class="resume-position-time"><?php echo $item[2]?></div>
			</div><!--//resume-timeline-item-header-->
			<div class="resume-timeline-item-desc">
				<p><?php echo $item[3]?></p>
			</div><!--//resume-timeline-item-desc-->

		</article><!--//resume-timeline-item-->
							
	</div><!--//resume-timeline--> 
	
<?php
}
?>