<?php
/*
Version: Bold v1.2
*/

// Including template settings file
include_once('inc-settings.php');
// Including additional functions
include_once('inc-functions.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Bold CV/Resume Template</title>

	<meta http-equiv="content-type" content="text/html;charset=utf-8" />

	<link rel="stylesheet" type="text/css" media="all" href="style.css" />
	<link rel="stylesheet" type="text/css" media="print" href="schemes/print.css" />
	<link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 480px)" href="schemes/mobile.css" />
	<link rel="stylesheet" type="text/css" media="handheld" href="schemes/mobile.css" />

	<?php
	// Setting the color scheme
	color_scheme();

	// Checking for PDF request
	pdf_scheme();
	?>

	<!-- Including jQuery -->
	<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>

	<!-- Including tipsy (nicer tooltips) -->
	<link rel="stylesheet" type="text/css" href="js/tipsy/stylesheets/tipsy.css" />
	<script type="text/javascript" src="js/tipsy/javascripts/jquery.tipsy.js"></script>
	<script type="text/javascript">
	/* <![CDATA[ */
	jQuery(function($) {
		$('.socialmedia a').tipsy({gravity: 's', fade: true});
		$('.skillbar').tipsy({gravity: 'se', fade: true});
		$('.cvoptions a').tipsy({gravity: 'w', fade: true});
	});
	/* ]]> */
	</script>

	<!-- Including Colorbox (gallery & contact form) -->
	<link rel="stylesheet" type="text/css" href="js/colorbox/colorbox.css" media="screen" />
	<script type="text/javascript" src="js/colorbox/jquery.colorbox-min.js"></script>

	<script type="text/javascript">
	/* <![CDATA[ */
		jQuery(document).ready(function($){
			$(".thumbs a").colorbox();
			$(".emailbutton").colorbox({iframe:true, innerWidth:360, innerHeight:410});
		});
	/* ]]> */
	</script>
</head>

<body>
	<div id="wrap">
		<!-- Start: Section 1 - Introduction -->
		<div class="section topsection">
			<div class="column titlecolumn">
				<h1 class="myname">Nathan McMillan</h1>
				<h4 class="myjob">Front End Developer</h4>
			</div>

			<div class="column">
				<p><img src="img/my-photo.jpg" alt="My name" title="My name" class="photo myphoto" />Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat laoreet ex ea erat commodo consequat.</p>
			</div>

			<div class="column lastcolumn">
				<ul class="socialmedia"><?php social_profiles(); ?></ul><div class="clear"></div>

				<ul class="simplelist mt30">
					<li><strong>Email:</strong> <a href="#">nathan.mcmillan@emailer.com</a></li>
					<li><strong>Website:</strong> <a href="#">http://nathanmcmillan.com</a></li>
					<li><strong>Phone:</strong> (+12) 345.67.89</li>
					<li><strong>Address:</strong> 15 Fictive Street, City, Country</li>
				</ul>
			</div>

			<div class="clear"></div>
		</div>
		<!-- End: Section 1 - Introduction -->


		<!-- Start: Section 2 - Profile -->
		<div class="section">
			<div class="column titlecolumn"><h2 class="sectiontitle">Personal &amp; Professional Profile</h2></div>

			<div class="largecolumn">
				<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>

				<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas	humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
			</div>

			<div class="clear"></div>
		</div>
		<!-- End: Section 2 - Profile -->


		<!-- Start: Section 3 - Technical Skills -->
		<div class="section">

			<div class="column titlecolumn"><h2 class="sectiontitle">Technical Skills</h2></div>

			<div class="column">
				<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p><p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt.</p>
			</div>

			<div class="column lastcolumn">
				<div class="skill">
					<h3>XTHML / CSS</h3>
					<div class="skillbar" title="Excellent"><div class="skillbarfill skill100">Excellent</div></div>
				</div>

				<div class="skill mt20">
					<h3>Javascript</h3>
					<div class="skillbar" title="Good"><div class="skillbarfill skill70">Good</div></div>
				</div>

				<div class="skill mt20">
					<h3>PHP &amp; MySQL</h3>
					<div class="skillbar" title="Average"><div class="skillbarfill skill40">Average</div></div>
				</div>
			</div>

			<div class="clear"></div>
		</div>
		<!-- End: Section 3 - Technical Skills -->


		<!-- Start: Section 4 - Work Experience -->
		<div class="section">

			<div class="column titlecolumn"><h2 class="sectiontitle">Work Experience</h2></div>

			<!-- Start: Job -->
			<div class="largecolumn">
				<!-- Start: Job -->
				<div class="column employer">
					<h3>Senior Front End Developer</h3>
					<h4>Fictive Web Agency</h4>

					<ul class="simplelist mt30">
						<li><strong>Period:</strong> January 2008 - Present day</li>
						<li><strong>Job type:</strong> Full-Time</li>
						<li><strong>References:</strong> Michael Smith</li>
					</ul>
				</div>

				<div class="column lastcolumn jobdescription">
					<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
					<ul>
						<li>Placerat facer possim assum;</li>
						<li>Typi non habent claritatem insitam;</li>
						<li>Est usus legentis in iis qui facit eorum;</li>
						<li>Investigationes demonstraverunt lectores;</li>
						<li>Legere me lius quod ii legunt saepius.</li>
					</ul>					
				</div>
				<!-- End: Job -->

				<div class="ruler"></div>

				<!-- Start: Job -->
				<div class="column employer">
					<h3>Front End Developer</h3>
					<h4>Fictive Web Agency</h4>

					<ul class="simplelist mt30">
						<li><strong>Period:</strong> March 2006 - December 2007</li>
						<li><strong>Job type:</strong> Full-Time</li>
						<li><strong>References:</strong> N/A</li>
					</ul>
				</div>

				<div class="column lastcolumn jobdescription">
					<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
					<ul>
						<li>Placerat facer possim assum;</li>
						<li>Typi non habent claritatem insitam;</li>
						<li>Est usus legentis in iis qui facit eorum;</li>
						<li>Investigationes demonstraverunt lectores;</li>
						<li>Legere me lius quod ii legunt saepius.</li>
					</ul>
				</div>
				<!-- End: Job -->

				<div class="clear"></div>
			</div>

			<div class="clear"></div>
		</div>
		<!-- End: Section 4 - Work Experience -->

		
		<!-- Start: Section 5 - Education -->
		<div class="section">

			<div class="column titlecolumn"><h2 class="sectiontitle">Education</h2></div>

			<div class="largecolumn studies">
				<!-- Start: Studies -->
				<h3>San Francisco State University</h3>
				<h4 class="mt10">Bachelor of Arts degree in Conceptual Design. Magna Cum Laude.</h4>

				<p class="mt20">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
				<!-- End: Studies -->

				<div class="ruler"></div>

				<!-- Start: Studies -->
				<h3>San Francisco School of the Arts</h3>
				<h4 class="mt10">Class of 1994</h4>
				<!-- End: Studies -->
			</div>

			<div class="clear"></div>
		</div>
		<!-- End: Section 5 - Education -->


		<!-- Start: Section 6 - Clients and works -->
		<div class="section">

			<div class="column titlecolumn"><h2 class="sectiontitle">Clients &amp; Portfolio</h2></div>

			<!-- Start: Clients -->
			<div class="column clients">
				<h3>Selected Clients</h3>
				
				<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
				<ul>
					<li>One client name;</li>
					<li>Another client name;</li>
					<li>And one more client name;</li>
					<li><a href="#">Linked client name</a>;</li>
					<li>Yet another client name;</li>
					<li>Last client name.</li>
				</ul>
			</div>
			<!-- End: Clients -->

			<!-- Start: Works -->
			<div class="column lastcolumn works">
				<h3>Selected Works</h3>

				<ul class="thumbs">
					<li class="ml0"><a href="img/qbkl.jpg" rel="worksgallery" title="Sample image 1"><img src="img/project-thumb.gif" alt="" class="photo" /></a></li>
					<li><a href="img/qbkl.jpg" rel="worksgallery" title="Sample image 2"><img src="img/project-thumb.gif" alt="" class="photo" /></a></li>
					<li><a href="img/qbkl.jpg" rel="worksgallery" title="Sample image 3"><img src="img/project-thumb.gif" alt="" class="photo" /></a></li>
					<li class="ml0"><a href="img/qbkl.jpg" rel="worksgallery" title="Sample image 4"><img src="img/project-thumb.gif" alt="" class="photo" /></a></li>
					<li><a href="img/qbkl.jpg" rel="worksgallery" title="Sample image 5"><img src="img/project-thumb.gif" alt="" class="photo" /></a></li>
					<li><a href="img/qbkl.jpg" rel="worksgallery" title="Sample image 6"><img src="img/project-thumb.gif" alt="" class="photo" /></a></li>
				</ul>
				
			</div>
			<!-- End: Works -->
			
			<div class="clear"></div>
		</div>
		<!-- Start: Section 6 - Clients and works -->
	</div>

	<!-- Start: CV/Resume options toolbar -->
	<ul class="cvoptions">
		<li><a href="contact-form.php" class="emailbutton" title="Send me an email">Email</a></li>
		<li><a href="http://pdfmyurl.com?url=<?php echo resume_url(); ?>?version=pdf&amp;-O=Portrait&amp;-s=A4&amp;--filename=resume.pdf" class="pdfbutton" title="Download my resume as PDF">PDF</a></li>
		<li><a href="javascript:print();" class="printbutton" title="Print my resume">Print</a></li>
	</ul>
	<!-- End: CV/Resume options toolbar -->
</body>

</html>