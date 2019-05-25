


var hinhMot = document.getElementById('hinh1');
var hinhHai = document.getElementById('hinh2');
var hinhBa = document.getElementById('hinh3');
 function doihinh() {
     if (hinhMot.style.display == 'block') {
         hinhMot.style.display = 'none';
         hinhHai.style.display  = 'block';
         hinhBa.style.display  = 'none';

     } else if (hinhHai.style.display == 'block') {
         hinhMot.style.display = 'none';
         hinhHai.style.display = 'none';
         hinhBa.style.display = 'block';
     } else{
        hinhMot.style.display ='block';
        hinhHai.style.display ='none';
        hinhBa.style.display = 'none';
     }
    setTimeout (doihinh, 2000);

 }
 setTimeout (doihinh, 2000);

