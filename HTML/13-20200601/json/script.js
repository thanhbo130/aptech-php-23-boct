function update() {
    var tableBodyElement = document.getElementById('table-body');
    var tableHeadElement =document.getElementById('table-head');
    var users = data.users;
    var getUserElementData = Object.keys(users[0]);
    // console.log(getUserElementData)
    var tableRow = document.createElement("tr");
     tableHeadElement.appendChild(tableRow);
     for(var i=0;i<getUserElementData.length;i++)
     {
         var tableData = document.createElement("th");
            tableRow.appendChild(tableData);
            tableData.innerHTML = getUserElementData[i];
     }
    
    // console.log(Object.keys(data));

    // console.log(users);
    for (var i = 0; i < users.length; i++) {
        var tableRow = document.createElement("tr");
        tableBodyElement.appendChild(tableRow);
        var getUserElementData = Object.keys(users[i]);
        // console.log(getUserElementData);
        for (var j = 0; j < getUserElementData.length; j++) {
            var tableData = document.createElement("td");
            tableData.innerHTML = users[i][getUserElementData[j]];
            tableRow.appendChild(tableData);
        }
    }
}