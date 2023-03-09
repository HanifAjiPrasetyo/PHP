# PHP BASIC
##### Sumber Youtube : [Laracast](https://www.youtube.com/playlist?list=PL3VM-unCzF8ipG50KDjnzhugceoSG3RTC)
#### PHP pada umumnya digunakan dalam pembuatan website dinamis, yaitu sebuah website yang memungkinkan penggunanya untuk berinteraksi secara langsung, dalam artian pengguna dapat menambah, memodifikasi, ataupun menghapus konten di dalam sebuah web tanpa harus membuka struktur kode dari web tersebut. Kita juga dapat menyisipkan tag html apapun di dalam file PHP, namun tidak berlaku sebaliknya, tag PHP tidak dapat disisipkan di dalam file html.
## 1. Tag PHP
#### Di dalam file php, tag php dimulai dengan :
```php
<?php
  // Baris kode Anda
?>
```
#### Untuk menampilkan baris kode ke web browser, di dalam tag php, digunakan perintah ``` echo ```, contoh :
```php
  echo 'Hello World';
```
## 2. Variabel
#### Di dalam PHP, penamaan variabel dimulai dengan simbol ```$```. Contohnya adalah :
```php
// Variabel bernama $greeting dengan value "Hello"
$greeting = "Hello";

// Pemanggilan dalam echo, dipisahkan oleh ' . ' jika terdapat tambahan argumen, misalnya string atau variabel lain (concate)
echo $greeting . " Everybody!";

// Variabel juga dapat dipanggil di didalam string, NAMUN HARUS DI DALAM PETIK DUA " "
echo "$greeting Everybody!"; // Output sama dengan di atas
```
## 3. Conditionals dan Booleans
#### Conditional merupakan salah satu ekspresi dalam pemrograman yang menghasilkan nilai *true / false*. Jika kondisi tersebut bernilai *true* maka sistem menjalankan statement di dalam if statement namun jika kondisi tersebut bernilai *false* maka sistem tidak menjalankan statement tersebut. Terdapat sebuah tipe data yang hanya mengembalikan nilai *true / false*, yaitu boolean. Nilai boolean memiliki default *false*. Contohnya :
#### Di dalam tag php :
```php
<?php
$name = "Dark Matter";
$read = true;

//Operasi if-else
if ($read) {
    $message = "You have read $name"; // Mengembalikan nilai true
} else {
    $message = "You have NOT read $name"; // Mengembalikan nilai false
}
<?
```
#### Di dalam body tag html
```html
 <!-- Print variabel $message ke web browser di dalam tag html
    Menggunakan <?php echo $message ?> atau <= $message ?> -->
<h1><?= $message ?></h1>
```
#### Maka akan tampil "You have read Dark Matter" pada web browser, karena bernilai true :
![if-else](https://github.com/HanifAjiPrasetyo/PHP/blob/main/if-else.png?raw=true)
## 4. Arrays
#### Array dalam pemgrograman termasuk PHP, merupakan suatu tipe data terstruktur yang dapat menyimpan banyak data dengan suatu nama yang sama dan menempati tempat di memori yang berurutan serta bertipe data sama pula. Dalam PHP, array adalah struktur data yang memungkinkan untuk menyimpan beberapa elemen dalam satu variabel. Elemen-elemen ini disimpan sebagai pasangan nilai-kunci. Contoh deklarasi array :
```php
<?php
$books = [
  "Do Androids Dream of Electric Sheep",
  "The Langoliers",
  "Hail Mary
];
```
#### Untuk memperoleh isi dari array tersebut, dapat digunakan ekspresi perulangan(*loop*) di dalam tag html, misalnya *for, foreach, while,* atau *do-while*. Contoh menggunakan *foreach* :
```html
 <ul>
        <?php foreach ($books as $book) : ?>
            <li><?= $book ?></li>
        <?php endforeach ?>
 </ul>
```
#### Maka akan tampil di web browser :
![if-else](https://github.com/HanifAjiPrasetyo/PHP/blob/main/foreach-array.png?raw=true)
## 5. Associative Arrays
#### Associative array merupakan array yang berisi satu atau lebih array, dimana terdapat key dan value pada setiap data, contoh :
```php
<?php
$books = [
  [
    'name' => "Do Androids Dream of Electric Sheep",
    'author' => "Philip K. Dick",
    'purchaseUrl' => "http://example.com"
  ],
  [
    'name' => "Project Hail Mary",
    'author' => "Andy Weir",
    'purchaseUrl' => "http://example.com"
  ]
]
```
#### Setiap item dalam array di atas memiliki identifier atau key dengan value masing-masing, contohnya *key : name, value : Project Hail Mary*.
## 6. Functions and Filtering
#### *Function* dalam pemrograman termasuk PHP adalah sebuah blok kode yang dapat dipanggil atau digunakan berulang kali dalam program. Fungsi biasanya memiliki nama yang unik dan tugas yang spesifik, sehingga memudahkan pengembang untuk menggunakan ulang kode yang sama tanpa perlu menuliskan ulang kode tersebut.
Sedangkan *filtering* dalam pemrograman termasuk PHP mengacu pada proses memilih sebagian data dari kumpulan data berdasarkan suatu kriteria tertentu. Ini dilakukan dengan menggunakan perintah atau fungsi yang umumnya dinamakan filter.
Contoh filter :
```php
<ul>
<?php foreach ($books as $book) : ?>
// Filter dengan if, filter buku berdasarkan nama author
    <?php if ($book['author'] = 'Andy Weir') : ?>
      <li>
        <a href="<?= $book['purchaseUrl'] ?>">
         <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
        </a>
      </li>
    <?php endif ?>
   <?php endforeach ?>
</ul>
```
#### Pengkondisian dengan sebuah tanda "=" seperti di atas tidak tepat, karena 1 "=" akan mengubah value dari semua key author menjadi 'Andy Weir' atau dinamakan *assign value*, sedangkan dibutuhkan filter data untuk menampilkan buku dengan author "Andy Weir" saja atau *equal to*, sehingga harus dicek kesamaan atau *equality* dengan 3 tanda "=" atau "===". Maka kondisi dalam if menjadi :
```php
<ul>
    <?php foreach ($books as $book) : ?>
    // Filter dengan if, filter buku berdasarkan nama author
      <?php if ($book['author'] === 'Andy Weir') : ?>
        <li>
          <a href="<?= $book['purchaseUrl'] ?>">
            <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
          </a>
        </li>
      <?php endif ?>
    <?php endforeach ?>
</ul>
```
#### Contoh function dalam PHP :
```php
// Deklarasi function
function filterByAuthor()
    {
        // Ekspresi fungsi
    }

// Pemanggilan function untuk dieksekusi, cukup memanggil nama fungsinya dengan akhiran ()
filterByAuthor();

// Menampilkan isi dari function di dalam tag HTML ke web browser 
function filterByAuthor()
    {
        return 'gibberish'; // return merupakan nilai yang dikembalikan dari sebuah function, dapat berupa tipe data apapun
    }
    
// Di dalam tag HTML    
<p><?= filterByAuthor(); ?></p> // Maka akan tampil 'gibberish' di web browser
```
#### Contoh filtering dalam function :
```php
// Melakukan foreach loop pada array $books yang digunakan sebagai parameter dan mem-filter berdasarkan author 'Andy Weir'
function filterByAuthor($books)
    {
        $filteredBooks = [];

        foreach ($books as $book) {
            if ($book['name'] === 'Andy Weir') {
                $filteredBooks[] = $book;
            }
        }
        return $filteredBooks; // Array baru berisi data buku yang telah di-filter
    }
// Pemanggilan function    
<ul>
    <?php foreach (filterByAuthor($books) as $book) : ?>
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
            </a>
        </li>
    <?php endforeach ?>
</ul>
```
#### Namun, function di atas kurang baik, karena kita harus mengganti nama authornya dalam function jika ingin menampilkan author lain, maka dibutuhkan parameter baru yang berisi nama author, sehingga menjadi :
```php
// Menambahkan parameter $author yang diisikan nama author ketika pemanggilan function
function filterByAuthor($books, $author)
    {
        $filteredBooks = [];

        foreach ($books as $book) {
            if ($book['name'] === $author) {
                $filteredBooks[] = $book;
            }
        }
        return $filteredBooks; // Array baru berisi data buku yang telah di-filter
    }
// Pemanggilan function    
<ul>
    <?php foreach (filterByAuthor($books, 'Andy Weir') as $book) : ?>
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
            </a>
        </li>
    <?php endforeach ?>
</ul>
```
