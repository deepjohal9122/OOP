<html>
<body>
<?php
include 'hk.php';
$s2 = new Student();
$sData =[];
$s2->setData(100, "SD");
$sData=$s2->getData();

foreach($sData as $i)
{
echo "$i <br>";
}
for ($i=0;$i<count($sData);$i++)
{
echo $sData[$i] ." "
}

?>
</body>
</html>