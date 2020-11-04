const guzik1 = document.querySelector(".dodano1");
const guzik2 = document.querySelector(".dodano2");
const guzik3 = document.querySelector(".dodano3");
const btn1 = document.querySelector(".btn1");
const btn2 = document.querySelector(".btn2");
const btn3 = document.querySelector(".btn3");
let zmienna1 = 0 ;
let zmienna2 = 0 ;
let zmienna3 = 0 ;
btn1.addEventListener("click",()=>{
    if(zmienna1==0){
        guzik1.innerHTML = "Dodano!";
        zmienna1++;
    }else{
        guzik1.innerHTML = "Dodaj do koszyka!";
        zmienna1--;
    }
    
})
btn2.addEventListener("click",()=>{
    if(zmienna2==0){
        guzik2.innerHTML = "Dodano!";
        zmienna2++;
    }else{
        guzik2.innerHTML = "Dodaj do koszyka!";
        zmienna2--;
    }
    
})
btn3.addEventListener("click",()=>{
    if(zmienna3==0){
        guzik3.innerHTML = "Dodano!";
        zmienna3++;
    }else{
        guzik3.innerHTML = "Dodaj do koszyka!";
        zmienna3--;
    }
    
})