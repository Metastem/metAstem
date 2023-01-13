<?php require "misc/header.php"; ?>

    <title>metAstem</title>
    </head>
    <body>
        <form class="search-container" action="search.php" method="get" autocomplete="off">
                <h1><span class="anarchy">met<span class="a">A</span>stem</span></h1>
                <input type="text" name="q" autofocus/>
                <input type="hidden" name="p" value="0"/>
                <input type="hidden" name="t" value="0"/>
                <input type="submit" class="hide"/>
                <div class="search-button-wrapper">
                    <button name="t" value="0" type="submit">Search</button>
                    <button name="t" value="3" type="submit">Torrents</button>
                </div>
        </form>

<?php require "misc/footer.php"; ?>
