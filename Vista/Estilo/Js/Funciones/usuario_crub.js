var selectedRow = null

function onFormSubmit() {
    if (validate()) {
        var formData = readFormData();
        if (selectedRow == null)
            insertNewRecord(formData);
        else
            updateRecord(formData);
        resetForm();
    }
}

function readFormData() {
    var formData = {};
    formData["cargo"] = document.getElementById("cargo").value;
    formData["nombre"] = document.getElementById("nombre").value;
    formData["apellido"] = document.getElementById("apellido").value;
    formData["usuario"] = document.getElementById("usuario").value;
    formData["contraseña"] = document.getElementById("contraseña").value;
    return formData;
}

function insertNewRecord(data) {
    var table = document.getElementById("employeeList").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.length);
    cell1 = newRow.insertCell(0);
    cell1.innerHTML = data.cargo;
    cell1 = newRow.insertCell(1);
    cell1.innerHTML = data.nombre;
    cell2 = newRow.insertCell(2);
    cell2.innerHTML = data.apellido;
    cell3 = newRow.insertCell(3);
    cell3.innerHTML = data.usuario;
    cell4 = newRow.insertCell(4);
    cell4.innerHTML = data.contraseña;
    cell4 = newRow.insertCell(5);
    cell4.innerHTML = `<a onClick="onEdit(this)">Editar</a>
                       <a onClick="onDelete(this)">Borrar</a>`;
}

function resetForm() {
    document.getElementById("cargo").value = "";
    document.getElementById("nombre").value = "";
    document.getElementById("apellido").value = "";
    document.getElementById("usuario").value = "";
    document.getElementById("contraseña").value = "";
    selectedRow = null;
}

function onEdit(td) {
    selectedRow = td.parentElement.parentElement;
    document.getElementById("cargo").value = selectedRow.cells[0].innerHTML;
    document.getElementById("nombre").value = selectedRow.cells[1].innerHTML;
    document.getElementById("apellido").value = selectedRow.cells[2].innerHTML;
    document.getElementById("usuario").value = selectedRow.cells[3].innerHTML;
    document.getElementById("contraseña").value = selectedRow.cells[4].innerHTML;
}
function updateRecord(formData) {
    selectedRow.cells[0].innerHTML = formData.cargo;
    selectedRow.cells[1].innerHTML = formData.nombre;
    selectedRow.cells[2].innerHTML = formData.apellido;
    selectedRow.cells[3].innerHTML = formData.usuario;
    selectedRow.cells[4].innerHTML = formData.contraseña;
}

function onDelete(td) {
    if (confirm('Are you sure to delete this record ?')) {
        row = td.parentElement.parentElement;
        document.getElementById("employeeList").deleteRow(row.rowIndex);
        resetForm();
    }
}
function validate() {
    isValid = true;
    if (document.getElementById("nombre").value == "") {
        isValid = false;
        document.getElementById("error").classList.remove("hide");
    } else {
        isValid = true;
        if (!document.getElementById("error").classList.contains("hide"))
            document.getElementById("error").classList.add("hide");
    }
    return isValid;
}