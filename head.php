<!DOCTYPE HTML>
<?
include 'connect.php';
?>
<html>
<head>
    <title>Литература XIX века</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!--[if lte IE 8]>
    <script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css"/>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollzer.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <!--[if lte IE 8]>
    <script src="assets/js/ie/respond.min.js"></script><![endif]-->
    <script src="assets/js/main.js"></script>

    <script src="assets/js/scroll.js"></script>
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="assets/css/ie8.css"/><![endif]-->
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="assets/css/ie9.css"/><![endif]-->
</head>
<body>
<style>
    .main-menu {
        width: 180px;
        margin: 0;
        padding: 0;
        list-style: none;
        float: right;
    }

    .main-menu a {
        display: block;
        margin-bottom: -1px;
        padding: 5px 5px;
        text-decoration: none;
        color: #0088cc;
        border-bottom: none;
        font-size: 17px;
    }

    .main-menu a:hover {
        background: #082727;
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

    .sub-menu > li:hover .sub-menu2 {
        display: block;
    }
</style>
<!-- Header -->
<div id="header">

    <div class="top">

        <!-- Logo -->


        <!-- Nav -->
        <nav>

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

        </nav>

    </div>

</div>
	