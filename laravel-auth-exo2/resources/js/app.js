require('./bootstrap');

require('alpinejs');



const selector = document.querySelector('#pictureSelector')
const pathSelector = document.querySelector('#path_selector')
const preview = document.querySelector('#preview_link')

if(selector){
    selector.addEventListener('change', e => {    
        preview.src = URL.createObjectURL(selector.files[0])
    });
}
if(pathSelector){
    pathSelector.addEventListener('change', e => {    
        let shape = document.createElement('svg')
        shape.style.height = "100px"
        shape.style.width = "100px"
        shape.style.fill = "blue"
        shape.setAttribute('viewBox', '0 0 600 600')
        shape.setAttribute('xmlns', 'http://www.w3.org/2000/svg')
        shape.innerHTML = pathSelector.value

        console.log(pathSelector.value)
        console.log(shape)

        preview.innerHTML= ""
        preview.appendChild(shape)
    });
}