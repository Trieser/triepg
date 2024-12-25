<div class="header">
    <h1>Trie World</h1>
    <nav>
        <a href="#">Home</a>
        <a href="#">Features</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
        
    </nav>
</div>

<style>
    /* Header Style */
    .header {
        background-color: #3498db; /* Warna Biru Langit */
        color: white;
        text-align: center;
        padding: 10px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        z-index: 1001;
    }

    .header h1 {
        margin: 0;
    }

    .header nav {
        display: flex;
        gap: 30px;
        align-items: center; 
    }

    .header nav a {
        color: white;
        text-decoration: none;
        font-size: 16px;
    }

    .header nav a:hover {
        text-decoration: underline;
    }

    @media (max-width: 768px) {
        .header {
            flex-direction: column;
            text-align: center;
        }

        .header h1 {
            font-size: 18px;
            margin-bottom: 10px; 
        }

        .header nav {
            font-size: 14px;
            flex-direction: column;
            gap: 10px;
        }

        .header nav a {
            padding: 8px 0;
        }
    }
</style>
