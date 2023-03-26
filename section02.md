# SECTION 2
## 1. PAGE LINKS
#### Page link merupakan link di dalam sebuah website yang berfungsi untuk berpindah ke halaman lain. Misalnya, dalam sebuah website terdapat halaman home, about, dan contact, maka untuk mengakses atau berpindah dari halaman satu ke halaman lain, digunakan page link yang berupa tag ```a``` dari html. 
Contohnya adalah :
```html
<body>
    <nav>
        <ul>
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="/about.php">About</a>
            </li>
            <li>
                <a href="/contact.php">Contact</a>
            </li>
        </ul>
    </nav><br><br>
    <h2>INI HALAMAN HOME</h2>
</body>
```
#### Link mengarah ke file PHP dari setiap halaman web beserta ekstensinya, yaitu .php.
![](https://github.com/HanifAjiPrasetyo/PHP/blob/main/files/img/Screenshot%20(2107).png)
#### Secara default, web mengarah ke halaman home. Jika ingin mengakses halaman lain, maka klik pada link lainnya.
![](https://github.com/HanifAjiPrasetyo/PHP/blob/main/files/img/Screenshot%20(2109).png)
## 2. PARTIALS
#### Partials adalah bagian-bagian kecil dari kode HTML, CSS, atau JavaScript yang dapat digunakan kembali di beberapa halaman atau template pada sebuah website. Partial biasanya berisi kode yang sering digunakan seperti header, footer, sidebar, dan bagian lain dari layout atau komponen pada halaman web. Bagian yang terpisah ini nantinya dapat di-load menggunakan ```require``` atau ```include``` pada PHP.
#### Langkah awal yang dapat dilakukan yaitu membuat folder baru, yang dapat diberi nama partials.
#### Misalnya bagian navbar dipisah dengan membuat file bernama navbar.php di dalam folder partials :
```php.html
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
</nav>
```
#### Maka dalam file tersebut hanya terdapat baris kode dari navbar saja.
#### Lalu untuk me-load bagian navbar dengan ```require``` pada setiap halaman web yaitu :
```php.html
<body>
    <?php require 'partials/navbar.php' ?> // Diletakkan pada semua halaman web
    <br><br>
    <h2>INI HALAMAN HOME</h2>
</body>
```
