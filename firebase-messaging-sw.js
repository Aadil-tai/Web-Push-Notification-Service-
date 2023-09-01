import { initializeApp } from 'https://www.gstatic.com/firebasejs/10.3.0/firebase-app.js'

    // If you enabled Analytics in your project, add the Firebase SDK for Google Analytics
    import { getAnalytics } from 'https://www.gstatic.com/firebasejs/10.3.0/firebase-analytics.js'

    // Add Firebase products that you want to use
    import { getAuth } from 'https://www.gstatic.com/firebasejs/10.3.0/firebase-auth.js'
    import { getFirestore } from 'https://www.gstatic.com/firebasejs/10.3.0/firebase-firestore.js'
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyBFbwEDUz38JPI2fgObU6bEGBkzVYudk1I",
    authDomain: "testingpush-6c1cd.firebaseapp.com",
    projectId: "testingpush-6c1cd",
    storageBucket: "testingpush-6c1cd.appspot.com",
    messagingSenderId: "386129257656",
    appId: "1:386129257656:web:afa24f20e402094a97804d",
    measurementId: "G-MGBN9SLN7S"
  };
  firebase.initializeApp(config);
  
  // Retrieve Firebase Messaging object.
const messaging = firebase.messaging();


messaging.setBackgroundMessageHandler(function(payload) {
    
 var  title =payload.data.title;
  
 var options ={
        body: payload.data.body,
        icon: payload.data.icon,
        image: payload.data.image,
     data:{
            time: new Date(Date.now()).toString(),
            click_action: payload.data.click_action
        }
      
  };
 return self.registration.showNotification(title, options);

  
});


self.addEventListener('notificationclick', function(event) {

   var action_click=event.notification.data.click_action;
  event.notification.close();

  event.waitUntil(
    clients.openWindow(action_click)
  );
});
