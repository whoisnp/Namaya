// Your web app's Firebase configuration
var firebaseConfig = {
  //firebase config stuff
  apiKey: "AIzaSyCmJCdJ5y8Px2gn7O6PTq_MxVx30Q4zZDM",
  authDomain: "projecttkr-4aa57.firebaseapp.com",
  projectId: "projecttkr-4aa57",
  storageBucket: "projecttkr-4aa57.appspot.com",
  messagingSenderId: "353303900963",
  appId: "1:353303900963:web:6ee6c1e0a0e774c2851296",
  measurementId: "G-12RFY7K0EN",
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);

const auth = firebase.auth();

function signUp() {
  var email = document.getElementById("email");
  var password = document.getElementById("password");

  const promise = auth.createUserWithEmailAndPassword(
    email.value,
    password.value
  );
  promise.catch((e) => alert(e.message));

  alert("Signed Up");
}

function signIn() {
  var email = document.getElementById("email");
  var password = document.getElementById("password");

  const promise = auth.signInWithEmailAndPassword(email.value, password.value);
  promise.catch((e) => alert(e.message));
}

function signOut() {
  auth.signOut();
  alert("Signed Out");
}

auth.onAuthStateChanged(function (user) {
  if (user) {
    var email = user.email;
    alert("Active User " + email);

    //Take user to a different or home page

    //is signed in
  } else {
    // alert("No Active User");
    //no user is signed in
  }
});

loginForm = document.querySelector("#login");
loginForm.addEventListener("submit", (e) => {
  e.preventDefault();
  signIn();
});
