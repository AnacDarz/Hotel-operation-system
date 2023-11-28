

<?php
session_start();

include_once("config.php");

 

 include_once("session.php");

  $ID=$_REQUEST['ID'];
  



 
 

?>


<?php




 include_once("paids.php");

  



 
 

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Example of Auto Loading Bootstrap Modal on Page Load</title>
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
   <form method="post"  action="extends.php" >
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content" >
            <div class="modal-header">
                <h5 class="modal-title">Extend</h5>
                
            </div>
            <div class="modal-body">
          <?php
           $rss = mysqli_query($mysqli,"select * from reservation  where ID='$ID'");
                                            while ( $res=mysqli_fetch_array($rss)) {
                                             
                                                $dateend = $res['check_out'];
                                               ?>

                                                <h6 class="text-uppercase text-body text-xs font-weight-bolder">Date Request</h6>
                                                <input type="hidden" name="ds" id="dd1"value="<?php echo $dateend; ?>">
                                                <input type="hidden" name="pr" value="<?php echo $pr; ?>">
                                                <input type="hidden" name="ids" value="<?php echo $ID; ?>">
                                                <input type="date" name="de" id="dd2" min="<?php echo $dateend; ?>" value="<?php echo $dateend; ?>">
                                             <?php }?>


 <input type="hidden" name="rms"  id="s">

 <h6 class="text-uppercase text-body text-xs font-weight-bolder"></h6>
 <h6 class="text-uppercase text-body text-xs font-weight-bolder">To Pay</h6>
<input type="text" style="outline: none; border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="indys"  id="vald" value = "0"readonly/>days</input>


              <input type="number" class="form-control" name="pay" id="payer" value="500"  readonly/>

           <input type="hidden" class="form-control"id="pays" value="500"  readonly/>
                                    <div class="form-group">
                    </div>
                <form>
                    
                    <input type="button" name="rm" onclick="kk();" value="Confirm" id='lolz'>
                    <button type="submit" name="submitpaid" class="btn btn-primary">Extend</button>
                      <a href="checkin.php" class="btn btn-danger">Close</a>
                </form>
            </div>
        </div>
    </div>
</div>


</form>
</body>
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