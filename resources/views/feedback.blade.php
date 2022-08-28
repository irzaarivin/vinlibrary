<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>VinLibrary | Feedback</title>
	<link rel="stylesheet" href="css/feedback.css">

	<!-- CONVERSATIONAL FORM MASTER -->

	<script src="js/conversational-form-master/dist/conversational-form.min.js"></script>
	<script src="js/jQuery/jquery-3.6.0.min.js"></script>

</head>
<body>

		<div class="header">
			<h1>Feedback</h1>
			<p>With the feedback you give, we will always listen and give the best to you </p>
		</div>
		<form id="form" action="functions.php" method="POST" cf-form>
			<cf-robot-message cf-questions="Let's get acquainted. I will ask for some of your personal information."></cf-robot-message>
			<cf-robot-message cf-questions="You don't need to be afraid, your data is safe with us, i promise."></cf-robot-message>
			<fieldset>
				<legend>Name</legend>
		    	<input type="text" name="nama" cf-questions=" First, What's your name?" required />
			</fieldset>
			<fieldset>
				<legend>Email</legend>
				<input type="email" name="email" cf-questions="And, What's your email account?" required />
			</fieldset>
			<cf-robot-message cf-questions="Nice to meet you, {nama}. Introduce, my name is Vin, as developer of VinLibrary."></cf-robot-message>
		    <fieldset>
				<legend>So tell me, what's your overall impression of the site?</legend>
		    	<textarea name="impression" rows="3" cf-questions="So tell me, what's your overall impression of the site?" required /></textarea>
		    </fieldset>
		    <fieldset>
		    	<legend>Ok. And what's the best thing about the site?</legend>
		    	<textarea name="bestThing" rows="3" cf-questions="Ok. And what's the best thing about the site?" required /></textarea>
		    </fieldset>
		    <fieldset>
		    	<legend>Now, what do you think could still be improved?</legend>
		    	<textarea name="improved" rows="3" cf-questions="Now, what do you think could still be improved?" required /></textarea>
		    </fieldset>
		    <fieldset cf-questions="On your last visit, was the website faster or slower than you expected at giving you what you were looking for?">
		    	<legend>On your last visit, was the website faster or slower than you expected at giving you what you were looking for?</legend>
		    	<div class="box">
		    		<label>Way Faster</label>
					<input type="radio" name="faster" cf-label="Way Faster" value="Way Faster">
		    	</div>
		    	<div class="box">
		    		<label>Faster</label>
			    	<input type="radio" name="faster" cf-label="Faster" value="Faster">
		    	</div>
		    	<div class="box">
		    		<label>Slower</label>
					<input type="radio" name="faster" cf-label="Slower" value="Slower">
		    	</div>
		    	<div class="box">
		    		<label>Way Slower</label>
					<input type="radio" name="faster" cf-label="Way Slower" value="Way Slower">
		    	</div>
		 	</fieldset>
		 	<fieldset cf-questions="Also, how nice-looking was our site?">
		 		<legend>Also, how nice-looking was our site?</legend>
		 		<div class="box">
		 			<label>One</label>
		 			<input type="radio" name="ratingLook" cf-label="1" value="1">
		 		</div>
			    <div class="box">
			    	<label>Two</label>
			    	<input type="radio" name="ratingLook" cf-label="2" value="2">
			    </div>
			    <div class="box">
			    	<label>Three</label>
			    	<input type="radio" name="ratingLook" cf-label="3" value="3">
			    </div>
			    <div class="box">
			    	<label>Four</label>
			    	<input type="radio" name="ratingLook" cf-label="4" value="4">
			    </div>
			    <div class="box">
			    	<label>Five</label>
			    	<input type="radio" name="ratingLook" cf-label="5" value="5">
			    </div>
		 	</fieldset>
		 	<fieldset cf-questions="And how easy was it to understand the information on the site?">
		 		<legend>And how easy was it to understand the information on the site?</legend>
		 		<div class="box">
		 			<label>One</label>
					<input type="radio" name="ratingUnderstand" cf-label="1" value="1">
		 		</div>
		 		<div class="box">
		 			<label>Two</label>
		 			<input type="radio" name="ratingUnderstand" cf-label="2" value="2">
		 		</div>
		 		<div class="box">
		 			<label>Three</label>
		 			<input type="radio" name="ratingUnderstand" cf-label="3" value="3">
		 		</div>
		 		<div class="box">
		 			<label>Four</label>
		 			<input type="radio" name="ratingUnderstand" cf-label="4" value="4">
		 		</div>
		 		<div class="box">
		 			<label>Five</label>
		 			<input type="radio" name="ratingUnderstand" cf-label="5" value="5">
		 		</div>
		 	</fieldset>
		    <button type="submit" name="send">Send!</button>
		</form>
		<div id="cf-context" role="cf-context" cf-context></div>
		<script>
	    	window.onload = function() {
	    		$("#form").hide(100);
			  	var conversationalForm = window.cf.ConversationalForm.startTheConversation({
			    	formEl: document.getElementById("form"),
			    	context: document.getElementById("cf-context"),
			    	theme: "dark",
			    	showProgressBar: false,
			    	hideUserInputOnNoneTextInput: false,
			    	robotImage: "vyrdiii.png",
			    	userImage: "irzaaa.png",
			    	submitCallback: function() {
			    		conversationalForm.addRobotChatResponse("That's all, thank you so much for your feedback. It's instrumental in helping us improve. After this, Please double check your answer");
						$("#form").delay(7000).show(500);
					    $("#cf-context").delay(6500).hide(500);
			    	}
			  	});
			};
		</script>

</body>
</html>