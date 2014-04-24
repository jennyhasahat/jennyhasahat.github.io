<?php ini_set('error_reporting', 8191)?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html lang="en-gb">
<head>
	<title>my reading so far</title>
	<meta name="Keywords" content="cosmos, swarm, swarming, robot, robotics, complex, complexity, complex systems, systems, emergence, emergent systems, research">
	<meta name="Description" content="a place where I will put stuff I think might be important or interesting">
	<meta name="Author" content="Jenny Owen">

	<link rel="stylesheet" type="text/css" href="./css/reset.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/readinglist-and-glossary.css">
</head>

<body>
    <div class="page">
	    <div class="titlebox">
		    <h1>
			    Things I've Been Reading and What I Thought of Them
		    </h1>
	    </div>
	
	    <div class="navbar">
		    <ul>
				<li><a href="./index.php">Index</a></li>
				<li><a href="./reading-list.php">Stuff I've been reading</a></li>
				<!-- <li><a href="./glossary.html">A glossary of useful words</a></li> -->
				<li><a href="./hashlife.html">Gosper's Algorithm</a></li>
				<li><a href="./player/playerstage-manual.html">Player/Stage Manual</a></li>
		    </ul>
	    </div>
	
	    <div class="container">
		    <div class="content">
	
			    This page has been updated to use PHP. Items are sorted by tag, most papers have more than one tag so they will be listed under each of the tags they've been given.<br> 
	
	
			    <?php 
				    $dataset = array(
					    array(
						    'reference'		=> 'Polack, F. Hoverd, T. Sampson, A. Stepney, S. and Timmis, J. (2008) "Complex Systems Models: Engineering Simulations", <i>In: Artificial Life XI</i>.',
						    'id'			=> 'Polack2008',
						    'commentary'		=> 'Contains a handy review on the state of complex systems modelling including a critique (ie strengths/weaknesses) of the type of diagrams typically used.<br> Also contains a review of 2 complexity modelling programs: Reactive Animation and PEPA. As far as I can tell they are computational biology programs (not necessarily a bad thing) and PEPA is very mathsy :-(<br>The most useful thing about this paper is a list of requirements for complex systems design software. For this reason the paper is well worth citing and refering back to.',
						    'notesUrl'		=> 'ComplexSystemsModelsEngineeringSimulations',
						    'furtherReading' 	=> array(
							    'Epstein J.M. (1999) "agent based computational models and generative social science" <i>In: complexity</i> vol.4(5) pp41-60', 
							    'effroni, harel, cohen "emergent dynamics of thymocyte development and lineage determination"  (this is about reactive animation)', 
							    'Sadot, fisher, barak, admanit, stern etc "towards verified biological models" (this is also about reactive animation)'
						    ),
						    'tags'			=> array(
							    'complexity',
							    'modelling',
							    'cosmos'
						    ),
						    'data'	=> '02/02/09',
						    'revdata'	=> '09/02/02'
					    ),
			
					    array(
						    'reference'		=> 'Sargent R.G. (2000) "Verification, validation and accreditation of simulation models" <i> In: Proceedings of the 2000 winter simulation conference.</i>',
						    'id'			=> 'Sargent2000',
						    'commentary'	=> 'From what I\'ve read elsewhere, this is a pretty definitive paper on the subject of modelling and model verification. I can see why! The author describes a framework for developing models, like Paunovski et. al. (2008) this still follows the software engineering specification, design implementation and testing cycle but the diagram Sargent presents is very comprehensive and understandable. I like it. You start at the top and work round, and the diagram is circular because the process is iterative. This paper also handily includes a list of verification techniques used in industry for software engineering, and describes how they are applied to the verification of models.<br>I can\'t really think of any criticisms of this paper. It wasn\'t written with biological and complex systems modelling in mind but the techniques described are definitely applicable. This paper is well worth re-reading and referencing at a later date.',
						    'notesUrl'		=> 'VerificationValidationAndAccreditationOfSim',
						    'furtherReading' => array(),
						    'tags'		=> array(
							    'modelling',
							    'validation'
						    ),
						    'data'		=> '02/02/09',
						    'revdate'		=> '09/02/02'
					    ),
			
					    array(
						    'reference'		=> 'Balch, T. (2000) "Hierarchic Social Entropy: An Information Theoretic Measure of Robot Group Diversity". <i>In: Autonomous Robots</i> Vol. 8, pp 209-237',
						    'id'			=> 'Balch2000',
						    'commentary'	=> 'This paper develops a metric for measuring diversity within a robotic system. They consider that two factors are important to this measure: number of subsets of robots (so if there is a system of 4 different types of robot this is 4), and the size of these subsets (so there could be 4 types of robot and 20 robots of each type). Another factor they consider is similarity between robots, robots are not necessarily completely different or completely the same, so they discuss at great length a way of clustering robots based on their behaviour responses. They finally develop a diversity measure based around Shannon entropy which takes into account maximum cluster size and the two properties above. <br>They also discuss a way of measuring and comparing robot behaviour for the purposes of clustering robots based on their behaviour. They explain this with an example which basically involves comparing robot\'s behaviour policies (ie I see X set of things so I will do Y behaviour) if they\'re all the same or very similar (the acceptable level of similarity is basically the same as max cluster size) then the robot system is homogenous!',
						    'notesUrl'		=> 'HierarchicSocialEntropyAnInformationTheoretic',
						    'furtherReading' => array(
							    'Shannon, C.E. 1949. The Mathematical Theory of Communication, University of Illinois Press'
						    ),
						    'tags'		=> array(
							    'validation',
							    'robotics'
						    ),
						    'data'		=> '14/05/09',
						    'revdate'		=> '09/05/14'
					    ),
			
					    array(
						    'reference'		=> 'Fiona A. C. Polack, Paul S. Andrews, M. Read, Jon Timmis (2009) "The Process of the Modelling for Simulation of Complex Systems" <i>Not yet submitted.</i> ',
						    'id'			=> 'Polack2009',
						    'commentary'	=> 'This paper has a comprehensive description of the CoSMoS modelling process which I found very helpful in understanding the CoSMoS way. The paper contains 3 case studies of the CoSMoS way being applied to biological modelling, the first of which was a delightfully critical (in my opinion) critique of the Garnett paper (see further reading). They applied the cosmos way to some immunology cases and document the thought processes and development of the domain models. This could potentially be a useful resource when it comes to me having to model some robots. What development steps is it necessary to take in order to have a fully working model of some robots? Something to consider I think.',
						    'notesUrl'		=> 'TheProcessoftheModellingforSimulationofCom',
						    'furtherReading' => array(
							    'P. Garnett, S. Stepney, and O. Leyser. Towards an executable model of auxin transport canalisation. <i>In Workshop on Complex Systems Modelling and Simulation</i>, pages 63-91. Luniver Press, 2008.',
							    'R. Alexander, R. Alexander-Bown, and T. Kelly. Engineering safety-critical complex systems. <i>In Workshop on Complex Systems Modelling and Simulation,</i> pages 33-63. Luniver Press, 2008.',
							    'P. S. Andrews, F. Polack, A. T. Sampson, J. Timmis, L. Scott, and M. Coles. Simulating biology: towards understanding what the simulation shows. <i>In Workshop on Complex Systems Modelling and Simulation,</i> pages 93-123. Luniver Press, 2008.'	
						    ),
						    'tags'		=> array(
							    'cosmos',
							    'modelling',
							    'complexity'
						    ),
						    'data'		=> '02/02/09',
						    'revdate'		=> '09/02/02'
					    ),
			
					    array(
						    'reference'		=> 'P.S. Andrews, S. Stepney, J. Timmis, F.A.C. Polack and A.T. Sampson (2009) "A Minimal Process for the Modelling and Simulation of Complex Systems" <i>IEEE Symposium on Artificial Life</i> ',
						    'id'			=> 'Andrews2009',
						    'commentary'	=> 'The first 3 sections of this paper say essentially the same as "The Process of the Modelling for Simulation of Complex Systems"(Polack et al 2009). The description of each stage of the process is a bit less verbose (I also found it harder to follow) but then this is a much smaller paper. The case study in this paper showing the process was much easier to follow, not least because it was shorter but also because there\'s a lot less biology talk and fewer long words. Also ants are, like, a MILLION times more interesting than immunology (no offence Jon!). <br>The other significant part of this paper is an elaboration on the 4 basic stages of the CoSMoS modelling and issues with them. It\'s mostly about the best practice to take in order to have the best quality models and to be able to make good and valid observations.<br>Overall the Polack paper has the better explanations and description of the process, but putting the process into practice is done better here, and is far more comprehensible for my feeble mind.',
						    'notesUrl'		=> 'AMinimalProcessfortheModellingandSimulation',
						    'furtherReading' => array(
							    'P. Garnett, S. Stepney, and O. Leyser. Towards an executable model of auxin transport canalisation. <i>In Workshop on Complex Systems Modelling and Simulation</i>, pages 63-91. Luniver Press, 2008.',
							    'P. S. Andrews, A. T. Sampson, J. M. Bjorndalen, S. Stepney, J. Timmis, D. N. Warren, and P. H. Welch, "Investigating patterns for the process-oriented modelling and simulation of space in complex systems," <i>in Proceedings of the Eleventh International Conference on Artificial Life</i> (ALIFE XI). MIT Press, 2008.',	
							    'F. A. C. Polack, T. Hoverd, A. T. Sampson, S. Stepney, and J. Timmis, "Complex systems models: Engineering simulations," <i>in Proceedings of the Eleventh International Conference on Artificial Life</i> (ALIFE XI). MIT Press, 2008. <a href="#Polack2008">LINK</a>',
							    'P. S. Andrews, F. Polack, A. T. Sampson, J. Timmis, L. Scott, and M. Coles. "Simulating biology: towards understanding what the simulation shows". <i>In Workshop on Complex Systems Modelling and Simulation,</i> pages 93-123. Luniver Press, 2008. <a href="#Andrews2008">LINK</a>'
						    ),
						    'tags'		=> array(
							    'cosmos',
							    'modelling',
							    'complexity'
						    ),
						    'data'		=> '02/02/09',
						    'revdate'		=> '09/02/02'
					    ),
			
					    array(
						    'reference'		=> 'P. S. Andrews, F. Polack, A. T. Sampson, J. Timmis, L. Scott, and M. Coles. "Simulating biology: towards understanding what the simulation shows". <i>In Workshop on Complex Systems Modelling and Simulation,</i> pages 93-123. Luniver Press, 2008.',
						    'id'			=> 'Andrews2008',
						    'commentary'	=> 'The main gist of this paper is that when modelling something you should always always always keep track of what assumptions you\'re making along the way. At what point should your model be considered accurate enough? Generally validating your assumptions is a good idea but that might not always be possible and at what level do you want to stop validating your assumptions? I suppose if they\'re validated though, they\'re not assumptions but cold, hard facts. Hmm.<br>Anyway, this paper seems to be based heavily upon Sargent\'s paper. They describe how to apply Sargent\'s model verification techniques to complex systems and propose an extension to his lovely circular model to include environment as separate from the problem entity. I am not if favour of this extension because it\'s unnecessary and misleading - they are not separate. <br>The modelling process is explained with an example from immunology, which even I was able to follow (albeit after coffee) so that was OK. The process is described in enough detail to make sense but without too much complication to confuse me, actually it\'s a pretty thorough implementation of the CoSMoS process. Overall this is a good paper which explains what they\'re trying to say very well.',
						    'notesUrl'		=> 'SimulatingBiologyTowardUnderstandingWhatThe',
						    'furtherReading' => array(
							    'Sargent R.G. (2000) "Verification, validation and accreditation of simulation models" <i> In: Proceedings of the 2000 winter simulation conference.</i> <a href="#Sargent2000">LINK</a>',
							    'Epstein J.M. (1999) "agent based computational models and generative social science" <i>In: complexity</i> vol.4(5) pp41-60',	
							    'J. Sudeikat, L. Braubach, A. Pokahr, and W. Lamersdorf. Evaluation of agent-oriented software methodologies - examination of the gap between modelling and platform. <i>In AOSE 2004, volume 3382 of LNCS</i>, pages 126-141. Springer, 2004.',
							    'Paul S. Andrews, Adam T. Sampson, John Markus Bjorndalen, Susan Stepney, Jon Timmis, Douglas N. Warren, and Peter H. Welch. Investigating patterns for the process-oriented modelling and simulation of space in complex systems. <i>In: Artificial Life XI: Proceedings of the Eleventh International Conference on the Simulation and Synthesis of Living Systems.</i> MIT Press, 2008.'
						    ),
						    'tags'		=> array(
							    'cosmos',
							    'modelling',
							    'complexity'
						    ),
						    'data'		=> '02/02/09',
						    'revdate'		=> '09/02/02'
					    ),
			
					    array(
						    'reference'		=> 'Susan Stepney, Robert E. Smith, Jonathan Timmis, and Andy M. Tyrrell (2004) "Towards a Conceptual Framework for Artificial Immune Systems" <i>In: Lecture Notes in Computer Science</i> Vol. 3239 pp53-64',
						    'id'			=> 'Stepney2004',
						    'commentary'	=> 'They propose a framework for generating bio-inspired algorithms. This involves making a model of the biological system and using it to learn about the original biological system. Thusly helping all mankind. They describe how to apply this to AIS specifically (without actually doing any application) and say that if it was abstracted to a model with iterations in then it could also be used for all kinds of biological systems.<br>This paper seems like it\'s describing a work in progress. A framework is proposed and they say it is very good, but nothing has actually been done with it yet. I\'m pretty sure this was the pre-curser to CoSMoS because it involves modelling and they talk about applying it to all sorts of complex systems. Mostly this paper is about artifical immune systems though, their history and what they\'re about, how to apply artificial immune algorithms to problems and so on.',
						    'notesUrl'		=> 'TowardsaConceptualFrameworkforAIS',
						    'furtherReading' => array(
							    'L. N. de Castro, J. Timmis. Artificial Immune Systems: A New Computational Intelligence Approach. Springer, 2002'
						    ),
						    'tags'		=> array(
							    'modelling',
							    'complexity',
							    'ais'
						    ),
						    'data'		=> '02/02/09',
						    'revdate'		=> '09/02/02'
					    ),
			
					    array(
						    'reference'		=> 'Kristina Lerman, Chris Jones, Aram Galstyan and Maja J Mataric (2006) "Analysis of Dynamic Task Allocation in Multi-Robot Systems". <i>In: The International Journal of Robotics Research</i> vol. 25(3) pp 225 - 241',
						    'id'			=> 'Lerman2006',
						    'commentary'	=> 'Of all the papers I\'ve read so far this has got to be the most difficult to understand. Worse even than Maturana &amp; Varela "Autopoiesis and Cognition", and that was no picnic. In this paper they build a mathematical model of the <a href="#Jones2003">red puck / green puck sorting multi-robot system</a> that Jones and Mataric did. This basically seems to involve pulling equations out of the air, averaging them over lots of robots and making some sort of iterative differential equation. Then fudging the memory parameter a little bit so that it matches the experimental results. To be fair though, their mathematical results matched the experimental ones very well indeed and they only had one parameter that was a variable (memory length, as with <a href="#Jones2003">the other paper</a>).<br>I found this paper very difficult to follow, and it took a long time to go over the maths even then I\'m still not sure how they got to their formulas. I certainly don\'t want to have to do any mathematical modelling in my work EVER, but I suppose it\'s something I\'d need to know about.',
						    'notesUrl'		=> 'AnalysisofDynamicTaskAllocationinMultiRobot',
						    'furtherReading' => array(
							    'Gerkey, G. P., and Mataric, M. J. (2004).A formal analysis and taxonomy of task allocation in multi-robot systems. <i>International Journal of Robotics Research</i> 23(9):939-954.',
							    'Lerman, K. and Galstyan, A. (2003). Macroscopic analysis of adaptive task allocation in robots. <i>In Proceedings of the IEEE International Conference on Intelligent Robots and Systems (IROS-2003)</i>,Las Vegas, NV, October 2003, pp. 1951-1956.<a href="#Lerman2003">LINK</a>'
						    ),
						    'tags'		=> array(
							    'modelling',
							    'robotics',
							    'maths'
						    ),
						    'data'		=> '20/03/09',
						    'revdate'		=> '09/03/20'
					    ),
			
					    array(
						    'reference'		=> 'Lerman, K. and Galstyan, A. (2003). Macroscopic analysis of adaptive task allocation in robots. <i>In Proceedings of the IEEE International Conference on Intelligent Robots and Systems (IROS-2003)</i>,Las Vegas, NV, October 2003, pp. 1951-1956. ',
						    'id'			=> 'Lerman2003',
						    'commentary'	=> 'This paper is just a condensed version of <a href="#Lerman2006">Lerman\'s 2006 paper</a>, where they describe a mathematical model for red and green puck sorting robots. It\'s a little bit more generalised and they fit the stuff into a third of the pages so there\'s a lot less detail and there\'s no specific experiment they do.<br>One interesting thing they mention here and is also mentionied by <a href="#Dewolf2006">DeWolf and Holvoet</a> and <a href="#Winfield2008">Winfield et al</a> is that microscopic models don\'t scale up well. What exactly is a microscopic model and how is a macroscopic DE model of averaged behaviour of a bunch of robots any different to  microscopic DE model which is scaled up to cover a bunch of robots?',
						    'notesUrl'		=> '',
						    'furtherReading' => array(
							    'A. J. Ijspeert, A. Martinoli, A. Billard, and L. M. Gambardella. "Collaboration through the exploitation of local interactions in autonomous collective robotics: The stick pulling experiment." <i>In: Autonomous Robots</i>, 11(2):149-171, 2001.'
						    ),
						    'tags'		=> array(
							    'modelling',
							    'robotics',
							    'maths'
						    ),
						    'data'		=> '20/03/09',
						    'revdate'		=> '09/03/20'
					    ),
			
					    array(
						    'reference'		=> 'Lerman, K., Martinoli, A., & Galstyan, A. (2005). "A review of probabilistic  macroscopic models for swarm robotic systems".<i>In: E. Sahin &amp; W. M. Spears (Eds.), Lecture notes in computer science: Swarm roboticsSAB 2004 international workshop</i> Vol. 3342 pp. 143-152.',
						    'id'			=> 'Lerman2005',
						    'commentary'	=> 'This is a comprehensive paper on how to make a macroscopic, mathematical model if your swarm robots all follow a Markovian finite state transition control type process. They basically say that for your finite state chart the proability of a robot entering the state n is the probability of a robot transitioning to n, given that it is in some other state. It\'s up to you to find the conditional probabilities of robots changing states given they\'re currently in some other state, this can be done by mathematical analysis or by measurements. This is the same process that <a href="Winfield2008">Winfield et al.</a> used to develop their model of some aggregating robots.',
						    'notesUrl'		=> 'AReviewOfProbabilisticMacroscopicModelsForS',
						    'furtherReading' => array(),
						    'tags'		=> array(
							    'modelling',
							    'robotics',
							    'maths',
							    'review'
						    ),
						    'data'		=> '20/03/09',
						    'revdate'		=> '09/03/20'
					    ),
			
					    array(
						    'reference'		=> 'Fromm, J. (2005) "Types and forms of emergence" <i>In: Complexity Digest</i> vol.25(3)',
						    'id'			=> 'Fromm2005',
						    'commentary'	=> 'The first thing I noticed about this article is that it didn\'t look like a scientific article. The second thing I noticed is that it didn\'t read like a scientific article. There are certainly a fair few references, but there was something about how this was written that struck me as odd. I think perhaps that although there were referenences to other\'s work the author didn\'t really tie these in to the science. That and the article didn\'t really say anything worthwhile. It\'s difficult to express what was so wrong about it. <br>It turns out that Complexity Digest isn\'t actually a peer-reviewed journal but more like a complexity science email group. There\'s nothing wrong with that, but Paunovski et. al. cite it as a real article!<br>Anyway, a better critique of this paper is <a href="http://www.comdig.org/topic2.php?id_forum=1&amp;id_article=21683&amp;id_topic=729"> here</a>. I didn\'t bother making detailed notes on this paper. There\'s just no point, this is useful only as an example of how not to write for a scientific journal.',
						    'notesUrl'		=> '',
						    'furtherReading' => array(
							    'P.W. Anderson, More Is Different, Science 177 (1972) 393-396<br> <a href="#Anderson1972">LINK</a><br><small>This has a definition of emergence apparently.</small>'
						    ),
						    'tags'		=> array(
							    'emergence'
						    ),
						    'data'		=> '02/02/09',
						    'revdate'		=> '09/02/02'
					    ),
			
					    array(
						    'reference'		=> 'P.W. Anderson, More Is Different, Science 177 (1972) 393-396 <a href="http://links.jstor.org/sici?sici=0036-8075%2819720804%293%3A177%3A4047%3C393%3AMID%3E2.0.CO%3B2-N">LINK</a>.',
						    'id'			=> 'Anderson1972',
						    'commentary'	=> 'In my lab book I\'d written that this was where the idea of emergence was first proposed. It certainly seems like an early paper on the subject. It\'s a short article which points out that reductionism is very popular but it implies that you can create something, like say a tree, from its component particles. They explain this idea using an example from chemistry which was explained well enough for me to understand their point. They call the fact that the process of reduction is irreversible "broken symmetry". This is because of something to do with molecules and their superpositioned states being symmetrical or something. Overall a good paper.',
						    'notesUrl'		=> 'MoreIsDifferent',
						    'furtherReading' => array(),
						    'tags'		=> array(
							    'emergence'
						    ),
						    'data'		=> '02/02/09',
						    'revdate'		=> '09/02/02'
					    ),
			
					    array(
						    'reference'		=> 'Manson, S.M. (2001) "Simplifying Complexity: A Review Of Complexity Theory" <i>In: Geoforum</i> vol. 32(3) pp 405-414 ',
						    'id'			=> 'Manson2001',
						    'commentary'	=> 'The author defines 3 types of complexity, algorithmic (irrelevant), deterministic (interesting but not <i>immediately</i> relevant to my research) and aggregate complexity (complexity caused by lots of things interacting). For deterministic and aggregate complexity they list the characteristics of each and discusses each characteristic in turn finally discussing the strengths and weaknesses of each type of complexity.<br>Some of the analysis I didn\'t understand so well because they go on about social sciences and postmodernism. I don\'t know what postmodernism is (I\'m a scientist damn it, not an art student!) so the subtleties of this comparison were lost on me. Lots of useful quotes though and the list of references is very long so I assume it\'s a very thorough review of complexity research as of 2001.',
						    'notesUrl'		=> 'SimplifyingComplexityAReviewOfComplexityTheory',
						    'furtherReading' => array(
							    'Costanza, wainger, folke (1993) "modeling complex ecological economic systems: toward an evolutionary dynamic understanding of people and nature". <i>In: Bioscience,</i> vol. 43(8) pp 545-555',
							    'Conte, R. Gilbert, N. (1995), "Computer simulation for social theory" <i>In: Artificial Societies: the Computer Simulation of Social Life.</i>'
							    ),
						    'tags'		=> array(
							    'complexity'
						    ),
						    'data'		=> '02/02/09',
						    'revdate'		=> '09/02/02'
					    ),
			
					    array(
						    'reference'		=> 'Simon, H.A. (1962) "The Architecture of Complexity" <i>In: Proceedings of the American Philosophical Society.</i> Vol. 106(6)',
						    'id'			=> 'Simon1962',
						    'commentary'	=> 'I found this paper to be pretty heavy going, even after coffee.<br> This is a very early paper (1962) so I expect it was one of the first to discuss complex systems. The central idea that Simon has about complex systems is one of HIERARCHY. Complex systems are hierarchical. The top level contains many subsystems which themselves are complex and their subsystems are complex and so on. A concept which is central to this is that if a system is broken down into stable subsystems then it is easier to build and this is why there are so many complex natural systems: being made of stable subsystems is an evolutionary advantage, or just something which is easy to happen (like with non-nature complex systems eg particles).<br> Another idea that is presented here is one of complex systems being "nearly decomposable" ie the thing can be broken down into subsystems and within those subsystems things interact on a shorter time-scale than the whole. But the complex system cannot be broken down entirely.<br> Overall this paper was pretty difficult going, it took me over 3 hours of uninterrupted work to read and make notes on (although making these notes significantly increases reading time). Although the author had obviously made an effort to make it readable to laymen I think it\'s difficult to read because people had a different way of writing in the 60s which needed more from the reader. Hey ho.',
						    'notesUrl'		=> 'TheArchitectureofComplexity',
						    'tags'		=> array(
							    'complexity',
							    'emergence'
						    ),
						    'data'		=> '02/04/09',
						    'revdate'		=> '09/04/02'
					    ),
			
					    array(
						    'reference'		=> 'F. Zambonelli and A. Omicini (2004) "Challenges and Research Directions in Agent- Oriented Software Engineering". <i>In: Autonomous Agents and Multi-Agent Systems</i>, vol. 9 pp 253_283',
						    'id'			=> 'Zambonelli2004',
						    'commentary'	=> 'This paper is the one where the concepts of micro, macro and meso scale multi-agent systems is first discussed. Micro scale systems are the ones where there are a small number of agents, all of which have been designed and programmed, much like a typcal swarm robotics type system. Macro scale system is when you have a really big number of agents and you only characterise the <b>overall</b> behaviour statistically, quite how these systems are controlled they didn\'t know. Meso scale ones were somewhere in the middle. <br>The main point of this paper was to put across the idea of "Agent Oriented Software Engineering" as one which is good and useful. It\'s quite a handwavy paper on the subject, for a more concise lowdown on the topic read the Jennings paper in the further reading.<br> Anyway it was all a bit confusing, but I\'ve got the micro/macro scale information stuff I needed.',
						    'notesUrl'		=> 'ChallengesandResearchDirectionsinAgentOrient',
						    'furtherReading' => array(
							    'Jennings N.R.(2001) "An Agent Based Approach For Building Complex Software Systems" <i>In: Communications Of The Acm</i> Vol. 44, No. 4.',
							    'H. V. D Parunak and S. Brueckner, "Entropy and self-organization, in multi-agent systems" <i>In: Proceedings of the 5th International Conference on Autonomous Agents,</i> ACM Press: Montreal (CA), 2001, pp. 124 - 130',
							    'A. Roli, M. Mamei, and F. Zambonelli, "What can cellular automata tell us about the behaviour of large-scale agent systems" <i>In: Software Engineering for Large Scale Agent Systems</i>, vol. 2603 of LNCS, Springer-Verlag, 2003.',
							    'J. Lind, "Issues in agent-oriented software engineering," <i>In: Proceedings of the 1st International Workshop on Agent-Oriented Software Engineering</i>, vol. 1957 of LNCS, Springer Verlag, 2001.<br><small>apparently this has a definition of an agent.</small>'
							    ),
						    'tags'		=> array(
							    'complexity',
							    'agents',
							    'modelling'
						    ),
						    'data'		=> '02/04/09',
						    'revdate'		=> '09/04/02'
					    ),
			
					    array(
						    'reference'		=> 'Trianni, V. (2008) "Evolutionary Swarm Robotics: Evolving Self-Organising Behaviours in Groups of Autonomous Robots", <i>Studies in Computational Intelligence 108</i> Springer-Verlag, Berlin.<br>PART ONE: The Evolution of Self Organisation.',
						    'id'			=> 'Trianni2008',
						    'commentary'	=> 'I found this book to be very readable. The author doesn\'t use long words, which helps me to not fall asleep, but also there are plenty of definitions of words along the way, handily placed about as often as it takes me to need reminding what the word means.<br>There are lists of criteria for what a swarming robotic system is and I found the description of "The design problem" (section 4.1) to be particularly relevant to CoSMoS. This section describes the problem of knowing what rules to develop, which are implementable on an individual level, to make desired behaviour for the whole system. The author proposes evolution as a way of solving the design problem and, I must say, he is convincing!<br>He also presents the idea that 3rd order autopoietic systems are self organising (what that means is in my notes), and criteria for what is a swarm robotics system.',
						    'notesUrl'		=> 'EvolutionarySwarmRobotics',
						    'furtherReading' => array(
							    'Camazine, Deneubourg, Franks, Sneyd, Theraulaz And Bonabeau "Self Organising In Biological Systems" 2001',
							    'Nolfi S, And Floreano D. "Evolutionary Robotics: The Biology, Intelligence and Technology of Self Organising Machines" 2000',
							    'Labella, Dorigo And Deneubourg "Division Of Labour In A Group Of Robots Inspired By Ants\' Foraging Behaviour" <i>ACM Transactions On Autonomous And Adaptive Systems</i> 2006 <br>(Foraging and task allocation with dynamic task activation thresholds is done here)'
							    ),
						    'tags'		=> array(
							    'robotics',
							    'evolution',
							    'book',
							    'evolutionary swarm robotics',
						    ),
						    'data'		=> '02/02/09',
						    'revdate'		=> '09/02/02'
					    ),
			
					    array(
						    'reference'		=> 'Alan F.T. Winfield, Wenguo Liu, Julien Nembrini, Alcherio Martinoli. "Modelling A Wireless Connected Swarm Of Mobile Robots" <i>Swarm Intelligence</i> vol. 2 pp241-266 (2008)',
						    'id'			=> 'Winfield2008',
						    'commentary'	=> 'This is quite an in-depth paper detailing the implementation and validation of a model that uses differential equations to simulate the behaviour of some very simple flocking robots. The main body of the paper describes how they derived the probabalistic differential equations used in the model. Then they present the results and validate them, it seems pretty rigourous. <br>Whilst this paper isn\'t so relevant to my work it might be useful as a reference for how to write up a software/robotics project scientifically and for ideas as to how flocking is validated.',
						    'notesUrl'		=> 'ModellingAWirelessConnectedSwarmOfMobileRob',
						    'furtherReading' => array(),
						    'tags'		=> array(
							    'robotics',
							    'modelling',
							    'swarm robotics',
							    'swarm intelligence'
						    ),
						    'data'		=> '02/02/09',
						    'revdate'		=> '09/02/02'
					    ),
			
					    array(
						    'reference'		=> 'Vaughan, R. (2008) "Massively Multi-Robot Simulation in Stage", <i>In: Swarm Intelligence</i> vol. 2 pp189-208',
						    'id'			=> 'Vaughan2008',
						    'commentary'	=> 'I\'m not really sure what to say about this paper. A significant portion of the paper is spent talking about stage, and how it\'s better than any other robot simulator out there. Then a benchmark is presented for comparing how well other simulators deal with massive numbers of robots in the swarm, it includes an environment (basically the walls) and an algorithm for controlling the robots within it. <br>Overall I don\'t think the paper is too useful to me, testing the CoSMoS simulator and comparing it to other simulators is definitely outside the scope of what I want to do. Perhaps it would be useful to other members of the CoSMoS group though?',
						    'notesUrl'		=> 'MassivelyMultiRobotSimulationInStage',
						    'furtherReading' => array(
								    'Dorigo, M. &amp; Sahin, E. (Eds.) Special issue: swarm robotics. Autonomous Robots, 17(2-3), 2004.',
								    'Sahin, E., &amp; Spears, W. (2005). <i>In Lecture notes in computer science Vol. 3342. Swarm robotics: SAB 2004 international workshop</i>, Revised Selected Papers Santa Monica, CA, USA, July 17, 2004. Heidelberg: Springer.',
								    'Gerkey, B. P., Vaughan, R. T., Støy, K., Howard, A., Sukhatme, G., &amp; Mataric, M. J. (2001). "Most valuable player: a robot device server for distributed control." <i>In Proceedings of the IEEE/RSJ international conference on intelligent robotic systems</i> pp1226-1231. Los Alamitos: IEEE Computer Society Press.'
							    ),
						    'tags'		=> array(
							    'robotics',
							    'modelling',
							    'playerstage'
						    ),
						    'data'		=> '02/02/09',
						    'revdate'		=> '09/02/02'
					    ),
			
					    array(
						    'reference'		=> 'Winfield, A.F.T., Harper, C.J., and Nembrini J. (2005) "Towards Dependable Swarms and a New Discipline of Swarm Engineering". <i>In: Sahin, E., Spears, W., eds.: Swarm Robotics: State-of-the-art Survey. Lecture Notes in Computer Science 3342,</i> Springer-Verlag  pp126-142',
						    'id'			=> 'Winfield2005',
						    'commentary'	=> 'In this paper the authors want to apply the dependable systems verification/validation model to swarm robots. This includes analysis for liveness and safeness, design rigour, and testing methodologies in order to validate the swarm robotic system as being dependable. They apply the things they discuss to a case study of aggregating swarm robots (it\'s the same swarm robots as "Modelling A Wireless Connected Swarm Of Mobile Robots") using already established design/testing/analysis things. They find that they are able to do a fair bit with what there is but there\'s a lack of tools for the job.',
						    'notesUrl'		=> 'TowardsDependableSwarmsAndANewDiscipline',
						    'furtherReading' => array(
								    'Beni G: From swarm intelligence to swarm robotics, <i>Proceedings of the SAB\'04 Swarm Robotics Workshop</i>, Santa Monica (2004)<a href="#Beni2004">LINK</a>',
								    'Sahin, E: Swarm Robotics: "From Sources of Inspiration to Domains of Application" <i>In Sahin, E., Spears, W., eds.: Swarm Robotics: State-of-the-art Survey. Lecture Notes in Computer Science 3342,</i> Springer-Verlag (2005) 10-20',
								    'Ziemke T: On the role of Robot Simulations in Embodied Computer Science, <i>AISB Journal</i> vol. 1(4) (2003) pp389-399'
							    ),
						    'tags'		=> array(
							    'robotics',
							    'modelling',
							    'validation',
							    'scientific rigour'
						    ),
						    'data'		=> '02/02/09',
						    'revdate'		=> '09/02/02'
					    ),
			
					    array(
						    'reference'		=> 'Beni G, (2004) "From swarm intelligence to swarm robotics", <i>Proceedings of the SAB\'04 Swarm Robotics Workshop</i>, Santa Monica <a href="http://www.springerlink.com/content/xn02ymel1b22rjp8/fulltext">LINK</a>',
						    'id'			=> 'Beni2004',
						    'commentary'	=> 'This is a nice short paper (8 pages) where the author reviews the history of swarm robotics and gradually builds up a workable definition of an intelligent swarm robotic system:<br><b>a group of non-intelligent robots ("machines") capable of universal material computation.</b><br>the idea here being that intelligence = universal computation(!!), but with an embodied solution in the real world. Although this implies something is created, whereas it could be that something is done e.g. a task performed or a thing altered.<br>They then go on to say that the reality of robotics hasn\'t yet reached the goal of intelligent swarms because our robot technology isn\'t good enough yet.<br>Overall it is a well written paper, which generally doesn\'t leap these complicated concepts on you right away, so I found it easy to understand. I find the idea that intelligent swarms are capable of universal computation to be a bit far-fetched, but they say this based on what Wolfram says in "A New Kind of Science", which I haven\'t read, so maybe it\'ll make sense if I read that.',
						    'notesUrl'		=> 'FromSwarmIntelligencetoSwarmRobotics',
						    'furtherReading' => array(
								    'Wolfram, S. "A New Kind of Science", Wolfram Media (2002) <br><small>look for something that says simple systems are capable of universal computation</small>',
								    'Theraulaz, G., Bonabeau, E. (1995) "Coordination in distributed building". <i>Science</i>, vol. 269(4) pp686-688',
								    'Gazi, V., Passino, K. M. (2004) "Stability Analysis of Social Foraging Swarms", <i>IEEE Transactions on Systems, Man and Cybernetics - part B</i> vol. 34 pp539-557',
								    'Winfield, A.F.T., Harper, C.J., and Nembrini J. (2005) "Towards Dependable Swarms and a New Discipline of Swarm Engineering". <i>In: Sahin, E., Spears, W., eds.: Swarm Robotics: State-of-the-art Survey. Lecture Notes in Computer Science 3342,</i> Springer-Verlag  pp126-142<a href="#Winfield2005">LINK</a>'
							    ),
						    'tags'		=> array(
							    'robotics',
							    'swarm intelligence'
						    ),
						    'data'		=> '02/02/09',
						    'revdate'		=> '09/02/02'
					    ),
			
					    array(
						    'reference'		=> 'Chris Jones and Maja J Mataric (2003) "Adaptive Division of Labor in Large-Scale Minimalist Multi-Robot Systems"<i>In: Proceedings on IEEE/RSJ International Conference on Intelligent Robots and Systems, (IROS 2003)</i> Vol. 2 pp 1969 - 1974 <a href="http://ieeexplore.ieee.org/xpls/abs_all.jsp?arnumber=1248936">LINK</a>.',
						    'id'			=> 'Jones2003',
						    'commentary'	=> 'This paper describes are fairly simple experiment they ran. They basically had an environment with red and green pucks and had robots which can only eat pucks of a certain colour. The robots could change which colour they ate and they basically had to divide themselves up in order to more efficiently eat all the pucks. The robots decide which colour to eat depending on its memory of what coloured pucks there are and how many robots are dedicated to eating which colours. This was all done in simulation. The experiment found that longer memories means they adapt to changes in the red:green puck colour ratio slowly, but they change behaviour rarely. Shorter memories mean more transitions but far more adaptability. The very long memories didn\'t give a significant reduction in behaviour changing given the reduction in adaptability.<br>Overall the experiment results are what you\'d expect but it\'s a good example of how to write an experiment paper. It\'s a good description of what\'s going on in the experiment, and they tell you how they measured and presented the results with convincing statistics to back up their results as valid.',
						    'notesUrl'		=> 'AdaptiveDivisionofLabourinLargeScaleMinimal',
						    'furtherReading' => array(
								    'K. Lerman and A. Galstyan. (2003) Macroscopic analysis of adaptive task allocation in robots. In IEEE International Conference on Intelligent Robots and Systems, Las Vegas, Nevada.'
							    ),
						    'tags'		=> array(
							    'robotics',
							    'modelling',
							    'maths'
						    ),
						    'data'		=> '20/03/09',
						    'revdate'		=> '09/03/20'
					    ),
			
					    array(
						    'reference'		=> 'Wenguo Liu, Alan F. T. Winfield, Jin Sa, Jie Chen and Lihua Dou (2007) "Towards Energy Optimization: Emergent Task Allocation in a Swarm of Foraging Robots" <i>In:Adaptive Behavior</i> vol. 15(3) pp 289-305',
						    'id'			=> 'Liu2007',
						    'commentary'	=> 'This paper describes a way of making robots switch between foraging and resting tasks in order to maximise the nest\'s net input of energy <i>without any global data or centralised control</i>. So the indivdual robots have no way of knowing how much energy they\'ve collected so far or how much it uses to collect food but they work to minimise these values anyway. Basically what happens is that each robot measures how long it spends resting and how long is spends foraging in one go. If these timers reach a threshold then it\'ll switch to the other behaviour and restart its timer. They are adaptable because they can modify their threshold depending on their observations of the world. They found that robots that optimise energy intake collect less food than ones that don\'t but the always foraging swarms have a net energy loss when swarm size is greater than about 5.</br>This paper was easy to read and follow, there is a grave typing error on the last graph where they\'ve mislabelled their net energy over time graph, which is the only thing that confused me. This seems reasonably easy to reproduce although I haven\'t and probably won\'t try. All the basic principles and parameters are included and it\'s not overly complicated. A well written and interesting paper!',
						    'notesUrl'		=> 'TowardsEnergyOptimizationEmergentTaskAllocati',
						    'furtherReading' => array(
								    'Rosenfeld, A., Kaminka, G. A., & Kraus, S. (2005). A study of scalability properties in robotic teams. In P. Scerri, R. Vincent, & R. Mailler (Eds.) <i>Coordination of large-scale multiagent systems</i> (pp. 27-51). New York: Springer-Verlag.',
								    'Labella, T. H., Dorigo, M., & Deneubourg, J.-L. (2006). Division of labor in a group of robots inspired by ants\' foraging behavior. <i>ACM Transactions on Autonomous and Adaptive Systems,</i> 1, 4-25.',
								    'Sahin, E. (2005). Swarm robotics: From sources of inspiration to domains of application. <i>In E. Sahin & W. Spears (Eds.) Swarm robotics workshop: state-of-the-art survey</i> (pp. 10-20). New York: Springer.'
							    ),
						    'tags'		=> array(
							    'robotics',
							    'modelling',
							    'maths',
							    'validation',
							    'scientific rigour',
							    'swarm intelligence'
						    ),
						    'data'		=> '20/03/09',
						    'revdate'		=> '09/03/20'
					    ),
			
					    array(
						    'reference'		=> 'Erol Sahin, Sertan Girgin, Levent Bayindir, and Ali Emre Turgut "Swarm Robotics" (book chapter) <i>In: Swarm Intelligence, Natural Computing Series</i>, Springer-Verlag Berlin Heidelberg, 2008, p. 87',
						    'id'			=> 'Sahin2008',
						    'commentary'	=> 'This is a thorough review of the current state of swarm robotics but still manages to be quite high level. They discuss what swarm robotics actually means and some of the mechanisms that control swarms (eg stigmergy). They then go on to discuss the current areas that are being researched with swarm robotics, including designing swarm behaviours, modelling and measuring, robots, and areas of application. No section is much more than a description of what it isbut they have a lot of references that you could go on to read to get more detail should you wish. For the modelling and analysis they go over the macroscopic/microscopic stuff that <a href="#Zambonelli2004">Zambonelli and friends</a> talk about.<br> Overall a good paper, pretty easy to read ,even though I had a 4 week or so hiatus inbetween starting to read this and finishing it.',
						    'notesUrl'		=> 'SwarmRoboticsNOTES',
						    'furtherReading' => array(
								    'E. Sahin. Swarm robotics: From sources of inspiration to domains of application. <i>In E. Sahin and W. Spears, editors, Proceedings of the First International Workshop on Swarm Robotics (at SAB 2004)</i>, volume 3342 of Lecture Notes in Computer Science, pages 10-20. Springer, Berlin, Germany, 2005.',
								    'A.J. IIjspeert, A. Martinoli, A. Billard, and L.M. Gambardella. Collaboration through the exploitation of local interactions in autonomous collective robotics: The stick pulling experiment. <i>In: Autonomous Robots</i>, vol. 11 pp149-171, 2001.'
							    ),
						    'tags'		=> array(
							    'robotics',
							    'swarm intelligence',
							    'swarm robotics',
							    'review'
						    ),
						    'data'		=> '01/06/09',
						    'revdate'		=> '09/06/01'
					    ),
			
					    array(
						    'reference'		=> 'Kennedy, J. and Eberhart, R. (1995) "Particle Swarm Optimisation". <i>In: Proceedings of the IEEE International Conference on Neural Networks</i> vol. 4 pp 1942-1948',
						    'id'			=> 'Kennedy1995',
						    'commentary'	=> 'This paper is the first to describe particle swarm optimisation and seems like it would have been pretty influential. The paper describes the process by which they came to develop this algorithm from swarms that flock to a roost to a multi-dimensional non-linear optimiser. It\'s actually a very easy paper to follow. Particle swarm optimisation is a bit like a noisy, hill-climbing algorithm with multiple search points. For each variable that you need to optimise you add an extra dimension to the search space.<br> A good paper overall, if I don\'t reference it in my thesis at least it\'s something that\'s good to know about.	',
						    'notesUrl'		=> 'ParticleSwarmOptimisation',
						    'furtherReading' => array(
								    'Millonas, M.M. (1994) "Swarms, Phase Transitions and Collective Intelligence" <i>In: C.G. Langton Ed. Artificial Life III.</i> Addison Wesley, Reading MA.'
							    ),
						    'tags'		=> array(
							    'swarm intelligence',
							    'algorithms'
						    ),
						    'data'		=> '01/03/09',
						    'revdate'		=> '09/03/01'
					    ),
			
					    array(
						    'reference'		=> 'DeWolf, T. and Holvoet, T. (2006) "Towards a Methodology for Engineering Self Organising Emergent Systems"<i>Frontiers in Artificial Intelligence and Applications,</i> Vol. 135, pp. 18-34',
						    'id'			=> 'Dewolf2006',
						    'commentary'	=> 'The formal methodology proposed here is based on the software engineering lifecycle. They apply it to multi-agent systems specifically. At the beginning they stress the importance of making sure that a multi-agent system really is the best way of doing your problem and give a handy list of critera for stuff that can be solved this way. All through this paper they say that if you\'re making an emergent system you should only really focus on the macroscopic behaviour as a measure of whether the system is good or bad... apparently people don\'t do this?<br>Anyway, they go through each software engineering stage an say how you should do the stage for multi-agent systems.The testing section makes an interesting point which was originally made in the Kevrekidis et al (2003) paper (see further reading) which is that with formal ODE models all the mathematical analysis algorithms need is some way to process an input to get an output. If you can represent an agent based model mathematically then you could use an agent based model in your analysis algorithm instead.',
						    'notesUrl'		=> 'TowardsaMethodologyforEngineeringSelfOrganis',
						    'furtherReading' => array(
								    'F. Zambonelli and A. Omicini. (2004) "Challenges and Research Directions in Agent-Oriented Software Engineering." <i>Autonomous Agents and Multi-Agent Systems,</i> vol. 9 pp253-283 <a href="#Zambonelli2004">LINK</a>.',
								    'Ioannis G. Kevrekidis, C. William Gear, James M. Hyman, Panagiotis G. Kevrekidis, Olof Runborg, and Constantinos Theodoropoulos. (2003) "Equation-free, coarse-grained multiscale computation: enabling microscopic simulators to perform system-level analysis". <i>Communnications in Mathematical Sciences,</i> vol. 1(4) pp715 - 762.'
							    ),
						    'tags'		=> array(
							    'swarm intelligence',
							    'modelling',
							    'emergence',
							    'scientific rigour'
						    ),
						    'data'		=> '01/03/09',
						    'revdate'		=> '09/03/01'
					    ),
			
					    array(
						    'reference'		=> 'Beni, G. and Wang, J. (1989) "Swarm Intelligence in Cellular Robotic Systems" <i>In: Proceedings of NATO Advanced Workshop on Robots and Biological Systems</i> Vol. 102',
						    'id'			=> 'Beni1989',
						    'commentary'	=> 'As with Beni\'s other paper <a href="#Beni2004">"From swarm intelligence to swarm robotics"</a>	the authors start off with a definition of something and build on their definition but as before there\'s kind of an assumption that the original few definitions are true. For instance in this paper the assumption that an intelligent robot must be "unpredictable" and also not random. They then go on to define what "unpredictable" means, for most of this paper (incidentally ruling out "synergetic self organising systems" as intelligent, the nerve!). They reason that a robot can be a combination of simple "machines" which can process "matter" instead of information (although they do both to some extent because a machine\'s state is information in itself) which means that a swarm of simple robots is really one intelligent robot.<br>The main focus of this paper is in defining what "unpredictable" really means and then saying that intelligent swarm robots only really fall into one category specifically they should have an accessible inner model of themselves, they you can\'t predict what they\'ll do at the next time step, they\'re locally predictable and they are globally unpredictable (or globally intractable). Quite why they ruled out self organising systems then I just don\'t know, it seems to contradict their point. <br>This paper gave me some interesting ideas as to what to try and study next. What if a robot had a model of itself, like literally? what could that model be used for and what could a robot do with it? Could the model be changed alongside the robot\'s controlling rules?',
						    'notesUrl'		=> 'SwarmIntelligenceinCellularRoboticSystems',
						    'tags'		=> array(
							    'swarm intelligence',
							    'robotics'
						    ),
						    'data'		=> '20/05/09',
						    'revdate'		=> '09/05/20'
					    ),
			
					    array(
						    'reference'		=> 'Maturana, H.R. and Varela, F.J. (1980) "Autopoiesis and Cognition: The Realisation of the Living". <i>In: Boston studies in the philosophy of science</i>, vol 42. ',
						    'id'			=> 'Maturana1980',
						    'commentary'	=> 'Autopoietic systems are systems that can regenerate themselves ("self-creation" or "self-production") they maintain themselves, and sometimes reproduction is a consequence of that. They are autonomous and individual in that they don\'t rely on outside help, interaction or input (they can do their own thing without any need for an observer). They are robust to changes and perturbations so they\'re also homeostatic. They have no goals because they are machines, any goal given them is a result of an observer reasoning about the system, not the system itself.<br>They spend a lot of time saying that autopoietic systems are "unity". This word comes up a lot. They have no inputs and outputs, so an autopoietic system is closed. This is not the case for an ant colony, but then perhaps you should consider the environment to be part of the system? It\'s certainly a big part of the ants\' interactions. Surely also, any system would require an input of energy to make something new? Where would the energy come from in this closed system?',
						    'notesUrl'		=> 'AutopoiesisAndCognitionTheRealisationOfTheL',
						    'tags'		=> array(
							    'autopoiesis',
							    'book'
						    ),
						    'data'		=> '01/03/09',
						    'revdate'		=> '09/03/01'
					    ),
			
					    array(
						    'reference'		=> 'Maturana, H.R. and Varela, F.J. (1987) "The Tree of Knowledge: The Biological Roots of Human Understanding" Shambhala Publications Inc. Boston',
						    'id'			=> 'Maturana1987',
						    'commentary'	=> 'I will start by saying I didn\'t read this book thoroughly, it\'s mainly about biology. I did however read the sections about autopoiesis and 2nd and 3rd order autopoietic systems. This book doesn\'t really add anything to their other book "Autopoiesis and Cognition" on this subject but it is far FAR better written. They do expand on the 2nd and 3rd order autopoiesis as this was only a very small section of the other book, for 2nd order systems they don\'t know (or won\'t say) what causes the organisation between system components. For 3rd order systems they give lots of examples of group animal behaviour and how these groups interact to perform some task, usually to do with getting food, the communication is how 3rd order autopoietic systems are organised. ',
						    'notesUrl'		=> 'TheTreeofKnowledgeTheBiologicalRootsofHuma',
						    'tags'		=> array(
							    'autopoiesis',
							    'book'
						    ),
						    'data'		=> '01/03/09',
						    'revdate'		=> '09/03/01'
					    ),
			
					    array(
						    'reference'		=> 'Moioli, R.C. Vargas, P.A. Von Zuben, F.J. and Husbands, P. (2008) "Evolving an Artificial Homeostatic System". <i>In: Lecture Notes in Artificial Intelligence</i> vol. 5249 pp. 278-288.',
						    'id'			=> 'Moioli2008',
						    'commentary'	=> 'In this paper they evolve a robotic controller which uses neural networks to control behaviours (they used something called NSGasNet which they never explain) and an artificial endocrine system to decide which behaviour should be followed at any one time. An artificial endocrine system is a thing which uses "hormones" to assess its internal conditions (battery level etc) and as these get worse more fake hormone is produced (a number gets bigger) until it gets big enough that some kind of action is required. In this experiment they monitored battery level and as battery level decreased hormone increased and when there was enough hormone then the robot would switch from wandering around to going to get more power.<br> In all it\'s a thorough(ish) experiment. The way they used to develop the artificial endocrine system seemed to be sound and their results show the robot is robust to changes in battery discharge rate an evolved artificial endocrine system sounds like a good thing. That said, this paper doesn\'t provide enough information to replicate the results and their measure of when the robot performs well is worryingly qualitative, we effectively have to take their word that the robots performed well (for whatever value of "well" they used).',
						    'notesUrl'		=> 'EvolvinganArtificialHomeostaticSystemNOTES',
						    'furtherReading' => array(
							    'Ashby, W.R (1952) "Design for a Brain: The Origin of Adaptive Behaviour". Chapman and Hall, London.',
							    'Vargas, P.A., Moioli, R.C., Castro, L.N., Timmis, J., Neal, M., Von Zuben, F.J. "Artificial homeostatic system: a novel approach". <i>In: Proc. of the 8th European Conf. on Artificial Life</i>, pp. 754-764 (2005)'
						    ),
						    'tags'		=> array(
							    'homeostasis',
							    'robotics'
						    ),
						    'data'		=> '16/06/09',
						    'revdate'		=> '09/06/16'
					    ),
			
					    array(
						    'reference'		=> 'David Ackley and Michael Littman (1991). "Interactions Between Learning and Evolution", <i>In: Proceedings of the Second Conference on Artificial Life</i>',
						    'id'			=> 'Ackley1991',
						    'commentary'	=> 'This is a very interesting paper about some agents that can learn and also evolve. The learning happens over a short time span, the lifetime of an agent, the evolution happens as agents reproduce and populate the simulation. The agents use two neural networks as controllers, one of them is an \'action network\' which controls how the agent reacts to a situation. The other is an \'evaluation network\' which is how the agent decides what is a good situation and what is bad. The evaluation network and the <b>initialisaiton</b> for the action network are inherited from parent agents. So natural selection controls what the agents think is good or bad, and how they will initially react to stimuli in the environment, and over time the agent will adapt its action network to learn behaviours that result in situations it believes are good. The agents\' aim is to live for as long as possible and to reproduce as often as possible.<br> The simulation they used was apparently very difficult to survive in, which skewed their results a bit (it made evolution a bit crappy for instance because agents, and most of the population, died before they could pass along genes). The results they presented of the one population that lasted over 9 million time steps were interestin though. They showed how having the population start out knowing that food is good eventually led to the agents instinctively getting food, it also showed that when the agents start off instinctively avoiding predators their evaluation of whether predators are good or bad had little effect. These results are somewhat contradictory but the experiment was successful in that the agents lasted a long time before going extinct.<br>Overall what they present is a very interesting control structure, and I think how they implement instinctive actions is quite clever (but smart people might think it was obvious) the paper leaves me wondering what would happen if it was easier to survive in the simulation, (probably there would be less adaption and the experiment would be much less interesting).',
						    'notesUrl'	=> 'InteractionsbetweenLearningandEvolutionNOTES',
						    'furtherReading' => array(
							    'Ackley, D. H., Littman, M.L. (1990) "Generalisation and Scaling in Reinforcement Learning" In: Advances in Neural Information Processing Systems 2.',
							    'Sutton, R.S.(1987) "Learning to Predict by the Methods of Temporal Differences". In: GTE Laboratories technical report TR87-509.1 (Computer and Intelligent Systems Laboratory).'
						    ),
						    'tags'		=> array(
							    'evolution',
							    'adaption',
							    'learning'
						    ),
						    'data'		=> '14/07/09',
						    'revdate'		=> '09/07/14'
					    ),
			
					    array(
						    'reference'		=> ' Jon Timmis, Mark Neal, and Thorniley, J. (2009) "An Adaptive Neuro-Endocrine System for Robotic Systems". <i>In: Workshop on Robotic Intelligence in Informationally Structured Space, RIISS \'09. IEEE</i>. pp. 129-136',
						    'id'			=> 'Timmis2009',
						    'commentary'	=> 'This paper is based heavily on the results of the <a href="#Neal2003">Neal/Timmis Timidity</a> paper I\'ve got cited in the further reading section. In the older paper they (apparently) develop an artificial neuro-endocrine system and apply it to a robot so that it can avoid obstacles. In this paper they take that old architecture and robot, and add on-line learning so that it can learn to avoid obstacles as it explores its environment. The inputs from the sensors are fed into a "gland" which generates "hormone". The sensory inputs are weighted and by changing these weights they can affect how much hormone is produced. The hormones arbitrate as to which neural network (there are 2, one for wandering behaviour and one for obstacle avoidance) can control the robot. Anyway, by modifying the weights on the sensor inputs they can make the robot learn the assosciation between when it collides with things and when it detects that things are close.<br> One aspect of this which I thought might be interesting is that each neural network is affected by the hormone but you can alter a NN\'s sensitivity to a particular hormone. In this paper they made the the wander NN sensitive to wander hormone, and the avoidance NN sensitive to avoidance hormone. Perhaps we could make the system learn how sensitive each NN (or part of a NN) should be to a hormone, it seems like they made it possible to do this without actually using it.<br>Overall it\'s an OK paper, nothing special really. Putting new work in the "Results" section I am led to believe is... unconventional, but far be it for me to criticise a paper my supervisor wrote!',
						    'notesUrl'	=> 'AnAdaptiveNeuroEndocrineSystemforRoboticSystems',
						    'furtherReading' => array(
							    'M. Neal and J. Timmis, "Timidity: A Useful Mechanism for Robot Control?" <i>Informatica</i>, vol. 27, no. 4, pp. 197-204, 2003. <a href="#Neal2003">LINK</a>'
						    ),
						    'tags'		=> array(
							    'adaption',
							    'learning',
							    'neuro-endocrine'
						    ),
						    'data'		=> '21/07/09',
						    'revdate'		=> '09/07/21'
					    ),
			
					    array(
						    'reference'		=> 'Mark Neal, Jonathan Timmis (2003). "Timidity: A Useful Emotional Mechanism for Robot Control" <i>In: Informatica</i> vol. 27(2) pp 197-204',
						    'id'			=> 'Neal2003',
						    'commentary'	=> 'This is one of the first papers to present the idea of a neuro-endocrine controller, as such it\'s more of a proof of concept rather than a paper that presents scientific results. The experimentation and analysis sections are correspondingly short, and in the case of the results statistically dubious (sorry Jon!). Nevertheless, the neuro-endocrine control architecture is presented and there are lots of areas within it which could be explored. The biological background, especially endocrine systems, is well explained in a short paragraph containing everything I would ever want or need to know about them. There is enough information to build your own neuro-endocrine controller but nowhere near enough to replicate the results of their experiment, but like I say, the experiment wasn\'t the focus of the paper.<br>Overall the paper is well written in terms that I could understand, mercifully they even resisted the urge to go into immune systems in depth. The basic, over-simplified gist of the NE controller being: start with a neural network that does some behaviour, create a global parameter which is a hormone level (hormone level decreases over time, but sensory input can increase it), multiply neuron weights by hormone level. ',
						    'notesUrl'	=> 'TimidityAUsefulEmotionalMechanismforRobotCo',
						    'furtherReading' => array(
							    'H. O. Besendovsky and A. del Ray (1996). "Immune Neuro-endocrine Interactions: Facts and Hypotheses". <i>In: Nature</i> vol 249, pp356-358.'
						    ),
						    'tags'		=> array(
							    'robotics',
							    'neuro-endocrine'
						    ),
						    'data'		=> '27/07/09',
						    'revdate'		=> '09/07/27'
					    ),
			
					    array(
						    'reference'		=> 'Simon, H.A. (1973) "The Organisation of Complex Systems". Book chapter in: <i>Hierarchy Theory - The Challenge of Complex Systems</i> , Pattee, H.H. eds. pp 1-27',
						    'id'			=> 'Simon1973',
						    'commentary'	=> 'This was quite an interesting paper which draws heavily from his <a href="#Simon1962">"architecture of complexity"</a> paper. This one is mostly about how complexity is present in pretty much everything. The reason for this is that it\'s easier to build a systems out of stable subsystems than by building it all at once. He goes into this in greater depth with lots of examples. One of which is a computer system and he suggests that computers will become the most useful experimental tool becuase they can think and we can easily do experiments on them.<br>Another point made in this paper is about "loose horizontal coupling" which is interactions between systems on the same hierarchic complexity level. He says that systems on one level can communicate with lower levels in a certain way, but those lower levels are independent and so long as they produce the same output they can be improved as much as they like without affecting the higher levels this also speeds up evolution because a system can be constantly improving on all levels at once. This idea also discredits the idea of reductionism because if levels are independent of each other then understanding a lower layer fully isn\'t going to tell you very much about the higher levels so why even bother?<br>Overall this is a good paper and there are some interesting issues discussed, there\'s a few handy quotes too!',
						    'notesUrl'	=> 'TheOrganisationOfComplexSystems',
						    'tags'		=> array(
							    'complexity',
							    'evolution'
						    ),
						    'data'		=> '26/08/09',
						    'revdate'		=> '09/08/26'
					    ),
			
					    array(
						    'reference'		=> 'John H. Holland (1992) "Complex Adaptive Systems". <i>In: Daedalus</i>, Vol. 121, No. 1, A New Era in Computation pp. 17-30',
						    'id'			=> 'Holland1992',
						    'commentary'	=> 'This paper is about complex adaptive systems, which are basically just complex systems which adapt to changes over time (like organisms). The fact that they are adaptive means that the system itself is always changing and that makes it difficult to model. The author states that massively parallel computers would be well suited to modelling such a system because agents in the complex system are generally rule-based and with a computer rules are easy to simulate, massive parallelism means you can simulate lots of agents at once to get a simulation of the entire system out. He acknowledges that such a simulation would have far too much data coming out of it so you need to make it user friendly. Finally he goes on to talk about how computer simulations of complex adaptive systems would help them to uncover some underlying theory about all complex systems in general.<br>Overall this paper isn\'t especially relevant to my specific project but it is relevant to CoSMoS in general. The things he mentions (parallel computing, general complex systems etc) are very relevant to what CoSMoS is trying to do, 17 years after this paper was written. We are using parallel computers and we want to formalise a process for simulating complex systems. It\'s a bit of validation to say we\'re probably on the right track!',
						    'notesUrl'	=> 'ComplexAdaptiveSystemsNOTES',
						    'furtherReading'	=> array(
										    'D. L. Stein, ed., Lectures in the Sciences of Complexity (Reading, Mass. Addison-Wesley, 1989)'
										    ),
						    'tags'		=> array(
							    'complexity',
							    'modelling'
						    ),
						    'data'		=> '28/08/09',
						    'revdate'		=> '09/08/28'
					    ),
			
					    array(
						    'reference'		=> 'Beni, G., (1988) "The concept of cellular robotic system". In: Intelligent Control, 1988. Proceedings., IEEE International Symposium on , pp.57-62',
						    'id'			=> 'Beni1988',
						    'commentary'	=> 'This paper is one of the first to try and define what a swarm intelligent system is, in this paper they\'re called "cellular robots" though. What this paper says (over and over again) is that a "cellular robotic system" is different from a cellular automata, and this is because the robots can process <i>matter</i> as well as information; CAs can only process information. A cellular robotic system can process matter purely because it is composed of physical things, and this leads to other characteristics: Heterogeneity (in that there are areas of robots and no robots), kinetics (robots moving from one place to another) and asynchrony.<br> Matter is processed by either being somewhere or not being somewhere (as far as I can tell) so Beni seems to still be heavily influenced by CAs still. He says study of this type of system is important because they tie in to "general systems theory", this is basically a 1980s way of saying they\'re a complex system. As far as critiquing the whole paper, they only seem to have one or two points to make, specifically a CRS is not a CA, and this is because a CRS "processes matter", not much else is really said. Beni has a very odd writing style of forming a theory/proof through logical (and sometimes rather large) steps, the steps taken being the proof that the theory is correct since the steps all make sense and seem valid. I believe this is called deductive reasoning.',
						    'notesUrl'		=> 'TheConceptofCellularRoboticSystemNOTES',
						    'tags'		=> array(
							    'swarm intelligence',
							    'robotics',
							    'swarm robotics'
						    ),
						    'data'		=> '12/10/09',
						    'revdate'		=> '09/10/12'
					    ),
			
					    array(
						    'reference'		=> 'Sahin, E. (2005) "Swarm Robotics: From Sources of Inspiration to Domains of Application"> <i>In: Swarm Robotics, LNCS. Erol Sahin and William M. Spears Eds.</i> vol. 3342',
						    'id'			=> 'Sahin2005',
						    'commentary'	=> 'This paper outlines swarm robotics, what it is inspired from and what it can be used for. It\'s a very good primer for anyone researching swarm robotics for the first time because it\'s very comprehensive and not too in depth. In this paper the propose a definition for swarm robotics and observes that natural swarm intelligent systems are robust, flexible and scalable (there are some other properties mentioned in the paper too).<br>Overall this is a good paper. I don\'t really have much to say about it, my detailed notes on the paper are only 2 A4 pages long and it\'s mostly lists.',
						    'notesUrl'		=> 'SwarmRoboticsFromSourcesOfInspirationtoDomainsofApplicationNOTES',
						    'tags'		=> array(
							    'swarm intelligence',
							    'robotics',
							    'swarm robotics'
						    ),
						    'data'		=> '27/10/09',
						    'revdate'		=> '09/10/27'
					    ),
			
					    array(
						    'reference'		=> 'Heylighen, F (1999) "The Growth of Structural and Functional Complexity During Evolution". <i>Book chapter in "The evolution of complexity: the violet book of "Einstein meets Magritte"</i>, volume 8, Francis Heylighen, Johan Bollen and Alexander Riegler Eds. Kluwer Academic Publishers.',
						    'id'			=> 'Heylighen1999',
						    'commentary'	=> 'This paper argues why complexity increases as systems evolve. This differs from what <a href="#Simon1973">Simon</a> says because Simon argues that complexity speeds evolution, but this book chapter argues that evolution increases complexity.<br>
						    species do not evolve in isolation but alongside other species. Co-evolution of two species, A and B, provides properties in one species that the other can exploit. So maybe species A is a parasite that lives on B, or maybe A is a plant that grows in B\'s poops. If more species are introduced that provides more opportunities for existing species to exploit. Consequently inter-species interactions become more complicated and the ecosystem grows in complexity. There was a bit more to the arguement than this though.<br>				
						    Freely avaliable on the author\'s website: <a href="http://pespmc1.vub.ac.be/Papers/ComplexityGrowth.html">The Growth of Structural and Functional Complexity During Evolution</a>',
						    'tags'		=> array(
							    'complexity',
							    'evolution',
						    ),
						    'data'		=> '01/12/09',
						    'revdate'		=> '09/12/01'
					    ),
			
					    array(
						    'reference'		=> 'Vito Trianni, Thomas H. Labella, and Marco Dorigo (2004). "Evolution of Direct Communication for a Swarm-bot Performing Hole Avoidance" <i>In: ANTS2004 4th International workshop on ant colony optimization and swarm intelligence, Lecture notes in Computer Science</i>, vol. 3172, pp. 130-141.',
						    'id'			=> 'Trianni2004',
						    'commentary'	=> 'In this paper they look at communication within the swarm and how it can be used to make an evolved swarm behaviour more efficient. First they break robot communication down into 3 areas: indirect communication (stigmergy), direct interaction (physical interactions between bots to send information) and direct communication (actual information sending without physical interaction). They do an experiment comparing a swarm of <a href="http://www.swarm-bots.org/">s-bots</a> which use only direct interaction, with a similar swarm which also uses direct communication. The aim in both cases is to avoid falling into holes. Anyway, the hypothesis is that using direct communication the robots can react faster to things like a robot detecting a hole, so the whole group can manouver itself to avoid that hole. They proved this hypothesis in the experiment.<br>Overall this is a thorough paper, and I think it is mostly repeatable the results are pretty sound. They ran the experiment in the simulation, it\'s not actually mentioned in the paper but each GA genotype takes a minute to assess the fitness of, so each full experiment will take 250 hours in real-time (10 and a half days non-stop). Also scientific rigour dictates that the experiment needs to be run a few times in order to make sure that the one you just did wasn\'t a fluke so they did 10 different experiments of 250hrs each for the 2 different communication types, giving a total of 5000 hours worth of experiment. That is CRAZY AMOUNTS. Imagine having to do that with real bots! It would basically be impossible and take most of a year if you were doing it non-stop (but then you can\'t actually do it non-stop because the robots are going to fall down holes every now and then and you have to sleep sometime).',
						    'furtherReading'	=> array(
										    'C. R. Kube and H. Zhang. Task modelling in collective robotics. Autonomous Robots, vol 4. pp.53-72, 1997.',
										    'Y. U. Cao, A. S. Fukunaga, and A. B. Kahng. Cooperative mobile robotics: Antecedents and directions. Autonomous Robots, vol. 4 pp.1-23, 1997.',
										    'T. Balch and R. C. Arkin. Communication in reactive multiagent robotic systems. Autonomous Robots, vol. 1(1) pp.27-52, 1995.'
										    ),
						    'notesUrl'		=> 'EvolutionofDirectCommunicationforaswarm-botperformingholeavoidanceNOTES',
						    'tags'		=> array(
							    'swarm robotics',
							    'swarm intelligence',
							    'evolution',
							    'evolutionary swarm robotics',
					
						    ),
						    'data'		=> '22/01/10',
						    'revdate'		=> '10/01/22'
					    ),

					    array(
						    'reference'		=> 'Richard A. Watson and Sevan G. Ficici and Jordan B. Pollack (1999). "Embodied Evolution: Embodying an Evolutionary Algorithm in a Population of Robots". <i>In: IEEE Congress on Evolutionary Computation</i>, Angeline et al Eds. pp 335-342',
						    'id'			=> 'Watson1999',
						    'commentary'	=> 'In this paper the authors describe a decentralised, asynchronous evolutionary algorithm that can be implemented on multiple robots evolving in parallel called <b>Embodied evolution</b>, and demonstrate it with an experiment. In embodied evolution the robots are responsible for reproducing and diseminating their genome. When a robot does something we want it to do it is rewarded with "energy" when its energy reaches a certain point it is able to share part of its genome with other robots in the surrounding area, at a cost of some energy. There\'s no limit to how often it does this, so robots that perform well share their genome more often than the bad robots. When a robot receives a genome it decides with a probability inverse to its energy whether or not to adopt this new genome (so lower energy is more likely to change). In their experiment they demonstrate embodied evolution with a swarm of 8 robots, moving towards a light. These robots aren\'t cooperating, they\'re just individually doing their best to move towards a light source hence they are not swarm robots. As such, they aren\'t dependent on other robots doing well, they can evolve independently of each other so basically 8 different genomes are evaluated in parallel.<br>Embodied evolution seems like a very robust and easily implementable way of evolving a swarm of robots. It is much more scalable and true to biological evolution than the type of swarm evolution used by Trianni and friends (evolution on a computer and genomes transferred to all robots for evaluation). It could also be open-ended so as the environment changes, so do the robots\' behaviours. It is a very interesting sounding way of evolving swarm behaviour and (since the paper is over 10 years old) I should be interested to see what Watson et. al. have been up to to investigate it further.',
						    'furtherReading'	=> array('M.J. Mataric, D. Cliff (1996). "Challenges in evolving controllers for physical robots" <i>In: Robotics and Autonomous Systems</i> vol. 19(1) pp 67-83 (Special Issue on Evolutional Robotics).'),
						    'notesUrl'		=> 'EmbodiedEvolutionEmbodyinganEvolutionaryAlgorithminaPopulationofRobotsNOTES',
						    'tags'		=> array(
							    'swarm robotics',
							    'evolutionary swarm robotics',
							    'evolution',
					
						    ),
						    'data'		=> '26/11/10',
						    'revdate'		=> '10/11/26'
					    ),
			


				    );		
	
			    // ================================ DO NOT EDIT BELOW THIS LINE =======================================
			    //========================================= IT IS CODE! ===============================================
			    ?>	
			    <?php //first we will print the number of papers I've read:?>
			    This page contains <?php print count($dataset)?> unique reviews. <br>
	
			    <?php 
				    //now to sort through the tags to get a list of the tags used
				    $count = 0;	//counts length of array
				    $alltags = array(); //array of all the tags used
				    foreach($dataset as $paper)
				    {
				    	//if the paper entry has a tags array and it's not empty...
					    if(array_key_exists('tags', $paper) && !empty($paper['tags']) )
					    {
						    foreach($paper['tags'] as $tag)
						    {
							    //save the tag into an array
							    $alltags[$count] = $tag;
							    $count++;
						    }
					    }
			
				    }
				    //alltags is now an array containing all the tags used. They ARE repeated.
				    //put them in some order...
				    sort($alltags);
				    //now go through the array and remove any repeats.

				    //start at the first entry and remember it
				    $rememberedtag = $alltags[0];
				    for($i=1; $i<$count; $i++)
				    {
					    //is it the same as the next tag?
					    if($rememberedtag == $alltags[$i])
					    {
						    //if so delete the next tag
						    unset($alltags[$i]);
					    }
					    else
					    {
						    //update remembered tag and repeat.
						    $rememberedtag = $alltags[$i];
					    }
				    }
				    //alltags is now a pretty sparse array of tags, re-index it.
				    $alltags = array_values($alltags);
		
				    //make a nice list of all the tags used. ?>
				    Tags used:
				    <ul>
					    <?php foreach($alltags as $tag){ ?>
						    <li><a href="#<?php print $tag?>" class="internal"><?php print $tag?></a></li>
					    <?php }?>
				    </ul>
		
				    <?php /* Now we run through the dataset for each tag and print out papers that contain that tag */
		
				    // for every different tag 
				    foreach($alltags as $searchtag)
				    { //make a heading for the tag?>
					    <h2 id="<?php print $searchtag?>" >
						    <?php print $searchtag?><br>
					    </h2>
					    <?php 
					    //search through every paper I've read
					    foreach($dataset as $paper)
					    {
						    if(array_key_exists('tags', $paper) && !empty($paper['tags']) )
						    {	
							    //check if our search tag is listed under this paper's tags
							    foreach($paper['tags'] as $tag)	
							    {
								    if($tag == $searchtag)
								    {
									    printPaper($paper);
									    //stop searching this paper for tags
									    break 1;
								    }
							    }
						    }
					    }
				    }
			    ?>
	
	
	
			    <?php function printPaper($paper) {?>
				    <div class="paragraph">
					    <div class="citation" id="<?php print $paper['id'] ?>">
						    <ul><li>
							    <?php print $paper['reference']?>
						    </li></ul>
					    </div>
					    <div class="commentary">
						    <?php print $paper['commentary']?>
						    </br> 
						    <?php if(array_key_exists('notesUrl', $paper) && !empty($paper['notesUrl']) ) 
						    { ?>
							    <a href="http://www-users.york.ac.uk/~jo115/paper-reviews/<?php print $paper['notesUrl']?>.pdf" onClick="javascript: pageTracker._trackPageview('/downloads/<?php print $paper['notesUrl']?>');">
							    My more detailed notes on the paper.</a>
						    <?php }?>
					    </div>
			
			
					    <?php if(array_key_exists('furtherReading', $paper) && !empty($paper['furtherReading']) ) {?>
						    <div class="further-reading">
							    <h3>
								    Further Reading
							    </h3>
							    <ul>
								    <?php foreach($paper['furtherReading'] as $furtherReading){?>
									    <li><?php print $furtherReading?></li>
								    <?php } ?> 
							    </ul>
						    </div>
					    <?php } ?> 
			
				    </div>
	
			    <?php } ?>
			    <hr />
	
	
	
			    <!-- end content -->
		    </div>
		    <div class="footer">
		    </div>
	    <!-- end container -->
	    </div>
	</div>
	
	
	
	
			
	

	

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
