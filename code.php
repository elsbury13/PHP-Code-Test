<?php
$code = '';

if (isset($_POST['code']) && $_POST['code'] != '') {
    $code = $_POST['code'];
    $_SESSION['code'] = $code;

    $startTime = microtime(true);

    echo "<br/>";
    eval($code);
    echo "<br/><br/>";

    $endTime = microtime(true);

    echo $startTime."<br/>".$endTime;
    $timeDiff = $endTime - $startTime;
    echo "Took ".round($timeDiff, 2)." seconds.";
} elseif (isset($_SESSION['code']) && $_SESSION['code'] != '') {
    $code = $_SESSION['code'];
}

?>
<hr>
<form action="" method="post">
    <textarea cols="100" rows="30" id="code" name="code"><?php echo $code ?></textarea>
    <br/><br/>
    <input type="submit">
</form>
