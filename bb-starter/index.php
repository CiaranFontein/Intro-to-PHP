<?php
include ('./templates/header.php' );
include ('./templates/sidebar.php');
include ('./functions.php');

createArticles(file_get_contents('../bb-starter/data/posts.json'));

include ('./templates/footer.php');
?>