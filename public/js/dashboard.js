const toggleSidebarBtn = document.getElementById('toggle-sidebar-btn');
const sidebar = document.getElementById('sidebar');

toggleSidebarBtn.addEventListener('click', function() {
    sidebar.classList.toggle('active');
});

