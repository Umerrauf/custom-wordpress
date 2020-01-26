//ref all items we need to change


const menuIcon = document.getElementById("menu-icon");
const slideoutMenu = document.getElementById("slideout-menu");
const searchBox = document.getElementById("searchbox");
const searchIcon = document.getElementById("search-icon");



searchIcon.addEventListener('click',function(){
    
    if(searchBox.style.top == '72px'){
        
        searchBox.style.top='24px';
        searchBox.style.pointerEvents = 'none';
        }
    else{
        searchBox.style.top='72px';
        searchBox.style.pointerEvents = 'auto';
            
        }       
    
})


menuIcon.addEventListener('click',function(){
    if(slideoutMenu.style.opacity== "1"){
        slideoutMenu.style.opacity='0';
        slideoutMenu.style.pointerEvents ='none';
    }
    else{
        
        slideoutMenu.style.opacity='1';
        slideoutMenu.style.pointerEvents ='auto';
    }
    
    
})

