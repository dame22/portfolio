<?
    include_once $_SERVER['DOCUMENT_ROOT']."/head.php";
?>

    <link rel="stylesheet" href="asset/css/portfolio_style.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="crossorigin="anonymous"></script>
    <script src='asset/js/port.js'></script>
    </head>
    <body>

        <div id="wrap">
            <?
                include_once $_SERVER['DOCUMENT_ROOT']."/navi.php";
            ?> 

            <section class="text">
                <p class="typing"></p>
                <p class="typing-txt">PORTFOLIO</p>
            </section>

            <section id="mySites">            
                <section id="list">
                    <?
                        include_once $_SERVER['DOCUMENT_ROOT']."/port_list.php";
                    ?> 
                </section>
            </section>


        </div>
</body>
</html>