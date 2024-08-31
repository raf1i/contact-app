<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $html = "
    <h1> aplikasi kontak</h1>
    <div>
        <a href='/contacts'>kontak</a>
        <a href='/contacts/create'>kontak baru</a>
        <a href='/contacts/2'>tampilkan kontak</a>
        <a href='/students/muhidin'>tampilkan nama</a>
    </div>
    ";
    return $html;
});
 Route::get('/contacts', function () {
   return "<h1>hallo world<h1>";
});

Route::get('contacts', function() {
    return "<h1><marquee>Egi dan pasya sedang bermain basket</marquee></h1>";
});

Route::get('contacts/create', function() {
    return "<h1>Tambah kontak Baru</h1>";
});

Route::get('/contacts/{id}', function($id) {
    return "Halaman kontak dengan ID".$id;
});
Route::get('/students/{name}', function($name=null) {
    if ($name) {
        return "Nama Lengkap: ".$name;
    }else {
        return "Nama Lengkap belum di isi";
    }
});
Route::get('/companies', function() {
    return "<h1>Daftar Perusahaan</h1>";
});

Route::get('/companies/{name}', function($name) {
    return "<h1>Detail Perusahaan: ".$name."</h1>";
});

Route::get('/admin/contacts', function() {
    return "<h1>Halaman Admin Kontak</h1>";
});