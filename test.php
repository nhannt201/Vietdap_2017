<!--<?php
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a><a href="#">AAAAA</a>';
echo strip_tags($text);
echo "\n";

// Allow <p> and <a>
//echo strip_tags($text, '<p><a>');
?>
-->
<?php 
//
$checkcauhoi = str_replace(" ","","fdgdfg dfg dfg df fddf ");
if (strlen(trim($checkcauhoi)) > 5) {
echo "cho phép";
} else {
echo "ko cho phep";
}
//

?> 