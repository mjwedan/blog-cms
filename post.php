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
                        // TODO in Module 4
                        // get this data from a database instead of hardcoding it
                        $postDetails = array('title' => 'Blog Post 1', 
                                            'date' => '08/01/2021',
                                            'author' => 'mjwedan',
                                            'content' => '<p>Lorem ipsum dolor sit amet, skateboard locavore farm-to-table street art, schlitz flexitarian health goth. Cold-pressed next level heirloom, hexagon crucifix banjo photo booth. Intelligentsia XOXO lumbersexual mumblecore venmo single-origin coffee pug cloud bread hot chicken kinfolk +1 tilde slow-carb echo park. Asymmetrical succulents artisan, you probably havent heard of them gluten-free austin pabst fixie scenester pinterest neutra cloud bread.</p>
                                            <p>Shaman vape bespoke migas hot chicken locavore art party pitchfork chicharrones prism hoodie post-ironic bushwick pop-up. Hexagon four dollar toast bicycle rights vice tacos austin locavore church-key, wolf food truck whatever cardigan disrupt flannel selvage. Brooklyn banh mi man bun la croix before they sold out street art lomo chia ugh fingerstache cloud bread neutra irony coloring book.</p>');
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