# m3u File ကို ပြင်ဆင်ပါ
m3u ဖိုင်တစ်ခုကို လက်နဲ့ရေးလို့ရပါတယ်။ ဥပမာ အောက်မှာပြထားတဲ့ပုံစံမျိုး

### ဥပမာ :

```bash
#EXTM3U
#EXTINF:-1,Channel 1
http://example.com/stream1
#EXTINF:-1,Channel 2
http://example.com/stream2
```

# PHP Script နဲ့ Link
အကယ်၍ သင်က username နဲ့ password ပါတဲ့ လိပ်စာတစ်ခု လိုချင်တယ်ဆိုရင် PHP script တစ်ခု ရေးရပါမယ်။ 

### ဥပမာ :
- **get.php ဆိုတဲ့ ဖိုင်တစ်ခု ဖန်တီးပါ။**

### အောက်က code ကို ထည့်ပါ :

```bash
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
```

- **get.php နဲ့ playlist.m3u ကို public_html ထဲ တင်ပါ။**

- **အဲဒီဆိုရင် url/get.php?username=myusername&password=mypassword&type=m3u ဆိုတဲ့ လိပ်စာနဲ့ သုံးလို့ရပါပြီ။**




















