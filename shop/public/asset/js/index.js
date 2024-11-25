


//Register_form
var auth_form__register = document.getElementsByClassName("auth-form__register");
var header__navbar_register = document.getElementsByClassName("header__navbar-register");
var modal = document.getElementsByClassName("modal");

for(let i =0; i<header__navbar_register.length; i++){
    header__navbar_register[i].addEventListener('click', function(){
         modal[i].style.display = "flex";
    })
}
 
//Login_form
var header__navbar_login = document.getElementsByClassName("header__navbar-login");
var auth_form__login = document.getElementsByClassName("auth-form__login");

for(let i=0; i<header__navbar_login.length; i++){
    header__navbar_login[i].addEventListener('click', function(){
        modal[i].style.display = "flex";
        auth_form__register[i].style.display = "none";
        auth_form__login[i].style.display = "block";
    })
}

//Login_modal
var auth_form__btn_login = document.getElementsByClassName("auth-form__btn-login");
for(let i=0; i<auth_form__btn_login.length; i++){
    auth_form__btn_login[i].addEventListener('click', function(){        
        if(auth_form__login[i].style.display = "none"){
            auth_form__register[i].style.display = "none";
            auth_form__login[i].style.display = "block"; 
        }         
    });
}
//Register modal
var auth_form__btn_register = document.getElementsByClassName("auth-form__btn-register");
for(let i=0; i<auth_form__btn_register.length; i++){
    auth_form__btn_register[i].addEventListener('click', function(){
        if(auth_form__login[i].style.display = "block"){
            auth_form__register[i].style.display = "block";
            auth_form__login[i].style.display = "none"; 
        }         
    });
} 

//BACK_Modal
var auth_form__controls_back = document.querySelectorAll(".auth-form__controls-back");
for( var i= 0; i<auth_form__controls_back.length; i++){
    auth_form__controls_back[i].addEventListener('click', function(){
        var modalToClose = this.closest('.modal'); //Ấn Vào bất kỳ nút nào cũng được
        if (modalToClose) {
            modalToClose.style.display = "none";
        }
    })
}

  //Cách 2
  
  var search_items = document.querySelectorAll(".header__search-select li");
  var search_lable = document.querySelector(".header__search-select-lable");

search_items.forEach(item=> {
    item.addEventListener("click", function(){
        //Xóa bỏ tất cả tick
        search_items.forEach(item=> item.classList.remove("header__search-option-item--active"))
       //Thêm vào tại thuộc tính click
        this.classList.add("header__search-option-item--active");
        search_lable.innerHTML = (this === search_items[0])?"Trong Shop":"Ngoài Shop";
    })
})

// Footer_nav mobile
let user__nav_mobile_parent = document.querySelector('.user__nav_mobile'); 
let user__nav_mobile = document.querySelector('.user__nav_mobile .nav_icon i');
let form_log  = document.querySelector(".footer_nav :last-child ul");
user__nav_mobile.addEventListener('mouseover', function(){
    form_log.style.display = 'flex';
})

user__nav_mobile_parent.addEventListener('mouseleave', function(){
    form_log.style.display = 'none';
})


//Lua chọn  pc
// let btn_clock = document.querySelector('.category ul.category-list :first-child')
// let btn_shoes = document.querySelector('.category ul.category-list :nth-child(2)')
// let btn_shirt = document.querySelector('.category ul.category-list :nth-child(3)')

// let product_clock = document.querySelector('div.home-product.product-clock');
// let product_shoes = document.querySelector('div.home-product.product-shoes');
// let product_shirt = document.querySelector('div.home-product.product-shirt');

// let home_product = document.querySelectorAll('.home-product')

//Lua chọn  Mobile
let btn_clock_mobile = document.querySelector('.modal_mobile ul.category-list :first-child')
let btn_shoes_mobile = document.querySelector('.modal_mobile ul.category-list :nth-child(2)')
let btn_shirt_mobile = document.querySelector('.modal_mobile ul.category-list :nth-child(3)')

function showProduct(btn, product){
    btn.addEventListener('click', function(){
        for(let i=0; i<home_product.length; i++){
            home_product[i].classList.remove('product_1');
        }
        product.classList.add('product_1');
        modal_mobile.style.display = 'none';
    })
}

// showProduct(btn_shoes, product_shoes)
// showProduct(btn_clock, product_clock)
// showProduct(btn_shirt, product_shirt)

// showProduct(btn_clock_mobile, product_clock)
// showProduct(btn_shoes_mobile, product_shoes)
// showProduct(btn_shirt_mobile, product_shirt)

//Xử lý mobile
let modal_mobile = document.querySelector('.modal_mobile');
let btn_back = document.querySelector('.btn_back button')
btn_back.onclick = function(){
    modal_mobile.style.display = 'none';
}

let togle = document.querySelector('.bars');
togle.onclick = function(){
    if(modal_mobile.style.display === 'block'){
        modal_mobile.style.display = 'none';
    }else{
        modal_mobile.style.display = 'block';
    }    
}

//Khi click vào regis and login
let regis_mobile_btn = document.querySelector('.footer_nav ul.form_log li:first-child');
let login_mobile_btn = document.querySelector('.footer_nav ul.form_log li:last-child');

let auth_form__register_mobile = document.querySelector('.modal__layout-mobile .auth-form__register');
let auth_form__login_mobile = document.querySelector('.modal__layout-mobile .auth-form__login');

let modal_mobile_x = document.querySelector('.modal__layout-mobile')

//console.log(auth_form__register_mobile)
regis_mobile_btn.onclick = function(){
    auth_form__register_mobile.style.display = 'block';
    auth_form__login_mobile.style.display = 'none';
    modal_mobile_x.style.display = 'flex';
    form_log.style.display = 'none';
}

login_mobile_btn.onclick = function(){
    auth_form__login_mobile.style.display = 'block';
    auth_form__register_mobile.style.display = 'none';
    modal_mobile_x.style.display = 'flex';
    form_log.style.display = 'none';    
}

//check điều kiện





