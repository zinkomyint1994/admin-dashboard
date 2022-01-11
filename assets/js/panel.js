/*hamburger*/
var width = window.innerWidth;
if (width < 400 || width < 520) {
    var element = document.getElementById("bbb");
    if(element != null){
        element.classList.add("active");
    }
    else{
        console.log('width ok')
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
