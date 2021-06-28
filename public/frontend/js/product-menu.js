// id declaration

const offBtn = document.getElementById('off-btn');
const sideBar = document.getElementById('see-side');
const products = document.getElementById('all-products');

// sidebar on/off

offBtn.addEventListener('click', function () {
  const width = window.innerWidth || document.documentElement.clientWidth ||
    document.body.clientWidth;
  if (width > 1199) {
    if (sideBar.style.width === '0px') {
      sideBar.style.transition = '0.3s';
      products.style.marginLeft = '360px';
      sideBar.style.width = '360px';
    }
    else {
      sideBar.style.transition = '.3s';
      sideBar.style.width = '0px';
      products.style.marginLeft = '0px';
    }
  }
  else if (width > 575 && width < 1199) {
    if (sideBar.style.width === '0px') {
      sideBar.style.transition = '0.3s';
      products.style.marginLeft = '250px';
      sideBar.style.width = '250px';
    }
    else {
      sideBar.style.transition = '.3s';
      sideBar.style.width = '0px';
      products.style.marginLeft = '0px';
    }
  }
  else {
    console.log(width, "choto")
    if (sideBar.style.width === '280px') {
      sideBar.style.transition = '0.3s';
      products.style.marginLeft = '0px';
      sideBar.style.width = '0px';
    }
    else {
      sideBar.style.transition = '.3s';
      sideBar.style.width = '280px';
      products.style.marginLeft = '280px';
    }
  }
})


// sidebar input range modification 


const slider = document.getElementById("myinput")
const min = slider.min
const max = slider.max
const value = slider.value

slider.style.background = `linear-gradient(to right,  #FC6E51 0%, #FC6E51 ${(value - min) / (max - min) * 100}%, #DEE2E6 ${(value - min) / (max - min) * 100}%, #DEE2E6 100%)`

slider.oninput = function () {
  this.style.background = `linear-gradient(to right,  #FC6E51 0%, #FC6E51 ${(this.value - this.min) / (this.max - this.min) * 100}%, #DEE2E6 ${(this.value - this.min) / (this.max - this.min) * 100}%, #DEE2E6 100%)`
};