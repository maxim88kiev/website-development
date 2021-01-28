<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #block {
            width: 200px;
            height: 200px;
            border: 1px solid black;
            text-align: center;
            line-height: 200px;
        }
        #block:target {
            background: aquamarine;
        }
    </style>
</head>
<body>
    <div id="block">
        test
    </div>
    <a href="#block">green</a>
    <a href="#">ne green</a>
</body>
</html>
