<?php
include('header.php');
?>



<div class="dicounts_news">
    <div class="dicounts_news-content">
        <div class="dicounts_news-content-header">
            <div class="tab">
                <button class="tablinks first_btn_text_style" id="discounts_btn">Akcijas</button>
                <button class="tablinks first_btn_text_style" id="news_btn">Ziņas</button>
            </div>
        </div>
        <div class="dicounts_news-content-body">
            <div id="dicounts" class="tabcontent">
                <div class="dicounts_news-body-content">
                    <?php
                    include('../../user/user_backend/discounts_take_img_for_user.php');
                    ?>
                </div>
            </div>

            <div id="news" class="tabcontent">
                <div class="dicounts_news-body-content">
                    <?php
                    include('../../user/user_backend/news_take_img_for_user.php');
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../../../js1/discounts_news/discounts_news.js"></script>
<script src="../../../js1/discounts_news/discounts_filter.js"></script>
<script src="../../../js1/cookies/discounts_news/cookies-check_is_discount_active.js"></script>
<script src="../../../js1/cookies/discounts_news/cookies-check_is_news_active.js"></script>