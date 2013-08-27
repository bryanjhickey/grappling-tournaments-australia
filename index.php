<?php include '_dochead.php'; ?>

<title>Grappling Tournaments Australia | For Grapplers. By Grapplers</title>
<style>
	#timerLabel {
		text-shadow: 5px 5px 9px rgba(0, 0, 0, 0.6);
		color: #fff;
		margin-bottom: 0;
	}
	#textLayout {
		text-transform: uppercase;
		color: rgb(195, 137, 48);
		text-shadow: 5px 5px 9px rgba(0, 0, 0, 0.6);
	}
	</style>	
</head>
<body>
	
	<?php include '_masthead.php'; ?>
	
	<div id="officialRegister">
		<div class="row">
			<div class="small-12 large-centered columns">
				<h2>REGISTRATIONS NOW OPEN</h2>
				<h5 class="subheader">GTA GI ONLY COMPETITION</h5>
				<!-- <a href="#" class="button medium radius" data-reveal-id="mailModal">LET'S DO IT</a> -->
				<a href="http://strongvon.com/aujiujitsuchamps2013/" class="button medium radius" title="Register todat" target="_blank">REGISTER NOW</a>
				<hr>
				<div id="timer" class="row">
					<div class="large-10 large-centered columns">
					<h3 class="subheader">NEXT COMPETITION: 21 Sept 2013 - GI ONLY</h3>
						<div class="row">
							<div class="large-4 columns"><h4><span id="timerdays" class="timebox">45 DAYS</span></h4></div>
							<div class="large-4 columns"><h4><span id="timerhours" class="timebox">01 HOURS</span></h4></div>
							<div class="large-4 columns"><h4><span id="timerminutes" class="timebox">58 MIN</span></h4></div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
		
	<div class="row">
		<div id="landingIntroText" class="large-10 small-12 text-content large-centered columns">
			<p>Grappling Tournaments Australia runs the premier BJJ competitions in the Asia-Pacific region. Our goal is simple; to improve the level of Jiu Jitsu in Australasia. We do this by running competitions 100% for the competitors. The funds raised from our events allow us to sponsor standout athletes to train and compete overseas on the world stage.</p>
			<p>Most important of all is you – the competitor. We strive to make all of our competitions great events for you and your team-mates. On and off the mat, we aim to demonstrate the very best in grappling culture.</p>
			<p>We reward as many victors as possible with their chance to take their place among the world’s finest grapplers.</p>
			<p class="right">&ndash; For Grapplers. By Grapplers.</p>
		</div>
	</div>

	<?php include '_footer.php'; ?>

		<div id="mailModal" class="reveal-modal">
			<div id="mc_embed_signup">
				<div class="row">
					<div class="large-12">
					<h4>sign up to our mailing list</h4>
					<form action="http://grapplingtournaments.us7.list-manage.com/subscribe/post" method="POST">
						<input type="hidden" name="u" value="e61f487a5429e929e557faf44">
						<input type="hidden" name="id" value="671550f37a">
						<label for="MERGE0">
							<strong>Email Address</strong><span class="asterisk">*</span></label>
							<div class="field-group">
						    	<input type="email" name="MERGE0" id="MERGE0" size="25" value="" placeholder="john.smith@example.com" required>	    
							</div>
							<div class="" id="mergeRow-1">
								<label for="MERGE1">First Name</label>
								<div class="field-group">
						    		<input type="text" name="MERGE1" id="MERGE1" size="25" value="" placeholder="John">					    
								</div>
							</div>
							<div class="" id="mergeRow-2">
								<label for="MERGE2">Last Name</label>
								<div class="field-group">
						    		<input type="text" name="MERGE2" id="MERGE2" size="25" value="" placeholder="Smith">  
								</div>
							</div>
							<div class="submit_container">
								<input type="submit" class="button small radius" name="submit" value="Subscribe to list" >
							</div>
						</form>
					</div>
			  	</div>
			</div>
		  <a class="close-reveal-modal">&#215;</a>
		</div>
		<script>
		$(document).ready(function() {		
			var liftoffTime = new Date(2013, 9-1, 21, 8);
			$('#timerdays').countdown({
				until: liftoffTime, 
				timezone: +10,
    			layout: '{dnn} DAYS'
    		});
    		$('#timerhours').countdown({
    			until: liftoffTime, 
    			layout: '{hnn} HRS'
    		});
    		$('#timerminutes').countdown({
    			until: liftoffTime, 
    			layout: '{mnn} MIN'
    		});
		});
		</script>
		<script src="js/vendor/jquery.js"></script>
		<script src="js/vendor/jquery.countdown.min.js"></script>
</body>
</html>