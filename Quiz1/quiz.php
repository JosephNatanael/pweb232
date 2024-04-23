<!DOCTYPE html>
<html lang="en">
<head>
<title>Hitung Volume dan Luas</title>
</head>
<body>

<h2>Hitung Volume dan Luas Balok, Kubus, Tabung</h2>

<div>
  <input type="checkbox" id="balokCheckbox" onchange="toggleShape('balok')">
  <label for="balokCheckbox">Balok</label>
  <input type="checkbox" id="kubusCheckbox" onchange="toggleShape('kubus')">
  <label for="kubusCheckbox">Kubus</label><br>
  <input type="checkbox" id="tabungCheckbox" onchange="toggleShape('tabung')">
  <label for="tabungCheckbox">Tabung</label><br>
</div>

<form id="inputform">
<div id="inputFields">
  <div id="balokInputs" style="display: none;">
    <form>
    <label for="length">Panjang:</label>
    <input type="number" id="length"><br>
    <label for="width">Lebar:</label>
    <input type="number" id="width"><br>
    <label for="height">Tinggi:</label>
    <input type="number" id="height"><br>
    </form>
  </div>
  <div id="kubusInputs" style="display: none;">
    <form >
    <label for="side">Sisi:</label>
    <input type="number" id="side"><br>
    </form>
  </div>
  <div id="tabungInputs" style="display: none;">
    <form>
    <label for="rata">Jari-jari:</label>
    <input type="number" id="rata"><br>
    <label for="height">Tinggi:</label>
    <input type="number" id="height"><br>
    </form>
  </div>
</div>
</form>

<button onclick="hitungVolume()">Hitung Volume</button>
<button onclick="hitungLuas()">Hitung Luas</button>

<div id="result"></div>

<script src="http://localhost/pweb232/Quiz1/quiz.js"></script>

</body>
</html>
