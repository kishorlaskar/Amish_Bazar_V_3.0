// let totalItem = 3;
// const noItems = document.getElementById('no-items');
//
// // no items in cart
//
// function displayNone() {
//     if (totalItem < 0) {
//         noItems.style.display = 'block';
//     }
// }
//
// // id declaration
//
// const plus1 = document.getElementById('cartPlus1');
// const plus2 = document.getElementById('cartPlus2');
// const plus3 = document.getElementById('cartPlus3');
// const plus4 = document.getElementById('cartPlus4');
//
//
// const minus1 = document.getElementById('cartMinus1');
// const minus2 = document.getElementById('cartMinus2');
// const minus3 = document.getElementById('cartMinus3');
// const minus4 = document.getElementById('cartMinus4');
//
//
// const cross1 = document.getElementById('cartCross1');
// const cross2 = document.getElementById('cartCross2');
// const cross3 = document.getElementById('cartCross3');
// const cross4 = document.getElementById('cartCross4');
//
// const itemTotal1 = document.getElementById('itemTotal1');
// const itemTotal2 = document.getElementById('itemTotal2');
// const itemTotal3 = document.getElementById('itemTotal3');
// const itemTotal4 = document.getElementById('itemTotal4');
//
// const item1 = document.getElementById('item1');
// const item2 = document.getElementById('item2');
// const item3 = document.getElementById('item3');
// const item4 = document.getElementById('item4');
//
// const subTotal1 = document.getElementById('subTotal1');
// const subTotal2 = document.getElementById('subTotal2');
// const subTotal3 = document.getElementById('subTotal3');
// const subTotal4 = document.getElementById('subTotal4');
//
// const totalPrice = document.getElementById('total');
//
// // cross handler
//
// cross1.addEventListener('click', function () {
//     const subTotal = document.getElementById('subTotal1').innerText;
//     const subTotalNumber = parseInt(subTotal);
//     total('total', (-1 * subTotalNumber));
//     totalItem--;
//     displayNone();
//     item1.style.display = 'none';
// })
// cross2.addEventListener('click', function () {
//     const subTotal = document.getElementById('subTotal2').innerText;
//     const subTotalNumber = parseInt(subTotal);
//     total('total', (-1 * subTotalNumber));
//     totalItem--;
//     displayNone();
//     item2.style.display = 'none';
// })
// cross3.addEventListener('click', function () {
//     const subTotal = document.getElementById('subTotal3').innerText;
//     const subTotalNumber = parseInt(subTotal);
//     total('total', (-1 * subTotalNumber));
//     totalItem--;
//     displayNone();
//     item3.style.display = 'none';
// })
// cross4.addEventListener('click', function () {
//     const subTotal = document.getElementById('subTotal4').innerText;
//     const subTotalNumber = parseInt(subTotal);
//     total('total', (-1 * subTotalNumber));
//     totalItem--;
//     displayNone();
//     item4.style.display = 'none';
// })
//
// // plus handler
//
// plus1.addEventListener('click', function () {
//     const quantity = document.getElementById('itemQuantity1').innerText;
//     const quantityNumber = parseInt(quantity);
//     const item1Quantity = addQuantity('itemQuantity1', 1, quantityNumber);
//     const onePrice = singlePrice('subTotal1', item1Quantity - 1);
//     addPrice('subTotal1', item1Quantity, onePrice);
//     total('total', onePrice);
// })
// plus2.addEventListener('click', function () {
//     const quantity = document.getElementById('itemQuantity2').innerText;
//
//     const quantityNumber = parseInt(quantity);
//     const item1Quantity = addQuantity('itemQuantity2', 1, quantityNumber);
//     const onePrice = singlePrice('subTotal2', item1Quantity - 1);
//     addPrice('subTotal2', item1Quantity, onePrice);
//     total('total', onePrice);
// })
// plus3.addEventListener('click', function () {
//     const quantity = document.getElementById('itemQuantity3').innerText;
//
//     const quantityNumber = parseInt(quantity);
//     const item1Quantity = addQuantity('itemQuantity3', 1, quantityNumber);
//     const onePrice = singlePrice('subTotal3', item1Quantity - 1);
//     addPrice('subTotal3', item1Quantity, onePrice);
//     total('total', onePrice);
// })
// plus4.addEventListener('click', function () {
//     const quantity = document.getElementById('itemQuantity4').innerText;
//
//     const quantityNumber = parseInt(quantity);
//     const item1Quantity = addQuantity('itemQuantity4', 1, quantityNumber);
//     const onePrice = singlePrice('subTotal4', item1Quantity - 1);
//     addPrice('subTotal4', item1Quantity, onePrice);
//     total('total', onePrice);
// })
//
// // minus handler
//
// minus1.addEventListener('click', function () {
//     const quantity = document.getElementById('itemQuantity1').innerText;
//     const quantityNumber = parseInt(quantity);
//     if (quantityNumber > 1) {
//         const item1Quantity = addQuantity('itemQuantity1', -1, quantityNumber);
//         const onePrice = singlePrice('subTotal1', item1Quantity + 1);
//         addPrice('subTotal1', item1Quantity, onePrice);
//         total('total', (-1 * onePrice));
//     }
// })
// minus2.addEventListener('click', function () {
//     const quantity = document.getElementById('itemQuantity2').innerText;
//     const quantityNumber = parseInt(quantity);
//     if (quantityNumber > 1) {
//         const item1Quantity = addQuantity('itemQuantity2', -1, quantityNumber);
//         const onePrice = singlePrice('subTotal2', item1Quantity + 1);
//         addPrice('subTotal2', item1Quantity, onePrice);
//         total('total', (-1 * onePrice));
//     }
// })
// minus3.addEventListener('click', function () {
//     const quantity = document.getElementById('itemQuantity3').innerText;
//     const quantityNumber = parseInt(quantity);
//     if (quantityNumber > 1) {
//         const item1Quantity = addQuantity('itemQuantity3', -1, quantityNumber);
//         const onePrice = singlePrice('subTotal3', item1Quantity + 1);
//         addPrice('subTotal3', item1Quantity, onePrice);
//         total('total', (-1 * onePrice));
//     }
// })
// minus4.addEventListener('click', function () {
//     const quantity = document.getElementById('itemQuantity4').innerText;
//     const quantityNumber = parseInt(quantity);
//     if (quantityNumber > 1) {
//         const item1Quantity = addQuantity('itemQuantity4', -1, quantityNumber);
//         const onePrice = singlePrice('subTotal4', item1Quantity + 1);
//         addPrice('subTotal4', item1Quantity, onePrice);
//         total('total', (-1 * onePrice));
//     }
// })
//
// // adding or removing Quantity
//
// function addQuantity(id, number, quantityNumber) {
//     const updatedQuantity = quantityNumber + number;
//     document.getElementById(id).innerText = updatedQuantity;
//     return updatedQuantity;
// }
//
// // adding or removing price
//
// function addPrice(id, quantity, onePrice) {
//     const price = document.getElementById(id).innerText;
//     const priceNumber = parseFloat(price);
//     const updatedPrice = quantity * onePrice;
//     document.getElementById(id).innerText = (updatedPrice).toFixed(0);
//     return updatedPrice;
// }
//
// // calculate single price
//
// function singlePrice(id, quantity) {
//     const price = document.getElementById(id).innerText;
//     const priceNumber = parseFloat(price);
//     const singlePrice = priceNumber / quantity;
//     return singlePrice;
// }
//
// // calculate total price
//
// function total(id, singlePrice) {
//     const total = document.getElementById(id).innerText;
//     const totalNumber = parseFloat(total);
//     document.getElementById(id).innerText = (totalNumber + singlePrice).toFixed(0);
// }
