// Part #1

// массив-объект продуктов
let Products = [
    { name: "Apple",  count: 5,  price: 70},
    { name: "Orange", count: 10, price: 90},
    { name: "Banana", count: 7,  price: 50},
    { name: "Kiwi",   count: 3,  price: 30}
];

// вычисление итоговой цены
let result = 0;
Products.forEach((param) => { result += param.count * param.price; } );

// искомый массив-объект
let Bill = { order: Products, results: result }

// выводим в консоль
console.log(JSON.stringify(Bill));

// Part #2
const copy = document.querySelector(".copy");
const change = document.querySelector(".change");
const desc = document.querySelector(".description");
const find = document.querySelector(".find");
const links = document.querySelectorAll(".item");
const content = desc.textContent;

let reaction = 0;

// добавление в конец абзаца скопированного текста
copy.addEventListener("click", () => {
    links.forEach( (link) => { desc.textContent += link.textContent + ", "; } );
});

// изменяет стили (цвет текста и шрифт)
change.addEventListener("click", () => {
    if (!reaction) {
        links.forEach((link) => { 
            link.classList.add("red");
            reaction = true;
        });
    } else {
        links.forEach((link) => {
            link.classList.remove("red");
            reaction = false;
        });
    }
});

// подсвечивание нужного слова
find.addEventListener("input", () => {
    for (let link of links) {
        if (find.value === "") {
            link.classList.remove("target_word");
        } else {
            if (link.textContent.includes(find.value)) {
                link.classList.add("target_word");
            } else {
                link.classList.remove("target_word");
            }
        }
    }
});