<?php
// Подключение к базе данных
$mysql = new mysqli('localhost','root','','fid_food_db');

if ($mysql->connect_errno) {
    echo 'Не удалось подключиться к MySQL: ' . $mysql->connect_error;
    exit;
}

// Выполнение SQL-запроса для получения одной строки данных
$sql = "SELECT foto, facebook_link, twitter_link, instagram_link FROM kontakts";
$result = $mysql->query($sql);

if ($result && $result->num_rows > 0) {
    // Получение результирующей строки
    $row = $result->fetch_assoc();

    // Получение значений из результирующей строки
    $value1 = $row['foto'];    
    $value2 = $row['facebook_link'];
    $value3 = $row['twitter_link'];
    $value4 = $row['instagram_link'];

    $sql = "SELECT foto, facebook_link, twitter_link, instagram_link FROM kontakts";
    $result_kontakts = $mysql->query($sql);
    
    // Получение результирующей строки
    $row_foto_and_links = $result_kontakts->fetch_assoc();
    
    //----
    $sql = "SELECT laiks FROM darba_laiks";
    $result_darba_laiks = $mysql->query($sql);
    
    // Получение результирующей строки
     $row_work_time = $result_darba_laiks->fetch_assoc();
    
     $value5 = $row_work_time['laiks'];
    //----
    $sql = "SELECT adrese FROM adrese";
    $result_adrese = $mysql->query($sql);
    
    // Получение результирующей строки
     $row_addresses = $result_adrese->fetch_assoc();
    
     $value6 = $row_addresses['adrese'];
    //----
    $sql = "SELECT talrunis FROM talrunis";
    $result_talrunis = $mysql->query($sql);
    
    // Получение результирующей строки
     $row_phone = $result_talrunis->fetch_assoc();
     $value7 = $row_phone['talrunis'];
    //----
    $sql = "SELECT pasts FROM pasts";
    $result_pasts = $mysql->query($sql);
    
    // Получение результирующей строки
     $row_gmail = $result_pasts->fetch_assoc();
    
    $value8 = $row_gmail['pasts'];

    // Заполнение содержимого <p> с использованием полученных значений
    echo "<div class='kontakti-content-foto div_display-flex'>";
    echo "<div class='kontakti-content-foto-container'>";
        echo "<img src='$value1' class='img-kontakti-content-foto' alt=''>";
        echo "<div class='kontakti-content-foto-container-social_network'>";
            echo '<div class="kontakti-content-foto-container-social_network-header">';
            echo '    <h3 class="h3-size_23px font-weight_normal">MEKLĒ MŪS ARĪ:</h3>';
            echo '</div>';
            echo '<div class="kontakti-content-foto-container-social_network-body">';
            echo '    <div class="kontakti-content-foto-container-social_network-body-buttons">';
            echo '        <a href="' . $value2 . '" target="_balnk">';
            echo '            <img src="../../../img1/facebook_icon.png" class="img-social_network" alt="">';
            echo '        </a>';
            echo '    </div>';
            echo '    <div class="kontakti-content-foto-container-social_network-body-buttons">';
            echo '        <a href="' . $value3 . '" target="_balnk">';
            echo '            <img src="../../../img1/twitter_icon.png" class="img-social_network" alt="">';
            echo '        </a>';
            echo '    </div>';
            echo '    <div class="kontakti-content-foto-container-social_network-body-buttons">';
            echo '        <a href="' . $value4 . '" target="_balnk">';
            echo '            <img src="../../../img1/instagram_icon.png" class="img-social_network" alt="">';
            echo '        </a>';
            echo '    </div>';
            echo '</div>';
        echo '</div>';
    echo '</div>';
    echo '<div class="kontakti-content-text">';
        echo '    <div class="kontakti-content-header">';
        echo '        <h2>KONTAKTI</h2>';
        echo '    </div>';
        echo '    <div class="kontakti-content-body">';
        echo '        <div class="kontakti-content-body-content">';
        echo '            <div class="kontakti-body-content-fields">';
        echo '                <div class="kontakti-body-img">';
        echo '                    <img class="kontakti-body-img-less" src="../../../img1/pin-mark-icon.png" alt="">';
        echo '                </div>';
        echo '                <div class="kontakti-body-text">';
        echo '                    <div class="header-text">';
        echo '                        <h3>ADRESE</h3>';
        echo '                    </div>';
        echo '                    <div class="body-text">';
        echo '                        <p>'. $value5 .'</p>';
        echo '                    </div>';
        echo '                </div>';
        echo '            </div>';
        echo '            <div class="kontakti-body-content-fields">';
        echo '                <div class="kontakti-body-img">';
        echo '                    <img class="kontakti-body-img-less" src="../../../img1/icon-telephone.png" alt="">';
        echo '                </div>';
        echo '                <div class="kontakti-body-text">';
        echo '                    <div class="header-text">';
        echo '                        <h3>TALRUNIS</h3>';
        echo '                    </div>';
        echo '                    <div class="body-text">';
        echo '                        <p>'. $value6 .'</p>';
        echo '                    </div>';
        echo '                </div>';
        echo '            </div>';
        echo '            <div class="kontakti-body-content-fields">';
        echo '                <div class="kontakti-body-img">';
        echo '                    <img class="kontakti-body-img-less" src="../../../img1/icon-clock.png" alt="">';
        echo '                </div>';
        echo '                <div class="kontakti-body-text">';
        echo '                    <div class="header-text">';
        echo '                        <h3>DARBA LAIKS</h3>';
        echo '                    </div>';
        echo '                    <div class="body-text">';
        echo '                        <p>'. $value7 .'</p>';
        echo '                    </div>';
        echo '                </div>';
        echo '            </div>';
        echo '            <div class="kontakti-body-content-fields">';
        echo '                <div class="kontakti-body-img">';
        echo '                    <img class="kontakti-body-img-less" src="../../../img1/icon-envelope.png" alt="">';
        echo '                </div>';
        echo '                <div class="kontakti-body-text">';
        echo '                    <div class="header-text">';
        echo '                        <h3>E-pasts</h3>';
        echo '                    </div>';
        echo '                    <div class="body-text">';
        echo '                        <p>'. $value8 .'</p>';
        echo '                    </div>';
        echo '                </div>';
        echo '            </div>';
        echo '        </div>';
        echo '    </div>';
    echo '</div>';
}

// Закрытие соединения с базой данных
$mysql->close();
?>
