// Script for navigation bar
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
})

const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if (bar){
    bar.addEventListener('click', () => {
        nav.classList.add('active');
    })
}
if (close){
    close.addEventListener('click', () => {
        nav.classList.remove('active');
    })
}


const signUpButton=document.getElementById('signUpButton');
const signInButton=document.getElementById('signInButton');
const signInForm=document.getElementById('signIn');
const signUpForm=document.getElementById('signup');

signUpButton.addEventListener('click',function(){
    signInForm.style.display="none";
    signUpForm.style.display="block";
})
signInButton.addEventListener('click', function(){
    signInForm.style.display="block";
    signUpForm.style.display="none";
})


// let ArrProducts =[
//     {
//             "id": 1,
//             "name":" LD01 LOUNGE CHAIR",
//             "price": 200,
//             "image": "products/f1.jpg",
//             "brand-name":"adidas",
//             "description": "Cartoon Astronaut T-Shirts"
//     },
//     {
//         "id": 2,
//         "name":" LD02 LOUNGE CHAIR",
//         "price": 300,
//         "image": "products/f2.jpg",
//         "brand-name":"adidas",
//         "description": "Cartoon Astronaut T-Shirts"
// },
// {
//     "id": 3,
//     "name":" LD03 LOUNGE CHAIR",
//     "price": 500,
//     "image": "products/f3.jpg",
//     "brand-name":"adidas",
//     "description": "Cartoon Astronaut T-Shirts"
// },
// {
//     "id": 4,
//     "name":" LD04 LOUNGE CHAIR",
//     "price": 400,
//     "image": "products/f4.jpg",
//     "brand-name":"adidas",
//     "description": "Cartoon Astronaut T-Shirts"
// },
// {
//     "id": 5,
//     "name":" LD05 LOUNGE CHAIR",
//     "price": 800,
//     "image": "products/f5.jpg",
//     "brand-name":"adidas",
//     "description": "Cartoon Astronaut T-Shirts"
// },
// {
//     "id": 6,
//     "name":" LD06 LOUNGE CHAIR",
//     "price": 700,
//     "image": "products/f6.jpg",
//     "brand-name":"adidas",
//     "description": "Cartoon Astronaut T-Shirts"
// },
// {
//     "id": 7,
//     "name":" LD07 LOUNGE CHAIR",
//     "price": 800,
//     "image": "products/f7.jpg",
//     "brand-name":"adidas",
//     "description": "Cartoon Astronaut T-Shirts"
// },
// {
//     "id": 8,
//     "name":" LD08 LOUNGE CHAIR",
//     "price": 500,
//     "image": "products/f8.jpg",
//     "brand-name":"adidas",
//     "description": "Cartoon Astronaut T-Shirts"
// },
// ]

// const body = document.getElementById('product1');
// console.log('body');
// products = document.getElementsByClassName("product-container");

// function onInIt(){
//     ArrProducts.forEach((item, key) => {
//         let prodiv = document.createElement("div");
//         prodiv.classList.add("item");

//         prodiv.innerHTML=`
//         <img src="img//${item.image}"/}
//         `;
//        products.appendChild(prodiv);
//     });
// }
// onInIt();



