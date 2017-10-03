<html>
<body>
<?php
class student
{
var $sid;
var $sname;
 
 function _construct()
 {
 echo "<h1>Hi</h1>";
 }
 function setData($id,$name)
 {
 $this->sid = $id;
 $this->sname = $name;
 }
 function getData()
 {
 echo "<br>" . $this->sid;
 echo "<br>" . $this->sname;
 return array($this->sid, $this->sname);
 }
 function _destruct()
 {
	 echo "<h1>Bye</h1>";
 }
 
 }
 $s1 = new Student;
 $s1->sid = 200;
 $s1->sname = "HK";
 //
 echo "<br>" . $s1->sid;
 echo "<br>" . $s1->sname;
 echo "<br>";
 //
 $s1-> setData(100,"Johal");
 $s1-> getData();
?>
<?php include 'footer.php';?>
	
 </body>
 </html>
 