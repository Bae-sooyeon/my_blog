<?php
include "../part/head.php"
?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<!-- 사진 -->
<div class="slider">
    <div class="slides">
        <div class=" active"
            style="background-image:url(https://cdn.pixabay.com/photo/2015/09/09/17/06/jellyfish-931886_960_720.jpg);">
        </div>
        <div
            style="background-image:url(https://cdn.pixabay.com/photo/2020/03/21/19/27/sea-4955005_960_720.jpg);">
        </div>
        <div 
            style="background-image:url(https://cdn.pixabay.com/photo/2017/02/19/15/28/malibu-2080075_960_720.jpg);">
        </div>
    </div>

    <div class="side-bar">
        <div>
            <span><i class="fas fa-angle-left"></i></span>
        </div>
        <div>
            <span><i class="fas fa-angle-right"></i></span>
        </div>
    </div>
</div>

<div class="recent-post-box con">
    최신글
    <div class="post-box con">
        <ul class="flex flex-space-bt">
            <li><a href="#"><img src="/resource/img/list-1.jpg" alt="" width="500"></a></li>
            <li><a href="#"><img src="/resource/img/list-2.jpg" alt="" width="500"></a></li>
            <li><a href="#"><img src="/resource/img/list-1.jpg" alt="" width="500"></a></li>
        </ul>
    </div>
</div>


<?php
include "../part/foot.php"
?>