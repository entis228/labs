const cBox = document.querySelector('#c1')
const img = document.querySelector('#img')
const cWidth = document.querySelector('#cWidth')
const cHeight = document.querySelector('#cHeight')
const border = document.querySelector('#border')
const text = document.querySelector('#textbox')

cBox.addEventListener('onclick', draw)
cWidth.addEventListener('change',changeSize)
cHeight.addEventListener('change',changeSize)
text.addEventListener('change',changeAlterText)
border.addEventListener('change',changeBorder)

function draw(){
    img.setAttribute('src','12.png')
    document.getElementById('img').style.border = "2px solid black";
}
function changeSize(){
   img.setAttribute('width', cWidth.value)
    img.setAttribute('height', cHeight.value)
}
function changeAlterText(){
    img.setAttribute('alt',text.value)
}
function changeBorder(){
    document.getElementById('img').style.border =border.value+"px solid black"
}
