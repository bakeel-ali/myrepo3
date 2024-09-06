<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Main.css">
    <script src="window.js"></script>
    <title>نبذة عن المؤلف</title>
    <style>
        .box{
            width: 100%;
            overflow: auto;
        }
        #dynamic2{
            position: relative;
            overflow: auto;
            margin: 15px;
            width: 700px;            
            height: 350px;            
            overflow: auto;
            font-size: 25px;
            line-height: 40px;            
        }
        #dynamic2 img{
            float: right;
            width: 30%;
            height: 50%;
            margin: 30px 0px 0px 40px;
            border: 1px dotted black;
            border-radius: 100%;            
            shape-outside: circle(100px);            
        }
        #dynamic2 h4{
            margin: 35px -20px 0px 0px;
        }
    </style>
</head>
<body dir="rtl">
    <nav>
     <?php include("Nav-Menu.php"); ?>
    </nav>
    <div class="box">
    <div id="dynamic2">
            <img src="" alt="">
            <!-- <div class="box">                                             -->
                <h4>الكاتب/المؤلف:  <a href=""></a></h4>
                <h5> </h5>
                <dl>
                    <dt>حول المؤلف :</dt>
                    <dd>اشهر كتبه , مجالة </dd>
                    <dd> منجزاته ,جنسيتة ...الخ</dd>
                </dl>         
            <!-- </div>           -->
        </div>
    </div>
        <br>
        <h2>اخرين :</h2>
        <div class="author">
            <div class="menu-authors">
                    <img src="images/user1.jpg" alt="">
                    
                    <a href="Main.html"><b>خباب الشاهري </b></a>
                    <h5> <b> عدد المؤلفات:</b>10</h5>                                                         
            </div>
            <div class="menu-authors">
                    <img src="images/user.png" alt="">
                    
                    <a href="Main.html"><b>راجي الساروي </b></a>
                    <h5> <b> عدد المؤلفات:</b>12</h5>                                                         
            </div>   
            <div class="menu-authors">
                    <img src="images/khbab.jpg" alt="">
                    
                    <a href="Main.html"><b>بكيل الادريسي</b></a>
                    <h5> <b> عدد المؤلفات:</b>15</h5>                                                         
            </div> 
            <div class="menu-authors">
                    <img src="images/khbab.jpg" alt="">
                    
                    <a href="Main.html"><b>خباب الشاهري </b></a>
                    <h5> <b> عدد المؤلفات:</b>10</h5>                                                         
            </div> 
            <div class="menu-authors">
                <img src="images/khbab.jpg" alt="">
                
                <a href="Main.html"><b>خباب الشاهري </b></a>
                <h5> <b> عدد المؤلفات:</b>10</h5>                                                         
            </div>
            <div class="menu-authors">
                    <img src="images/user.png" alt="">
                    
                    <a href="Main.html"><b>راجي الساروي </b></a>
                    <h5> <b> عدد المؤلفات:</b>12</h5>                                                         
            </div>
            <div class="menu-authors">
                    <img src="images/khbab.jpg" alt="">
                    
                    <a href="Main.html"><b>بكيل الادريسي</b></a>
                    <h5> <b> عدد المؤلفات:</b>15</h5>                                                         
            </div> 
                            
        </div>
        <footer>
<?php include("footer.php"); ?>
    </footer>         
</body>
</html>