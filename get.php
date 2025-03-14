<?php
$username = $_GET['username'];
$password = $_GET['password'];
$type = $_GET['type'];

// ဒီမှာ မှန်တဲ့ username နဲ့ password ကို စစ်ပါ
if ($username == "myusername" && $password == "mypassword" && $type == "m3u") {
    header('Content-Type: audio/mpegurl');
    header('Content-Disposition: attachment; filename="playlist.m3u"');
    readfile('playlist.m3u'); // m3u ဖိုင်ကို ထုတ်ပေးမယ်
} else {
    echo "Invalid credentials";
}
?>
