<!DOCTYPE html >
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta charset="UTF-8"/>
        <meta name="description" content="Search the world's infomation, and turn infomation into actions."/>
        <meta name="referrer" content="no-referrer"/>
        <link rel="stylesheet" type="text/css" href="static/css/styles.css"/>
        <link rel="stylesheet" type="text/css" href="static/css/fonts.css"/>
        <link title="Metastem Search" type="application/opensearchdescription+xml" href="/opensearch.xml?method=POST" rel="search"/>
        <link rel="stylesheet" type="text/css" href="<?php
                echo "static/css/";
                if (isset($_COOKIE["theme"]) || isset($_REQUEST["theme"]))
                    echo htmlspecialchars((isset($_COOKIE["theme"]) ? $_COOKIE["theme"] : $_REQUEST["theme"]) . ".css");
                else
                    echo "discord.css";
        ?>"/>
