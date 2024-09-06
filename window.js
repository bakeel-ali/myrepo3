document.addEventListener('DOMContentLoaded',function(){
    const items=document.querySelectorAll('.item');
    items.forEach(function(item){
        item.addEventListener('click',function(){
            // const itemId=item.id;                    
            const imgsr=item.querySelector('img').src;                
            
            const itemtitle=item.querySelector('h4').innerText;
            const itemsp=item.querySelector('span').innerText;
            const itema=item.querySelector('a').innerText;
            const itemhref=item.querySelector('a').href;  
            const dataToPass={
                // id:itemId, 
                title:itemtitle,                       
                imagesr:imgsr,
                spani:itemsp,
                al:itema,
                alink:itemhref                             
            };
            const encoded=encodeURIComponent(JSON.stringify(dataToPass));
            window.location.href="view.php?data="+encoded;                    
        });
    });
});
document.addEventListener('DOMContentLoaded',function(){
    const items=document.querySelectorAll('.menu-authors');
    items.forEach(function(item){
        item.addEventListener('click',function(){                              
            const imgsr=item.querySelector('img').src;                
            
            const itemtitle=item.querySelector('h5').innerText;            
            const itema=item.querySelector('a').innerText;
            const itemhref=item.querySelector('a').href;  
            const dataToPass={            
                title:itemtitle,                       
                imagesr:imgsr,                
                al:itema,
                alink:itemhref                             
            };
            const encoded=encodeURIComponent(JSON.stringify(dataToPass));
            window.location.href="authors_page.php?Authors="+encoded;                    
        });
    });
});
document.addEventListener('DOMContentLoaded',function(){
    const quer=window.location.search;
    const urlp= new URLSearchParams(quer);        
    const encodedD=urlp.get("Authors");
    const decoded=JSON.parse(decodeURIComponent(encodedD));
    const dyp=document.getElementById("dynamic2");
    
    const ime=dyp.querySelector('img');    
    const itemtitle=dyp.querySelector('h5');        
    const al1=dyp.querySelector('a'); 
    
    ime.src=decoded.imagesr;    
    itemtitle.innerText+=decoded.title;         
    al1.innerText=decoded.al;
    al1.href=decoded.alink; 
    });
document.addEventListener('DOMContentLoaded',function(){
    const quer=window.location.search;
    const urlp= new URLSearchParams(quer);        
    const encodedD=urlp.get("data");
    const decoded=JSON.parse(decodeURIComponent(encodedD));
    const dyp=document.getElementById("dynamic");
    
    const ime=dyp.querySelector('img');
    const span1=dyp.querySelector('span');
    const itemtitle=dyp.querySelector('h4');        
    const al1=dyp.querySelector('a'); 
    
    ime.src=decoded.imagesr;
    span1.innerText=decoded.spani;
    itemtitle.innerText+=decoded.title;         
    al1.innerText=decoded.al;
    al1.href=decoded.alink;             
    var imagepath=ime.src;
    var imagename=imagepath.substring(imagepath.lastIndexOf("/")+1,imagepath.lastIndexOf("."));     
    const btn=dyp.querySelector('.item');
    btn.addEventListener('click',function nextpage(){
        var popup=document.createElement('div');
        popup.className='popup';
        var close=document.createElement('span');
        close.className='close';
        close.innerText='X';
        var ifram=document.createElement('iframe'); 
        ifram.className='iframe1';          
        ifram.src="log.html";
        ifram.style.width='100%';
        ifram.style.height='90%';

        close.addEventListener('click',function(){
            popup.style.display='none';
        }); 
        window.addEventListener("message",function(event){                
            if(event.data.type==="loadNextPage"){      
                var currentSrc=ifram.src;
                if(currentSrc.endsWith('log.html')){
                    if(span1.innerText==="$0.00"){
                        ifram.src="book/"+imagename+".pdf";
                    }
                    else{
                        ifram.src="payment.php";
                    }
                }else if(currentSrc.endsWith('payment.php')){
                    ifram.src="book/"+imagename+".pdf";
                }      
            }
        });
        popup.appendChild(close);           
        popup.appendChild(ifram);
        document.body.appendChild(popup);     
    });        
});
const m=document.getElementById('modal');
const c=document.getElementsByClassName('close')[0];
c.addEventListener('click',function(){
    m.style.display='none';
});
let d=false;
let x=0;
let y=0;
m.addEventListener('mousedown',function(e){
    d=true;
    x=e.clientX-m.offsetLeft;
    y=e.clientY-m.offsetTop;
});
document.addEventListener('mousemove',function(e){
    if(d){
        const offsetx=e.clientX-x;
        const offy=e.clientY-y;
        m.style.left=offsetx+'px';
        m.style.top=offy+'px';
    }
});
document.addEventListener('mouseup',function(){
    d=false;
});



