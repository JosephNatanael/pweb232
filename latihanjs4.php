<!DOCTYPE html>
<html>
<body>

<h2>Tugas Melanjutkan Latihanjs4.php</h2>
<form>
    30% UTS :
    <input type="number" name="uts" id="uts">
    <br>
    30% UAS :
    <input type="number" name="uas" id="uas">
    <br>
    40% Tugas:
    <input type="number" name="tugas" id="tugas">
    <br>
    <button type="button" onclick = "myfungsi1()">Hitung</button>
    <br>
    <input type="number" name="hasil" id="hasil">
</form>
<p id="isi">Nilai IPK MK</p>

<script>
    function myfungsi1(){
        
    let uts1 = document.getElementById("uts").value;
    let uas1 = document.getElementById("uas").value;
    let tugas1 = document.getElementById("tugas").value;

    let nilai = 0.3*parseInt(uts1)+0.3*parseInt(uas1)+0.4*parseInt(tugas1);

    if (nilai >= 80){
        document.getElementById("isi").innerHTML = "A";
    } else if ( nilai >= 70){
        document.getElementById("isi").innerHTML = "B";
    } else{
        document.getElementById("isi").innerHTML = "C";
    }
}
</script>
    
</body>
</html>