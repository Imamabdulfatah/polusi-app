// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.0/firebase-app.js";
import {
  getAuth,
  signInWithEmailAndPassword,
  onAuthStateChanged,
  signOut,
} from "https://www.gstatic.com/firebasejs/10.12.0/firebase-auth.js";
import {
  getDatabase,
  set,
  ref,
  get,
  remove,
  update,
} from "https://www.gstatic.com/firebasejs/10.12.0/firebase-database.js";

const firebaseConfig = {
  apiKey: "AIzaSyA83h2fWOngTWTGYEDdNZumWqWnaQn9uKI",
  authDomain: "deteksi-air.firebaseapp.com",
  databaseURL: "https://deteksi-air-default-rtdb.firebaseio.com",
  projectId: "deteksi-air",
  storageBucket: "deteksi-air.appspot.com",
  messagingSenderId: "943746534963",
  appId: "1:943746534963:web:7aff4deab6f5efd9c1dd46",
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);

// Login
const auth = getAuth(app);
const db = getDatabase(app);

const detail_page = document.querySelector(".detail-page");
const login_page = document.querySelector(".login-page");

onAuthStateChanged(auth, (user) => {
  if (user) {
    detail_page.classList.remove("d-none");
    login_page.classList.add("d-none");
  } else {
    detail_page.classList.add("d-none");
    login_page.classList.remove("d-none");
  }
});

function SignInUser() {
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
  signInWithEmailAndPassword(auth, email, password)
    .then((userCredential) => {
      // Signed in
      console.log(userCredential.user.uid);
      const user = userCredential.user;
      alert("jj");
      window.location.href = "/index.html";
    })
    .catch((error) => {
      const errorCode = error.code;
      const errorMessage = error.message;
    });
}

const Sign_btn = document.querySelector("#log_in");
Sign_btn.addEventListener("click", SignInUser());

// // sign out
// const sign_out_btn = document.querySelector("#logout");
// sign_out_btn.addEventListener("click", () => {
//   signOut(auth)
//     .then(() => {})
//     .catch((error) => {
//       console.log("error" + error);
//     });
// });
