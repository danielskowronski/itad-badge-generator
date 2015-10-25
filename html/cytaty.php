<?php
// CONFIG START
$cytat = "Microsoft jest fajny :-)";//feel free to use nonbreakable space (&nbsp;) or any html tag
// CONFIG END

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ITAD Badge Generator - cytaty</title>
<style>
html,body{
    height:297mm;
    width:210mm;
}
.czlowiek{
	position: relative;
	border: 1px dashed black;
	display: inline-block;
	width: 	49%;	/* o tu jest definiowane ile wejdzie na a4 */
	height: 49%;	/* o tu jest definiowane ile wejdzie na a4 */
}
.czlowiek:nth-of-type(2n){
	border-left: none;
}
.czlowiek:nth-of-type(4n+3),.czlowiek:nth-of-type(4n+4){
	border-top: none;
}
.napis{
	padding: 20px;	
	font-size: 42px;
	color: navy;
	text-align: center;
	font-style: italic;
}
.napis, .napis table, .napis td{
	height: 100%;
}
<?php  foreach($funkcje as $k=>$v){ echo ".tlo.$k{background-color: $v;}"; } ?>
</style>
</head>
<body>
<?php
for ($i=0; $i<4; $i++){
	echo "<div class='czlowiek'>";
		echo "<div class='napis'><table><tr><td>$cytat</td></tr></table></div>";
	echo "</div>";
}