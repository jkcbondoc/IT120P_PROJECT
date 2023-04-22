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

insertNewRecord(formData);

function readFormData() {
    var formData = {};
    formData["customerName"] = document.getElementById("customerName").value;
    formData["productOrder"] = document.getElementById("productOrder").value;
    formData["serviceOrder"] = document.getElementById("serviceOrder").value;
    formData["totalOrder"] = document.getElementById("totalOrder").value;
    formData["orderDate"] = document.getElementById("orderDate").value;
    return formData;
}

function insertNewRecord(data) {
    var table = document.getElementById("orderList").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.length);
    cell1 = newRow.insertCell(0);
    cell1.innerHTML = data.customerName;
    cell2 = newRow.insertCell(1);
    cell2.innerHTML = data.productOrder;
    cell3 = newRow.insertCell(2);
    cell3.innerHTML = data.serviceOrder;
    cell4 = newRow.insertCell(3);
    cell4.innerHTML = data.totalOrder;
    cell5 = newRow.insertCell(4);
    cell5.innerHTML = data.orderDate;
    cell5 = newRow.insertCell(5);
    cell5.innerHTML = `<a onClick="onEdit(this)">Edit</a>
                       <a onClick="onDelete(this)">Delete</a>`;
}

function resetForm() {
    document.getElementById("customerName").value = "";
    document.getElementById("productOrder").value = "";
    document.getElementById("serviceOrder").value = "";
    document.getElementById("totalOrder").value = "";
    document.getElementById("orderDate").value = "";
    selectedRow = null;
}

function onEdit(td) {
    selectedRow = td.parentElement.parentElement;
    document.getElementById("customerName").value = selectedRow.cells[0].innerHTML;
    document.getElementById("productOrder").value = selectedRow.cells[1].innerHTML;
    document.getElementById("serviceOrder").value = selectedRow.cells[2].innerHTML;
    document.getElementById("totalOrder").value = selectedRow.cells[3].innerHTML;
    document.getElementById("orderDate").value = selectedRow.cells[4].innerHTML;
}
function updateRecord(formData) {
    selectedRow.cells[0].innerHTML = formData.customerName;
    selectedRow.cells[1].innerHTML = formData.empCode;
    selectedRow.cells[2].innerHTML = formData.serviceOrder;
    selectedRow.cells[3].innerHTML = formData.totalOrder;
    selectedRow.cells[4].innerHTML = formData.orderDate;
}

function onDelete(td) {
    if (confirm('Do You Want to Delete this Record?')) {
        row = td.parentElement.parentElement;
        document.getElementById("orderList").deleteRow(row.rowIndex);
        resetForm();
    }
}
function validate() {
    isValid = true;
    if (document.getElementById("customerName").value == "") {
        isValid = false;
        document.getElementById("NameValidationError").classList.remove("hide");
    } else {
        isValid = true;
        if (!document.getElementById("NameValidationError").classList.contains("hide"))
            document.getElementById("NameValidationError").classList.add("hide");
    }
    return isValid;
}
