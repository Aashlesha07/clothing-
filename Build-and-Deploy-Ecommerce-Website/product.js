const products = [
    {
        id:1,
        img: 'img/products/f1.jpg',
        brand: 'adidas',
        name: 'Cartoon Astronaut T-Shirts',
        price: 78,
        stars: 5
    },
    {
        id:2,
        img: 'img/products/f2.jpg',
        brand: 'adidas',
        name: 'Cartoon Astronaut T-Shirts',
        price: 78,
        stars: 5
    },
    {
        id:3,
        img: 'img/products/f3.jpg',
        brand: 'adidas',
        name: 'Cartoon Astronaut T-Shirts',
        price: 78,
        stars: 5
    },
    {
        id:4,
        img: 'img/products/f7.jpg',
        brand: 'adidas',
        name: 'Cartoon Astronaut T-Shirts',
        price: 78,
        stars: 5
    },
    {
        id:5,
        img: 'img/products/f6.jpg',
        brand: 'adidas',
        name: 'Cartoon Astronaut T-Shirts',
        price: 78,
        stars: 5
    },
    // Add more products as needed...
];

const productsList = document.getElementById('products-list');
let checkOutList = [];
// Function to generate stars
function generateStars(stars) {
    let starHtml = '';
    for (let i = 0; i < stars; i++) {
        starHtml += `<i class="fas fa-star"></i>`;
    }
    return starHtml;
}

// Loop through products array and render each product
products.forEach((product) => {
    const productHTML = `
        <div class="item">
            <div class="pro">
                <img src="${product.img}" alt="${product.name}" >
                <div class="des">
                    <span>${product.brand}</span>
                    <h5>${product.name}</h5>
                    <div class="star">
                        ${generateStars(product.stars)}
                    </div>
                    <h4>$${product.price}</h4>
                </div>
                <a href="#" class="add-to-cart" onclick="addToCart(${product.id})" data-id="${product.id}"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        </div>
    `;
    
    // Append the product HTML to the products list
    productsList.innerHTML += productHTML;
});



// Declare the variable and create the div element
const prodiv = document.createElement('div');

// Now you can use prodiv to modify or add to the DOM
prodiv.className = 'pro';  // Example of adding a class to the div
document.body.appendChild(prodiv);  // Append the div to the body or other container

// Add product to cart
function addToCart(productId) {
   console.log(products[productId]);
};