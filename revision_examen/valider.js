function valider(){
   prix= document.getElementById('prix');
   qte= document.getElementById('qte');
   f= document.getElementById('f');
   if(prix.value.trim()==""){
alert('le prix est requis')
   }else if(isNaN(prix.value)){
alert('le prix doit etre numerique')
   }else    if(qte.value.trim()==""){
alert('le qte est requis')
   }else if(isNaN(qte.value)){
alert('le qte doit etre numerique')
   }else{
f.submit();
   }
 
}