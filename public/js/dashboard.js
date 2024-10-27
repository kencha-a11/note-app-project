const toggleSidebarBtn = document.getElementById('toggle-sidebar-btn');
const sidebar = document.getElementById('sidebar');

const magnifier = document.getElementById('magnifier');

toggleSidebarBtn.addEventListener('click', function() {
    sidebar.classList.toggle('active');

});

function toggleSearch() {
    const searchContainer = document.getElementById("searchContainer");
    const searchToggle = document.getElementById("searchToggle");
    if (searchContainer.style.display === "none") {
        searchContainer.style.display = "inline";
        searchToggle.textContent = "X"; // Change text to 'X' when showing input

        magnifier.style.display = "inline";
        // magnifier.textContent = "⌕";
    } else {
        searchContainer.style.display = "none";
        magnifier.style.display = "none";

        searchToggle.textContent = "Search"; // Change text back to 'Search' when hiding input
    }
}

