<!DOCTYPE html>
    <head>
        <title>Blog CMS</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <?php include 'header.php' ?>
        <?php include 'nav.php' ?>
        <main>
            <form>
                <input type="text" name="title" placeholder="Title"></input>
                <input type="text" name="author" placeholder="Author"></input>
                <input type="date" name="date" placeholder="Date"></input>
                <textarea name="content" placeholder="Content"></textarea>
                <button type="submit" value="Submit">SUBMIT</input>
            </form>
        </main>
        <?php include 'footer.php' ?>
    </body>
</html>