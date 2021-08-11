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
			initializeUi();
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
	  //Ask user if we show notifications
	  if (window.Notification && Notification.permission === 'granted') {
	    //notification();
	    // We will crete this function in a further step.
	  }
	  // If the user hasn't told whether he wants to be notified or not
	  // Note: because of Chrome, we cannot be sure the permission property
	  // is set, therefore it's unsafe to check for the "default" value.
	  else if (window.Notification && Notification.permission !== 'denied') {
	    Notification.requestPermission(status => {
	      if (status === 'granted') {
	        notification();
	      } else {
	        alert('You denied or dismissed permissions to notifications.');
	      }
	    });
	  } else {
	    // If the user refuses to get notified
	    alert(
	      'You denied permissions to notifications. Please go to your browser or phone setting to allow notifications.'
	    );
	  }
	}

	function initializeUi() {
	  notificationButton.addEventListener('click', () => {
	    displayNotification();
	  });
	}
}
