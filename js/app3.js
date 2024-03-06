var selectedCheckboxes = []; // Arreglo para almacenar los checkboxes seleccionados

function handleCheckboxChange(checkboxNumber) {
    var checkbox = document.getElementById('checkbox' + checkboxNumber);
    if (checkbox.checked) {
        console.log('Checkbox ' + checkboxNumber + ' está seleccionado');
        selectedCheckboxes.push(checkboxNumber); // Agregar checkbox seleccionado al arreglo
    } else {
        console.log('Checkbox ' + checkboxNumber + ' está deseleccionado');
        var index = selectedCheckboxes.indexOf(checkboxNumber);
        if (index !== -1) {
            selectedCheckboxes.splice(index, 1); // Eliminar checkbox deseleccionado del arreglo
        }
    }
    console.log('Checkboxes seleccionados:', selectedCheckboxes);

    console.log(typeof(selectedCheckboxes));
}

// let arregloCheckboxes = selectedCheckboxes;

// console.log(typeof(arregloCheckboxes));
// arregloCheckboxes.forEach(elemento =>{
//     console.log(elemento);
// })