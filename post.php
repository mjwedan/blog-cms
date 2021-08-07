<!DOCTYPE html>
    <head>
        <title>Blog CMS</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <?php include 'header.php' ?>
        <?php include 'nav.php' ?>
        <main>
            <?php
                    function getPostDetailsFromDatabase() {
                        // Get the post title
                        $postTitle = rawurldecode($_GET["title"]);

                        // Get the post that matches the postTitle
                        include_once 'db_connect.php';
                        $sql = "SELECT * FROM posts WHERE title='" . $postTitle . "'";
                        $result = mysqli_query($conn, $sql);

                        // Get the first row from the result as an associative array
                        $postDetails = mysqli_fetch_assoc($result);
                        return $postDetails;
                    }
            ?>
            <?php  
                    // Post details contains all the data to generate the blog from
                    $postDetails = getPostDetailsFromDatabase();
                ?>
                <h2> <?php echo $postDetails["title"]; ?> </h2>
                <div> <?php echo $postDetails["author"]; ?></div>
                <div> <?php echo $postDetails["date"]; ?></div>
                <div> <?php echo $postDetails["content"]; ?></div>
        </main>
        <?php include 'footer.php' ?>
    </body>
</html>