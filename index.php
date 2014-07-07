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
			<div class="small-12 small-centered columns">
				<h2>AUSTRALIAN JIU JITSU GI CHAMPIONSHIPS</h2>
				<h5 class="subheader hide-for-small">Sat 4th Oct 2014<br>Melb Sports &amp; Aquatic Center</h5>
				<a href="event-details.php" class="button medium radius show-for-small ">EVENT DETAILS</a>
				<!-- <a href="http://www.strongvon.com/aujiujitsuchamps2013/m_results3.jsp?id=1354&indexstyle=125" class="button medium radius" title="View Weight Class Brackets" target="_blank">VIEW BRACKETS</a>
				<h6>PLEASE NOTE.<br> OPEN WEIGHT REGISTRATION MUST BE DONE IN PERSON, ON THE DAY, AFTER COMPLETION OF YOUR WEIGHT DIVISION.</h6>
				<hr> -->
				<div class="row">
					<div id="timer" class="small-12 small-centered large-10 columns">
					<h3 class="subheader">Prepare for Victory</h3>
						<div class="row">
							<div class="large-3 small-3 columns"><h4><span id="timerdays" class="timebox">45 DAYS</span></h4></div>
							<div class="large-3 small-3 columns"><h4><span id="timerhours" class="timebox">01 HRS</span></h4></div>
							<div class="large-3 small-3 columns"><h4><span id="timerminutes" class="timebox">58 MIN</span></h4></div>
							<div class="large-3 small-3 columns"><h4><span id="timerseconds" class="timebox">58 SEC</span></h4></div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
		
	<div class="row">
		<div id="landingIntroText" class="small-12 small-centered text-content columns">
			<div class="row">
				<div class="small-12 small-centered columns">
					<div class="row">
						<div class="small-8 columns">
							<p>Get the latest news form the GTA buy signing up to our mailing list now.</p>
						</div>
						<div class="small-4 columns">
							<a href="#"  data-reveal-id="mailModal" class="right radius button">Sign Up</a>
						</div>
					</div>
					<hr>
				</div>
			</div>
			<p>Grappling Tournaments Australia runs the premier BJJ competitions in the Asia-Pacific region. GTA events are 100% non-profit with all the money raised through entries and sponsorship going back to the competitors.</p>
			<p>We run two events per year:</p>
			<ol>
				<li>The Australian No Gi Jiu Jitsu Championships every <strong>February</strong></li>
				<li>The Australian Jiu Jitsu Championships every <strong>September</strong></li>
			</ol>
			<p>Winners of all open divisions at each event earn sponsored trips to compete at the World Championships in LA.</p>
			<p><em>"GTA runs the best BJJ comps in the country. If you love BJJ and competing these are the number one comps you should support."</em></p>
			<p class="right"><strong>– For Grapplers. By Grapplers.</strong></p>
		</div>
	</div>

	<?php include '_footer.php'; ?>

		<div id="mailModal" class="reveal-modal">
			<div id="mc_embed_signup">
				<div class="row">
					<div class="small-12 columns">
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
			var liftoffTime = new Date(2014, 10-1, 4, 9);
			$('#timerdays').countdown({
				until: liftoffTime, 
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
	    		$('#timerseconds').countdown({
	    			until: liftoffTime, 
	    			layout: '{snn} SEC'
	    		});
		});
		</script>
		<script src="js/vendor/jquery.js"></script>
		<script src="js/vendor/jquery-plugin.js"></script>
		<script src="js/vendor/jquery.countdown.min.js"></script>
</body>
</html>