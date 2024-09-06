<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Nav-Menu.css">
</head>
<body>
    <nav>
        <ul class="menu" id="mn">
            <li class="t"></li>
            <li class="m"><a href="Main.php"><span class="home-icon"></span><span id="remov" data-i18n="txt23">الرئيسية</span>  </a></li>
            <li class="dep m"><span class="dep-icon"></span><span id="remov" data-i18n="txt24">الأقسام</span>  
                <ul class="submenu">
                    <li><a href="courses.php" data-i18n="txt25">مقررات جامعية </a><hr></li>
                    <li><a href="searches.php" data-i18n="txt26">مشاريع تخرج</a><hr></li>
                    <li><a href="public.php" data-i18n="txt27">علمية عامة</a><hr></li>
                    <li><a href="public.php" data-i18n="txt28">ثقافية</a><hr></li>
                    <li><a href="public.php" data-i18n="txt29">اسلامية</a><hr></li>
                    <li><a href="public.php" data-i18n="txt30">تاريخية</a><hr></li>
                    <li><a href="public.php" data-i18n="txt31">اجتماعية</a><hr></li>                     
                    <li><a href="public.php" data-i18n="txt32">قصص وروايات</a><hr></li>
                    <li><a href="public.php" data-i18n="txt33">شعرية</a><hr></li>                                        
                </ul>
            </li>
            <li class="m"><a href="researches.php"><span class="searches-icon"></span><span id="remov" data-i18n="txt34">ابحاث ومشاريع</span> </a></li>
            <li class="publish m"> <span class="icon-send"></span><span id="remov" data-i18n="txt35">نشر</span>  
                <ul class="publish-menu">
                    <li><a href="publish-book.php" data-i18n="txt36">نشر كتاب</a><hr></li>
                    <li><a href="publish-research.php" data-i18n="txt37">نشر بحث</a><hr></li>
                    <li><a href="publish-project.php" data-i18n="txt38">نشر مشروع</a><hr></li>
                </ul>
            </li>            
            <li class="sign m">
                <span class="user-icon"></span>
                <ul class="login">
                        <li><a href="sign_in.php" data-i18n="txt39">إنشاء حساب</a><hr></li>
                        <li><a href="login.php" data-i18n="txt40">تسجيل الدخول</a> <hr></li>
                        </ul>        
            </li>
            <li>
                <input type="checkbox" id="check-search">
                <label for="check-search"><span class="search-icon"></span>                       
                </label>
                <input type="text" placeholder=" ابحث هنا ..." id="input-search">
                <label for="" id="input-search"><a href="https:\\www.google.com" data-i18n="txt41">بحث</a></label>                    
            </li>
            <li class="sign m">
                <h3 data-i18n="txt42">translation</h3>
                <select class="mt-2">
                    <option value="en" data-i18n="txt43">English</option>
                    <option value="ar" selected data-i18n="txt44">Arabic</option>
                </select>
            </li>               
        </ul> 
    </nav>
</body>
</html>

