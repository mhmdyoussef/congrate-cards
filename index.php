<?php



?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css" />
    <title>Document</title>
</head>
<body>
    
    <main class="container-fluid">
        <div class="row text-center mt-2">
            <div class="col-sm-12">
                <a href="https://aljawdahclinics.com" ><img class="img-responsive rounded img-fluid" src="https://i0.wp.com/aljawdahclinics.com/wp-content/uploads/2022/02/mylogo.png?fit=776%2C146&amp;ssl=1" title="mylogo" alt="mylogo" />
                </a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-12 col-md-2 mb-3 text-center">
                <img src="assets/images/01.jpeg" alt="" class="col-4 img-thumbnail" />
            </div>

            <div class="col-sm-12 col-md-10 mb-3 text-center">
                <img id="main-card" src="assets/images/01.jpeg" class="img-responsive rounded img-fluid" />
                <canvas id="canvas" width="1080" height="1080" class="img-fluid" style="display: none;"></canvas>
            </div>
        </div>
        <div class="row text-center">
            <section>
                
                <label for="text" class="form-label">الأسم المراد إضافته
                <input id="text" class="form-control" type="text" name="text" required /></label>

                <label for="color" class="form-label">لون الخط
                <input id="color" class="form-control" type="color" name="color" title="Choose your color"></label>

                <label for="font-name" class="form-label">نوع الخط
                <select id="font-name" class="form-select" name="font" title="Choose font type">
                    <option id="alJazeera" value="AlJazeera">الجزيرة</option>
                    <option id="neoSans" value="NeoSans">نيو</option>
                    <option id="stc" value="STC">أس تي سي</option>
                    <option id="tahoma" value="tahoma">تاهوما</option>
                    <option id="tahomabd" value="tahomabd">تاهوما عريض</option>
                </select></label>

                <label for="font-size" class="form-label">حجم الخط
                <select id="font-size" class="form-select" name="font_size" title="Choose font size">
                    <?php
                        for( $my = 14; $my < 80; $my += 4 ) {

                            echo "<option value=\"$my\">$my</option>";

                        }
                    ?>
                </select></label>

                <div class="d-grid gap-2 col-4 mx-auto">
                    <button onclick="addTextToImage()" class="btn btn-outline-primary">معاينة</button>
                    <button onclick="DownloadCanvasAsImage()" class="btn btn-danger">حفظ</button>
                </div>
                
            </section>
        </div>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>