<!DOCTYPE html>
<html lang="en-gb">
<head>
	<title>Jenny Owen's website</title>
	<meta name="Keywords" content="cosmos, swarm, swarming, robot, robotics, complex, complexity, complex systems, systems, emergence, emergent systems, research" />
	<meta name="Description" content="a place where I will put stuff I think might be important or interesting" />
	<meta name="Author" content="Jenny Owen" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<link type="text/css" href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
	<style type="text/css">
	body {
		padding-top: 60px;
		padding-bottom: 40px;
	}
	.sidebar-nav {
		padding: 9px 0;
	}

	@media (max-width: 980px) {
		/* Enable use of floated navbar text */
		.navbar-text.pull-right {
			float: none;
			padding-left: 5px;
			padding-right: 5px;
		}
	}
    </style>
	<link type="text/css" href="./bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen" />
</head>

<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
		<div class="container-fluid">
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="brand" href="#">Jenny Owen's Website</a>
				<div class="nav-collapse collapse">
					<ul class="nav">
				<li><a href="./index.php">Home</a></li>
				<!--<li><a href="./reading-list.php">Stuff I've been reading</a></li>
				<li><a href="./glossary.html">A glossary of useful words</a></li> -->
				<li><a href="./hashlife.html">Gosper's Algorithm</a></li>
				<li><a href="./playerstage-manual.html">Player/Stage Manual</a></li>
				<li><a href="./soundboard.html">E-Puck Extension</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<div class="hero-unit">
					<h1>Jennifer Owen's Research Website</h1>
					<p>I'm a computer science research student at the university of York. I'm working on modelling swarming robotics using the CoSMoS framework.</p>
				</div>
			</div>
		</div>
		
		<div class="row-fluid">
			<div class="span12">
				<p>My supervisors are <a href="http://www-users.cs.york.ac.uk/susan/">Susan Stepney</a>, <a href="http://www-users.cs.york.ac.uk/jtimmis/">Jon Timmis</a> and <a href="http://www.ias.uwe.ac.uk/~a-winfie/">Alan Winfield</a>.</p>
				<p>If you want to contact me then my email address is jowen (at) cs (dot) york (dot) ac (dot) uk.</p>
				<p>My LinkedIn profile can be viewed <a href="http://uk.linkedin.com/pub/jennifer-owen/1b/a31/8b3">here</a>.</p>
			</div>
		</div>
		
		<?php 
			$pictureset = array(
				array(
					'file' => './mypics/brokering_deals.jpg',
					'text' => 'brokering an important business deal'
				),
				//array(
				//	'file' => './mypics/comtemplating_issues.jpg',
				//	'text' => 'contemplating the issues of the day'
				//),
				array(
					'file' => './mypics/exploring.jpg',
					'text' => 'discovering new places',
					'link' => 'http://maps.google.co.uk/maps?q=tan+y+bwlch+penparcau&hl=en&ll=52.405757,-4.089296&spn=0.011428,0.033023&sll=53.958106,-1.077347&sspn=0.088174,0.264187&vpsrc=6&t=m&z=16&layer=c&cbll=52.405697,-4.089385&panoid=vn_bHDIl8zcx3jgaIwsIIQ&cbp=12,176.49,,0,4.85'
				),
				array(
					'file' => './mypics/grumps.jpg',
					'text' => 'attending a meeting'
				),
				array(
					'file' => './mypics/prisoner_house.jpg',
					'text' => 'on an adventure',
					'link' => 'http://en.wikipedia.org/wiki/Portmeirion'
				),
				array(
					'file' => './mypics/robot_boat.jpg',
					'text' => 'doing robotics research (I\'m the one in black)',
					'link' => './publications/PControllerasanExpertSystemforManoeuvringRudderlessSailBoats.pdf'
				),
				array(
					'file' => './mypics/sports.jpg',
					'text' => 'doing sport of some kind'
				),
				array(
					'file' => './mypics/being_interesting.jpg',
					'text' => 'being very interesting',
					'link' => 'http://www.cs.york.ac.uk/yds',
					'alt'	 => 'Image (C) Chris Marriott'
				),
				array(
					'file' => 'http://dl.dropbox.com/u/9291393/mywebsite/1201250164-Ian-Martindale.jpg',
					'text' => 'being a female engineer',
					'link' => 'http://www.ianmartindale.co.uk',
					'alt'	 => 'Image (C) Ian Martindale, York based wedding and portrait photographer',
					'width' => 650
				),					
			);
		?>
		
		<div class="row-fluid">
			<div class="span12">
			<h2>What I look like, in case you need to know.</h2>
				<p>My dad complained that the original picture wasn't dynamic and go-getting enough, so now there are <?php print count($pictureset)?> photos of me, one of which will be randomly selected for your viewing pleasure. </p>
				<p><strong>This is a picture of me <?php $displaypic = rand(0, count($pictureset)-1); print $pictureset[$displaypic]['text']?>:</strong></p>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span7 offset2">	
				<?php if(array_key_exists('link', $pictureset[$displaypic]) ){?>
					<a href="<?php print $pictureset[$displaypic]['link']?>">
				<?php }?>
				<img src="<?php print $pictureset[$displaypic]['file']?>"
					<?php if(array_key_exists('width', $pictureset[$displaypic]) ){?>
						width="<?php print $pictureset[$displaypic]['width']?>"
					<?php }?>
					<?php if(array_key_exists('alt', $pictureset[$displaypic]) ){?>
						alt="<?php print $pictureset[$displaypic]['alt']?>"
					<?php } else{?>
						alt="<?php print $pictureset[$displaypic]['text']?>"
					<?php }?>
				/>
				<?php if(array_key_exists('link', $pictureset[$displaypic]) ){?>
					</a>
				<?php }?>
			</div>
		</div>
		
		
		
		
		
		<hr />
		<div class="row-fluid">
			<div class="span5">
				<a href="http://www.cosmos-research.org" class="picture">
					<img src="./cosmos.png" alt="COmplex Systems MOdelling and Simulation">
				</a>
			</div>
			<div class="span5">
				<p><strong>I am a member of the CoSMoS research group.</strong></p>
				<p>I've made a <a onClick="javascript: pageTracker._trackPageview('/downloads/cosmos-printable-stl');" href="http://dl.dropbox.com/u/9291393/mywebsite/3D-modelling/cosmos-printable.stl">3D printable version of the CoSMoS logo</a> which you can download and print for yourself. It will (ideally) give you an object that looks like <a onClick="javascript: pageTracker._trackPageview('/downloads/cosmos-printable-png');" href="http://dl.dropbox.com/u/9291393/mywebsite/3D-modelling/cosmos-printable3D.png">this</a>.</p>
			</div>
		</div>	
		<hr />
		
		
		
		
				
		<div class="row-fluid">
			<div class="span12">
				<h2>Publications</h2>
				<ul>
					<li>Jennifer Owen (2011) "Developing a Simulation and Hardware for a Robot Swarm Using Sound to Communicate". <i>In: Proceedings of the Fourth York Doctoral Symposium on Computer Science, York UK</i>. pp98-99. <a href="./publications/DevelopingaSimulationandHardwareforaRobotSwarmUsingSoundtoCommunicate.pdf" onClick="javascript: pageTracker._trackPageview('/downloads/yds2011abstract');">Poster abstract</a>, <a href="http://dl.dropbox.com/u/9291393/mywebsite/DevelopingaSimulationandHardwareforaRobotSwarmUsingSoundtoCommunicatePOSTER.pdf" onClick="javascript: pageTracker._trackPageview('/downloads/yds2011poster');">poster</a>.</li>
				
					<li>Jennifer Owen, Susan Stepney, Jon Timmis and Alan Winfield (2010)<a href="./publications/ExploitingLooseHorizontalCouplinginEvolutionarySwarmRobotics.pdf" onClick="javascript: pageTracker._trackPageview('/downloads/ants2010');">"Exploiting Loose Horizontal Coupling In Evolutionary Swarm Robotics"</a>. <i>In: Swarm Intelligence, 7th International Conference, ANTS 2010. Brussels, Belgium</i> Lecture Notes in Computer Science vol. 6234. Springer-Verlag.</li>
						<li>Jennifer Owen, (2010) <a href="./player/playerstage-tutorial-manual.pdf" onClick="javascript: pageTracker._trackPageview('/downloads/psManualnew');">"How to Use Player/Stage, 2nd Edition".</a> Published online on my <a href="./player/playerstage-manual.html">Player\Stage page</a> </li>
				
					<li>Jennifer Owen (2009) "Investigating the Link Between Complexity and Evolution in Swarm Robotic Systems". QUALIFYING DISSERTATION.</li>
					
					<li>Jennifer Owen, (2009) <a href="./player/playerstage-tutorial-manual-2.1.pdf" onClick="javascript: pageTracker._trackPageview('/downloads/psManual');">"How to Use Player/Stage".</a> Published online at <a href="http://playerstage.sourceforge.net/index.php?src=doc">playerstage.sourceforge.net</a></li>
	
					<li>N. Benatar, O. Qadir, J. Owen, P. Baxter, M. Neal (2009), "<a href="./publications/PControllerasanExpertSystemforManoeuvringRudderlessSailBoats.pdf" onClick="javascript: pageTracker._trackPageview('/downloads/pcontrollerUKCI09');">P-Controller as an Expert System for Manoeuvring Rudderless Sail Boats</a>". <i>In: UK Workshop on Computational Intelligence (UKCI'09)</i>, University of Nottingham, September 7-9.</li>
				</ul>
			</div>
		</div>
		<hr />
		<div class="row-fluid">
			<div class="span12">
				<h2>Awards</h2>
				<p>My qualifying dissertation "Investigating the Link Between Complexity and Evolution in Swarm Robotic Systems" (which is a literature survey and a compulsory part of my PhD) won the <a href="http://www.york.ac.uk/admin/aso/prizes/prizeinfo.htm">K.M. Stott Prize</a> for the Best Qualifying Dissertation of 2009 in the Department of Computer Science.</p>
			</div>
		</div>
	
		<div class="row-fluid">
			<div class="span12">		
				<h2>Other Stuff</h2>
				<a href="http://www.amazon.co.uk/wishlist/3TY81IX44LWLL">My Amazon wishlist.</a>
			</div>
		</div>

	</div><!-- end container-fluid -->
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="./bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
		try {
			var pageTracker = _gat._getTracker("UA-7390385-1");
			pageTracker._trackPageview();
		} catch(err) {}
	</script>

</body>

</html>
