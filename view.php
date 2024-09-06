<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Main.css">    
    <title>view Elements</title>
    <style>
        .box-content{
            width: 100%;
            overflow: auto; 
        }
        #dynamic{
            position: relative;
            display: block;
            display: flex;
            flex-direction: row;
            overflow: auto;
            margin: 15px;
            width: 600px;            
            height: 400px;            
            overflow: auto;
        }
        #dynamic img{
            width: 40%;
            height: 90%;
            margin: 10px;
            border: 1px dotted black;
            border-radius: 10px;
        }
        .box{
            font-size: 25px;
            padding: 25px;
            line-height: 40px;
            margin: 20px;
        }
        .box button{
            background-color: blue;
            font-size: 30px;
            text-align: center;
            padding: 5px 15px 5px 15px;
            border-radius: 10px;
            color: white;
            cursor: pointer;
            margin: 20px 0px 0px 20px;
        }

        .popup{            
            position: fixed;
            z-index: 9999;                        
            width: 100%;            
            margin: auto;
            background-color:white;            
            height: 77%;
            border: 1px solid black;
            border-radius: 10px; 
            bottom: 0px;       
        }

    </style>
    
</head>
<body dir="rtl">
        
    
    <nav>
     <?php include("Nav-Menu.php"); ?>
    </nav>
    <div class="box-content">
    <div id="dynamic">
        <img src="" alt="">
        <div class="box">                                            
            <h4> الكتاب :  </h4>
            <h5> الكاتب : <a href=""></a></h5>
            <h5>السعر : <mark><span dir="ltr"></span></mark></h5>                    
            <button id="item"  class="item">فتح</button>
            <button>تحميل</button>            
        </div>
    </div> 
</div>    
    <hr>
      
    <br>
        <h2> قد تعجبك  :</h2>
        <div class="authors">
                <div class="contain item">
                    <img src="bookimages/omar.jpg" alt="no photo">
                    <span class="cost"><b>$0.00</b></span>                                
                    <h4>رحلة عقل</h4>
                    <br>
                    <a href="Main.html"><b>عمرو شريف</b></a>                                            
                        
                </div>
      
                       
                <div class="contain item" id="item2">
                    <img src="bookimages/ibrahim.jpg" alt="no photo">
                    <span class="cost"><b>$10.00</b></span>
                    <h4>ايقظ قدراتك واصنع مستقبلك</h4>
                    <br>  
                    <a href="Main.html"><b>إبراهيم الفقي</b></a>                                                                                                            
                </div>
                <div class="contain item">
                    <img src="bookimages/raouf.jpg" alt="no photo">
                    <span class="cost"><b>$9.50</b></span>                                                                                
                    <h4>قصة نجاح</h4>
                    <br>
                    <a href="Main.html"><b>رءوف شبايك</b></a>                            
                </div>
                <div class="contain item">                        
                    <img src="bookimages/mustafa.jpg" alt="no photo">
                    <span class="cost"><b>$0.00</b></span>
                    <h4>تاريخ موجز للزمن</h4>                                                          
                    <br>                                                
                    <a href="Main.html"><b>مصطفى إبراهيم فهمي</b> </a>                                                                                                                  
                </div>   
                <div class="contain item">
                    <img src="bookimages/ibrahim.jpg" alt="no photo">
                    <span class="cost"><b>$10.00</b></span>    
                    <h4>ايقظ قدراتك واصنع مستقبلك</h4>                                            
                    <br>
                    <a href="Main.html"><b>إبراهيم الفقي</b></a>
                </div>
                <div class="contain item">
                    <img src="bookimages/mustafa.jpg" alt="no photo">
                    <span class="cost"><b>$0.00</b></span>
                    <h4>تاريخ موجز للزمن</h4> 
                    <br>                                                
                    <a href="Main.html"><b>مصطفى إبراهيم فهمي</b> </a>                                                                                             
                </div>                
                <div class="contain item">
                    <img src="bookimages/ibrahim.jpg" alt="no photo">
                    <span class="cost"><b>$10.00</b></span>
                    <h4>ايقظ قدراتك واصنع مستقبلك</h4>
                    <br>  
                    <a href="Main.html"><b>إبراهيم الفقي</b></a>                                                                                                            
                </div>
                <div class="contain item">
                        <img src="bookimages/raouf.jpg" alt="no photo">
                            <span class="cost"><b>$9.50</b></span>                                                                                
                            <h4>قصة نجاح</h4>  
                            <br>
                            <a href="Main.html"><b>رءوف شبايك</b></a>                            
                </div>
                <div class="contain item">
                    <img src="bookimages/omar.jpg" alt="no photo">
                    <span class="cost"><b>$0.00</b></span>                                
                    <h4>رحلة عقل</h4>
                    <br>
                    <a href="Main.html"><b>عمرو شريف</b></a>                                            
                        
                </div>                    
                <div class="contain item">
                    <img src="bookimages/ibrahim.jpg" alt="no photo">
                    <span class="cost"><b>$10.00</b></span>    
                    <h4>ايقظ قدراتك واصنع مستقبلك</h4>                                             
                    <br>
                    <a href="Main.html"><b>إبراهيم الفقي</b></a>
                </div>
    
                
        </div> 
        <br><br>
    <footer>
<?php include("footer.php"); ?>
    </footer>  
    <script src="window.js"></script>
</body>
</html>