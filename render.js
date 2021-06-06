
console.log(data);

data.forEach(item => {
    console.log(item.price);
});

let table = document.getElementById("table");
let HTML = "";
HTML += "<tr>";
Object.keys(data[0]).forEach(key => {
    HTML += `<th>${key}</th>`;
});

HTML += "</tr>";

data.forEach(item => {
    HTML += "<tr>";
    Object.values(item).forEach(value => {
        HTML += `<td>${value}</td>`;
    })

    HTML += "</tr>";
});

table.innerHTML += HTML;