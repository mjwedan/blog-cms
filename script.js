
$(document).ready(function() {
    // This calls the list library
    $("button").click(function() {
        new List('sortable-blog-list', options);
    })
});        

var options = {
    valueNames: [ 'title' ]
};