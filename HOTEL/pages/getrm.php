


<?php
include_once("config.php");

if(isset($_POST['submitinfo'])){
    
 
   $rt=$_POST['roomt'];
   $tr="";
    $rs=mysqli_query($mysqli,"select * from rooms where room_type='$rt'");
   if($result=mysqli_fetch_array($rs)){
    $tr        = $result['room_type'];
    

    echo "  <div class='col-12 col-xl-4'><input type='hidden' class='form-control' value='".$result['room_type']."'required/>";
               echo " <div class='card card-plain h-100'style='padding-right: 10%;'>";
               echo "   <div class='card-body p-3 ' >";
             echo "        <h6 class='text-uppercase text-body text-xs font-weight-bolder'>Choose Room: ".$result['room_type']."</h6>";
 echo " <div class='mb-5 ps-3' >";
              
                        while ( $res=mysqli_fetch_array($rs)) {

                                  
                                
                                $type=$res['status'];

                                if (strcmp($type,"available")==0) {

                                    echo " <input type='button' class='btn btn-success' name='rm' id='lolz' onclick='kk();' value='".$res['room_number']."'></input>";
                                }else{
                                    echo " <button type='button' class='btn btn-danger' disabled> ".$res['room_number']."</button>";
                                }

                                
                    }

      
             echo "   </div>";
            echo "  </div>";
            echo "      </div>";
            echo "    </div>";

  
   }
  
  echo "          <script>

  var x = document.getElementById('roomt').value;
  document.getElementById('demo').innerHTML = x;


  var xs = document.getElementById('myDIV');
  if (xs.style.display === 'none') {
    xs.style.display = 'block';
  } else {
    xs.style.display = 'none';
  }

</script>";

}



?>
