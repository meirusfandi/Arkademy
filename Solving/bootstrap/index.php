<!DOCTYPE html>
<html>
<head>
    <title>Arkademy Bootcamp 5</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!-- <script type="text/javascript" src="js/jquery.js"></script> -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>

    <div class="container">
        <h1>Selection Phase 5th BootCamp Arkademy</h1>

        <?php
            include 'koneksi.php';
            $data = mysqli_query($koneksi, "select * from post");
            while ($da = mysqli_fetch_array($data)){
            ?>

        <div class="jumbotron">
            <h1><?php echo $da['title']; ?></h1> 
            <?php 
                $auth = mysqli_query($koneksi, "select username from user where id = '".$da['createdBy']."'");
                while ($au = mysqli_fetch_array($auth)){
             ?>
            <p>Author : <?php echo $au['username']; ?></p>
            <?php 
                }
            ?>
            
            <p>
                <?php echo $da['content']; ?>
            </p> 

            <h3>Comments : </h3>

            <?php 
                $com = mysqli_query($koneksi, "select comments from comments where postId = '".$da['id']."'");
                if (mysqli_fetch_array($com) > 0){
            ?>
                <ol>
            <?php
                    while ($das = mysqli_fetch_array($com)){

            ?>
                    <li>
            <?php            echo $das['comments']; ?>
                    </li>

            <?php 
                    }
                } else {
                    echo "<p>Nothing Comments</p>";
                }
            ?>
                </ol>
        </div>

        <?php 
            }
        ?>

        
    </div>
</body>
</html>