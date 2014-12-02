<?php
	$title = "Documentation";
	$description = "Mobiopush Documentation, Know how Push and Web Notifications work";
	require 'include/header.php';
?>
		<div class="content message-box-4 bt box-padding">
			<div class="row">
				<div class="small-12 columns">
					<h2>Mobiopush Documentation</h2>
					<p>Mobiopush provides Web Notification &amp; Push Notification services in one package allowing you to reach out to your Active and Passives users respectively. These Notifications are the new way to identify and re-enage your most estemed traffic.</p>
					<h3>Web Notifications</h3>
					<p>Web Notifications also know as Live notifications or Pull notifications, is a powerful method to re-engage your active traffic/ users.</p>
					<div class="small-12 medium-12 large-10 columns small-centered">	
						<div class="row">
							<div class="small-12 medium-6 large-6 columns align-center">
								<img src="images/Notification-Request-Firefox.png">
							</div>
							<div class="small-12 medium-6 large-6 columns align-center">
								<img src="images/Notification-Request-Chrome.png">
							</div>
							<p class="align-center"><small>Permission Promot in Mozilla Firefox and Google Chrome</small></p>
						</div>
					</div>
					<p>Once your user accepts and grands permission to receive Notifications from your website, they can receive notification to their Desktop/Laptop you send when using your service. Notification will be delevered to the user even if they are performing tasks with other applications or browsing in another tabs.</p>

					<p><strong>Note</strong> User must have one of your webpage active with Mobiopush code installed to be able to receive Notifications.</p>

					<div class="small-12 medium-12 large-10 columns small-centered">
						<div class="row">
							<div class="small-12 medium-6 large-6 columns align-center">
								<img src="images/Notification-Sample-Firefox.png">
								<p class="align-center"><small>Web Notification in Mozilla Firefox</small></p>
							</div>
							<div class="small-12 medium-6 large-6 columns align-center">
								<img src="images/Notification-Sample-Chrome.png">
								<p class="align-center"><small>Web Notification in Google Chrome</small></p>
							</div>
						</div>
					</div>

					<p>Web Notifications can also be delevered to upcoming visitors as well, provided they visit before the Notifications expires. Notification Active time is the time upto which the notification will be serverd user. Our system allows you set Notification Time from <code>5 Mins to 1 Day</code></p>
					<p>These Notifications can be clicked or closed on choice by users. When clicked they will be redirected to the URL specified in push composed.</p>

					<h3>Push Notifications</h3>
					<p>Push Notifications allows you to reach and re-engage your customers regardless of whether they are active on your website or not.</p>

					<div class="row">
						<div class="small-12 medium-6 large-6 columns small-centered">
							<img src="images/Notification-Permission.png">
						</div>
						<p class="align-center"><small>Push Notification permission prompt in Safari</small></p>
					</div>
					<p>Once your opts to receive notifications from your website, they will receive notifications send later from your Mobiopush account to their desktop whether they are on the website or even if the bowser is not open. Users can also opt out of receiving notifications by removing permission for your website.</p>

					<p><strong>Note</strong>Push Notification works only on Safari with Apple OS X Mavericks and high OS.</p>
					<div class="small-12 medium-12 large-10 columns small-centered">
					<div class="row">
						<div class="small-12 medium-6 large-6 columns align-center">
							<img src="images/Notification-Active.png">
							<p class="align-center"><small>Push Notification in Safari</small></p>
						</div>
						<div class="small-12 medium-6 large-6 columns align-center">
							<img src="images/Notification-in-Notification-Center.png">
							<p class="align-center"><small>Push Notification Minimised in Notification center.</small></p>
						</div>
					</div>
					</div>

					<p>These notifications pop up to users screen and hide themself to Notification center allowing user to check back later, these notifications when clicked opens browser and takes the user to URL specified in push composer. Unlike Web Notification Push Notifications does not have Active time, these are sent to all subscribers at the time of composing, unless spefied by <code>User Alias or Segments</code>. Later subscribers will not receive previouly issued Pushes.</p>
				</div>
			</div>
		</div>
		<div class="content message-box-2 grey-bg hide-for-small ">
			<div class="row">
				<form class="register-form-front">
					<h4 class="align-center caps">Try it for Free.....!</h4>
					<div class="large-3 medium-4 small-12 columns"><input placeholder = "http://" class="text-input" type="text"/></div>
					<div class="large-3 medium-4 small-12 columns"><input placeholder = "Your email address" class="text-input" type="text"/></div>
					<div class="large-3 medium-4 small-12 columns"><input placeholder = "Choose a Password" class="text-input" type="text"/></div>
					<div class="large-3 medium-12 small-12 columns align-center"><input class=" button radius small expand" type="submit" value="Start Sending pushes" /></div>
				</form>
			</div>
		</div>		
<?php
	require 'include/footer.php';
?>
