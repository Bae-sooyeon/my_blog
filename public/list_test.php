<?php
include "../part/head.php"
?>


<?php
$dbConn = mysqli_connect("site8.blog.oa.gg", "site8", "sbs123414", "site8", 3306) or die("DB CONNECTION ERROR");

$cateItemId = $_GET['cateItemId'];

$sql = "
SELECT *
FROM cateItem
WHERE id = {$cateItemId}
";
$rs = mysqli_query($dbConn, $sql);
$row = mysqli_fetch_assoc($rs);
$cateItemName = $row['name'];

$sql = "
SELECT *
FROM article
WHERE cateItemId = {$cateItemId}
ORDER BY ID DESC
";
$rs = mysqli_query($dbConn, $sql);
$articleRows = [];
while ( true ) {
    $row = mysqli_fetch_assoc($rs);

    if ( $row == null ) {
        break;
    }

    $articleRows[] = $row;
}
?>


<?php foreach ( $articleRows as $article ) { ?>
<div class="list-box-1 con">
    <ul>
        <li>
            <a href="detail.php?id=<?=$article['id']?>">
                <div class="img-bo flex">
                    <img src="<?=$article['thumbImgUrl']?>" alt="" width="200">
                    <div class="title flex"><?=$article['title']?></div>
                </div>
            </a>
        </li>
    </ul>
</div>
<?php } ?>

<?php
include "../part/foot.php"
?>
