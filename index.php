<?php
// khai b�o c�c bi?n to�n c?u
$heso_a = "";
$heso_b = "";
$heso_c = "";
// d?c c�c h? s? t? FORM
if (isset ( $_POST ['heso_a'] )) {
    $heso_a = $_POST ['heso_a'];
}
if (isset ( $_POST ['heso_b'] )) {
    $heso_b = $_POST ['heso_b'];
}
if (isset ( $_POST ['heso_c'] )) {
    $heso_c = $_POST ['heso_c'];
}
/**
 * gi?i phuong tr�nh b?c 2 trong PHP
 *
 * @author: viettuts.vn
 * @param
 *            he so bac 2 $a
 * @param
 *            he so bac 1 $b
 * @param
 *            he so tu do $c
 */
function giaiPTB2($a, $b, $c) {
    // ki?m tra bi?n d?u v�o
    if ($a == "")
        $a = 0;
    if ($b == "")
        $b = 0;
    if ($c == "")
        $c = 0;
    // in phuong tr�nh ra m�n h�nh
    //echo "Phuong tr�nh: " . $a . "x2 + " . $b . "x + " . $c . " = 0";
    echo "<br>";
    // ki?m tra c�c h? s?
    if ($a == $b && $b == $c) {
        echo ("Tam giac deu");
	}
	else if ($a == $b || $a == $c || $c == $b){
		echo ("Tam giac can deu");
	}
	else if ($a2==$b2+$c2 || $b2==$a2+$c2 || $c2==$a2+$b2) {
		echo ("Tam giac vuong can");
	}
	else if ($a2==$b2+$c2 || $b2==$a2+$c2 || $c2==$a2+$b2) {
		echo ("Tam giac vuong");
	}
	else {
		echo ("Tam giac thuong");
		}
        return;
    
}
?>
<form action="#" method="post">
 <table>
  <tr>
   <td>H? s? b?c 2, a</td>
   <td><input type="text" name="heso_a" value="<?=$heso_a?>" /></td>
  </tr>
  <tr>
   <td>H? s? b?c 1, b</td>
   <td><input type="text" name="heso_b" value="<?=$heso_b?>" /></td>
  </tr>
  <tr>
   <td>H? s? t? do, c</td>
   <td><input type="text" name="heso_c" value="<?=$heso_c?>" /></td>
  </tr>
  <tr>
   <td></td>
   <td><input type="submit" value="K?t qu?"></td>
  </tr>
 </table>
</form>
<br>
<?php
// g?i h�m gi?i phuong tr�nh b?c 2
// S? d?ng t? kh�o $GLOBALS d? d?c c�c bi?n to�n c?u v� truy?n v�o h�m
if (is_numeric ( $GLOBALS ['heso_a'] ) && is_numeric ( $GLOBALS ['heso_b'] ) 
        && is_numeric ( $GLOBALS ['heso_c'] )) {
    giaiPTB2 ( $GLOBALS ['heso_a'], $GLOBALS ['heso_b'], $GLOBALS ['heso_c'] );
} else {
    echo ("Gi� tr? input kh�ng h?p l?!");
}
?>