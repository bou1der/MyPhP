let i = 1;
const button = document.querySelectorAll('.Log > button');
button.forEach((elem) =>{
    elem.addEventListener('click', List)
});
console.log(button)
function List(){
    const front = document.querySelector('.front');
    const back  = document.querySelector('.back');
    
    i++
    if(i % 2 == 0)
    {
        front.style.transform = 'perspective(1500px) rotateY(-180deg)' ;
        back.style.transform = 'perspective(1500px) rotateY(-180deg)' ;
    }
    else
    {
        front.style.transform = 'perspective(1500px) rotateY(0deg)' ;
        back.style.transform = 'perspective(1500px) rotateY(0deg)' ;

    }
    
    
};