

<?php
session_start();

include_once("config.php");

 

 include_once("session.php");

  $ID=$_REQUEST['ID'];
  



 
 

?>


<?php




 include_once("paid.php");

  



 
 

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
<body>
   <form method="post"  action="paymentreceipt.php" >
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content" >
            <div class="modal-header">
                <h5 class="modal-title">Payment Receipt</h5>
                
            </div>
            <div class="modal-body">
          <?php
           $rss = mysqli_query($mysqli,"select * from reservation  where ID='$ID'");
                                            while ( $res=mysqli_fetch_array($rss)) {
                                              $image = $res['images'];
                                              $image_src = "picture/".$image;

                                                echo " <div style='text-align: center;padding: 0;' width='4%' height='4%'><img style='padding: 0;' width='100%' height='4%' src=' $image_src'></div>";


                                              }?>

                                    <div class="form-group">
                    </div>
                <form>
                    <input type="hidden" name="ids" value="<?php echo $ID; ?>">
                    
                    <button type="submit" name="submitpaid" class="btn btn-primary">Approve</button>
                      <a href="reservations.php" class="btn btn-danger">Close</a>
                </form>
            </div>
        </div>
    </div>
</div>


</form>
</body>

<script>
//Opening with JS:
$('#myModal').modal({backdrop: 'static', keyboard: false})  
</script>
</html>