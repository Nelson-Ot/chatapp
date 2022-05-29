<?php 

while($row = mysqli_fetch_assoc($sql)){
    $sql2 = "SELECT * FROM messages WHERE (incoming_id = {$row['unique_id']}
    OR outgoing_id = {$row['unique_id']}) AND (outgoing_id = {$outgoing_id} 
    OR incoming_id = {$outgoing_id}) ORDER BY id DESC LIMIT 1";

    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($result2);
    if(mysqli_num_rows($result2) > 0 ){
        $result = $row2['messages'];
    }else{
        $result = "No messages";
    }


    (strlen($result) > 20 ) ? $result = substr($result, 0, 20)."..." : $result = $result;

    // ($outgoing_id == $row2['outgoing_id']) ? $you = "You: " : $you = "";

    ($row['status'] == "Offline now") ? $offline = "offline" : $offline = "";


    $output .= '<a href="chat.php?user_id='.$row['unique_id'].'">
    <div class="content">
        <img src="profileimage/'.$row['img'].'" alt="profile image">
        <div class="details">
            <span>'.$row['fname'].' '.$row['lname'].'</span>
            <p>'.$result.'</p>
        </div>
    </div>
    <div class="status-dot '.$offline.'">
        <i class="fas fa-circle"></i>
    </div>
</a>';
}

?>