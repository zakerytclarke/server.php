<?php
if($_POST['password']=="password1234"){
  $file=$_POST['file'];
if($_POST['state']=="load"){
  $file=str_replace("/","%2F",$file);
  $out="Location: index.php?file=";
  $out.=$file;
header($out);
die();
}else{
if($_POST['state']=="mkdir"){
mkdir($file);
echo "DIR CREATED";
} else{
$ip=$_SERVER['REMOTE_ADDR'];
$code=$_POST['code'];
$ftw=fopen("changelog.txt", 'a') or die("Unable to open file.");
$txt="TIMESTAMP:";
$txt.=time();
$txt.="\n";
$txt.="FILE:";
$txt.=$file;
$txt.="\n";
$txt.="IP:";
$txt.=$ip;
$txt.="\n";
$txt.="-------------------------------------------\n";
fwrite($ftw,$txt);
fclose($ftw);
$ftw = fopen($file,"w") or die("Unable to open file.");
$txt=$code;
fwrite($ftw,$txt);
fclose($ftw);
$file=str_replace("/","%2F",$file);
$out="Location: index.php?file=";
$out.=$file;
header($out);
}
}
}else{
  echo "INCORRECT PASSWORD";
}

?>
