#include <WiFi.h>
#include <NTPClient.h>
#include <WiFiUdp.h>
#include <Firebase_ESP_Client.h>
#include "addons/TokenHelper.h"
#include "addons/RTDBHelper.h"

// Konfigurasi WiFi
const char* ssid     = "IA";
const char* password = "03030303";

// const char* ssid     = "Al-Barkah";
// const char* password = "albarkah07";

// Konfigurasi Firebase
#define API_KEY "AIzaSyA83h2fWOngTWTGYEDdNZumWqWnaQn9uKI"
#define DATABASE_URL "https://deteksi-air-default-rtdb.firebaseio.com/"

// Inisialisasi objek WiFiUDP dan NTPClient
WiFiUDP ntpUDP;
NTPClient timeClient(ntpUDP, "pool.ntp.org", 25200, 60000); // 25200 adalah offset waktu dalam detik (7 jam untuk WIB)

// Inisialisasi Firebase
FirebaseData fbdo;
FirebaseAuth auth;
FirebaseConfig config;

unsigned long sendDataPrevMillis = 0;
bool signupOK = false;
// Definisikan pin untuk sensor air
const int waterSensorPin = A0;
int tipe = 1;

void setup() {
  // Memulai komunikasi serial
  Serial.begin(115200);

  // Menghubungkan ke WiFi
  Serial.print("Connecting to ");
  Serial.println(ssid);
  WiFi.begin(ssid, password);
  
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  Serial.println("");
  Serial.println("WiFi connected.");
  
  // Memulai NTPClient
  timeClient.begin();

  config.api_key = API_KEY;
  config.database_url = DATABASE_URL;
  if(Firebase.signUp(&config, &auth, "", "")){
    Serial.println("signUp OK");
    signupOK = true;
  }else {
    Serial.printf("%s\n", config.signer.signupError.message.c_str());
  }

  config.token_status_callback = tokenStatusCallback;
  Firebase.begin(&config, &auth);
  Firebase.reconnectWiFi(true);
}

void loop() {
  // Mengupdate waktu dari NTP server
  timeClient.update();

   // Baca nilai dari sensor air
  int sensorValue = analogRead(waterSensorPin);

  // Tampilkan nilai yang dibaca ke Serial Monitor
  

  // Mendapatkan waktu saat ini
  String formattedTime = timeClient.getFormattedTime();
  unsigned long epochTime = timeClient.getEpochTime();

  struct tm *ptm = gmtime((time_t *)&epochTime);
  int monthDay = ptm->tm_mday;
  int currentMonth = ptm->tm_mon + 1;
  int currentYear = ptm->tm_year + 1900;
  int currentHour = ptm->tm_hour;
  int currentMinute = ptm->tm_min;
  int currentSecond = ptm->tm_sec;

  // Membuat objek JSON untuk menyimpan waktu dan tanggal
  FirebaseJson json;
  json.set("lokasi", tipe );
  json.set("polusi", sensorValue);
  json.set("time", formattedTime);
  json.set("year", currentYear);
  json.set("month", currentMonth);
  json.set("day", monthDay);
  json.set("hour", currentHour);
  json.set("minute", currentMinute);
  json.set("second", currentSecond);

  // Mengirim data ke Firebase menggunakan push (menambah data baru)
  if (Firebase.RTDB.pushJSON(&fbdo, "/Polusi/Sensor", &json)) {
    Serial.println("Data berhasil ditambahkan ke Firebase");
  } else {
    Serial.print("Gagal menambahkan data: ");
    Serial.println(fbdo.errorReason());
  }

  // Menampilkan waktu di Serial Monitor
  Serial.print("Nilai Sensor Air: ");
  Serial.println(sensorValue);
  Serial.print("Formatted Time: ");
  Serial.println(formattedTime);
  Serial.print("Date: ");
  Serial.print(currentYear);
  Serial.print("-");
  Serial.print(currentMonth);
  Serial.print("-");
  Serial.println(monthDay);
  Serial.print("Time: ");
  Serial.print(currentHour);
  Serial.print(":");
  Serial.print(currentMinute);
  Serial.print(":");
  Serial.println(currentSecond);

  delay(60000); // Delay 1 menit
}
