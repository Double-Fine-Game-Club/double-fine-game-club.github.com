<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>The Double Fine Game Club!</title>
		<meta name="viewport" content="width=device-width">
		<link rel="icon" type="image/png" href="images/dfgc_fav.png" />
		<style type = 'text/css'>
			@font-face {
			    font-family: 'TeXGyreTermesRegular';
			    src: url('fonts/texgyretermes-regular-webfont.eot');
			    src: url('fonts/texgyretermes-regular-webfont.eot?#iefix') format('embedded-opentype'),
				 url('fonts/texgyretermes-regular-webfont.woff') format('woff'),
				 url('fonts/texgyretermes-regular-webfont.ttf') format('truetype'),
				 url('fonts/texgyretermes-regular-webfont.svg#TeXGyreTermesRegular') format('svg');
			    font-weight: normal;
			    font-style: normal;	}
			body { background-image: url(images/background.png); background-repeat: repeat-x; background-color: #d1631f; margin: 0; color: #7d3516; padding-bottom: 2em; font-family: Arial,Helvetica,sans-serif; }
			#pageHeader { text-align: center; margin-top: 2em; margin-bottom: 2em; text-shadow: 1px 1px 0px rgba(255, 255, 255, 0.5); }
			#pageHeader h1 { font-variant: small-caps; font-size: 2em;  margin: 0; font-family: TeXGyreTermesRegular,Times,Roman,serif; }
			#pageHeader h2 { font-style: italic; font-size: 1em; margin: 0; }
			#pageHeader h3 { font-weight: normal; margin: 1em 0 0 0; }
			#navMenu ul { text-align: center; list-style-type: none; margin: 0; padding: 0; margin-top: 1em;}
			#navMenu ul li { display: inline; background-color: white; padding: 1em; }
			#navMenu ul li a { background-color: white; }
			article { text-align: justify; margin: 0 20% 60px 20%; border: 1px solid #7d3516; border-radius: 0 0 0.5em 0.5em; background-color: #fed982; padding-bottom: 1px; text-shadow: 1px 1px 0px rgba(255, 255, 255, 0.25); box-shadow: 0 0 0 3px #7d3516, 0 0 0 6px #d1631f, 0 0 0 7px #7d3516, 0px 5px 10px 5px rgba(0, 0, 0, 0.5);}
			article p { margin: 1em 30px; }
			article ul { margin: 1em 30px; }
			article h1 { margin: 1em 30px; }
			article iframe {border: 0; background-color: black; width: 100%; height: 380px; }
			article object { width: 100%; }
			#countdown { }
			a { text-decoration: none; color: #FB6404; text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.125); }
			a:hover { text-decoration: underline; }
			.rightImage { float: right; clear: right; border: 0; padding: 0 2em;}
			.leftImage { float: left; clear: left; border: 0; padding: 0 }
			#logo {position: relative; left: 50%; margin-left: -75px; margin-top: 1em; margin-bottom: -3em;}
			.clearfix { clear: both; }
			
			
		</style>
	</head>
	<body>
		<nav id = 'navMenu'>
			<img id = 'logo' src = 'images/dfgc_logo.png' alt = 'The Double Fine Game Club!' />
<!--			<ul>
				<li><a href = 'http://doublefine.com'>Double Fine Website</a></li>
				<li><a href = 'http://mibbit.com/?channel=%23DFAdventure&amp;server=irc.foonetic.net'>#DFAdventure</a></li>
				<li><a href = 'http://twitch.tv/df_gameclub'>Game Club Video Archive</a></li>
			</ul> -->
	</nav>

	<section>
			<hgroup id = 'pageHeader'>
				<h1>Welcome to The Double Fine Game Club!</h1>
				<h2>A community run game play and discussion group.</h2>
				<h3 id = 'countdown'>Next Session: <span id = 'countdownText'></span></h3>
	
			</hgroup>
	</section>

		<article id = 'main'>			
<object type="application/x-shockwave-flash" height="378" id="live_embed_player_flash" data="http://www.twitch.tv/widgets/live_embed_player.swf?channel=twolofbees">
			<param name="allowFullScreen" value="true" />
			<param name="allowScriptAccess" value="always" />
			<param name="allowNetworking" value="all" />
			<param name="movie" value="http://www.twitch.tv/widgets/live_embed_player.swf" />
			<param name="flashvars" value="hostname=www.twitch.tv&amp;channel=sydeon&amp;auto_play=true&amp;start_volume=25" />
</object>


			<p id = 'chatCloseInstructions'>Click <a href = 'http://widget.mibbit.com/?server=irc.foonetic.net&amp;channel=%23DFAdventure&amp;nick=GameClubFan_??????&amp;noServerMotd=true&amp;settings=e45b6397f1cdd3f1e3db04091b842551' id = 'openChat' target = 'DFACHAT'>here</a> to open chat in a separate window. This will terminate your current chat session and <a href = '#' id = 'hideChat' onclick = 'return false;'>hide the chat pane</a>. You can click <a href = '#' id = 'showChat' onclick = 'return false;'>here</a> to restore it.</p>
			<p>Alternatively, you may want to join the IRC channel in a separate chat application using <em>irc.foonetic.net</em> as the server and <em>#DFAdventure</em> as the channel name.</p>
		</article>
			
		<article>
			<h1>What is Game Club?</h1>
			<img class = 'rightImage' src = 'images/dfgc_logo.png' alt = 'The Double Fine Game Club!' />
			<p>The Double Fine Game Club is a community run weekly event where members of the Double Fine community and other adventure game fans come together to play and talk about the game currently being played (think of it as a book club for games). It's entirely informal and everybody is welcome!</p>
			<p>Logs and further discussion can be found in specific Game Club threads on the <a href = 'http://www.doublefine.com/forums/viewforum/22/'>Double Fine forums</a>.</p>
			<p>From time to time we've also been joined by developers of a game we've been playing for a Q&amp;A session.</p>
			<br class = 'clearfix' />
		</article>
			
		<article>
			<h1>How can I get involved?</h1>
			<p>It's easy!</p>
			<p>Just visit this page or log onto the #DFAdventure IRC channel on Foonetic.net at 7:00pm UTC (check the countdown timer at the top of the page, or visit <a href = 'http://www.timeanddate.com/worldclock/fixedtime.html?msg=Double+Fine+Game+Club:+Machinarium&amp;iso=20120818T12&amp;p1=137&amp;ah=2'>timeanddate.com</a> for your area) and chat about the game that's currently being played.</p>
			<p>If you don't own the game or aren't interested in playing it again, don't worry. We almost always have somebody streaming a playthrough which you can watch from this page.</p>
			<p>You can keep track of what's currently being played and join in on further discussion on the <a href = 'http://www.doublefine.com/forums/viewforum/22/'>Double Fine forums</a>, and a list of Game Club threads is kept on the <a href = 'http://www.doublefine.com/dfa'>Double Fine Adventure Backer index</a> page.</p>
			<br class = 'clearfix' />
		</article>
			
		<article>
			<h1>Where can I find information on old Game Club sessions?</h1>
			<p>The Double Fine Game Club started out as an officially run community event for backers of the Double Fine Kickstarter project. Greg Rice of Double Fine, who passed the torch onto enthusiastic community members when he became less available. As a result, some of the earlier Game Club forum threads are only accessible to backers (if you missed out, you can still attain backer status from <a href = 'http://doublefine.com/dfa'>here</a>).</p>
			<p>We're still getting things sorted, so please be patient ^_^</p>
			<p>In the meantime, here are some helpful links:</p>
			<ul>
				<li><a href = 'http://www.doublefine.com/forums/viewthread/7229/'>Current Game Club planning thread</a></li>
				<li><a href = 'http://www.doublefine.com/dfa'>Double Fine Adventure Backer index</a> (contains Game Club threads)</li>
				<li><a href = 'http://www.ustream.tv/channel/double-fine-game-club'>Greg's ustream streams</a></li>
				<li><a href = 'http://twitch.tv/twolofbees/videos'>Cheese's Gemini Rue and Machinarium streams</a></li>
				<li><a href = 'http://twitch.tv/sydeon/videos'>Syd's The Secret of Monkey Island streams</a></li>
			</ul>
			<br class = 'clearfix' />
		</article>
		<footer id = 'pageFooter'>
			<!-- for anybody who cares, this page was by Cheeseness (http://jbushproductions.com) to be HTML5 and CSS3 compliant, with additional Javascript by leitu. Inspired by http://ogweekly.com (when it was running weekly) -->
		</footer>
		<script type="text/javascript">
		(function(){
			// Initialised with server time via PHP using microtime(true)
			var serverTime = <?php echo microtime(true); ?>; 
		
			// Event configuration
			var eventDOW = 6; // Day of week .. 0-6, where 0 = Sun, 6 = Sat (Saturday)
			var eventTime = 19 * 60 * 60 * 1000; // How many msec from midnight in UTC is the event (19:00)
			var eventLength = 1.5 * 60 * 60 * 1000; // Approximate event length in msec (1.5hrs)
			
			// URL to the mibbit chat
			var chatUrl = 'http://widget.mibbit.com/?server=irc.foonetic.net&amp;channel=%23DFAdventure&amp;nick=GameClubFan_??????&amp;noServerMotd=true&amp;settings=e45b6397f1cdd3f1e3db04091b842551';
					
			// Get the chat IFRAME
			var chatVisible = false;
			var getChat = (function() {
			
				// Internal cache
				var chat = null;
				
				// Function to actually return/create it
				return function(create) {
					// If no chat element yet, and we're allowed to create it
					if (chat === null && create) {
					
						// Create an IFRAME, set it's source to the chat URL
						chat = document.createElement('iframe');
						chat.src = chatUrl;
					}
	
					// Return the element
					return chat;
				}
			})();
			
			// Hide the chat element
			var hideChat = function() {
				// Get the chat, if it exists
				var chat = getChat(false);
				// If it did
				if (chatVisible) {
					// Remove it from it's parent node
					chat.parentNode.removeChild(chat);
					chatVisible = false;
				}
	
			};
			
			// Show the chat element
			var showChat = function() {
				// If the chat is not visible
				if (!chatVisible) {
				
					// Get/create the element
					var chat = getChat(true);
	
					// Insert the element to DOM
					document.getElementById('main').insertBefore(
						chat, 
						document.getElementById('live_embed_player_flash').nextSibling
					);
					
					chatVisible = true;
				}
				
			};
	
			// "Open chat in a separate window" -link
			document.getElementById('openChat').onclick = function(event) {
				// Make sure the chat is hidden in this window
				hideChat();
				// Allow the normal click to work
			};
	
			// "Hide the chat pane" -link
			document.getElementById('hideChat').onclick = function(event) {
				hideChat();
	
				// Stop the default click action from happening
				event.preventDefault();
				return false;
			};
	
			// "Restore it" -link
			document.getElementById('showChat').onclick = function(event) {
				// Just show the chat
				showChat();
				
				// Stop the default click action from happening
				event.preventDefault();
				return false;
			};
			
			// Timer update logic
			var updateTimer = (function() {
			
				// If we have server time, calculate the difference to it
				var serverTimeDiff = (serverTime ? (new Date().getTime()) - Math.floor(serverTime * 1000) : 0);
			
				// Cache the countdown element
				var countdownElement = document.getElementById('countdownText');
		
				// Make current time accesible for all the functions in this scope
				var currentTime = null;
	
				// Get the time of the next event
				var getNextEventTime = function() {
				
					// Get a new date for the current time
					var date = new Date();
					
					// Calculate difference in weekdays
					var dowDiff = date.getUTCDay() - eventDOW;
					
					// If not on the event DOW, update day
					if (dowDiff !== 0) {
					
						// Update the day of week				
						date = new Date(date.getTime() + ((0-dowDiff) * 24 * 60 * 60 * 1000))
						
					}
					
					// Reset to midnight
					date.setUTCHours(0);
					date.setUTCMinutes(0);
					date.setUTCSeconds(0);
					date.setUTCMilliseconds(0);
					
					// And fix the date to the time of the event
					date = new Date(date.getTime() + eventTime);
					
					// But if we've passed the event, add a week
					if (currentTime > date.getTime() + eventLength) {
						date = new Date(date.getTime() + (7 * 24 * 60 * 60 * 1000))
					}
					
					// console.log('Next event  : ' + date);
									
					return date.getTime();
				};
				
				// Function to format milliseconds to [D days, ]HH:MM:SS text
				var formatMsec = (function() {
				
					// Function to zero-pad a number
					var zeroPad = function(number) {
						return (number>=10 ? number : '0'+number);
					};
					
					// Function with the core format logic
					return function(msec) {
					
						// Units we want to calculate
						var unitList = {
							days: 24 * 60 * 60 * 1000,
							hours: 60 * 60 * 1000,
							minutes: 60 * 1000,
							seconds: 1000
						};
						
						// Where to store the result
						var result = {};
						
						// Loop through the units
						for (var unit in unitList) {
							// Get the value off the list
							var value = unitList[unit];
	
							// By default, it doesn't fit
							var count = 0;
							
							// If it does however fit
							if (msec > value) {
							
								// Update how many of these units is in it
								count = Math.floor(msec / value);
								
								// And take off from the remainder
								msec -= count * value;
							}
							
							// Save result for this unit
							result[unit] = count;
						}
						
						
						// If there are days remaining, start with the number of days
						var text = (result.days > 0 ? result.days + ' days, ' : '');
						
						// Append the HH:MM:SS
						text += zeroPad(result.hours) + ':' + zeroPad(result.minutes) + ':' + zeroPad(result.seconds);
						
						// Give back the formatted text
						return text;
					};
				})();
			
				// What to do on each tick of the clock
				var tick = function() {
				
					// Get the current time (unix timestamp in msec)
					currentTime = new Date().getTime() - serverTimeDiff;
					// console.log('Current time: ' + new Date(currentTime));
				
					// Get the time of the next event
					var nextEventTime = getNextEventTime();
					
					// Get time difference
					var timeRemaining = nextEventTime - currentTime;
	
					// Say "Right now!" if it's going on right now, otherwise format the time remaining
					var text = (timeRemaining <= 0 ? 'Right now!' : formatMsec(timeRemaining));
					
					// Update countdown element
					countdownElement.innerHTML = text;
				};
				
				// Return the tick function as our "external interface"
				return tick;
			})();
			
			// Set the timer
			setInterval(updateTimer, 1000);		
			
			// And show the chat
			showChat();
		})();
		</script>
	</body>
</html>


