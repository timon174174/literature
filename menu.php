<?php
include 'connect.php';
?>
<style>
    body {
        padding: 10px;
        font-family: "Arial", sans-serif;
        font-size: 14px;
        line-height: 1.4;
    }

    .main-menu {
        width: 180px;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .main-menu a {
        display: block;
        margin-bottom: -1px;
        padding: 8px 14px;
        text-decoration: none;
        color: #0088cc;
        border: 1px solid #e5e5e5;
    }

    .main-menu a:hover {
        background: #f5f5f5;
    }

    .main-menu > li {
        position: relative;
    }

    .sub-menu > li {
        position: relative;
    }

    .main-menu .sub-menu {
        position: absolute;
        top: 5px;
        left: 170px;
        z-index: 10;
        width: 180px;
        margin: 0;
        padding: 0;
        list-style: none;
        background: #fcf8e3;
        display: none;
    }

    .sub-menu .sub-menu2 {
        position: absolute;
        top: 5px;
        left: 170px;
        z-index: 10;
        width: 180px;
        margin: 0;
        padding: 0;
        list-style: none;
        background: #fcf8e3;
        display: none;
    }

    /* Cелектор для подменю, если навести мышь */
    /* на родительский элемент верхнего меню */

    .main-menu > li:hover .sub-menu {
        display: block;
    }
    .sub-menu > li:hover .sub-menu2{
        display:block;
    }
</style>
<ul class="main-menu">
    <?
    $sql = "select * from author";
    $result = mysql_query($sql);
    while ($data = mysql_fetch_array($result)) {
        ?>
        <li>
            <?
            echo "<a href='#'>" . $data['surname'] . "</a>";
            $sql2 = "select * from media where id_author=$data[id_author]";
            $result2 = mysql_query($sql2);
            ?>
            <ul class="sub-menu">
                <li><a href="#">Произвведения</a></li>
                <li><a href="#">Лекции</a>
                    <ul class="sub-menu2">
                        <?
                        while ($data2 = mysql_fetch_array($result2)) {
                            ?>

                            <? echo "<li><a href='#'>$data2[name]</a></li>"; ?>

                            <?
                        }
                        ?>
                    </ul>
                </li>

            </ul>
        </li>
        <?
    }
    ?>
</ul>
