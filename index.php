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
            function getPostTitlesFromDatabase() {
                // TODO in Module 4
                // get this data from a database instead of hardcoding it
                $postTitles = array("Blog Post 1", "Blog Post 2", "Blog Post 3");
                return $postTitles;
            }
        ?>
            <ul>
                <?php 
                    $postTitles = getPostTitlesFromDatabase();

                    foreach($postTitles as $postTitle) {
                        echo "<li><a href='post.php?title=" . $postTitle . "'>" . $postTitle . "</a></li>";
                    }
                ?>
            </ul>
        </main>
        <?php include 'footer.php' ?>
    </body>
</html>