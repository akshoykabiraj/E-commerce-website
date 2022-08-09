let carts = document.querySelectorAll('.cart-text');

let products = [
    {
        name: 'cauliflowers',
        tag: 'cauliflower',
        price: 11,
        inCart: 0

    },
    {
        name: 'carrots',
        tag: 'carrot',
        price: 18,
        inCart: 0

    },
    {
        name: 'cabbages',
        tag: 'cabbage',
        price: 19,
        inCart: 0

    },
    {
        name: 'capsicums',
        tag: 'capsicum',
        price: 180,
        inCart: 0

    },
    {
        name: 'blue graps',
        tag: 'bluegraps',
        price: 11,
        inCart: 0

    },
    {
        name: 'strawberrys',
        tag: 'strawberry',
        price: 18,
        inCart: 0

    },
    {
        name: 'red papper',
        tag: 'redpepper',
        price: 10,
        inCart: 0

    },
    {
        name: 'red orange',
        tag: 'redorange',
        price: 21,
        inCart: 0

    },
    {
        name: 'salmon filet',
        tag: 'salmonfilet',
        price: 52,
        inCart: 0

    },
    {
        name: 'leg peice',
        tag: 'legpeice',
        price: 48,
        inCart: 0

    },
    {
        name: 'beef stake',
        tag: 'beefstake',
        price: 80,
        inCart: 0

    },
    {
        name: 'seasonal lichi',
        tag: 'seasonal lichi',
        price: 30,
        inCart: 0

    }
];

    for(let i=0; i < carts.length; i++) {
        carts[i].addEventListener('click', () => {
            cartNumbers(products[i]); 
            totalCost(products[i]);
        })
    }

    function onLoadCartNumbers(){
        let productNumbers = localStorage.getItem('cartNumbers');
        console.log(productNumbers);
        if(productNumbers){
            
            document.querySelector('.cart span').textContent = productNumbers;
            console.log("hey there!");
        }
    }


    function cartNumbers(product){
        
        let productNumbers = localStorage.getItem('cartNumbers');

        productNumbers = parseInt(productNumbers);

        if(productNumbers){
            
            localStorage.setItem('cartNumbers', productNumbers + 1);
            document.querySelector('.cart span').textContent = productNumbers + 1;
            console.log(" product number", productNumbers);

        }else{
            localStorage.setItem('cartNumbers', 1);
            document.querySelector('.cart span').textContent = productNumbers;
        }
        setItems(product);
    }

    function setItems(product){
        let cartItems = localStorage.getItem('productsInCart');
        cartItems = JSON.parse(cartItems);
       
        if(cartItems != null){
            if(cartItems[product.tag] == undefined){
                cartItems = {
                    ...cartItems,
                    [product.tag]: product
                }
            }
            cartItems[product.tag].inCart += 1;
        }else{
            product.inCart = 1;

            cartItems = {
               [product.tag]: product
           }
        }

        localStorage.setItem("productsInCart", JSON.stringify(cartItems));
    }

    function totalCost(product){
        // console.log("the price of the product is ", product.price);
        let cartCost = localStorage.getItem("totalCost");
        
        console.log("the cart cost is", cartCost);
        console.log(typeof cartCost);

        if(cartCost != null){
            cartCost = parseInt(cartCost);
            localStorage.setItem("totalCost", cartCost + product.price);
        }else{
            localStorage.setItem("totalCost", product.price);
        }
        
    }

    function displayCart(){
         let cartItems = localStorage.getItem("productsInCart");
         cartItems = JSON.parse(cartItems);
        let productContainer = document.querySelector(".products");
        
         if(cartItems && productContainer){
            console.log("running");
            productContainer.innerHTML = '';
            Object.values(cartItems).map(item => {
                productContainer.innerHTML +=`
                <div class="product">
                 <ion-icon name="trash-outline"></ion-icon>
                 <img src="./assets/${item.tag}.png">
                 <span>${item.name}</span>
                 </div>
                 <div class="price">${item.price}</div>
                 <div class="quantity">
                 <ion-icon name="chevron-back-circle"></ion-icon>
                 <ion-icon name="chevron-forward-circle"></ion-icon>
                 </div>
                `
            });
         }else{
            console.log("not running");  
         }
    }

   
 displayCart();
    onLoadCartNumbers();
 

    