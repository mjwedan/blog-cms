<!DOCTYPE html>
    <head>
        <title>Blog CMS</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <?php include 'header.php' ?>
        <?php include 'nav.php' ?>
        <main>
            <div>
                <form class="post-submissions-form" action="submit-post.php" method="POST">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" placeholder="Title"></input>
                    
                    <label for="author">Author</label>
                    <input type="text" id="author" name="author" placeholder="Author"></input>
                    
                    <label for="author">Date</label>
                    <input type="date" id="date" name="date" placeholder="Date"></input>
                    
                    <label for="content">Content</label>
                    <textarea name="content" id="content" placeholder="Content"></textarea>
                    <button type="submit" value="Submit">SUBMIT</button>
                </form>
            </div>
        </main>
        <?php include 'footer.php' ?>
    </body>
</html>