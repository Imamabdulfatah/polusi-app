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

const user_ref = ref(db, "Polusi/Sensor");

get(user_ref).then((snapshot) => {
  const data = snapshot.val();
  console.log(data);

  const lokasi1Data = [];

  for (const key in data) {
    const { lokasi, polusi, time, day } = data[key];

    if (lokasi === 1) {
      lokasi1Data.push({ lokasi, polusi, time, day });
    }
  }

  if (lokasi1Data.length < 2) {
    console.log("Tidak ada cukup data untuk lokasi 1");
    return;
  }

  lokasi1Data.sort((a, b) => new Date(b.time) - new Date(a.time));

  const dataSatu = lokasi1Data[0];
  const dataKedua = lokasi1Data[1];
  const dataKetiga = lokasi1Data[2];

  let satu = dataSatu.polusi;
  let kedua = dataKedua.polusi;
  let ketiga = dataKetiga.polusi;
  console.log(satu);
  console.log(kedua);

  // let latestData = null;

  // for (const key in data) {
  //   const { lokasi, polusi, time, day } = data[key];

  //   if (lokasi === 1) {
  //     if (!latestData || new Date(time) > new Date(latestData.time)) {
  //       latestData = { lokasi, polusi, time, day };
  //     }
  //   }
  // }

  // if (latestData) {
  //   console.log(
  //     `Lokasi: ${latestData.lokasi}, Polusi: ${latestData.polusi}, Time: ${latestData.time}, Day: ${latestData.day}`
  //   );
  //   polusi = latestData.polusi;
  // } else {
  //   console.log("Tidak ada data untuk lokasi 1");
  // }

  let ctx2 = document.getElementById("chart-line").getContext("2d");

  let gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

  gradientStroke1.addColorStop(1, "rgba(203,12,159,0.2)");
  gradientStroke1.addColorStop(0.2, "rgba(72,72,176,0.0)");
  gradientStroke1.addColorStop(0, "rgba(203,12,159,0)"); //purple colors

  let gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

  gradientStroke2.addColorStop(1, "rgba(20,23,39,0.2)");
  gradientStroke2.addColorStop(0.2, "rgba(72,72,176,0.0)");
  gradientStroke2.addColorStop(0, "rgba(20,23,39,0)"); //purple colors

  let senin = 500;

  new Chart(ctx2, {
    type: "line",
    data: {
      labels: ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu"],
      datasets: [
        {
          label: "LokasiSatu",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#cb0c9f",
          borderWidth: 3,
          backgroundColor: gradientStroke1,
          fill: true,
          data: [satu, kedua, ketiga, 400, 500, 400, 1000],
          maxBarThickness: 6,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        },
      },
      interaction: {
        intersect: false,
        mode: "index",
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
          },
          ticks: {
            display: true,
            padding: 10,
            color: "#b2b9bf",
            font: {
              size: 11,
              family: "Open Sans",
              style: "normal",
              lineHeight: 2,
            },
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5],
          },
          ticks: {
            display: true,
            color: "#b2b9bf",
            padding: 20,
            font: {
              size: 11,
              family: "Open Sans",
              style: "normal",
              lineHeight: 2,
            },
          },
        },
      },
    },
  });
});
