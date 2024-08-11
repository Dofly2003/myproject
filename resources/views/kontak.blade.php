<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <title>Jp Books | Kontak</title>
</head>
@extends('layout.main')

@section('container')
<div class="hidden mx-auto md:block max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

    <h1 class="ml-5 upercase h-10">Hubungi Kami</h1>
    <div class="flex flex-row mt-10 flex-wrap">
        <div class="flex w-full max-w-xs items-center "><img class="rounded-md w-11/12" src="img/kontak.webp" alt="kontak"></div>
    <div class="mt-10">
        <div class="mb-3">Masukkan anda sangat Berarti</div>
        <p class="mb-7">Tulis kritik, saran atau pesan Anda kepada kami dan dapatkan informasi seputar program dan pelatihan.</p>
        <div class="flex flex-row">
            <div class="">
                <p class="mb-5 mt-1 h-10 w-40">Nama Lengkap</p>
                <p class="mb-5 mt-1 h-10">Instansi</p> 
                <p class="mb-5 mt-1 h-10">Jabatan</p> 
                <p class="mb-5 mt-1 h-10">Kota Tinggal</p>
                <p class="mb-5 mt-1 h-10">No Whatsapp</p> 
                <p class="mb-5 mt-1 h-10">Pesan</p> 
            </div>
            <div class="flex flex-col ml-10 w-full">
                <input class="border-solid mb-5 h-10 w-full border-2 rounded-md" type="text" >
                <input class="border-solid mb-5 h-10 w-full border-2 rounded-md" type="text" >
                <input class="border-solid mb-5 h-10 w-full border-2 rounded-md" type="text" >
                <input class="border-solid mb-5 h-10 w-full border-2 rounded-md" type="text" >
                <input class="border-solid mb-5 h-10 w-full border-2 rounded-md" type="text" >
                <input class="border-solid mb-5 h-10 w-full border-2 rounded-md" type="text" >
                <div class=" flex justify-center items-center"> <input type="button" class="bg-blue-600 text-white rounded-md w-32 h-10" value="Kirim Pesan"></div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Mobile menu, show/hide based on menu state. -->
<div x-show="isOpen " class="md:hidden mx-auto md:block max-w-7xl px-4 py-6 sm:px-6 lg:px-8" id="mobile-menu">
        <h1>Hubungi Kami</h1>
        <div class="flex flex-row mt-10 flex-wrap">
            <div class="flex mb-7 items-center justify-center "><img class="rounded-md w-11/12" src="img/kontak.webp" alt="kontak"></div>
            <div>
                <div class="mb-3">Masukkan anda sangat Berarti</div>
                <p class="mb-7">Tulis kritik, saran atau pesan Anda kepada kami dan dapatkan informasi seputar program dan pelatihan.</p>
                <div class="flex flex-row">
                    <div>
                        <p class="mb-5 mt-1 h-10 w-40">Nama Lengkap</p>
                        <p class="mb-5 mt-1 h-10">Instansi</p> 
                        <p class="mb-5 mt-1 h-10">Jabatan</p> 
                        <p class="mb-5 mt-1 h-10">Kota Tinggal</p>
                        <p class="mb-5 mt-1 h-10">No Whatsapp</p> 
                        <p class="mb-5 mt-1 h-10">Pesan</p> 
                    </div>
                    <div class="flex flex-col w-full">
                        <input class="border-solid mb-5 h-10 w-full border-2 rounded-md" type="text" >
                        <input class="border-solid mb-5 h-10 w-full border-2 rounded-md" type="text" >
                        <input class="border-solid mb-5 h-10 w-full border-2 rounded-md" type="text" >
                        <input class="border-solid mb-5 h-10 w-full border-2 rounded-md" type="text" >
                        <input class="border-solid mb-5 h-10 w-full border-2 rounded-md" type="text" >
                        <input class="border-solid mb-5 h-10 w-full border-2 rounded-md" type="text" >
                        <div class=" flex justify-center items-center"> <input type="button" class="bg-blue-700 text-white rounded-md w-32 h-10" value="Kirim Pesan"></div>

                    </div>
                </div>
            </div>
        </div>
      </div>
@endsection

@section('main')
<h1>Hubungi Kami</h1>
<div>
    <div>foto</div>
    <div>
        <div>Masukkan anda sangat Berarti</div>
        <p>Tulis kritik, saran atau pesan Anda kepada kami dan dapatkan informasi seputar program dan pelatihan.</p>
        <div><p>Nama Lengkap</p> <input type="text"> </div>
        <div><p>Instansi</p> <input type="text" ></div>
        <div><p>Jabatan</p> <input type="text" ></div>
        <div><p>Kota Tinggal</p> <input type="text" ></div>
        <div><p>No Whatsapp</p> <input type="text" ></div>
        <div><p>Pesan</p> <input type="text" ></div>
    </div>
</div>
@endsection
</html>
