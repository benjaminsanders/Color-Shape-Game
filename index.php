<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blocks</title>
<link href="blocks.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php
$val=23;
$sub=preg_replace("/[^0-9]/","",$_GET['sub']);
$round=preg_replace("/[^0-9]/","",$_GET['round']);
if($sub % $val == 0) {
  
  $tcolors=array("Blue","Green","Red","Black","Pink");
$tc=$tcolors[rand(0,4)];
$colors=array("Blue","Green","Pink","Red","Yellow","Black");
$numbers=array("01","07","09","11");

$cell=rand(1,9);
$c=array();
$s=array();
$cran=rand(0,5);
$gcolor=$colors[$cran];
$sran=rand(0,3);
$gshape=$numbers[$sran];
if($gshape=="01"){$gname="Square";}elseif($gshape=="07"){$gname="Triangle";}elseif($gshape=="09"){$gname="Star";}else{$gname="Circle";}
$i=0;
while($i<9){
	if(!isset($c[$i])){
	$c[$i]=rand(0,5);
	$s[$i]=rand(0,3);
	while($c[$i]==$cran && $s[$i]==$sran){
	$c[$i]=rand(0,5);
	$s[$i]=rand(0,2);
	}
	}
	$i++;
}

/*------------------------------------------------------*/



?>
<table width="600" align="center">
  <tr>
    <td width="200" align="center">Score: <?=$round*4;?></td>
    <td width="200" align="center">&nbsp;</td>
    <td width="200" align="center">Round: <?=$round*1;?></td>
  </tr>
  <tr>
    <td width="200" align="right"><h1 style="color:<?php echo $tcolors[rand(0,4)]; ?>">Click The</h1></td>
    <td colspan="2" align="left"><h1 style="color:<?php echo $tcolors[rand(0,4)]; ?>">&nbsp;<?php
    echo $gcolor." ".$gname;
	?>
	</h1></td>
  </tr>
  <tr>
    <td width="200" align="center" valign="middle"><?php
	$cn=1;
    if($cell==$cn){
	echo '<a href="index.php?sub='.$val*rand(1234,9876).'&round='.($round+1).'"><i class="blocks blocks-tile'.$gcolor.'_'.$gshape.'"></i></a>';	
	}else{
	echo '<a href="index.php?sub='.rand(30,90)*rand(1234,9876).'&round='.($round).'"><i class="blocks blocks-tile'.$colors[$c[$cn-1]].'_'.$numbers[$s[$cn-1]].'"></i></a>';	
	}
	?></td>
    <td width="200" align="center" valign="middle"><?php
	$cn=2;
    if($cell==$cn){
	echo '<a href="index.php?sub='.$val*rand(1234,9876).'&round='.($round+1).'"><i class="blocks blocks-tile'.$gcolor.'_'.$gshape.'"></i></a>';	
	}else{
	echo '<a href="index.php?sub='.rand(30,90)*rand(1234,9876).'&round='.($round).'"><i class="blocks blocks-tile'.$colors[$c[$cn-1]].'_'.$numbers[$s[$cn-1]].'"></i></a>';	
	}
	?></td>
    <td width="200" align="center" valign="middle"><?php
	$cn=3;
    if($cell==$cn){
	echo '<a href="index.php?sub='.$val*rand(1234,9876).'&round='.($round+1).'"><i class="blocks blocks-tile'.$gcolor.'_'.$gshape.'"></i></a>';	
	}else{
	echo '<a href="index.php?sub='.rand(30,90)*rand(1234,9876).'&round='.($round).'"><i class="blocks blocks-tile'.$colors[$c[$cn-1]].'_'.$numbers[$s[$cn-1]].'"></i></a>';	
	}
	?></td>
  </tr>
  <tr>
    <td width="200" align="center" valign="middle"><?php
	$cn=4;
    if($cell==$cn){
	echo '<a href="index.php?sub='.$val*rand(1234,9876).'&round='.($round+1).'"><i class="blocks blocks-tile'.$gcolor.'_'.$gshape.'"></i></a>';	
	}else{
	echo '<a href="index.php?sub='.rand(30,90)*rand(1234,9876).'&round='.($round).'"><i class="blocks blocks-tile'.$colors[$c[$cn-1]].'_'.$numbers[$s[$cn-1]].'"></i></a>';	
	}
	?></td>
    <td width="200" align="center" valign="middle"><?php
	$cn=5;
    if($cell==$cn){
	echo '<a href="index.php?sub='.$val*rand(1234,9876).'&round='.($round+1).'"><i class="blocks blocks-tile'.$gcolor.'_'.$gshape.'"></i></a>';	
	}else{
	echo '<a href="index.php?sub='.rand(30,90)*rand(1234,9876).'&round='.($round).'"><i class="blocks blocks-tile'.$colors[$c[$cn-1]].'_'.$numbers[$s[$cn-1]].'"></i></a>';	
	}
	?></td>
    <td width="200" align="center" valign="middle"><?php
	$cn=6;
    if($cell==$cn){
	echo '<a href="index.php?sub='.$val*rand(1234,9876).'&round='.($round+1).'"><i class="blocks blocks-tile'.$gcolor.'_'.$gshape.'"></i></a>';	
	}else{
	echo '<a href="index.php?sub='.rand(30,90)*rand(1234,9876).'&round='.($round).'"><i class="blocks blocks-tile'.$colors[$c[$cn-1]].'_'.$numbers[$s[$cn-1]].'"></i></a>';	
	}
	?></td>
  </tr>
  <tr>
    <td width="200" align="center" valign="middle"><?php
	$cn=7;
    if($cell==$cn){
	echo '<a href="index.php?sub='.$val*rand(1234,9876).'&round='.($round+1).'"><i class="blocks blocks-tile'.$gcolor.'_'.$gshape.'"></i></a>';	
	}else{
	echo '<a href="index.php?sub='.rand(30,90)*rand(1234,9876).'&round='.($round).'"><i class="blocks blocks-tile'.$colors[$c[$cn-1]].'_'.$numbers[$s[$cn-1]].'"></i></a>';	
	}
	?></td>
    <td width="200" align="center" valign="middle"><?php
	$cn=8;
    if($cell==$cn){
	echo '<a href="index.php?sub='.$val*rand(1234,9876).'&round='.($round+1).'"><i class="blocks blocks-tile'.$gcolor.'_'.$gshape.'"></i></a>';	
	}else{
	echo '<a href="index.php?sub='.rand(30,90)*rand(1234,9876).'&round='.($round).'"><i class="blocks blocks-tile'.$colors[$c[$cn-1]].'_'.$numbers[$s[$cn-1]].'"></i></a>';	
	}
	?></td>
    <td width="200" align="center" valign="middle"><?php
	$cn=9;
    if($cell==$cn){
	echo '<a href="index.php?sub='.$val*rand(1234,9876).'&round='.($round+1).'"><i class="blocks blocks-tile'.$gcolor.'_'.$gshape.'"></i></a>';	
	}else{
	echo '<a href="index.php?sub='.rand(30,90)*rand(1234,9876).'&round='.($round).'"><i class="blocks blocks-tile'.$colors[$c[$cn-1]].'_'.$numbers[$s[$cn-1]].'"></i></a>';	
	}
	?></td>
  </tr>
</table>
<p>
  <?php

//If the choice is not correct

}else{
	?>
<center>
<h3>Sorry, but that was the wrong choice.</h3>
<h3>Your final score is <?=$round*4;?> after a total of <?=$round*1;?> correct choices.</h3>
<h4><a href="index.php">RESTART</a></h4>
</center>
<?php
}
?>


</body>
</html>