<?php
	$title = "Documentation";
	$description = "Mobiopush Documentation, Know how Push and Web Notifications work";
	require 'include/header.php';
?>
		<div class="content message-box-4 bt box-padding white-bg">
			<div class="row">
				<div class="small-12 columns">
					<h2 class="align-center">What is Mobiopush </h2>
					<p>Mobiopush provides Web Notification &amp; Push Notification services in one package allowing you to reach out to your Active and Passives users respectively. These Notifications are the new way to identify and re-enage your users.</p>
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
							<p class="align-center"><small>Permission Promot in Mozilla Firefox and Google Chrome requesting permssion for Web Notification</small></p>
						</div>
					</div>
					<p>Once your user accepts and grants permission to receive Notifications from your website, they can receive notification to their Desktop/Laptop whenever you send using our service. Notification will be delivered to the user even if they are performing tasks with other applications or browsing in another tabs.</p>

					<p><strong>Note</strong> User must have one of your webpage active with Mobiopush code installed to be able to receive Web Notifications.</p>

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

					<p>Web Notifications can be delivered to upcoming visitors as well, provided they visit before the Notifications expires. Notification Active time is the time upto which the notification will be served to the user. Our system allows you to set Notification Time from <code>5 Mins to 1 Day</code></p>
					<p>These Notifications can be clicked or closed on choice by users. When clicked they will be redirected to the URL specified in push composed.</p>

					<h3>Push Notifications</h3>
					<p>Push Notifications allows you to reach and re-engage your customers even if the users are not active on your website.</p>

					<div class="row">
						<div class="small-12 medium-6 large-6 columns small-centered">
							<img src="images/Notification-Permission.png">
						</div>
						<p class="align-center"><small>Push Notification permission prompt in Safari</small></p>
					</div>
					<p>Once your user opts to receive notifications from your website, they will receive notifications sent later from your Mobiopush account to their desktop whether they are on the website or not. Users can also opt out of receiving notifications by removing permission for your website.</p>

					<p><strong>Note</strong>Push Notification works only on Safari with Apple's Mac OS X Mavericks and high OS.</p>
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
				<div class="small-12 columns">
				
			<h2>Mobiopush API</h2>
			<p>The Mobiopush API lets you interact with Mobiopush from anything that can send an HTTP request. There are many things you can do with the Mobiopush API. For example:</p>
				<ul>
					<li>You can sent a Notification directly from an application without loging into the Mobiopush Dashboard.</li>
					<li>Automate New Notification from your apps.</li>
				</ul>
			<p>All API access is over HTTP, and accessed via the <code>http://api.mobiopush.com/v1/</code> domain. The relative path prefix <code>/v1/</code> indicates that we are currently using version 1 of the API. </p>
	    	
			<div class="row">
								
				<div class="large-12 column panels">
					<h5 class="subheader">Authetication</h5>
						<div class="scrollable-table ">
							<table class="api-table">
							<thead>
								<tr>
								  <th width="10%">Name</th>
								  <th width="7%">Code</th>
								  <th width="25%">Function</th>
								  <th width="20%">Example</th>
								  <th width="5%">Required</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								  <td>Site Key</td>
								  <td>SITE_KEY</td>
								  <td>16 Bit unique site ID used to identify your website</td>
								  <td><span class="label secondary">e667bf06f6f57ca1bc68b9418173631b</span><br/> <small> (This is noy your Key, get your key from settings tab)</small></td>
								  <td><span class="label alert">Required</span></td>
								</tr>
								<tr>
								  <td>API Key</td>
								  <td>API_KEY</td>
								  <td>16 Bit Private key used to authenticate your website during API call</td>
								  <td><span class="label secondary">e667bf06f6f57ca1bc68b9418173631b</span><br/> <small> (This is noy your Key, get your key from settings tab)</small></td>
								  <td><span class="label alert">Required</span></td>
								</tr>
							</tbody>
						</table>
					</div>
					<h5 class="subheader">Message</h5>
					<div class="scrollable-table ">
					<table class="api-table">
							<thead>
								<tr>
								  <th width="10%">Name</th>
								  <th width="7%">Code</th>
								  <th width="25%">Function</th>
								  <th width="25%">Example</th>
								  <th width="5%">Required</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								  <td>Title</td>
								  <td>TITLE</td>
								  <td>Title of your Message (Max 70 characters)</td>
								  <td><strong>New Flowers Avalible</strong></td>
								  <td><span class="label alert">Required</span></td>
								</tr>
								<tr>
								  <td>Message</td>
								  <td>MESSAGE</td>
								  <td>Short description about your notification. ( Max Length 140 Characters)</td>
								  <td><strong>Red Roses avalible in bunndles of 12 now.</strong></td>
								  <td><span class="label alert">Required</span></td>
								</tr>
								<tr>
								  <td>Link</td>
								  <td>LINK</td>
								  <td>URL location for clicks, this where users will be redirected on click</td>
								  <td><strong>http://mobiopush.com</strong></td>
								  <td><span class="label alert">Required</span></td>
								</tr>
							</tbody>
						</table>
					</div>

					<h5 class="subheader">Notification Settings</h5>
					<div class="scrollable-table ">
					<table class="api-table">
							<thead>
								<tr>
								  <th width="10%">Name</th>
								  <th width="7%">Code</th>
								  <th width="25%">Function</th>
								  <th width="25%">Example</th>
								  <th width="5%">Required</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								  <td>Web Notification</td>
								  <td>WEB_NOTIFICATION</td>
								  <td>Used to enable or disable Web Notification type for the notification( 0 or 1 only, other values will be treated as 0 )</td>
								  <td><span class="label secondary">0</span> Disabled or  <span class="label secondary">1</span> Enabled</td>
								  <td><span class="label">Optional</span></td>
								</tr>
								<tr>
								  <td>Web Notification Time</td>
								  <td>WEB_NOTIFICATION_TIME</td>
								  <td>Time of the notification in minutes, ranges from 5 Min to 1440 min or more (check account details, invalid entries will be replaed by 1440). </td>
								  <td><span class="label secondary">0 - 1440</span> Time in minutes</td>
								  <td><span class="label warning">Required</span><br/><small>web not enabled</small></td>
								</tr>
								<tr>
								  <td>Push Notification</td>
								  <td>PUSH_NOTIFICATION</td>
								  <td>Used to enable or disable Push Notification type for the notification( 0 or 1 only, other values will be treated as 0 )</td>
								  <td><span class="label secondary">0</span> Disabled or  <span class="label secondary">1</span> Enabled</td>
								  <td><span class="label">Optional</span></td>
								</tr>
							</tbody>
						</table>
					</div>
					<p><strong>Note</strong> : <code>PUSH_NOTIFICATION</code> or <code>WEB_NOTIFICATION</code> has to be enabed for a notification to be valid, entries without at one will be rejected.</p>

					<h5 class="subheader">Push Notification Settings</h5>
					<div class="scrollable-table ">
					<table class="api-table">
						<thead>
							<tr>
							  <th width="10%">Name</th>
							  <th width="7%">Code</th>
							  <th width="25%">Function</th>
							  <th width="25%">Example</th>
							  <th width="5%">Required</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							  <td>Segments</td>
							  <td>SEGMENTS</td>
							  <td>Use to sent Push notification to users under a specific segment. Message sent to segment will only be delivered to user in the segment alone.<br/>(Note : doubel quotes only)</td>
							  <td><span class="label secondary">["Books","Cars"]</span></td>
							  <td><span class="label">Optional</span></td>
							</tr>
							<tr>
							  <td>Alias</td>
							  <td>ALIAS</td>
							  <td>Use to sent Push notification to users registered under Alias.<br/>(Note : doubel quotes only)</td>
							  <td><span class="label secondary">["user001","user002"]</span></td>
							  <td><span class="label">Optional</span></td>
							</tr>
						</tbody>
					</table>
					</div>
					<p><strong>Note</strong> : If both <code>SEGMENTS</code> and <code>ALIAS</code> is specified, push notification will be processed to user who match the two values.</p>
					<hr/>
						<h5 class="subheader">Sample Notification</h5>
						<p>This is the sample JSON object which can triger a notification. It will send both web and push notificaion to users with site key <code>e667bf06f6f57ca1bc68b9418173631b</code> and api key <code>e667bf06f6f57ca1bc68b9418173631b</code> ( this is an invalid key for demo, please don't use this).</p>
						<div class="small-8 large-centered column">
						<pre><code>
{
 'SITE_KEY'		  			: 'e667bf06f6f57ca1bc68b9418173631b',
 'API_KEY'		  			: 'e667bf06f6f57ca1bc68b9418173631b',
 'TITLE' 		   				: 'Mobiopush',
 'MESSAGE' 		  			: 'Welcome to Mobiopush',
 'WEB_NOTIFICATION'	 	: 1,
 'WEB_NOTIFICATION_TIME'	: 10,
 'PUSH_NOTIFICATION'	 	: 1,
 'LINK' 	  	 				: 'http://mobiopush.com',
 'SEGMENTS'	 			: '["new","return"]',
 'ALIAS' 						: '["user001"]'
}
					</code></pre>
					</div>
					<hr/>
					<h5 class="subheader">Response</h5>
					<p>A JSON strucutred responsed is returned for every API call informing the call status.</p>
					<table class="api-table">
						<thead>
							<tr>
							  <th width="10%">Name</th>
							  <th width="7%">Code</th>
							  <th width="25%">Function</th>
							  <th width="25%">Example</th>
							  <th width="5%">Required</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							  <td>Status of call</td>
							  <td>STATUS</td>
							  <td>The status of the call is indicated by the <code>STATUS</code> key. It is a boolean object that responds 1 for success and 0 for errors</td>
							  <td><span class="label secondary">"status" : "1"</span></td>
							  <td>nill</td>
							</tr>
							<tr>
							  <td>Error</td>
							  <td>error</td>
							  <td>Non Zero message in case of an error, will contain a short information about the error.</td>
							  <td><span class="label secondary">"error" : "Authentication Error"</span></td>
							  <td>nill</td>
							</tr>
						</tbody>
					</table>

					<hr>

					<h5 class="subheader">Sample Response</h5>
					<div class="row">
						<div class="small-6 column">
							<p>On succes</p>
							<pre><code>
	{
	 "error"  : "0",
	 "status" : "1"
	}
						</code></pre>
						</div>	
			
						<div class="small-6 column">
						<p>Error</p>
							<pre><code>
	{
	 "error"  : "Authentication Error",
	 "status" : "0"
	}
						</code></pre>
						<br/>
						<p>On Error the JSON object includes a valid message in <code>error</code> for debugging.</p>	
						</div>
					</div>
				</div>


			</div>
				</div>
			</div>
		</div>
<?php
	require 'include/footer.php';
?>
