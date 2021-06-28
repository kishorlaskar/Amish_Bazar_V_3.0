// single product plus minus show

const plus = document.getElementById('plus');
const minus = document.getElementById('minus');
plus.addEventListener('click', function () {
    const quantity = document.getElementById('itemQuantity').innerText;
    const quantityNumber = parseInt(quantity);
    addQuantity('itemQuantity', 1, quantityNumber);
})
minus.addEventListener('click', function () {
    const quantity = document.getElementById('itemQuantity').innerText;
    const quantityNumber = parseInt(quantity);
    if (quantityNumber > 1) {
    const item1Quantity = addQuantity('itemQuantity', -1, quantityNumber);
    }
})