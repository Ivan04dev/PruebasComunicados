// // document.getElementById("puesto").addEventListener("change", function() {
// document.getElementById("puesto").addEventListener("click", function() {
//     var valorCheckbox = document.getElementById("puesto").value;
//     console.log("El valor del checkbox es: " + valorCheckbox);
// });

function validarPuesto() {
    
    var arrayElementosSeleccionados = [];
   
    var checkboxes = document.getElementsByName("puesto");  
    console.log(checkboxes);
    let puestos;
    var numberOfCheckedItems = 0;  

    // Prueba
    var valorSeleccionado = document.querySelectorAll("#puesto");
    console.log(valorSeleccionado);
    // console.log("El valor del checkbox es: " + valorSeleccionado);

    // Convert valorSeleccionado NodeList to an array
    var valor = Array.prototype.slice.call(valorSeleccionado);

    console.log(valor);

    if (checkboxes.cheked){
            
        // var valorSeleccionado = getElementsById('puesto').value;
        // var valorSeleccionado = getElementsById('puesto').nodeValue;

        console.log(valorSeleccionado);

        arrayElementosSeleccionados.push(checkboxes.checked);

        console.log(arrayElementosSeleccionados);

    }

    for(var i = 0; i < checkboxes.length; i++) {  
        if(checkboxes[i].checked)  
            numberOfCheckedItems++;  
            // puestos[i] = numberOfCheckedItems;
    }  

    console.log(`Puestos seleccionados ${numberOfCheckedItems}`);
    // console.log(`Valor ${numberOfCheckedItems[i]}`);

    /*
    if(numberOfCheckedItems > 2) {  
        alert("You can't select more than two favorite pets!");  
        return false;  
    }  
    */

    

   
}  