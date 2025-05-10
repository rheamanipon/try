document.addEventListener('DOMContentLoaded', function() {
    // Filter dropdown toggle
    const filterBtn = document.getElementById('filter-btn');
    const filterDropdown = document.getElementById('filter-dropdown');
    
    if (filterBtn && filterDropdown) {
        filterBtn.addEventListener('click', function() {
            filterDropdown.classList.toggle('show');
        });

        // Close the dropdown when clicking outside
        document.addEventListener('click', function(event) {
            if (!event.target.closest('.filter-container')) {
                filterDropdown.classList.remove('show');
            }
        });

        // Filter options
        const filterOptions = document.querySelectorAll('.filter-option');
        filterOptions.forEach(option => {
            option.addEventListener('click', function() {
                const filterValue = this.getAttribute('data-filter');
                filterTable(filterValue);
                
                // Update button text
                filterBtn.querySelector('span').textContent = this.textContent;
                filterDropdown.classList.remove('show');
            });
        });
    }

    // Function to filter table rows
    function filterTable(filterValue) {
        const tableRows = document.querySelectorAll('.table-container tbody tr');
        
        tableRows.forEach(row => {
            const roleCell = row.querySelector('td:nth-child(3)');
            if (roleCell) {
                const role = roleCell.textContent.trim().toLowerCase();
                
                if (filterValue === 'all' || role === filterValue.toLowerCase()) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            }
        });
    }

    // Search functionality
    const searchInput = document.getElementById('search-input');
    if (searchInput) {
        searchInput.addEventListener('keyup', function() {
            const searchTerm = this.value.toLowerCase();
            const tableRows = document.querySelectorAll('.table-container tbody tr');
            
            tableRows.forEach(row => {
                const text = row.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    }
    // Pagination
    const paginationBtns = document.querySelectorAll('.pagination-btn');
    if (paginationBtns.length > 0) {
        paginationBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.pagination-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                
                // Here would go actual pagination logic if needed
            });
        });
    }
});
