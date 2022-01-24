//search
function search() {
    // var input, filter, table, tr, td, i;
    // input = document.getElementById("myInput");
    // filter = input.value.toUpperCase();
    // table = document.getElementById("myTable");
    // tr = table.getElementsByTagName("tr");

    // for (i = 0; i < tr.length; i++) {
    //     td = tr[i].getElementsByTagName("td")[0];
    //     if (td) {
    //         if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
    //             tr[i].style.display = "";
    //         } else {
    //             tr[i].style.display = "none";
    //         }
    //     }
    // }
    var data =
        '{"employees":[{"email":"aaa@gmail.com","address":"Yangon" ,"company":"Soment","balance":"$250"},{"email":"bbb@gmail.com","address":"Mandalay","company":"Hount","balance":"$520"},{"email":"ccc@gmail.com","address":"Pago","company":"Unts","balance":"$321"}]}';
    var key = event.which || event.keyCode || event.charCode;
    localStorage.setItem("data", data);
    var retrievedObject = localStorage.getItem("data");
    obj = JSON.parse(retrievedObject);
    for (var i = 0; i < obj.employees.length; i++) {
        var currentObj = obj.employees[i];
        var email = currentObj.email;
        var address = currentObj.address;
        var company = currentObj.company;
        var balance = currentObj.balance;
        var input = document.getElementById("myInput");
        var filter = input.value.toLowerCase();

        if (filter == email) {
            document.getElementById("customerTable").className = "testing";
            var element = document.getElementById("table_show");
            element.classList.remove("talble_off");
            document.getElementById("email_test").innerHTML = filter;
            document.getElementById("address").innerHTML = address;
            document.getElementById("company").innerHTML = company;
            document.getElementById("balance").innerHTML = balance;
        }
        if (key == 8) {
            document.getElementById("customerTable").className = "test";
            // document.getElementById("email_test").innerHTML = "";
            document.getElementById("table_show").className = "talble_off";
        }
    }
}
//form_search
function formsearch() {
    const searchBar = document.forms["search-model"].querySelector("input");
    searchBar.addEventListener("keyup", function (e) {
        const term = e.target.value.toLocaleLowerCase();
        const books = document.getElementsByTagName("h5");
        var notAvailable = document.getElementById("notAvailable");

        var hasResults = false;
        Array.from(books).forEach(function (model) {
            const title = model.textContent;
            if (title.toLowerCase().indexOf(term) != -1) {
                model.parentElement.parentElement.style.display = "flex";
                hasResults = true;
            } else {
                model.parentElement.parentElement.style.display = "none";
            }
        });
        notAvailable.style.display = hasResults ? "none" : "block";
    });
}

//table sorting
function sortTable(n) {
    var table,
        rows,
        switching,
        i,
        x,
        y,
        shouldSwitch,
        dir,
        switchcount = 0;
    table = document.getElementById("customerTable");
    switching = true;
    dir = "asc";
    while (switching) {
        switching = false;
        rows = table.rows;
        for (i = 1; i < rows.length - 1; i++) {
            shouldSwitch = false;
            x = rows[i].getElementsByTagName("TD")[n];
            y = rows[i + 1].getElementsByTagName("TD")[n];
            if (dir == "asc") {
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                    shouldSwitch = true;
                    break;
                }
            } else if (dir == "desc") {
                if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                    shouldSwitch = true;
                    break;
                }
            }
        }
        if (shouldSwitch) {
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
            switchcount++;
        } else {
            if (switchcount == 0 && dir == "asc") {
                dir = "desc";
                switching = true;
            }
        }
    }
}
function productSort(n) {
    var table,
        rows,
        switching,
        i,
        x,
        y,
        shouldSwitch,
        dir,
        switchcount = 0;
    table = document.getElementById("productTable");
    switching = true;
    dir = "asc";
    while (switching) {
        switching = false;
        rows = table.rows;
        for (i = 1; i < rows.length - 1; i++) {
            shouldSwitch = false;
            x = rows[i].getElementsByTagName("TD")[n];
            y = rows[i + 1].getElementsByTagName("TD")[n];
            if (dir == "asc") {
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                    shouldSwitch = true;
                    break;
                }
            } else if (dir == "desc") {
                if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                    shouldSwitch = true;
                    break;
                }
            }
        }
        if (shouldSwitch) {
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
            switchcount++;
        } else {
            if (switchcount == 0 && dir == "asc") {
                dir = "desc";
                switching = true;
            }
        }
    }
}

function toggle(source) {
    checkboxes = document.getElementsByName("foo");
    for (var i = 0, n = checkboxes.length; i < n; i++) {
        checkboxes[i].checked = source.checked;
    }
}

function price() {
    var x = document.getElementById("mySelect").selectedIndex;
    var y = document.getElementById("mySelect").options;
    document.getElementById("demo").innerHTML = y[x].text;

    var sony = document.getElementById("sonyselect").selectedIndex;
    var sonyid = document.getElementById("sonyselect").options;
    document.getElementById("sony").innerHTML = sonyid[sony].text;
}

function test(x) {
    x.classList.toggle("change");
}

/*new menu*/
const showMenu = (toggleId, navbarId, bodyId) => {
    const toggle = document.getElementById(toggleId),
        navbar = document.getElementById(navbarId),
        bodypadding = document.getElementById(bodyId);
    if (toggle && navbar) {
        toggle.addEventListener("click", () => {
            navbar.classList.toggle("expander");
            bodypadding.classList.toggle("body-pd");
            var x = document.getElementById("body-pd").className;
            if (x == "body-pd") {
                var element = document.getElementById("tooltips_show");
                element.classList.remove("dropdown_btn");
            } else {
                document.getElementById("tooltips_show").className = "dropdown_btn nav__link collapse active";
            }
        });
    }
};
showMenu("nav-toggle", "navbar", "body-pd");
/*===== LINK ACTIVE  =====*/
const linkColor = document.querySelectorAll(".nav__link");
function colorLink() {
    linkColor.forEach((l) => l.classList.remove("active"));
    this.classList.add("active");
}
linkColor.forEach((l) => l.addEventListener("click", colorLink));

/*===== COLLAPSE MENU  =====*/
const linkCollapse = document.getElementsByClassName("collapse__link");
var i;

for (i = 0; i < linkCollapse.length; i++) {
    linkCollapse[i].addEventListener("click", function () {
        const collapseMenu = this.nextElementSibling;
        collapseMenu.classList.toggle("showCollapse");

        const rotate = collapseMenu.previousElementSibling;
        rotate.classList.toggle("rotate");
    });
}

/*mobile_menu*/
function mobile_menu(x) {
    x.classList.toggle("change");
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }

    window.onresize = function () {
        console.log("resize");
        setTimeout(function () {
            location.reload();
        }, 100);
    };
}

function final() {
    document.getElementById("myDropdown").classList.toggle("show");
}
//oustide click
window.onclick = function (event) {
    if (!event.target.matches(".dropbtn")) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains("show")) {
                openDropdown.classList.remove("show");
            }
        }
    }
};

window.addEventListener("resize", () => {
    // alert('resize')
});

//customers_localstorage
function loadData() {
    var data =
        '{"employees":[{"email":"aaa@gmail.com","address":"Yangon" ,"company":"Soment","balance":"$250"},{"email":"bbb@gmail.com","address":"Mandalay","company":"Hount","balance":"$520"},{"email":"ccc@gmail.com","address":"Pago","company":"Unts","balance":"$321"}]}';
    localStorage.setItem("data", data);
    var retrievedObject = localStorage.getItem("data");
    obj = JSON.parse(retrievedObject);
    console.log("obj", retrievedObject);
    for (var i = 0; i < obj.employees.length; i++) {
        var currentObj = obj.employees[i];
        var email = currentObj.email;
        var address = currentObj.address;
        var company = currentObj.company;
        var balance = currentObj.balance;

        var table = document.getElementById("customerTable");
        // Declare variables

        var rowCount = table.rows.length;
        var row = table.insertRow(rowCount);
        console.log(row);
        row.insertCell(0).innerHTML = '<input type="checkbox" name="foo" value=""/>';
        row.insertCell(1).innerHTML = email;
        row.insertCell(2).innerHTML = address;
        row.insertCell(3).innerHTML = company;
        row.insertCell(4).innerHTML = balance;
        row.insertCell(5).innerHTML = '<i role="button" class="fas fa-edit"></i>';
    }
}
// loadData();
//customers_localstorage
function productList() {
    var data = '{"productlist":[{"name":"playstation","details":"Sony", "price":"$1200"},{"name":"sonyxperia","details":"Sony Mobile", "price":"$820"},{"name":"airpop","details":"Apple","price":"$321"}]}';
    localStorage.setItem("data", data);
    var retrievedObject = localStorage.getItem("data");
    obj = JSON.parse(retrievedObject);
    console.log("obj", retrievedObject);
    for (var i = 0; i < obj.productlist.length; i++) {
        var currentObj = obj.productlist[i];
        var name = currentObj.name;
        var details = currentObj.details;
        var price = currentObj.price;

        var table = document.getElementById("productTable");
        // Declare variables

        var rowCount = table.rows.length;
        var row = table.insertRow(rowCount);
        console.log(row);
        row.insertCell(0).innerHTML = '<input type="checkbox" name="foo" value=""/>';
        row.insertCell(1).innerHTML = name;
        row.insertCell(2).innerHTML = details;
        row.insertCell(3).innerHTML = '<p class="available">limited stock</p>';
        row.insertCell(4).innerHTML = price;
        row.insertCell(5).innerHTML = '<i role="button" class="fas fa-edit"></i>';
    }
}

/*product_search*/
function productSearch() {
    var data = '{"productlist":[{"name":"playstation","details":"Sony", "price":"$1200"},{"name":"sonyxperia","details":"Sony Mobile", "price":"$820"},{"name":"airpop","details":"Apple","price":"$321"}]}';
    var key = event.which || event.keyCode || event.charCode;
    localStorage.setItem("data", data);
    var retrievedObject = localStorage.getItem("data");
    obj = JSON.parse(retrievedObject);
    for (var i = 0; i < obj.productlist.length; i++) {
        var currentObj = obj.productlist[i];
        var name = currentObj.name;
        var details = currentObj.details;
        var price = currentObj.price;

        var input = document.getElementById("proSearch");
        var filter = input.value.toLowerCase();
        if (filter == name) {
            document.getElementById("productTable").className = "testing";
            var element = document.getElementById("table_show");
            element.classList.remove("talble_off");
            document.getElementById("name").innerHTML = filter;
            document.getElementById("details").innerHTML = details;
            document.getElementById("price").innerHTML = price;
        }
        if (key == 8) {
            document.getElementById("productTable").className = "test";
            document.getElementById("table_show").className = "talble_off";
        }
    }
}
