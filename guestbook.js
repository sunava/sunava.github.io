/** Gets posted comment list ordered by the posted date. */
function list() {
//  var path = '../GuestbookEndpoint/list';
    var path = '../api/comments';
    $.getJSON(path, function(comments) {
        var timeout = 0;

...

/** Posts a new comment. */
function post() {
    var comment = $('#compose-comment').val().trim();

    if (!comment) {
        alert('Comment must not be empty');
        return;
    }

    if (comment.length > 200) {
        alert('Comment must be within 200 characters');
        return;
    }

//  var path = '../GuestbookEndpoint/post';
    var path = '../api/comment';
    $.post(path, {text: comment}, function() {
        $('#compose-comment').val('');

...
