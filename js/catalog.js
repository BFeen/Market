class Product {
    constructor(name, price, pic = null, id) {
        this.name = name;
        this.price = price;
        this.pic = pic;
        this.id = id;
    }
    renderProduct(el) {
        let newProductBlock = document.createElement('a');
        newProductBlock.classList.add('card');
        newProductBlock.href = `/handlers/getCatalogItems.php?productId=${this.id}`; // Примерный адрес будущего обработчика + id
        newProductBlock.innerHTML = `
            <div class="card__pic" style="background-image: url(/images/catalog/${this.pic})"></div>
            <div class="card__title">${this.name}</div>
            <div class="card__cost">${this.price} руб.</div>`;
        el.appendChild(newProductBlock);
    }
}

class Catalog {
    constructor( catalogBlock ) {
        this.el = document.querySelector(catalogBlock);
        this.products = [];
    }
    productsArray( products ) {
        this.products = products;
    }
    renderCatalog() {
        this.products.forEach(value => {
            value.renderProduct(this.el);
        });
    }
}

let catalog = new Catalog('.catalog'); // Создание элемента класса Каталог
catalog.productsArray([ // Начиняем каталог товарами
    new Product('snickers', '3500', '1.jpg', '1'),
    new Product('jaket', '15500', '2.jpg', '2')
]);
catalog.renderCatalog(); // Вывод каталога на страницу