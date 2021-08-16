<!DOCTYPE html>
<?php include 'head.php' ?>
    <body>
        <?php include 'header.php' ?>
        <?php include 'nav.php' ?>
        <main>
            <div>
                <form class="post-submissions-form" action="submit-post.php" method="POST">
                    
                    <input type="text" id="title" name="title" placeholder="Title"></input>
                    <input type="text" id="author" name="author" placeholder="Author"></input>
                    <input type="date" id="date" name="date" placeholder="Date"></input>
                    <div id="editor">function foo(items) {
                        var x = "All this is syntax highlighted";
                        return x;
                    }</div>
                    <script src="/ace-builds/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
                    <script>
                        var editor = ace.edit("editor");
                        editor.setTheme("ace/theme/eclipse");
                        editor.session.setMode("ace/mode/html");
                    </script>
                    <button type="submit" value="Submit">SUBMIT</input>                  
                </form>
            </div>
        </main>
        <?php include 'footer.php' ?>
    </body>
</html>