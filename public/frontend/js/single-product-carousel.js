// slider image click to set to the main image

const mainImage =document.getElementById('main-image');
const items =document.getElementsByClassName('sub-images');

for(let i = 0; i< items.length; i++){
    items[i].onclick=function () {
        let item = items[i];
        while(item){
            if(item.tagName==='IMG'){
                let item1=$(this).attr('src');
                mainImage.setAttribute('src',item1);
            }
            item=item.nextSibling;
        }
    }
}

// owl carousel 

$('.owl-carousel').owlCarousel({
    loop: false,
    margin: 10,
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        300: {
            items: 2
        },
        600: {
            items: 3
        }
    }
})