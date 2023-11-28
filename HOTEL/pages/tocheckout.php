


<?php
session_start();

include_once("config.php");

 

 include_once("session.php");

  $ID=$_REQUEST['ID'];
  



 
 

?>


<?php



  

 include_once("exitcheck.php");




 
 

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function(){
    $("#myModal").modal('show');
  });
</script>
</head>
<body onload="onload();">
   <form method="post"  action="tocheckout.php" >
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content" >
            <div class="modal-header">
                <h5 class="modal-title">Checking Out</h5>
                <input type="hidden" name="dol" value="<?php echo $ID ?>">
            </div>
            <div class="modal-body">
           <?php
           $rss = mysqli_query($mysqli,"select * from reservation  where ID='$ID'");
                                            while ( $res=mysqli_fetch_array($rss)) {
                                             
                                                $nm = $res['name'];
                                                $rm = $res['room'];
                                                $ci = $res['check_in'];
                                                $py = $res['payment'];
                                                $co = $res['check_out'];
                                                $re = $res['request'];
                                                $sn = $res['service_name'];
                                               ?>
                                               <p>Name of Guest: <strong><?php echo $nm; ?></strong></p>
                                               <p>Room #       :  <strong><?php echo $rm; ?></strong></p>
                                               <p>Arrived Date:  <strong><?php echo $ci; ?></strong></p>
                                               <p>Departure Date:  <strong><?php echo $co; ?></strong></p>
                                               <p>Request:  <strong><?php echo $re; ?></strong></p>
                                               <p>Services:  <strong><?php echo $sn; ?></strong></p>
                                               <p>Bills:  <strong>Php <?php echo $py; ?></strong></p>
                                             <?php } ?>


                <form>
                    <button  class="btn btn-primary"  type="submit" name="submitinfo"  onclick="myFunction()">Check out</button>
                      <a href="checkin.php" class="btn btn-danger">Cancel</a>
                </form>



            </div>
        </div>
    </div>
</div>


</form>
</body>
 <script>
    function myFunction() {
         var x = document.getElementById("groups");
        var value=x.selectElement.options[x.selectedIndex].value;// get selected option value


      var x = document.getElementById("start");
        var value=x.selectElement.options[x.selectedIndex].value;

         var x = document.getElementById("end");
        var value=x.selectElement.options[x.selectedIndex].value;
    }


    </script>

 <script type="text/javascript">
    var lolz;


    function onload() { 
        lolz = document.getElementById('lolz');
    }
    function kk(){
        //alert(lolz.value);
        document.getElementById("s").value = lolz.value;
        var d1 = new Date(document.getElementById('dd1').value);   
var d2 = new Date(document.getElementById('dd2').value);
    var py  = new Date(document.getElementById('pays').value);


var diff = d2.getTime() - d1.getTime();   
    
var daydiff = diff / (1000 * 60 * 60 * 24);   
var price = daydiff * 500 ;
document.getElementById("vald").value = daydiff;
document.getElementById("payer").value = price;

    }
</script>
<script>
//Opening with JS:
$('#myModal').modal({backdrop: 'static', keyboard: false})  
</script>
</html>
