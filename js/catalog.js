class Product {
    constructor(name, price, pic = null) {
        this.name = name;
        this.price = price;
        this.pic = pic;
    }
    renderProduct(el) {
        let newProductBlock = document.createElement('a');
        newProductBlock.classList.add('card');
        newProductBlock.href = '#';
        newProductBlock.innerHTML = `
            <div class="card__pic">${this.pic}</div>
            <div class="card__title">${this.name}</div>
            <div class="card__cost">${this.price}</div>`;
        el.appendChild(newProductBlock);
    }
}

var cardsBlock = document.querySelector('.catalog');

let prod = new Product('snickers', '3500');
console.dir(prod);

prod.renderProduct(cardsBlock);