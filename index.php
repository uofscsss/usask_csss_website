<?php
require_once('header.php');
?>
<!--
<div class="hero-unit">
      <img class="logo" src='img/csss_logo_color.png'/>
</div>
-->
<div class='row'>
      <div class='span4'>
            <h1>Twitter</h1>
            <a class="twitter-timeline" href="https://twitter.com/UofSCSSS" data-widget-id="296077113658843136">Tweets by @UofSCSSS</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      </div>
      <div class='span8'>
            <h1>Tumblr</h1>
      <?php
      $tumblr = json_decode(file_get_contents('http://api.tumblr.com/v2/blog/uofscsss.tumblr.com/posts/text?api_key=fuiKNFp9vQFvjLNvx4sUwti4Yb5yGutBN4Xh10LXZhhRKjWlV4&notes_info=true'), true);
      //foreach($tumblr['reponse'] as $posts){
      //	print_r($posts);
      //}
      foreach($tumblr['response']['posts'] as $posts){
      	$title = $posts['title'];
      	$date = $posts['date'];
      	$body = $posts['body'];
      	
      	echo "<h2>$title</h2>";
      	echo "<p>Date: $date</p>";
      	echo "<pre>$body</pre>";
      }
      ?>
      </div>
</div>
<?php
require_once('footer.php');
?>