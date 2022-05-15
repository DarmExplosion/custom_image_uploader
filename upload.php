<?php
header("Content-Type: text/text");
$key = "YOUR_UPLOAD_SECRET";
$uploadhost = "UPLOAD_DOMAIN";
$redirect = "REDIRECT_URL";
if ($_SERVER["REQUEST_URI"] == "/robot.txt") { die("User-agent: *\nDisallow: /"); }
if (isset($_POST['k'])) {
    if ($_POST['k'] == $key) {
        $target = getcwd() . "/" . basename($_FILES['d']['name']);
        if (move_uploaded_file($_FILES['d']['tmp_name'], $target)) {
            $md5 = md5_file(getcwd() . "/" . basename($_FILES['d']['name']));
                        $explode = explode(".", $_FILES["d"]["name"]);
            rename(getcwd() . "/" . basename($_FILES['d']['name']), getcwd() . "/" . $md5 . "." . end($explode));
            echo $uploadhost . $md5 . "." . end($explode);
        } else {
            echo "Your file could not be uploaded! :(";
        }
    } else {
        header('Location: '.$redirect);
    }
} else {
    header('Location: '.$redirect);
}
?>
