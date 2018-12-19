<?php
include("header.php");
?>

<main>
  <input type = "radio" name = "tab" id = "tab0" hidden checked = "">
  <input type = "radio" name = "tab" id = "tab1" hidden>
  <div class = "userHeader">
    <h1>John Sarbak</h1>
    <div id = "tabs">
      <div class = "bk"></div>
      <label class = "tab" id = "tab0Label" for = "tab0">Posts</label>
      <label class = "tab" id = "tab1Label" for = "tab1">About</label>
    </div>
  </div>
  <div class = "postWrap">
    <div class = "post">
      <h3>I hate Mondays</h3>
      <p>Like really. So Mondays are the first day of the week in some places, but not others. Weird, right? Let's finish this conversation now.</p>
    </div>
    <div class = "post">
      <h3>I hate Mondays</h3>
      <p>Like really. So Mondays are the first day of the week in some places, but not others. Weird, right? Let's finish this conversation now.</p>
    </div>
    <div class = "post">
      <h3>I hate Mondays</h3>
      <p>Like really. So Mondays are the first day of the week in some places, but not others. Weird, right? Let's finish this conversation now.</p>
    </div>
    <div class = "post">
      <h3>I hate Mondays</h3>
      <p>Like really. So Mondays are the first day of the week in some places, but not others. Weird, right? Let's finish this conversation now.</p>
    </div>
  </div>

  <div class = "about">
    <div class = "aboutCols">
      <p style = "margin: 0;">Hi there, I'm John, a 15-year old person who does stuff. I'm also the founder of Storm! Yeehaw! I started my journey as a simple seed, residing on the planet Jupiter. Suddenly, a rush of wind! I floated up! I landed on earth a billion years later! How surprising!</p>
      <div class = "inSec inSecLinks">
        <a href = "https://duckduckgo.com" class = "inSecLink"><img class = "linkImg" src = "media/twitter.png">Twitter</a>
        <a href = "https://duckduckgo.com" class = "inSecLink"><img class = "linkImg" src = "media/link.png">Website</a>
        <a href = "https://duckduckgo.com" class = "inSecLink"><img class = "linkImg" src = "media/business.png">Company</a>
      </div>
  </div>
    <label>Categories</label>
    <div class = "inSecCategories">
      <a href = "#" class = "inSecCategory">Politics</a>
      <a href = "#" class = "inSecCategory">Dev Notes</a>
      <a href = "#" class = "inSecCategory">Storm Official</a>
    </div>


  </div>

</main>
<?php
include("footer.php");
?>
