-Fetch Code 
```
var myHeaders = new Headers();
myHeaders.append("Content-Type", "application/json");
myHeaders.append("Authorization", "Bearer 10|740l7tNZv056dPzqiQtYPf4SoM2DQeDUhuNu0t1r ");

var raw = JSON.stringify({
  "device_id": 1,
  "time": "2024-02-16 00:00:00",
  "data": "sdknaskjdfhsjd fjsh dfjh sdkjfhlsdjfh lsjkdfh sdhf jklsdf",
  "event_id": 1,
  "W_Temp1": 554,
  "W_Temp2": 84,
  "W_Temp3": 55.5,
  "W_Temp4": 11.0005,
  "W_Temp5": 85,
  "W_Temp6": 55,
  "B_Temp1": 8.4,
  "B_Temp2": 4.6,
  "Vib1": 5.5,
  "Vib2": 2.4
});

var requestOptions = {
  method: 'POST',
  headers: myHeaders,
  body: raw,
  redirect: 'follow'
};

fetch("http://localhost:8000/api/create-data", requestOptions)
  .then(response => response.text())
  .then(result => console.log(result))
  .catch(error => console.log('error', error));
```
