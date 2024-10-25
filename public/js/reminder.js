const toggleBtn = document.getElementById('toggle-btn');
const rightSidebar = document.getElementById('right-sidebar');

toggleBtn.addEventListener('click', function() {
    rightSidebar.classList.toggle('hidden');
    
    if (rightSidebar.classList.contains('hidden')) {
        toggleBtn.textContent = 'Show';
    } else {
        toggleBtn.textContent = 'Hide';
    }
});
