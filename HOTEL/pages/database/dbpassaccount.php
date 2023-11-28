<?php
include_once("config.php");
   
   $id=$_POST['NEWid'];
   $bn=$_POST['NEWbname'];
   $gn=$_POST['NEWgname'];
   $dos=$_POST['NEWDosage'];
   $type=$_POST['NEWtype'];
   $price=$_POST['NEWPrice'];
   $srp=$_POST['NEWsrp'];
   $stock=$_POST['NEWstocks'];
   $ed=$_POST['NEWed'];
   $Category=$_POST['NEWCat'];
   $supp=$_POST['NEWSup'];

   $rs=mysqli_query($mysqli,"update medicines set Brand_name='$bn', Generic_Name='$gn', Dosage='$dos', Type='$type',  Price='$price', srp='$srp', 
                                            stock='$stock', expiry_date='$ed', category='$Category', supplier='$supp' where Item_code='$id'");
   header("Location:medicine.php");
?>