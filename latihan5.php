<!DOCTYPE html>
<html lang="en">

<body>
<h2>Form Menampilkan Bilangan dari 1 sampai End</h2>
<form id="bilanganForm">
    <label for="end">Masukkan Angka:</label>
    <input type="number" id="end" name="end">
    <button type="button" onclick="generateNumbers()">Mulai</button>
    <ul id="bilanganList"></ul>
</form>
    
    <script>
       function generateNumbers() {
        var end = parseInt(document.getElementById('end').value);
        var bilanganList = document.getElementById('bilanganList');
        bilanganList.innerHTML = '';

        for (var i = 1; i <= end; i++) {
            var listItem = document.createElement('li');
            listItem.textContent = i;
            bilanganList.appendChild(listItem);
        }
    }
    </script>
</body>
</html>