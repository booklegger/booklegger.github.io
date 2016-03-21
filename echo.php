<?php

    function rowboat($name,$value) {
        $safename = htmlspecialchars($name);
        $safevalue = htmlspecialchars($value);
        echo "           <tr>";
        echo "              <th>$safename</th>\n";
        echo "              <td>$safevalue</td>\n";
        echo "           <tr>";        
    }

    function parsec() {
        $names = array('REQUEST_METHOD','REQUEST_URI','HTTP_USER_AGENT','REMOTE_ADDR','REMOTE_PORT');
        foreach ($names as $name) {
            rowboat($name,$_SERVER[$name]);
       }
    }

    function parcelPost() {
        foreach ($_POST as $name => $value) {
            rowboat($name,$value);
        }
    }
    
    function parseQueryString() {
        foreach ($_GET as $name => $value) {
            rowboat($name,$value);
          } 
    }
?>
<html>  
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" type="image/png" href="/art/sm4s.png" />
    <style>
        body {
            font-family: monospace; 
            background-color: #303030;
            color: #F8F8F8;
            width: 95%;   
            text-align: center;   
        }
        .banner {
            margin: auto;
            width: 90%;
            padding: 20px;
            text-align: center;
        }
        .datatable {
            margin: auto;
            width: 90%;       
        }
        .section {
            background-color: #F8F8F8;
            color: #303030;  
            font-variant: small-caps;
            font-weight: normal;
            font-size: 8pt;
            color: #050505;     
            text-align: center;      
        }
        th,td {
            color: #F8F8F8;
            border: dotted;
            border-width: 0.1em;
            border-color: #A1A1A1;
        }
        th {
            width: 15%;
            padding-right: 0.25em;
            text-align: right;
            text-transform: uppercase;
            font-variant: small-caps;
            font-weight: normal;
            font-size: 8pt;
            color: #A8A8A8;
        }
        td {
            width: 85%;
        }

    </style>
    <title>subtle? <?= $_SERVER['REMOTE_ADDR'] ?></title>     
</head>
<body>
    <div class="banner">
        ______________/\\\\\\\\\______/\\\\\\\\\\\\\\\__/\\\\\\\\\\\\\\\__/\\\\____________/\\\\___________<br>         
        &nbsp____________/\\\///////\\\___\///////\\\/////__\/\\\///////////__\/\\\\\\________/\\\\\\___________<br>        
        &nbsp&nbsp___________\/\\\_____\/\\\_________\/\\\_______\/\\\_____________\/\\\//\\\____/\\\//\\\___________<br>       
        &nbsp&nbsp&nbsp___________\/\\\\\\\\\\\/__________\/\\\_______\/\\\\\\\\\\\_____\/\\\\///\\\/\\\/_\/\\\___________<br>      
        &nbsp&nbsp&nbsp&nbsp___________\/\\\//////\\\__________\/\\\_______\/\\\///////______\/\\\__\///\\\/___\/\\\___________<br>     
        &nbsp&nbsp&nbsp&nbsp&nbsp___________\/\\\____\//\\\_________\/\\\_______\/\\\_____________\/\\\____\///_____\/\\\___________<br>    
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp___________\/\\\_____\//\\\________\/\\\_______\/\\\_____________\/\\\_____________\/\\\___________<br>   
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp___________\/\\\______\//\\\_______\/\\\_______\/\\\_____________\/\\\_____________\/\\\___________<br>  
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp___________\///________\///________\///________\///______________\///______________\///____________<br>         
    </div>
    
    <table id="headers" class="datatable"> 
        <thead>
            <tr>
                <th colspan=2 class="section">
                    HEADERS
                </th>
            </tr>
        </thead>
        <tbody>
<? parsec() ?>     
        <tbody>
    </table>
  
    <table id="querystring" class="datatable">
        <thead>
            <tr>
                <th colspan=2 class="section">
                    QUERY STRING
                </th>
            </tr>
        </thead>
        <tbody>
<? parseQueryString() ?>
        <tbody>
    </table>
  
    <table id="postdata" class="datatable">
        <thead>
            <tr>
                <th colspan=2 class="section">
                    POST DATA
                </th>
            </tr>
        </thead>
        <tbody>
<? parcelPost(); ?>
        <tbody>
    </table>

</body>