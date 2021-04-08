<?php
$output = shell_exec('python comment.py "name" "comment"');
echo $output // Should output HTML.
?>
