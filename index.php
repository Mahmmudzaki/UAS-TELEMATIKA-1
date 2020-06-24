<?php
$nil = null;
if(isset($_POST['submit'])) {
    $teks = $_POST['teks'];
    for($i=0; $i<strlen($teks); $i++) {
        $nil .= str_pad(decbin(ord($teks[$i])), 8, "0", STR_PAD_LEFT)."";
    }
?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">  
    <table>
        <tr>
            <td>Masukkan teks :</td>
            <td><input type="text" name="teks" value="<?php echo $teks; ?>"></td>
            <td><input name="submit" type="submit" value="encode"></td>
            <td><textarea rows="5" cols="59" name="hasil"><?php echo $nil; ?></textarea></td>
        </tr>
    </table>
</form>

<?php
}else{
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <table>
        <tr>
            <td>Masukkan teks :</td>
            <td><input type="text" name="teks"></td>
            <td><input name="submit" type="submit" value="encode"></td>
            <td><textarea rows="5" cols="59" name="hasil"></textarea></td>
        </tr>
    </table>
</form>
<?php
}
?>