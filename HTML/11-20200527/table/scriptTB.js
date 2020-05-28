var dienThoai = {
    Iphone: {
        id: 0,
        name: "Iphone",
        cost: "300",

    },
    Samsung: {
        id:1,
        name: "Samsung",
        cost: "250",

    }
};

function update() {
    var tableBody = document.getElementById('table-body');
    console.log(Object.keys(dienThoai));
    var getRows = Object.keys(dienThoai);
    console.log(getRows.length);

    for (var i = 0; i < getRows.length; i++) {
        console.log(getRows[i]);
        var tableRow = document.createElement("tr");
        tableBody.appendChild(tableRow);  
        var Row = dienThoai[getRows[i]];
        var getRowData=Object.keys(Row);
        console.log(getRowData);
        for (var j = 0; j < getRowData.length; j++) {
            var tableData = document.createElement("td");
            tableData.innerHTML = Row[getRowData[j]];
            tableRow.appendChild(tableData);

        }

    }
}