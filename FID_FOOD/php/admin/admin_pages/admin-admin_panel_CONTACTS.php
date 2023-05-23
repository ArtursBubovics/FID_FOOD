<?php
include('../../general/general_backend/head.php');
include "admin-header_main.php";
?>

<div class="div_display-flex_justify-content-space-around w-100_percent_h-clac_100vh-80px div-positon_relative padding-60px">

    <?php 
    include('../../admin/admin_backend/contacts_take_img_for_admin.php');
    ?>

    <?php
    include('../../admin/admin_backend/contacts_take_data_for_admin.php');
    ?>

    <div class="hiddenAdminIconField" style="display: none;">
        <?php include "admin-pressing_admin_icon.php" ?>
    </div>

    <div class="hiddenBurgerMenuField" style="display: none;">
        <?php include "admin-burger_menu.php" ?>
    </div>
</div>

<script src="../../../js1/admin/admin-burger_menu.js"></script>
<script src="../../../js1/admin/admin-pressing_admin_icon.js"></script>
<script src="../../../js1/admin/admin-contacts_save_data.js"></script>
<script src="../../../js1/admin/admin-contacts_save_img.js"></script>