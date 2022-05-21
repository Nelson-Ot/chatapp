const searchBar = document.querySelector(".users .search input"),
textBar = document.querySelector(".users .search .text"), 
searchBtn = document.querySelector(".users .search button");

searchBtn.addEventListener("click", function() {
    searchBar.classList.toggle("active");
    textBar.classList.toggle("active");
});