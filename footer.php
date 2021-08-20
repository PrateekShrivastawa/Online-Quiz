<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="js/date_time.js"></script>
    <style>
body{
    margin:0px;
    padding:0px;
}
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: black;
  color: white;
  text-align: center;
}
</style>
</head>
<body>
<div class="footer">
<p>Copyright@ Team Let's Practice(GLAU)<br>
<span id="date_time"></span>
            <script type="text/javascript">window.onload = date_time('date_time');</script>
</div>
</body>
</html>