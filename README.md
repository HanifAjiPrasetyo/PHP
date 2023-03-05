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
 <!-- Pemanggilan variabel $message di dalam tag html
    Menggunakan <?php echo $message ?> atau <= $message untuk ditampilkan di web browser ?> -->
<h1><?= $message ?></h1>
```
#### Maka akan tampil "You have read Dark Matter" pada web browser, karena bernilai true :
[IF-ELSE](if-else.png)
