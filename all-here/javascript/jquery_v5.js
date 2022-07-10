const felipe = document.querySelector('#text');
 
function texto (lipe){

const felipe2 = lipe.innerHTML.split('');
lipe.innerHTML = '';
felipe2.forEach((felipe3, i)=>{
setTimeout(()=>{
lipe.innerHTML+=felipe3;
 
},75*i);
});
}

texto(felipe);

