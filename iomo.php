<style type="text/css"> 
	table {border: 1px solid grey; width: 80%; } 
    #unvisible {display: none;}
	td {border: 1px solid grey;} 

	#tableOfResults {
border-spacing: 1;
empty-cells: hide;  
border-color: #3D3511;}
	#tableOfResults td {
padding: 10px 20px;
text-align: center;
border-bottom: 1px solid #F4EEE8;
transition: all 0.5s linear;}
	#tableOfResults th {
padding: 10px 20px;
color: #3D3511;
border-bottom: 1px solid #F4EEE8;
border-top-left-radius: 10px;
border-top-right-radius: 10px;}

</style>
<form method="post">
	<table id = "tableOfThree"> 
<tr><th>u</th><th>0</th><th>1</th><th>2</th><th>3</th><th>4</th><th id="unvisible">5</th>
</tr>
<tr name="org1">
	<td>J1(u)</td>
	<td name ="b01">0</td>
	<td><form name ="b11" method="post"> <textarea>5</textarea></form></td>
	<td><form name ="b21" method="post"> <textarea>9</textarea></form></td>
	<td><form name ="b31" method="post"> <textarea>12</textarea></form></td>
	<td><form name ="b41" method="post"> <textarea>13</textarea></form></td>
	<td id="unvisible"><form name ="b51" method="post"> <textarea>15</textarea></form></td>
</tr>
<tr name="org2">
	<td>J2(u)</td>
	<td name ="b02">0</td>
	<td><form name ="b12" method="post"> <textarea>4</textarea></form></td>
	<td><form name ="b22" method="post"> <textarea>9</textarea></form></td>
	<td><form name ="b32" method="post"> <textarea>11</textarea></form></td>
	<td><form name ="b42" method="post"> <textarea>14</textarea></form></td>
	<td id="unvisible"><form name ="b52" method="post"> <textarea>16</textarea></form></td>
</tr>
<tr  name="org3">
	<td>J3(u)</td>
	<td name ="b03">0</td>
	<td><form name ="b13" method="post"> <textarea>7</textarea></form></td>
	<td><form name ="b23" method="post"> <textarea>10</textarea></form></td>
	<td><form name ="b33" method="post"> <textarea>11</textarea></form></td>
	<td><form name ="b43" method="post"> <textarea>12</textarea></form></td>
	<td id="unvisible"><form name ="b53" method="post"> <textarea>13</textarea></form></td>
</tr>
<tr id="unvisible"  name="org4">
	<td>J4(u)</td>
	<td name ="b04">0</td>
	<td><form name ="b14" method="post"> <textarea>6</textarea></form></td>
	<td><form name ="b24" method="post"> <textarea>8</textarea></form></td>
	<td><form name ="b34" method="post"> <textarea>10</textarea></form></td>
	<td><form name ="b44" method="post"> <textarea>11</textarea></form></td>
	<td id="unvisible"><form name ="b54" method="post"> <textarea>14</textarea></form></td>
</tr>
</table><br>
    <input type="submit" name="tableBellami" id="tbellami" value="RUN" /><br/>
</form>

<?php

function tbellami()
{
	$uk = array(0,1,2,3,4);
	$J3 = array();
	$B3 = array();
	$u3 = array();
	$J2 = array();
	$B2 = array();
	$u2 = array();
	$J1 = array();
	$B1 = array();
	$u1 = array();
	$J1u = array();
	$J2u = array();
	$J3u = array();
	$J4u = array();

      $test = $_POST['test']; 
 
     
}if(array_key_exists('tableBellami',$_POST)){
   bellami();
}?>

<table id = "tableOfResults"> 
<tr><th rowspan="2">x(k-1)</th>
	<th rowspan="2">u(k)</th>
	<th rowspan="2">x(k)</th>
	<th id= "unvisible" colspan="3">k=3</th>
	<th colspan="3">k=2</th>
	<th colspan="3">k=1</th>
</tr>
<tr>
	<th id= "unvisible">J3(u(3))+B4(x(3))</th>
	<th id= "unvisible">B3(x(2))</th>
	<th id= "unvisible">u3(x(2))</th>
	<th >J2(u(2))+B3(x(2))</th>
	<th>B2(x(1))</th>
	<th>u2(x(1))</th>
	<th>J1(u(1))+B2(x(1))</th>
	<th>B1(x(0))</th>
	<th>u1(x(0))</th>
</tr>
<tr>
	<td rowspan="2">1</td>
	<td>0</td>
	<td>1</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td id= "unvisible"></td>
	<td id= "unvisible"></td>
	<td id= "unvisible"></td>
</tr>
<tr>
	<td>1</td>
	<td>0</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td id= "unvisible"></td>
	<td id= "unvisible"></td>
	<td id= "unvisible"></td>
</tr>
<tr>
	<td rowspan="3">2</td>
	<td>0</td>
	<td>2</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td id= "unvisible"></td>
	<td id= "unvisible"></td>
	<td id= "unvisible"></td>
</tr>
<tr>
	<td>1</td>
	<td>1</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td id= "unvisible"></td>
	<td id= "unvisible"></td>
	<td id= "unvisible"></td>
</tr>
<tr>
	<td>1</td>
	<td>0</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td id= "unvisible"></td>
	<td id= "unvisible"></td>
	<td id= "unvisible"></td>
</tr>
<tr>
	<td rowspan="4">3</td>
	<td>0</td>
	<td>3</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td id= "unvisible"></td>
	<td id= "unvisible"></td>
	<td id= "unvisible"></td>
</tr>
<tr>
	<td>1</td>
	<td>2</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td id= "unvisible"></td>
	<td id= "unvisible"></td>
	<td id= "unvisible"></td>
</tr>
<tr>
	<td>2</td>
	<td>1</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td id= "unvisible"></td>
	<td id= "unvisible"></td>
	<td id= "unvisible"></td>
</tr>
<tr>
	<td>3</td>
	<td>0</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td id= "unvisible"></td>
	<td id= "unvisible"></td>
	<td id= "unvisible"></td>
</tr>
<tr>
	<td rowspan="5">4</td>
	<td>0</td>
	<td>4</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td id= "unvisible"></td>
	<td id= "unvisible"></td>
	<td id= "unvisible"></td>
</tr>
<tr>
	<td>1</td>
	<td>3</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td id= "unvisible"></td>
	<td id= "unvisible"></td>
	<td id= "unvisible"></td>
</tr>
<tr>
	<td>2</td>
	<td>2</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td id= "unvisible"></td>
	<td id= "unvisible"></td>
	<td id= "unvisible"></td>
</tr>
<tr>
	<td>3</td>
	<td>1</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td id= "unvisible"></td>
	<td id= "unvisible"></td>
	<td id= "unvisible"></td>
</tr>
<tr>
	<td>4</td>
	<td>0</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td id= "unvisible"></td>
	<td id= "unvisible"></td>
	<td id= "unvisible"></td>
</tr>
</table>