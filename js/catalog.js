class Product {
    constructor(name, price, id, pic = null, sale = 0) {
        this.name = name;
        this.price = price;
        this.id = id;
        this.pic = pic;
        this.sale = sale;
    }
    renderProduct(el) {
        let newProductBlock = document.createElement('a');
        newProductBlock.classList.add('card');
        newProductBlock.href = `/pages/details.php?productId=${this.id}`; // Примерный адрес будущего обработчика + id
        if (this.sale > 0) {
            newProductBlock.classList.add('sale');
        }
        newProductBlock.innerHTML = `
            <div class="card__pic" style="background-image: url(${this.pic})"></div>
            <div class="card__title">${this.name}</div>
            <div class="card__cost">${this.price - this.price*this.sale} руб.</div>`;
        el.appendChild(newProductBlock);
    }
}

class Catalog {
    constructor( section ) {
        this.section = section;
        this.el = document.querySelector('.catalog');
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
    clear() {
        this.products = [];
        this.el.innerHTML = '';
    }
    preloaderOn() {

    }
    preloaderOff() {

    }
    load() { // AJAX
        let xhr = new XMLHttpRequest();
        xhr.open('GET', `/api/catalog_handler.php?section=${this.section}`);
        xhr.send();

        xhr.addEventListener('load', () => {
            let data = JSON.parse(xhr.responseText);
            this.clear();
            data.forEach(value => {
                if (value.sale != 0) {

                }
                let newProduct = new Product(value.name, value.price, value.id, value.photo, value.sale);
                this.products.push(newProduct);
            });
        this.renderCatalog();
        });
    }
}

let catalog = new Catalog('man'); // Создание элемента класса Каталог
catalog.load();