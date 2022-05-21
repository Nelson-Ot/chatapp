<?php 
$conn = mysqli_connect("localhost", "root", "", "chat_app");
if($conn){
    // echo "connected";
}
else{
    echo "not connected" . mysqli_connect_error();
}

?>