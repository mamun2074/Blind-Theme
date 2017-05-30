<?php
wp_list_comments(array(
    'callback'      =>'blind_comment',
));

comment_form();

?>