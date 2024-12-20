

<div class="sidebar">
    <a href="#">Home</a>
    <a href="#">Feature</a>
    <a href="#">About</a>
</div>

<!-- Main Content Wrapper -->
<div id="main-content">
    @yield('content')
</div>

<style>
    /* .header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color: #3498db;
        color: white;
        padding: 10px 20px;
        text-align: center;
        z-index: 1001;
    } */

    /* Sidebar Styles */
    .sidebar {
        position: fixed;
        top: 50px; /* Posisikan di bawah header */
        left: -250px;
        width: 250px;
        height: calc(100% - 50px); /* Sesuaikan tinggi sidebar dengan tinggi layar - header */
        background-color: #3498db; /* Blue Sky */
        transition: left 0.3s ease-in-out;
        z-index: 1000;
        padding: 20px;
        color: white;
    }

    .sidebar a {
        display: block;
        color: white;
        text-decoration: none;
        padding: 10px;
        margin: 10px 0;
    }

    .sidebar a:hover {
        background-color: #2980b9;
    }

    /* Main Content Styles */
    #main-content {
        margin-top: 60px; /* Sesuaikan dengan tinggi header + sedikit margin */
        transition: margin-left 0.3s ease-in-out;
        padding: 20px;
    }

    /* Show sidebar */
    .sidebar.show {
        left: 0;
    }

    /* Shift the content when sidebar is shown */
    .sidebar.show + #main-content {
        margin-left: 250px;
    }
</style>

<script>
    let sidebar = document.querySelector('.sidebar');
    let content = document.querySelector('#main-content');
    const triggerArea = 50; // 50px from the left edge
    let sidebarTimeout;

    document.body.addEventListener('mousemove', function(event) {
        // If cursor is within 50px from the left side of the screen, show the sidebar immediately
        if (event.clientX < triggerArea) {
            // Clear any existing timeout to avoid closing the sidebar
            clearTimeout(sidebarTimeout);
            
            // Show sidebar immediately
            sidebar.classList.add('show');
            content.classList.add('shifted');
        } else {
            // If the cursor moves away, set a timeout to close the sidebar after a delay (e.g., 500ms)
            clearTimeout(sidebarTimeout);
            sidebarTimeout = setTimeout(function() {
                sidebar.classList.remove('show');
                content.classList.remove('shifted');
            }, 500); // Delay for 500ms before closing
        }
    });
</script>
