<?php
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header("Location: index.php");
    }


    include_once 'header.php';

 ?>

<body>
    <div class="wrapper">
        <section class="chat-area">
            <header>
            <?php 
                include_once 'php/config.php';
                $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
                $sql = "SELECT * FROM users WHERE unique_id = '{$user_id}'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                ?>
                <a href="users.php" class="back-icon" title="back arrow"><i class="fas fa-arrow-left"></i> </a>
                <img src="profileimage/<?php echo $row['img']; ?>" alt="profile image">
                <div class="details">
                <span><?php echo $row['fname'];?></span>
                <p><?php echo $row['status'];?></p>
                </div>
            </header>
            <div class="chat-box">
                <!-- <div class="chat outgoing">
                    <div class="details">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsa!</p>
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="profileimage/4440ee28b1bcaecb743f18751432b603.jpg" alt="">
                    <div class="details">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsa!</p>
                    </div>
                </div> -->
               
            </div>
           <form action="#" method="POST" class="typing-area" autocomplete="off">
           <input type="text"  name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
           <input type="text"  name="incoming_id" value="<?php echo $user_id; ?>" hidden>
            <input type="text" placeholder="Type your message here..." class="input" name="message">
                <button>Send <i class="fab fa-telegram-plane"></i></button>
            </form>
           </form>
        </section>
    </div>



    <script src="js/chat.js"></script>
</body>

</html>