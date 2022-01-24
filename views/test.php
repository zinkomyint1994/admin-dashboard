<!DOCTYPE html>
<html>
<head>
    <title>Convert JSON Data to HTML Table</title>
    <style>
        /* th, td, p, input {
            font:14px Verdana;
        }
        table, th, td 
        {
            border: solid 1px #DDD;
            border-collapse: collapse;
            padding: 2px 3px;
            text-align: center;
        }
        th {
            font-weight:bold;
        } */
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
}
    </style>
</head>
<body>
<table id='resp'>
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
    <th>fff</th>
  </tr>
</table>
    <!-- <input type="button" onclick="CreateTableFromJSON()" value="Create Table From JSON" /> -->
    <p id="showData"></p>
</body>

<script>
    window.onload = CreateTableFromJSON();
    function CreateTableFromJSON() {
        var myBooks = [
            {
                "Book ID": "1",
                "Book Name": "Computer Architecture",
                "Category": "Computers",
                "Price": "125.60"
            },
            {
                "Book ID": "2",
                "Book Name": "Asp.Net 4 Blue Book",
                "Category": "Programming",
                "Price": "56.00"
            },
            {
                "Book ID": "3",
                "Book Name": "Popular Science",
                "Category": "Science",
                "Price": "210.40"
            }
        ]
        localStorage.setItem('json', JSON.stringify(myBooks));
        var retrievedObject = localStorage.getItem('json');
        var test = JSON.parse(retrievedObject);
        // HEADER. 
        var col = [];
        for (var i = 0; i < test.length; i++) {
            for (var key in test[i]) {
                if (col.indexOf(key) === -1) {
                    col.push(key);
                }
            }
        }

        // CREATE TABLE.
        var table = document.createElement("table");

        // CREATE HTML TABLE HEADER ROW USING THE EXTRACTED HEADERS ABOVE.

        var tr = table.insertRow(-1);                   // ROW.

        for (var i = 0; i < col.length; i++) {
            var th = document.createElement("th");      // HEADER.
            th.innerHTML = col[i];
            console.log(th.innerHTML)
            tr.appendChild(th);
        }

        // ADD JSON DATA TO THE TABLE AS ROWS.
        for (var i = 0; i < myBooks.length; i++) {

            tr = table.insertRow(-1);

            for (var j = 0; j < col.length; j++) {
                var tabCell = tr.insertCell(-1);
                tabCell.innerHTML = myBooks[i][col[j]];
            }
        }

        // FINALLY ADD THE NEWLY CREATED TABLE WITH JSON DATA TO A CONTAINER.
        var divContainer = document.getElementById("resp");
        divContainer.innerHTML = "";
        divContainer.appendChild(table);
    }
</script>
</html>