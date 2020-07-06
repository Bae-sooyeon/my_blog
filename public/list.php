<?php
include "../part/head.php"
?>
<?php
$dbConn = mysqli_connect("site8.blog.oa.gg","site8","sbs123414","site8");

if ( isset($_GET['cateItemId']) == false ) {
    $_GET['cateItemId'] = 0;
}

$cateItemId = $_GET['cateItemId'];

$cateItemName = "전체글";

if ( $cateItemId != 0 ) {
    $sql = "
    SELECT name
    FROM cateItem
    WHERE id = '{$cateItemId}'
    ";
    $rs = mysqli_query($dbConn, $sql);
    $row = mysqli_fetch_assoc($rs);
    $cateItemName = $row['name'];
}

if ( $cateItemId != 0 ) {
    $sql = "
    SELECT *
    FROM article
    WHERE cateItemId = '{$cateItemId}'
    ORDER BY id DESC
    ";
}
else {
    $sql = "
    SELECT *
    FROM article
    ORDER BY id DESC
    ";
}
$rs = mysqli_query($dbConn, $sql);
$articles = [];
while ( $row = mysqli_fetch_assoc($rs) ) {
    $articles[] = $row;
}

$sql ="
SELECT *
FROM cateItem
";
$rs = mysqli_query($dbConn, $sql);
$cateItems = [];

while ( $row = mysqli_fetch_assoc($rs) ) {
    $cateItems[] = $row;
}
?>
<div class="cate con"><?=$cateItemName?></div>
<div class="wrap flex con">
    <div class="list-box-1 ">
        <ul>
            <?php foreach ( $articles as $article ) { ?>
            <li>
                <a href="detail.php?id=<?=$article['id']?>">
                    <div class="img-bo flex">
                        <img src="<?=$article['thumbImgUrl']?>" alt="" width="200">
                        <div class="title flex"><?=$article['title']?></div>
                    </div>
                </a>
            </li>
            <?php } ?>
        </ul>
    </div>
    <div class="category">
        <div class="category-box">Category</div>
        <?php foreach ($cateItems as $cateItem) { ?>
        <div class="name textZoom"><a class = "textZoom:hover" href="/list.php?cateItemId=<?=$cateItem['id']?>"><?=$cateItem['name']?></a></div>
        <?php } ?>
    </div>
</div>





<?php
include "../part/foot.php";
?>