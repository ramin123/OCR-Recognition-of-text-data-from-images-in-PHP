<!DOCTYPE html>
<html lang="en">
<head>
    <title>OCR распознавания текстовых данных по изображениям</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/html2canvas.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>

   <nav class="navbar navbar-custom">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#jacos-menu">
                <span class="sr-only">Переключить навигацию</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="font-size: 22px;font-weight: bolder;" href="#">OCR распознавания текстовых данных по изображениям</a>
        </div>
        <div id="jacos-menu" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><button class="btn btn-success">Преобразование изображения в текст</button></a></li>
               

            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="main-content bg-white">
        <div class="row border-between">
            <div class="col-sm-6">
                <h4>Загрузить изображение</h4><hr>
                <div class="panel panel-default text-center">
                    <div class="panel-body">
                        <button id="btn-upload" class="btn btn-primary">Выбрать файл</button>
                        <input id="file-input" type="file" name="imgfile" style="display:none">
                    </div>
                </div>

                <div id="orginal-image" class="panel panel-default" style="display:none">
                    <p style="padding-top: 5px;margin-bottom: 0px;padding-left: 10px;" class="text-warning">Оригинальное изображение</p>
                    <div class="panel-body">
                        <img src=""/>
                        <div id="classified-image-canvas"></div>
                    </div>
                </div>

            </div>
            <div class="col-sm-6">
                <h4>Текстовый вывод</h4><hr>
                <div id="no-image" class="text-left">
                    
                </div>
                <div id="loading" class="text-center" style="display:none;">
                    <img height="150" src="assets/images/loading.gif"/>
                    <h4>Пожалуйста, подождите, происходит извлечение текста....</h4>
                </div>

                <div style="display:none;" id="output-box">
                </div>
            </div>
        </div>

    </div>
</div>
<br>
<br>
<br>
<script src="assets/js/script.js"></script>

 
<nav class="navbar navbar-custom " >
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" style="font-size: 22px;font-weight: bolder;"	>Created By Rohullah Amin Year &copy; <?=date('Y')?><a href="" target="_blank"></a>
        </div>
        
    </div>
</nav>

</body>


</html>