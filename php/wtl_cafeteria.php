<?php
include "simple_html_dom.php";

function getUrlContent($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$menuListLink = "https://ync.ac.kr/kor/CMS/Board/Board.do?mCode=MN217";
$baseUrl = "https://ync.ac.kr/kor/CMS/Board/Board.do";

$content = getUrlContent($menuListLink);
$data = str_get_html($content);

if (!$data) {
    die("Error fetching data.");
}

$firstLink = $data->find("td.subject a", 0);

if ($firstLink) {
    $menuLink = $firstLink->href;
    $fullMenuLink = $baseUrl . $menuLink;
    $menuPageContent = getUrlContent($fullMenuLink);
    $menuPage = str_get_html($menuPageContent);
    $images = $menuPage->find("div#boardContents p img");

    foreach ($images as $image) {
        $imageSrc = $image->src;
        $imgUrl = "https://ync.ac.kr/" . $imageSrc;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>020WTL</title>
  <link rel="icon" type="image/x-icon" href="../img/YNC.png" />
  <link rel="stylesheet" href="../css/wtl_cafeteria.css">
</head>
<body>
  <?php include "./index_header.php";?>
  <div id="content">
    <h1>이번주 학식</h1>

    <img src="<?=$imgUrl ?>" alt="cafeteriaMenu" id="menuImg">
  </div>






  <?php include "./index_footer.php";?>
</body>
</html>

