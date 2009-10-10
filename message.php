<?php
$browsers = array(
    array("Firefox", "http://www.firefox.com/"),
    array("Safari",  "http://www.apple.com/safari/download/"),
    array("Chrome",  "http://www.google.com/chrome"),
    array("Opera",   "http://www.opera.com/"),
    array("Camino",  "http://caminobrowser.org/")
);
?>
  
<div class="no-ie-wrapper">
    <div class="no-ie-oops">
        Ooops... you seem to be running a really old browser.
    </div>
    <div class="no-ie-info">
        The web page you are trying to load is kindly suggesting you try using 
        a better web browser.
    </div>
    <div class="no-ie-info">
        Some free browsers out there:
    </div>
    
    <ul>
    <?php foreach ($browsers as $browser) : ?>
        <li class="<?php echo strtolower($browser[0]); ?>">
            <a href="<?php echo $browser[1]; ?>">
                <?php echo $browser[0]; ?>
            </a>
        </li>
    <?php endforeach; ?>
    </ul>
</div>
