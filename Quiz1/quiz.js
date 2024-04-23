function toggleShape(shape) {
  var balokCheckbox = document.getElementById("balokCheckbox");
  var kubusCheckbox = document.getElementById("kubusCheckbox");
  var balokInputs = document.getElementById("balokInputs");
  var kubusInputs = document.getElementById("kubusInputs");
  var tabungCheckbox = document.getElementById("tabungCheckbox");
  var tabungInputs = document.getElementById("tabungInputs");

  if (shape === 'balok') {
    if (balokCheckbox.checked) {
      balokInputs.style.display = "block";
      kubusInputs.style.display = "none";
      tabungInputs.style.display = "none";
      tabungCheckbox.checked = false;
      kubusCheckbox.checked = false;
    } else {
      balokInputs.style.display = "none";
    }
  } else if (shape === 'kubus') {
    if (kubusCheckbox.checked) {
      kubusInputs.style.display = "block";
      balokInputs.style.display = "none";
      tabungInputs.style.display = "none";
      tabungCheckbox.checked = false;
      balokCheckbox.checked = false;
    } else {
      kubusInputs.style.display = "none";
    }
  } else if (shape === 'tabung') {
    if (tabungCheckbox.checked) {
      tabungInputs.style.display = "block";
      kubusInputs.style.display = "none";
      balokInputs.style.display = "none";
      kubusCheckbox.checked = false;
      balokCheckbox.checked = false;
    } else {
      tabungInputs.style.display = "none";
    }
  }
}

function hitungVolume() {
  var balokCheckbox = document.getElementById("balokCheckbox");
  var kubusCheckbox = document.getElementById("kubusCheckbox");
  var tabungCheckbox = document.getElementById("tabungCheckbox");
  var resultDiv = document.getElementById("result");
  var volume;

  if (balokCheckbox.checked) {
    var length = parseFloat(document.getElementById("length").value);
    var width = parseFloat(document.getElementById("width").value);
    var height = parseFloat(document.getElementById("height").value);
    volume = length * width * height;
  } else if (kubusCheckbox.checked) {
    var side = parseFloat(document.getElementById("side").value);
    volume = Math.pow(side, 3);
  } else if (tabungCheckbox.checked) {
    var rata = parseFloat(document.getElementById("rata").value);
    var height = parseFloat(document.getElementById("height").value);
    volume = Math.PI * (rata * rata) * height;
  } else {
    resultDiv.innerHTML = "Pilih salah satu bentuk untuk menghitung.";
    return;
  }

  resultDiv.innerHTML = "Volume: " + volume.toFixed(2);
}

function hitungLuas() {
  var balokCheckbox = document.getElementById("balokCheckbox");
  var kubusCheckbox = document.getElementById("kubusCheckbox");
  var tabungCheckbox = document.getElementById("tabungCheckbox");
  var resultDiv = document.getElementById("result");
  var luas;

  if (balokCheckbox.checked) {
    var length = parseFloat(document.getElementById("length").value);
    var width = parseFloat(document.getElementById("width").value);
    var height = parseFloat(document.getElementById("height").value);
    luas = 2 * ((length * width) + (length * height) + (width * height));
  } else if (kubusCheckbox.checked) {
    var side = parseFloat(document.getElementById("side").value);
    luas = 6 * (side * side);
  } else if (tabungCheckbox.checked) {
    var rata = parseFloat(document.getElementById("rata").value);
    var height = parseFloat(document.getElementById("height").value);
    luas = (2 * Math.PI * rata * (rata + height));
  } else {
    resultDiv.innerHTML = "Pilih salah satu bentuk untuk menghitung.";
    return;
  }

  resultDiv.innerHTML = "Luas: " + luas.toFixed(2);
}