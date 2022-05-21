<?php
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header("Location: index.php");
    }


    include_once 'header.php';

 ?>
<body>
    <div class="wrapper">
        <section class="users">
            <header>
                <?php 
                include_once 'php/config.php';
                $sql = "SELECT * FROM users WHERE unique_id = '$_SESSION[unique_id]'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                ?>
                <div class="content">
                    <img src="profileimage/<?php echo $row['img']; ?>" alt="profile image">
                    <div class="details">
                        <span><?php echo $row['fname'];?></span>
                        <p><?php echo $row['status'];?></p>
                    </div>

                </div>
                <a href="" class="logout">Logout</a>
            </header>
            <div class="search">
                <span class="text">select a user to chat with</span>
                <input type="text" placeholder="Enter name to search...">
                <button title="search"><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">
                <a href="#">
                    <div class="content">
                        <img src="profileimage/4440ee28b1bcaecb743f18751432b603.jpg" alt="profile image">
                        <div class="details">
                            <span>Baby Serah</span>
                            <p>This is a test message</p>
                        </div>
                    </div>
                    <div class="status-dot">
                        <i class="fas fa-circle"></i>
                    </div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="profileimage/4440ee28b1bcaecb743f18751432b603.jpg" alt="profile image">
                        <div class="details">
                            <span>Baby Serah</span>
                            <p>This is a test message</p>
                        </div>
                    </div>
                    <div class="status-dot">
                        <i class="fas fa-circle"></i>
                    </div>
                </a><a href="#">
                    <div class="content">
                        <img src="profileimage/4440ee28b1bcaecb743f18751432b603.jpg" alt="profile image">
                        <div class="details">
                            <span>Baby Serah</span>
                            <p>This is a test message</p>
                        </div>
                    </div>
                    <div class="status-dot">
                        <i class="fas fa-circle"></i>
                    </div>
                </a><a href="#">
                    <div class="content">
                        <img src="profileimage/4440ee28b1bcaecb743f18751432b603.jpg" alt="profile image">
                        <div class="details">
                            <span>Baby Serah</span>
                            <p>This is a test message</p>
                        </div>
                    </div>
                    <div class="status-dot">
                        <i class="fas fa-circle"></i>
                    </div>
                </a><a href="#">
                    <div class="content">
                        <img src="profileimage/4440ee28b1bcaecb743f18751432b603.jpg" alt="profile image">
                        <div class="details">
                            <span>Baby Serah</span>
                            <p>This is a test message</p>
                        </div>
                    </div>
                    <div class="status-dot">
                        <i class="fas fa-circle"></i>
                    </div>
                </a><a href="#">
                    <div class="content">
                        <img src="profileimage/4440ee28b1bcaecb743f18751432b603.jpg" alt="profile image">
                        <div class="details">
                            <span>Baby Serah</span>
                            <p>This is a test message</p>
                        </div>
                    </div>
                    <div class="status-dot">
                        <i class="fas fa-circle"></i>
                    </div>
                </a><a href="#">
                    <div class="content">
                        <img src="profileimage/4440ee28b1bcaecb743f18751432b603.jpg" alt="profile image">
                        <div class="details">
                            <span>Baby Serah</span>
                            <p>This is a test message</p>
                        </div>
                    </div>
                    <div class="status-dot">
                        <i class="fas fa-circle"></i>
                    </div>
                </a><a href="#">
                    <div class="content">
                        <img src="profileimage/4440ee28b1bcaecb743f18751432b603.jpg" alt="profile image">
                        <div class="details">
                            <span>Baby Serah</span>
                            <p>This is a test message</p>
                        </div>
                    </div>
                    <div class="status-dot">
                        <i class="fas fa-circle"></i>
                    </div>
                </a><a href="#">
                    <div class="content">
                        <img src="profileimage/4440ee28b1bcaecb743f18751432b603.jpg" alt="profile image">
                        <div class="details">
                            <span>Baby Serah</span>
                            <p>This is a test message</p>
                        </div>
                    </div>
                    <div class="status-dot">
                        <i class="fas fa-circle"></i>
                    </div>
                </a><a href="#">
                    <div class="content">
                        <img src="profileimage/4440ee28b1bcaecb743f18751432b603.jpg" alt="profile image">
                        <div class="details">
                            <span>Baby Serah</span>
                            <p>This is a test message</p>
                        </div>
                    </div>
                    <div class="status-dot">
                        <i class="fas fa-circle"></i>
                    </div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="profileimage/4440ee28b1bcaecb743f18751432b603.jpg" alt="profile image">
                        <div class="details">
                            <span>Baby Serah</span>
                            <p>This is a test message</p>
                        </div>
                    </div>
                    <div class="status-dot">
                        <i class="fas fa-circle"></i>
                    </div>
                </a>
            </div>
        </section>
    </div>


    <script src="js/users.js"></script>
</body>

</html>