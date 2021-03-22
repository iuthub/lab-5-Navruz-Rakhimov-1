<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Buy Your Way to a Better Education!</title>
    <link href="buyagrade.css" type="text/css" rel="stylesheet" />
</head>

<body>

<?php
if (empty($_POST["name"]) || empty($_POST["section"]) || empty($_POST["cc_num"]) || empty($_POST["cc"])) {
    ?>
    <h1>Sorry</h1>
    <p>You didn't fill out the form completely. <a href="buyagrade.html">Try again?</a></p>
    <?php
} else {
?>

<h1>Thanks, sucker!</h1>

<p>Your information has been recorded!</p>

<form action="sucker.php" method="post">

    <dl>
        <dt>Name</dt>
        <dd><?= $_POST["name"] ?> </dd>

        <dt>Section</dt>
        <dd><?= $_POST["section"] ?> </dd>

        <dt>Credit Card</dt>
        <dd><?= $_POST["cc_num"]." ".$_POST["cc"] ?> </dd>
    </dl>
<?php
$text = file_get_contents("suckers.txt");
$text = $text."{$_POST["name"]};{$_POST["section"]};{$_POST["cc_num"]};{$_POST["cc"]}\n";
file_put_contents("suckers.txt", $text);
}
?>

</form>
</body>
</html>