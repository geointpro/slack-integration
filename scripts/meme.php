<?
require('include/memegenerator.php');

/*
token=K2gDHdWZvZSmwOkW9O6yVbA7
team_id=T0001
channel_id=C2147483705
channel_name=test
timestamp=1355517523.000005
user_id=U2147483697
user_name=Steve
text=googlebot: What is the air-speed velocity of an unladen swallow?
*/

//meme generator API
$cmd = BuildSlashCommand($_REQUEST);

//str_replace ( mixed $search , mixed $replace , mixed $subject [, int &$count ] )

print_r($cmd->Text);die;

$cmdText = $cmd->Text;
$memetext =  str_replace("memebot:", "", $cmd->Text, 1);

$parts = explode("/", $memetext);

$gen = $parts[0];
$top = $parts[1];
$bottom = $parts[2];

return CreateNewMeme($gen, $top, $bottom);

?>
