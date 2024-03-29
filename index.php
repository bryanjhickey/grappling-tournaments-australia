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
	#officialRegister hr {
		border-color: #fff;
	}
	</style>	
</head>
<body>
	
	<?php include '_masthead.php'; ?>
	
	<div id="officialRegister">
		<div class="row">
			<div class="large-12 small-12 small-centered large-centered columns">
				<h2>THE 2014 AUSTRALIAN NO GI<br> JIU JITSU CHAMPIONSHIPS</h2>
<!-- 				<h6>STATE NETBALL AND HOCKEY CENTRE, 10 BRENS DRV, ROYAL PARK</h6>
 -->				<!--<a href="#" class="button medium radius" data-reveal-id="mailModal">LET'S DO IT</a>-->
				<a href="http://www.strongvon.com/2014nogigta/m_results5.jsp?id=1442&indexstyle=109" class="button medium radius" title="Bracket Results" target="_blank">Bracket Results</a>&nbsp;&nbsp;&nbsp;<a href="http://www.strongvon.com/2014nogigta/m_tournament_main.jsp?page=SummaryWinners.html" class="button medium radius" title="View Place winnerz" target="_blank">Place Winners</a>
				<!--<h6 class="hide-for-small">PLEASE NOTE: OPEN WEIGHT REGISTRATION MUST BE DONE IN PERSON<br>AFTER YOU HAVE SUCCESSFULLY COMPLETED YOUR WEIGHT DIVISION.</h6> -->
				<hr>
				<div class="row hide-for-small">
					<div id="timer" class="large-9 small-12 small-centered large-centered columns">
						<h3>NEXT COMPETITION:<br>
						OCT 2014 (exact date TBA)</h3>
						<!-- <div class="row">
							<div class="large-10 large-centered small-12 columns"><h4><span id="timerhours" class="timebox">45 DAYS</span></h4></div>
							<div class="large-4 small-4 columns"><h4><span id="timerminutes" class="timebox">58 MIN</span></h4></div>
							<div class="large-4 small-4 columns"><h4><span id="timerseconds" class="timebox">58 SEC</span></h4></div>
						</div> -->
					</div>	
				</div>
			</div>
		</div>
	</div>
		
	<div class="row">
		<div id="landingIntroText" class="large-10 small-12 text-content large-centered columns">
			<p>Grappling Tournaments Australia runs the premier BJJ competitions in the Asia-Pacific region. GTA events are 100% non-profit with all the money raised through entries and sponsorship going back to the competitors.</p>
			<p>We run two events per year:</p>
				<ol>
 					<li>The Australian No Gi Jiu Jitsu Championships every <strong>February</strong></li>
					<li>The Australian Jiu Jitsu Championships every <strong>September</strong></li>
			</ol>
			<p>Winners of all weight classes at each event earn sponsorship packs for training gear from SUB APPAREL.</p>
			<p>Winners of all open divisions at each event earn sponsored trips to compete at the World Championships in LA.</p>
			<p>100%  &rarr;  non-profit<br>
				100%  &rarr;  volunteer run<br>
				100%  &rarr;  for the competitors and growing jiu jitsu in Australia</p>
			<p class="right"><strong>&ndash; For Grapplers. By Grapplers.</strong></p>
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
			var liftoffTime = new Date(2014, 2-1, 1, 9);
			// $('#timerdays').countdown({
			// 	until: liftoffTime, 
			// 
   //  			layout: '{dnn} DAYS'
	  //   		});
			$('#timerhours').countdown({
				until: liftoffTime,
				timezone: +10,
				layout: '{dnn} day | {hnn} hours | {snn} sec'
    			});
	    		// $('#timerhours').countdown({
	    		// 	until: liftoffTime, 
	    		// 	layout: '{hnn} HRS'
	    		// });
	    		// $('#timerminutes').countdown({
	    		// 	until: liftoffTime, 
	    		// 	layout: '{mnn} MIN'
	    		// });
	    		// $('#timerseconds').countdown({
	    		// 	until: liftoffTime, 
	    		// 	layout: '{snn} SEC'
	    		// });
		});
		</script>
		<script src="js/vendor/jquery.js"></script>
		<script src="js/vendor/jquery-plugin.js"></script>
		<script src="js/vendor/jquery.countdown.min.js"></script>
</body>
</html>