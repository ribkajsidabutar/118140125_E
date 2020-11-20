<!DOCTYPE html>
<html>
<head>
    <title>Harga Bet </title>
</head>
<body>
    <form method="GET" action="">
        <label for="nama">Nama</label>
        <input type="text" name="nama"><br>
        <label for="Color">Warna</label>

        <select name="Color">
        <option value="Red"></option>
        <option value="Red">Red</option>
        <option value="Blue">Biru</option>
        <option value="Black">Hitam</option>
        <option value="Green">Green<option>
        
        </select>
        
        <br>
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
        if (isset($_GET['submit']))
        {
            
        $a=$_GET['nama'];
        $panjang=strlen($a);
        $b=$_GET['Color'];
        
        function betting ($panjang){
            if($panjang>20){
                return ($panjang*700);
            }elseif($panjang>=11){
                return ($panjang*500);
            }else{
                return ($panjang*300);
            }
        }

            echo "Nama :"
            echo "<font color='$b'> $a <br>";
            echo "<font color='$b'>Harga bet untuk nama $a adalah = ".betting($panjang);
        
        }
    ?>

</body>
</html>