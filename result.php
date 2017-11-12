<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Enneagram test. Chín loại cá tính! Bạn đã thử chưa?</title>
    <link rel="icon" href="favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     
    <?php
        $array = array(
            'người cải cách',
            'người trợ giúp',
            'người cầu tiến',
            'người lãng mạn',
            'người lý trí',
            'người trung thành',
            'người lạc quan',
            'người lãnh đạo',
            'người hòa giải');
        $page = 10;
        if (isset($_GET['id'])) {
            $page = (int)$_GET['id']; //strtolower(htmlentities(@mysql_real_escape_string($_GET['id'])));
        } else {
            $page = 10;
        }
        $strShare = 'Enneagram test. Chín loại cá tính! Bạn đã thử chưa?';
        $str = '';
        $str_next = '';
        $str_next2 = '';
        //$str_shareLink = '';
        if (isset($_GET['name']) && isset($_GET['type'])) {
            $str = 'thuộc kiểu người số: ';
            $strShare = $_GET['name'].' '.$str.$_GET['type'].'. ';
            $str = $strShare.'Nhấn next để xem chi tiết!';
            $str_next = '&name='.$_GET['name'].'&type='.$_GET['type'];
            $str_next2 = '?name='.$_GET['name'].'&type='.$_GET['type'];
        }
        echo '<title>Enneagram test <br>'.$strShare.'</title>';
        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    ?>
</head>
<body>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=1671651146494591";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <div class="w3-container w3-left-align w3-teal">
        <?php
            if (strcasecmp( $str, '' ) != 0) {
                ?>
                <label class=" w3-xlarge w3-margin-left w3-margin-top w3-margin-bottom"><br/><?php echo $str;?><br/></label>
                <?php
            }
        ?>
    </div>
    <br/>
    <div class="w3-right-align">
        <div class="w3-btn">
            <div class="fb-share-button" data-href="<?php echo $actual_link; ?>" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $actual_link; ?>&amp;src=sdkpreparse">Share</a></div>
        </div>
        <button class="w3-btn w3-orange w3-text-white w3-cell" onclick="window.location.href='index.php'">&#10094; HomePage &#10095;</button>
        <?php
            
            if ($page == 10) {
                ?>
                <button class="w3-btn w3-teal" onclick="window.location.href='result.php?id=9<?php echo $str_next;?>'">&#10094; Prev</button>
                <button class="w3-btn w3-teal" onclick="window.location.href='result.php?id=1<?php echo $str_next;?>'">Next &#10095;</button>
                <?php
            } else {
                $page--;
                if ($page > 0 && $page < 10) {
                ?>
                    <button class="w3-btn w3-teal"  onclick="window.location.href='result.php?id=<?php echo $page.$str_next; ?>'">&#10094; Prev</button>
                <?php    
                }
                ?>
                <button class="w3-btn w3-teal"  onclick="window.location.href='result.php<?php echo $str_next2;?>'">SUMMARY</button>
                <?php
                    $page+=2;
                    if ($page > 0 && $page < 10) {
                ?>
                    <button class="w3-btn w3-teal"  onclick="window.location.href='result.php?id=<?php echo $page.$str_next; ?>'">Next &#10095;</button>
                <?php    
                    }
                    $page--;
            }
        ?>
    </div>


<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- QC_enneagram -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1592350739058082"
     data-ad-slot="3745348444"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>


    <img src="img/<?php echo $page; ?>_1.png" alt="img/<?php echo $page; ?>_1.png" width="100%" height="100%">
    <img src="img/<?php echo $page; ?>_2.png" alt="" width="100%" height="100%">
    <img src="img/ground.jpg" alt="" width="100%" height="100%">
    <div class="w3-right-align">
        <button class="w3-btn w3-orange w3-text-white w3-cell" onclick="window.location.href='index.php'">&#10094; HomePage &#10095;</button>
        <?php
            if ($page == 10) {
                ?>
                <button class="w3-btn w3-teal" onclick="window.location.href='result.php?id=9<?php echo $str_next;?>'">&#10094; Prev</button>
                <button class="w3-btn w3-teal" onclick="window.location.href='result.php?id=1<?php echo $str_next;?>'">Next &#10095;</button>
                <?php
            } else {
                $page--;
                if ($page > 0 && $page < 10) {
                ?>
                    <button class="w3-btn w3-teal"  onclick="window.location.href='result.php?id=<?php echo $page.$str_next; ?>'">&#10094; Prev</button>
                <?php    
                }
                ?>
                <button class="w3-btn w3-teal"  onclick="window.location.href='result.php<?php echo $str_next2;?>'">SUMMARY</button>
                <?php
                    $page+=2;
                    if ($page > 0 && $page < 10) {
                ?>
                    <button class="w3-btn w3-teal"  onclick="window.location.href='result.php?id=<?php echo $page.$str_next; ?>'">Next &#10095;</button>
                <?php    
                    }
                    $page--;
            }
        ?>
    </div>
    <br/>
</body>
</html>