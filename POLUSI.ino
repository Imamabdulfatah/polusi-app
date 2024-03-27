#include "MQ135.h" 
#include "WiFi.h"
#include "HTTPClient.h"

const int MQ_PIN = A0;

const char* ssid = "IA";
const char* pass = "03030303";
const char* host = "192.168.3.200";

void setup() {
  Serial.begin(9600);

  WiFi.begin(ssid, pass);
  Serial.println("Connecting...");
  while(WiFi.status() != WL_CONNECTED) {
    Serial.print(".");
    delay(500);
  }

  Serial.println("connected");
}

void loop() {

  int ppm = analogRead(MQ_PIN);
  Serial.println("PPM: " + String(ppm));

  int tempat = 1; 
  Serial.println(tempat);
 
  WiFiClient client;
  const int httpPort = 80;

  if (!client.connect(host, httpPort)) {
    Serial.println("Connection Failed");
    return;
  }

  HTTPClient http;
  String Link = "http://" + String(host) + "/polusi-app/kirimdata.php?polusi=" + String(ppm) + "&tempat=" + String(tempat);

  http.begin(Link);
  int httpCode = http.GET();

  if (httpCode > 0) {
    String respon = http.getString();
    Serial.println(respon);
  } else {
    Serial.println("Error on HTTP request");
  }
   Serial.println("======================================");
  
  http.end();
  
  delay(7000);
}
