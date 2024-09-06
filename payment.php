<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="log_in.css">
    <title>  إضافة طريقة دفع</title>
  <style>
    .log{      
    width: 100%;
    margin-top: 30px;
    background-color: darkgray;
}
.log:hover{
    background-color: darkseagreen;
}
  </style>
</head>
<body>
    <div class="buy">
        <h2 dir="rtl">إضافة بطاقة الائتمان أو البطاقة البنكية</h2>
        <form action="" id="myform">
            <fieldset class="card-input" id="cardInput">
                <legend><b>رقم البطاقة</b></legend>
                <span class="card-logo" id="cardLogo"></span>
            <input type="text" id="cardNumber" placeholder="أدخل أرقام البطاقة" required>            
        </fieldset>
        <p class="error-message" id="errorMessage"></p>
        <br>
        <button type="submit" class="log">حفظ</button>
        </form>        
        
    </div>
  <script>
    document.getElementById("myform").addEventListener("submit",function(event){
        event.preventDefault();
                
        window.parent.postMessage({type:"loadNextPage"},"*");
    }); 
    var cardNumberInput = document.getElementById('cardNumber');
    cardNumberInput.focus();
    var cardLogoElement = document.getElementById('cardLogo');
    var cardInputElement = document.getElementById('cardInput');
    var errorMessageElement = document.getElementById('errorMessage');

    cardNumberInput.addEventListener('input', function() {
      var cardNumber = cardNumberInput.value;
      
      var cardLogo = determineCardLogo(cardNumber);
      cardLogoElement.style.backgroundImage = "url('" + cardLogo + "')";
    
      if (isValidCard(cardNumber)) {
        cardInputElement.classList.remove('invalid');
        errorMessageElement.textContent = '';
      } else {
        cardInputElement.classList.add('invalid');
        errorMessageElement.textContent = ' طريقة الدفع غير صحيحة اوغير معتمدة';
      }
    });
    cardNumberInput.addEventListener("blur",function(){
        if(cardNumberInput.value===''){
            cardNumberInput.classList.remove('invalid');
            errorMessageElement.textContent='';
        }

    });

    function determineCardLogo(cardNumber) {      
      if (cardNumber.startsWith('5')) {
        return 'images/mastercard1.png';
      } else if (cardNumber.startsWith('4')) {
        return 'images/visa.jpg';
      }else if(cardNumber.startsWith('3')) {
        return 'images/american_express.png';
      }else if (cardNumber.startsWith('6')) {
        return 'images/discover.jpg';
      }   if (cardNumber.startsWith('2')) {
        return 'images/kuraimi.png';
      }

      else {
        return 'images/default.png';
      }
    }

    function isValidCard(cardNumber) {
    var support=['5','4','3','2','6'];
    for( var i=0;i<support.length;i++){
        if((cardNumber.startsWith(support[i]) || cardNumberInput.value==='') && cardNumber.length <= 16 ){
            return true;
        }
    }
    return false;
    }
  </script>
</body>
</html>
