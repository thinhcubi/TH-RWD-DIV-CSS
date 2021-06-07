<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
       body{
           margin:0 auto;
           font-family: Aria,Tahoma;
       }
       #s-body{
           float: left;
       }
       #head,#head-link,#s-body,#footer{
           width: 100%;
           margin-bottom: 5px;
           clear: both;
       }
       @media screen and (max-width: 380px) {
           body{
               width: 360px;
               font-size: 10px;
           }

           #head{
               height: 30px;
               background-color: #F5F5F5;
               border: 1px solid #CDCDCD;
           }

           #head-link{
               height: 12px;
               line-height: 12px;
               border: 1px solid #CDCDCD;
               background-color: #F5F5F5;
           }

           #left{
               width: 100%;
               min-height: 40px;
               border: 1px solid #004C00;
               background-color: #004C00;
               clear: both;
               margin-bottom: 5px;
           }

           #content{
               width: 100%;
               min-height: 200px;
               border: 1px solid #CDCDCD;
               clear: both;
               float: left;
               margin: 0px;
           }

           #right{
               display: none;
               visibility: hidden;
           }

           #footer{
               height: 20px;
               clear: both;
               border: 1px solid #000;
               background-color: #000;
           }
       }
    </style>
</head>
<body>
<div id="main">
    <div id="head">
    </div>
    <div id="head-link">
    </div>
    <div id="s-body">
        <div id="left">
        </div>
        <div id="content">
        </div>
        <div id="right">
        </div>
    </div>
    <div id="footer">
    </div>
</div>

</body>
</html>
