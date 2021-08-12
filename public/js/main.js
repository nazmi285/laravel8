
window.onload = () => {
  	'use strict';
  
  	const notificationButton = document.getElementById("enableNotifications");

	if ('serviceWorker' in navigator) {
		// navigator.serviceWorker.register('/sw.js'); // basic punya la
		//Register the service worker
		navigator.serviceWorker
		.register('/sw.js')
		.then(swReg => {
			// console.log('Service Worker is registered', swReg);
			// displayNotification();
			initializeUi();

			reg.pushManager.getSubscription().then(function(sub) {
				if (sub === null) {
					// Update UI to ask user to register for Push
					console.log('Not subscribed to push service!');
				} else {
					// We have a subscription, update the database
					console.log('Subscription object: ', sub);
				}
			});
		})
		.catch(error => {
			console.error('Service Worker Error', error);
		})
	}

	// TODO 2.1
	if (!('Notification' in window)) {
		console.log('This browser does not support notifications!');
		return;
	}

	// TODO 2.2 - Direct asking permission grant
	Notification.requestPermission(status => {
		// console.log('Notification permission status:', status);
	});
	
	function initializeUi() {
		notificationButton.addEventListener("click", () => {
			displayNotification();
		});
	}

	function displayNotification() {
		// TODO 2.3
		if (Notification.permission == 'granted') {
		  navigator.serviceWorker.getRegistration().then(reg => {

		    // TODO 2.4 - Add 'options' object to configure the notification
		    const options = {
			    body: 'Testing Our Notification',
			    icon: './images/bell.png',
			    vibrate: [100, 50, 100],
			  	data: {
			  		dateOfArrival: Date.now(),
			  		primaryKey: 1
			  	},
			  	// TODO 2.5 - add actions to the notification
			  	actions: [{
			  		action: 'explore', title: 'Go to the site',
			  		icon: 'images/checkmark.png'
			  	},{
			  		action: 'close', title: 'Close the notification',
			  		icon: 'images/xmark.png'
			  	}]
			  };

		    reg.showNotification('Hello world!',options);
		  });
		}else{
			Notification.requestPermission();
		}
	}

	function subscribeUser() {
		if ('serviceWorker' in navigator) {
			navigator.serviceWorker.ready.then(function(reg) {

				reg.pushManager.subscribe({
					userVisibleOnly: true
				}).then(function(sub) {
					console.log('Endpoint URL: ', sub.endpoint);
				}).catch(function(e) {
					if (Notification.permission === 'denied') {
						console.warn('Permission for notifications was denied');
					} else {
						console.error('Unable to subscribe to push', e);
					}
				});
			})
		}
	}


}