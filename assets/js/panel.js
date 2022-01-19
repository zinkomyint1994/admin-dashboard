/*hamburger*/
var width = window.innerWidth;
if (width > 500 || width > 520) {
    console.log('width')
    }
    else{
        var element = document.getElementById("bbb");
        if(element != null){
        element.classList.add("active");
    }
 }
var hamburger = document.querySelector(".hamburger");
if (hamburger != null) {
    hamburger.addEventListener("click", function () {
        document.querySelector("body").classList.toggle("active");
    });
} else {
    console.log("ok");
}
/*drop_down*/
function customer() {
    document.getElementById("myDropdown").classList.toggle("show");
}
function product() {
    document.getElementById("pro").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.matches(".dropbtn")) {
        var dropdowns = document.getElementsByClassName("drop_t");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains("show")) {
                openDropdown.classList.remove("show");
            }
        }
    }
};
/*search*/
    function search() {
          // Declare variables
          var input, filter, table, tr, td, i;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("myTable");
          tr = table.getElementsByTagName("tr");

          for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
              if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
              } else {
                tr[i].style.display = "none";
              }
            }
          }
        }
/*form_sarch*/
function formsearch(){
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

/*table sorting*/
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;

    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}


function toggle(source) {
  checkboxes = document.getElementsByName('foo');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}

function price() {
  var x = document.getElementById("mySelect").selectedIndex;
  var y = document.getElementById("mySelect").options;
  document.getElementById("demo").innerHTML =  y[x].text;

 var sony = document.getElementById("sonyselect").selectedIndex;
 var sonyid = document.getElementById("sonyselect").options;
 document.getElementById("sony").innerHTML =  sonyid[sony].text;
}