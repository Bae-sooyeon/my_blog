<?php
include "../part/head.php"
?>
<?php
$dbConn = mysqli_connect("site8.blog.oa.gg","site8","sbs123414","site8");

$sql="
SELECT *
FROM article
";

$rs = mysqli_query($dbConn, $sql);
$articles = [];
while ( $aa = mysqli_fetch_assoc($rs) ) {
    $articles[] = $aa;
}

?>

<div class="list-box-1 con">
    <ul>
        <?php foreach($articles as $bb ) { ?>
            <li>
                <a href="detail.php?id=<?=$bb['id']?>">
                    <div class="img-bo flex">
                        <img src="<?=$bb['thumbImgUrl']?>" alt="" width="200">
                        <div class="title flex"><?=$bb['title']?></div>
                    </div>
                </a>
            </li>
        <?php } ?>
    </ul>
</div>

<div class="category">카테</div>


<?php
include "../part/foot.php"
?>