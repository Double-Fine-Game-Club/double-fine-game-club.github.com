/**
 * Event timer (and assorted little things) for Double Fine Game Club
 * Copyright © Janne Enberg 2012
 * Distributed with the new BSD license and MIT licenses below, which basically means:
 * "By all means, take it, but don't blame me if it breaks."
 *
 * The "New" BSD License:
 * ----------------------
 * 
 * Copyright (c) 2012, Janne Enberg
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 * 
 *   * Redistributions of source code must retain the above copyright notice, this
 *     list of conditions and the following disclaimer.
 *   * Redistributions in binary form must reproduce the above copyright notice,
 *     this list of conditions and the following disclaimer in the documentation
 *     and/or other materials provided with the distribution.
 *   * Neither the name of Janne Enberg nor the names of its contributors
 *     may be used to endorse or promote products derived from this software
 *     without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 * ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED.  IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE
 * FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL
 * DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
 * SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY,
 * OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 * MIT License
 * -----------
 *
 * Copyright (c) 2012, Janne Enberg
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE. 
 */
(function(){		
// Event configuration
var eventDOW = 6; // Day of week .. 0-6, where 0 = Sun, 6 = Sat (Saturday)
var eventTime = 19 * 60 * 60 * 1000; // How many msec from midnight in UTC is the event (19:00)
var eventLength = 1.5 * 60 * 60 * 1000; // Approximate event length in msec (1.5hrs)

var log = function() {
	if (console && console.log && console.log.apply) {
		if (arguments.length === 1) {
			console.log(arguments[0]);
		} else {
			console.log(Array.prototype.slice.call(arguments));
		}
	}
}

// Initialize the chat functionality
var initChat = function() {

	// List of elements we need to exist before we can init chat
	var requiredElements = [
		'main',
		'openChat',
		'hideChat',
		'showChat',
		'live_embed_player_flash'
	];
		
	// Check that all required elements exist, abort if not
	for (var i=0, count = requiredElements.length; i<count; ++i) {
		if (!document.getElementById(requiredElements[i])) {
			return false;
		}
	}

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
	
	// Show the chat
	showChat();
	
	return true;
};

var initTimer = function() {
	// Timer update logic
	var updateTimer = (function() {

		// By default we don't know the server time diff
		var serverTimeDiff = 0;
				
		// Cache the countdown element
		var countdownElement = document.getElementById('countdownText');
		
		// Check that it actually exists, abort if not
		if (!countdownElement) {
			return false;
		}

		// Make current time accesible for all the functions in this scope
		var currentTime = null;
		
		var checkServerTime = function() {
			// If we have server time, calculate the difference to it
			if (serverTimeDiff === 0 && typeof serverTime !== 'undefined') {
				serverTimeDiff = (typeof serverTime !== "undefined"? (new Date().getTime()) - Math.floor(serverTime * 1000) : 0);
				log('Found server time, diff now: ' + serverTimeDiff + ' msec');
			}
		};

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
			
			log('Next event  : ' + date);
							
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
		
			// Check if we have server time and calculate diff if we do
			checkServerTime();
		
			// Get the current time (unix timestamp in msec)
			currentTime = new Date().getTime() - serverTimeDiff;
			log('Current time: ' + new Date(currentTime));
		
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
	
	return true;
};



// Try initializing the chat and timer code until it works
var initInterval = null;
var initCount = 0;
initInterval = setInterval((function() {
	var chatOk = false;
	var timerOk = false;

	return function() {
		try {
			initCount++;
		
			// Try to initialize chat until it's ok
			if (!chatOk) {
				if (initChat()) {
					chatOk = true;
					log('Chat initialized');
				} else {
					log('Chat failed to initialize');
				}
			}
			
			// Try to initialize timer until it's ok
			if (!timerOk) {
				if (initTimer()) {
					timerOk = true;
					log('Timer initialized');
				} else {
					log('Timer failed to initialize');
				}
			}
			
			// Stop retrying after both are ok
			if (chatOk && timerOk) {
				clearInterval(initInterval);
				console.log('Everything initialized fine after ' + initCount + ' tries, stopping retries.');
			}
			
		} catch (e) {
			; // Discard errors
		}
	};
})(), 100);


<<<<<<< HEAD
// And show the chat
showChat();
})();
=======
})();
>>>>>>> c3cd04aa8f0863e6b006898ff5d445359d52a876
