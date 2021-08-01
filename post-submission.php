<!DOCTYPE html>
    <head>
        <title>Blog CMS</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <header>
            <h1>Blog CMS</h1>
        </header>
        <nav>
            <a href="index.php">HOME</a>
            <a href="post-submission.php">NEW BLOG POST</a>
        </nav>
        <main>
            <form>
                <input type="text" name="title" placeholder="Title"></input>
                <input type="text" name="author" placeholder="Author"></input>
                <input type="date" name="date" placeholder="Date"></input>
                <textarea name="content" placeholder="Content"></textarea>
                <button type="submit" value="Submit">SUBMIT</input>
            </form>
        </main>
        <footer>
            Built using Apache, PHP, MySQL, JS, HTML, CSS by @mjwedan
        </footer>
    </body>
</html>