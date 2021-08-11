window.onload = () => {
  'use strict';
  const notificationButton = document.getElementById('enableNotifications');
  let swRegistration = null;

  if ('serviceWorker' in navigator) {
    // navigator.serviceWorker.register('/sw.js'); // basic punya la
    //Register the service worker
		navigator.serviceWorker
		.register('/sw.js')
		.then(swReg => {
			// console.log('Service Worker is registered', swReg);

			swRegistration = swReg;
		})
		.catch(error => {
			console.error('Service Worker Error', error);
		})
  }

  // TODO 2.1
  // if (!('Notification' in window)) {
  // 	console.log('This browser does not support notifications!');
  // 	return;
  // }

  // TODO 2.2 - Direct asking permission grant
  Notification.requestPermission(status => {
  	// console.log('Notification permission status:', status);
  });

	function notification() {
	  const options = {
	    body: 'Testing Our Notification',
	    icon: './images/bell.png',
	    vibrate: [100, 50, 100],
	  	data: {
	  		dateOfArrival: Date.now(),
	  		primaryKey: 1
	  	},
	  };

	  swRegistration.showNotification('PWA Notification!', options);
	}
	
	function displayNotification() {
		if (Notification.permission == 'granted') {
		  navigator.serviceWorker.getRegistration().then(reg => {

		    notification();

		    reg.showNotification('Hello world!');
		  });
		}
	}


	

	notificationButton.addEventListener('click', () => {
    displayNotification();
  });
}
