<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="publish.css">  
  <title>إضافة مشروع</title>
</head>
<body dir="rtl">
  <nav>
    <?php include("Nav-Menu.php"); ?>
  </nav>

<br>
<br>
<br>
  <form action="" method="get">
  <fieldset class="content">
    <legend><b>نشر مشروع تخرج : </b></legend>
      <div class="ser">
        <label for="sub1">موضوع المشروع :</label>
        <input type="text" id="sub1" placeholder="موضوع المشروع:" required>
    </div>
    <div class="sec">                
      <label for="lab3">مجال المشروع</label>
      <select name="" id="lab3" >
      <option value="الدراسات الاسلامية">الدراسات الاسلامية</option>
      <option value="الفقة و الشريعة">الفقة و الشريعة</option>
      <option value="اللغة العربية">اللغة العربية</option>
      <option value="القانون و الحقوق">القانون و الحقوق</option>
      <option value="التاريخ">التاريخ</option>
      <option value="الفلك">الفلك</option>
      <option value="الجغرافيا">الجغرافيا</option>
      <option value="العلوم الطبية">العلوم الطبية</option>
      <option value="كيمياء">كيمياء</option>
      <option value="فيرياء">فيرياء</option>
      <option value="احياء">احياء</option>
      <option value="الحاسبات و التكنولوجيا">الحاسبات و التكنولوجيا</option>
      <option value="العلوم الزراعية">العلوم الزراعية</option>
      <option value="العلوم الاجتماعية">العلوم الاجتماعية</option>
      </select><br>
      <label for="lab4">مجال اخر :</label>
                <input type="checkbox" name="مجال اخر " id="lab4">
                <input type="text" id="lab" placeholder="مجال اخر ">
    </div>
         <label for="lab9">وصف المشروع :</label>
            <div class="desc">
                
              <textarea name="descrption" id="lab9" cols="30" rows="10" placeholder="وصف المشروع" required></textarea>
            </div>
          <div></div>
          <div class="subject">
              <label for="subject">ضمن المشروع هنا>></label>
              <input type="file" name="" id="subject" required>
          </div>     
      <label for="">عدد طلاب المشروع :</label>
      <label for="showText1">1</label>
      <input type="radio" id="showText1" name="showHide" checked>
      
      <label for="showText2">2</label>
      <input type="radio" id="showText2" name="showHide">
      
      <label for="showText3">3</label>
      <input type="radio" id="showText3" name="showHide">
    
      <div id="textBox1" class="textBox">
        <label for="text1">الطالب الأول:</label>
        <input type="text" id="text1" name="text1" placeholder="الطالب الأول" required>
      </div>
      
      <div id="textBox2" class="textBox">
        <label for="text2">الطالب الثاني:</label>
        <input type="text" id="text2" name="text2" placeholder="الطالب الثاني">
      </div>
      
      <div id="textBox3" class="textBox">
        <label for="text3">الطالب الثالث:</label>
        <input type="text" id="text3" name="text3" placeholder="الطالب الثالث" >
      </div>
      <label for="">البريد الالكتروني</label>
      <div id="textBox1" class="textBox" >
          <label for="tex1">البريد الالكتروني للطالب 1:</label>
          <input type="email" placeholder="البريد الالكتروني" id="tex1" required>
      </div>
      <div id="textBox2" class="textBox">
        <label for="tex2">البريد الالكتروني للطالب 2:</label>
        <input type="email" placeholder="البريد الالكتروني" id="tex2">
      </div>
      <div id="textBox3" class="textBox">
        <label for="tex3">البريد الالكتروني للطالب 3:</label>
        <input type="email" placeholder="البريد الالكتروني" id="tex3">
      </div>
      <label for="">الجنس</label>
      <div id="textBox1" class="textBox" >
        <label for="">جنس الطالب 1:</label>
        <label for="num1" id="num1">ذكر</label>
        <input type="radio" name="age1" value="ذكر"  id="num1" checked>
        <label for="num2" id="num2">انثى</label>
        <input type="radio" name="age1" value="انثى"  id="num2">
      </div>
      <div id="textBox2" class="textBox" >
        <label for="">جنس الطالب 2:</label>
        <label for="num1" id="num1">ذكر</label>
        <input type="radio" name="age2" value="ذكر"  id="num1" checked>
        <label for="num2" id="num2">انثى</label>
        <input type="radio" name="age2" value="انثى"  id="num2">
      </div>
      <div id="textBox3" class="textBox" >
        <label for="">جنس الطالب 3:</label>
        <label for="num1" id="num1">ذكر</label>
        <input type="radio" name="age3" value="ذكر"  id="num1" checked>
        <label for="num2" id="num2">انثى</label>
        <input type="radio" name="age3" value="انثى"  id="num2">
      </div>
      <div>
        <label for="">الدولة</label>
        <select name="" id="con" required>
          <option value="اليمن">اليمن</option>
          <option value="السعودية">السعودية</option>
          <option value="قطر">قطر</option>
          <option value="مصر">مصر</option>
          <option value="الامارات">الامارات</option>
          <option value="الكويت">الكويت</option>
          <option value="البحرين">البحرين</option>
          <option value="سلطنة عمان">سلطنة عمان</option>
          <option value="العراق">العراق</option>
          <option value="سوريا">سوريا</option>
        </select>
      </div>
      <div>
        <label for="unv">الجامعة :</label>
        <input type="text" placeholder="جامعة طلاب المشروع" id="unv" required>
      </div>
      <div>
        <label for="">الكلية:</label>
        <select name="" id="con" required>
          <option value="العلوم التطبيقية">العلوم التطبيقية</option>
          <option value="العلوم الإدارية">العلوم الإدارية</option>
          <option value="العلوم الطبية">العلوم الطبية</option>
          <option value="كلية الاداب">كلية الاداب</option>
          <option value="كلية التجارة">كلية التجارة</option>
          <option value="كلية القانون">كلية القانون</option>
          <option value="كلية الفنون">كلية الفنون</option>
          <option value="كلية الحاسبات">كلية الحاسبات </option>
      </select>
      </div>
      <div class="submit">
        <input type="submit" value="نشر">
      </div>
    </fieldset>
    </form>
    <br>
    <br>
    <br>
    <br>
    <footer>
        <?php include("footer.php"); ?>
  </footer>
</body>
</html>