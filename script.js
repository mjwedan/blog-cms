
$(document).ready(function() {
    // This calls the list library
    $("button").click(function() {
        new List('sortable-blog-list', options);
    })
});        

var options = {
    valueNames: [ 'title' ]
};

$("#submit").click(function() {
    // TODO - what happens when it is clicked
    var title = $("#title").val();
    var author = $("#author").val();
    var date = $("#date").val();
    var content = editor.getValue();
});

$.post( "submit-post.php", { 
    title: title, 
    content: content, 
    author: author, 
    date: date 
}).done(function() {
window.location = "/index.php";
});