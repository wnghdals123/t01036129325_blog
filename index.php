<?
include 'config.php';
include 'header.php';

$name = "주홍민";

$articles = getRows("SELECT * FROM article ORDER BY id DESC");

//print_r($articles);
?>

<h1><?=$name?>블로그 메인 페이지 입니다.</h1>

<?
include 'footer.php';
?>