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

	<div class="official-register">
		<div class="row">
			<div class="small-12 small-centered columns">
				<h2 class="text-center event-title">AUSTRALIAN JIU JITSU GI CHAMPIONSHIPS</h2>
				<!-- <h5 class="subheader">Details Coming Soon . . .</h5> -->
				<!-- <a href="http://www.strongvon.com/aujiujitsuchamps2013/m_results3.jsp?id=1354&indexstyle=125" class="button medium radius" title="View Weight Class Brackets" target="_blank">VIEW BRACKETS</a>
				<h6>PLEASE NOTE.<br> OPEN WEIGHT REGISTRATION MUST BE DONE IN PERSON, ON THE DAY, AFTER COMPLETION OF YOUR WEIGHT DIVISION.</h6>
				<hr> -->
				<div class="row">
					<div class="panel panel-timer small-11 small-centered medium-10 large-8 columns">
					<h4 class="hide-for-small">State Netball &amp; Hockey Centre<br>Sat 21st Feb 2015</h4>
							<p>&nbsp;</p>
					<!-- <a href="http://www.strongvon.com/aujiujitsuchamps2015/" class="button medium radius show-for-small ">REGISTER NOW</a> -->
					<h3>Prepare for Victory</h3>
						<div class="row">
							<!-- <div class="large-3 small-3 columns"><h4><span id="timerdays" class="timebox">45 DAYS</span></h4></div>
							<div class="large-3 small-3 columns"><h4><span id="timerhours" class="timebox">01 HRS</span></h4></div>
							<div class="large-3 small-3 columns"><h4><span id="timerminutes" class="timebox">58<br>MIN</span></h4></div>
							<div class="large-3 small-3 columns"><h4><span id="timerseconds" class="timebox">58 SEC</span></h4></div> -->
							<h5>BRACKETS HAVE BEEN DRAWN</h5>
							<br />
							<h5><a href="http://www.strongvon.com/aujiujitsuchamps2015/m_results5.jsp?id=1862" target="_blank" class="button medium radius">VIEW BRACKETS</a>&nbsp;<a href="/assets/uploads/RUNNING-SHEET.png" class="button medium radius" download>VIEW RUNNING SHEET</a></h5>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div id="landingIntroText" class="small-12 small-centered text-content columns">
			<div class="content-section row">
				<div class="small-12 medium-8 small-centered columns">
					<div class="row mail-signup">
						<div class="small-12 medium-8 large-10 columns">
							<p class="lead">Get the latest news form the GTA buy signing up to our mailing list now.</p>
						</div>
						<div class="small-12 medium-4 large-2 columns">
							<a href="#"  data-reveal-id="mailModal" class="right radius expand button">Sign Up</a>
						</div>
					</div>
				</div>
				<hr>
			</div>
			<p>Grappling Tournaments Australia runs the premier BJJ competitions in the Asia-Pacific region. GTA events are 100% non-profit with all the money raised through entries and sponsorship going back to the competitors.</p>
			<p>Winners of all open divisions at each event earn sponsored trips to compete at the World Championships in LA.</p>
			<p><em>"GTA runs the best BJJ comps in the country. If you love BJJ and competing these are the number one comps you should support."</em></p>
			<p class="right"><strong>– For Grapplers. By Grapplers.</strong></p>
		</div>
	</div>

	<?php include '_footer.php'; ?>

		<div id="mailModal" class="reveal-modal" data-reveal>
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
		$(document).foundation();
		</script>
		<script>
		$(document).ready(function() {
			var liftoffTime = new Date(2015, 2-1, 21, 9);
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
		<script src="js/vendor/jquery.min.js"></script>
		<script src="js/vendor/jquery-plugin.js"></script>
		<script src="js/vendor/jquery.countdown.min.js"></script>
</body>
</html>