<html>

<head>
    <style>
        .bg-link {
            background-color: greenyellow;
        }

        nav ul li {
            display: inline;
        }
    </style>
</head>

<body>
    <nav>
        <ul>
            <li>
                <a href="/" class="<?= $_SERVER['REQUEST_URI'] === '/' ? 'bg-link' : '' ?>">Home</a>
            </li>
            <li>
                <a href="/about.php" class="<?= $_SERVER['REQUEST_URI'] === '/about.php' ? 'bg-link' : '' ?>">About</a>
            </li>
            <li>
                <a href="/contact.php" class="<?= $_SERVER['REQUEST_URI'] === '/contact.php' ? 'bg-link' : '' ?>">Contact</a>
            </li>
        </ul>
    </nav><br><br>
    <h2>INI HALAMAN ABOUT</h2>
</body>

</html>