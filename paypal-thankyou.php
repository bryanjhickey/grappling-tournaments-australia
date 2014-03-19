<?php include '_dochead.php'; ?>

<title>Grappling Tournaments Australia | For Grapplers. By Grapplers</title>

</head>
<body>
	
	<?php include '_masthead.php'; ?>
	
		
	<div class="row">
		<div id="landingIntroText" class="large-8 offste-large-2 small-12 text-content large-centered columns">
			<p>Thanks for your registration and payment for the Australian Jiu Jitsu Championships.</p>
			<p>We are looking forward to running this amazing event for you.</p>
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
			var liftoffTime = new Date(2013, 9-1, 18, 24);
			$('#timerdays').countdown({
				until: liftoffTime, 
				timezone: +11,
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