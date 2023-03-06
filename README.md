# PHP BASIC
##### Sumber Youtube : [Laracast](https://www.youtube.com/playlist?list=PL3VM-unCzF8ipG50KDjnzhugceoSG3RTC)
#### PHP pada umumnya digunakan dalam pembuatan website dinamis, yaitu sebuah website yang memungkinkan penggunanya untuk berinteraksi secara langsung, dalam artian pengguna dapat menambah, memodifikasi, ataupun menghapus konten di dalam sebuah web tanpa harus membuka struktur kode dari web tersebut. Kita juga dapat menyisipkan tag html apapun di dalam file PHP, namun tidak berlaku sebaliknya, tag PHP tidak dapat disisipkan di dalam file html.
## 1. Tag PHP
#### Di dalam file php, tag php dimulai dengan :
```
<?php
  // Baris kode Anda
?>
```
#### Untuk menampilkan baris kode ke web browser, di dalam tag php, digunakan perintah ``` echo ```, contoh :
```
  echo 'Hello World';
```
## 2. Variabel
#### Di dalam PHP, penamaan variabel dimulai dengan simbol ```$```. Contohnya adalah :
```
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
```
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
```
 <!-- Print variabel $message ke web browser di dalam tag html
    Menggunakan <?php echo $message ?> atau <= $message ?> -->
<h1><?= $message ?></h1>
```
#### Maka akan tampil "You have read Dark Matter" pada web browser, karena bernilai true :
![if-else](https://github.com/HanifAjiPrasetyo/PHP/blob/main/if-else.png?raw=true)
## 4. Arrays
#### Array dalam pemgrograman termasuk PHP, merupakan suatu tipe data terstruktur yang dapat menyimpan banyak data dengan suatu nama yang sama dan menempati tempat di memori yang berurutan serta bertipe data sama pula. Dalam PHP, array adalah struktur data yang memungkinkan untuk menyimpan beberapa elemen dalam satu variabel. Elemen-elemen ini disimpan sebagai pasangan nilai-kunci. Contoh deklarasi array :
```
<?php
$books = [
  "Do Androids Dream of Electric Sheep",
  "The Langoliers",
  "Hail Mary
];
```
#### Untuk memperoleh isi dari array tersebut, dapat digunakan ekspresi perulangan(*loop*) di dalam tag html, misalnya *for, foreach, while,* atau *do-while*. Contoh menggunakan *foreach* :
```
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
```
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
