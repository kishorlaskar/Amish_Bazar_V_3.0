// // class declaration
//
// const cartMinus = document.getElementsByClassName('page-minus');
// const cartPlus = document.getElementsByClassName('page-plus');
// const cartItemsAdd = document.getElementsByClassName('cart-add');
//
// // cart add
//
// for (let i = 0; i < cartItemsAdd.length; i++) {
//     cartItemsAdd[i].onclick = function () {
//         let item = cartItemsAdd[i];
//         item.style.display = "none";
//         document.getElementById("item-plus-minus-" + i).style.display = "block";
//         const quantity = document.getElementById("product-item-quantity-" + i).innerText;
//         const quantityNumber = parseInt(quantity);
//         updatedQuantity(("product-item-quantity-" + i), 1, quantityNumber);
//     }
// }
//
// // cart plus
//
// for (let i = 0; i < cartPlus.length; i++) {
//     cartPlus[i].onclick = function () {
//         const quantity = document.getElementById("product-item-quantity-" + i).innerText;
//         const quantityNumber = parseInt(quantity);
//         updatedQuantity(("product-item-quantity-" + i), 1, quantityNumber);
//     }
// }
//
// // cart minus
//
// for (let i = 0; i < cartMinus.length; i++) {
//     cartMinus[i].onclick = function () {
//         let item = cartMinus[i];
//         const quantity = document.getElementById("product-item-quantity-" + i).innerText;
//         const quantityNumber = parseInt(quantity);
//         if (quantity>1) {
//             updatedQuantity(("product-item-quantity-" + i), -1, quantityNumber);
//         }
//         else{
//             updatedQuantity(("product-item-quantity-" + i), -1, quantityNumber);
//             document.getElementById("item-plus-minus-"+i).style.display="none";
//             document.getElementById("item-zero-"+i).style.display="block";
//         }
//     }
// }
//
// // updated quantity
//
// function updatedQuantity(id, number, quantityNumber) {
//     const updatedQuantity = quantityNumber + number;
//     document.getElementById(id).innerText = updatedQuantity;
// }
//
//
//
//
//
//
