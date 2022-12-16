const harga = document.getElementById('total')

let count = 0;
// let total = 0;
var counter = document.getElementById("counter");
let total = counter.value;

function increase() {
    var textbox = document.getElementById("counter");
    textbox.value++;
    total++;
    // total += 300000
    harga.value = total * 300000;
}
function decrease() {
    var textBox = document.getElementById("counter");
    if(textBox.value > 0){
        textBox.value--;
    }else{
        textBox.value = 0;
    }
    total--;
    harga.value = total * 300000;
}

function decrease() {
    var textBox = document.getElementById("counter");
    if(textBox.value > 0){
        textBox.value--;
    }else{
        textBox.value = 0;
    }
    total = textBox.value;
    harga.value = total * 300000;
}



// function valueChanged(){
//     button.forEach((btn) => {
//         btn.addEventListener('click', (e) => {
//             const styles = e.currentTarget.classList
            
//             if (styles.contains('increase')){
//                 count++;
//                 if(count != 0){
//                     total += 300     
//                 }
//             } else if (styles.contains('decrease')){
//                 count--;
//                 if(count != 0){
//                     total -= 300
//                 }else if(count == 0){
//                     total = 0
//                 }
//             }else {
//                 count = 0;
//             }
//             input.value = count;
//             if(total != 0){
//                 harga.textContent = 'Rp. ' + total + ".000,0";
//             }else{
//                 harga.textContent = 'Rp. ' + total;
//             }
//         })
//     })
// }
