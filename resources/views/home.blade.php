<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite('resources/css/app.css')
    <style>
        body {
    font-family: Arial, sans-serif;
}
.bgImg{

    /* height: 500px; */
    background-image: url(img/slideBar.png);
    background-repeat: no-repeat;
    background-position: center center;
    /* background-attachment: fixed; */
    background-size: cover;
}
.market{
    font-size: 1vw;
}


    </style>
</head>
<body>
    @extends('layout.main')
    @section('container')
    <div class="slider overflow-hidden">
        <div class="slides flex max-w-max h-full transition-transform ease-in-out duration-500 ">
            <img src="img/slideBar.png" alt="Image D" class="slide absolute mix-blend-normal transition-opacity ease-in-out min-w-full" id="imageD">
            <img src="img/slideBar.png" alt="Image A" class="slide max-w-max h-full transition-opacity ease-in-out min-w-full" id="imageA">
            <img src="img/slideBar.png" alt="Image B" class="slide max-w-max h-full transition-opacity ease-in-out min-w-full" id="imageB">
            <img src="img/slideBar.png" alt="Image C" class="slide max-w-max h-full transition-opacity ease-in-out min-w-full" id="imageC">
            <img src="img/slideBar.png" alt="Image D" class="slide max-w-max h-full transition-opacity ease-in-out min-w-full" id="imageD">
        </div>
    </div>
    <div class="controls">
        <button id="prevButton">pref</button>
        <button id="nextButton">next</button>
    </div>
    @endsection
    
    {{-- <div class="w-full max-h-[420px] h-full relative flex flex-col-reverse">
        <img src="img/slideBar.png" alt="Image D" class="slide absolute mix-blend-normal transition-opacity ease-in-out min-w-full" id="imageD">
        <div>
            <div class="flex flex-row w-3/5 relative bottom-4 left-5 justify-evenly items-center">
                <div class="market bg-white h-full max-h-11 w-full max-w-44 cursor-pointer  rounded-full flex flex-row items-center gap-4 pl-5"><p>img</p>JP Books official Store</div>
                <div class="market bg-white h-full max-h-11 w-full max-w-44 cursor-pointer  rounded-full flex flex-row items-center gap-4 pl-5"><p>img</p>JP Books official Store</div>
                <div class="market bg-white h-full max-h-11 w-full max-w-44 cursor-pointer  rounded-full flex flex-row items-center gap-4 pl-5"><p>img</p>JP Books official Store</div>
                <div class="market bg-white h-full max-h-11 w-full max-w-44 cursor-pointer  rounded-full flex flex-row items-center gap-4 pl-5"><p>img</p>JP Books official Store</div>
            </div>
        </div>
    </div> --}}
    {{-- <div class="bgImg max-w-max min-w-full  bg-cover h-3/5  flex flex-col-reverse">
        <div class="flex flex-row gap-20 w-4/5 relative bottom-10 left-14 justify-evenly items-center">
            <div class="bg-white h-11 w-52 cursor-pointer text-sm rounded-full flex flex-row items-center gap-4 pl-5"><p>img</p>JP Books Store</div>
            <div class="bg-white h-11 w-52 cursor-pointer text-sm rounded-full flex flex-row items-center gap-4 pl-5"><p>img</p>JP Books Store</div>
            <div class="bg-white h-11 w-52 cursor-pointer text-sm rounded-full flex flex-row items-center gap-4 pl-5"><p>img</p>JP Books official Store</div>
            <div class="bg-white h-11 w-52 cursor-pointer text-sm rounded-full flex flex-row items-center gap-4 pl-5"><p>img</p>JP Books official Store</div>
        </div>
    </div> --}}
    {{-- <p>Image A value: <span id="valueA">0</span></p>
    <p>Image B value: <span id="valueB">0</span></p>
    <p>Image C value: <span id="valueC">0</span></p>
    <p>Image D value: <span id="valueD">0</span></p> --}}

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelector('.slides');
        const slideImages = document.querySelectorAll('.slide');
        const valueA = document.getElementById('valueA');
        const valueB = document.getElementById('valueB');
        const valueC = document.getElementById('valueC');
        const valueD = document.getElementById('valueD');
        const prevButton = document.getElementById('prevButton');
        const nextButton = document.getElementById('nextButton');
    
        let currentIndex = 0;
        const slideCount = slideImages.length;
    
        function updateValues() {
            valueA.textContent = currentIndex === 0 ? '1' : '0';
            valueB.textContent = currentIndex === 1 ? '1' : '0';
            valueC.textContent = currentIndex === 2 ? '1' : '0';
            valueD.textContent = currentIndex === 3 ? '1' : '0';
        }
    
        function showSlide(index) {
            slides.style.transform = `translateX(${-index * 100}%)`;
            currentIndex = index;
            updateValues();
        }
    
        prevButton.addEventListener('click', function() {
            if (currentIndex > 0) {
                showSlide(currentIndex - 1);
            } else {
                showSlide(slideCount - 1);
            }
        });
    
        nextButton.addEventListener('click', function() {
            if (currentIndex < slideCount - 1) {
                showSlide(currentIndex + 1);
            } else {
                showSlide(0);
            }
        });
    
        Automatically switch slides every 7 seconds
        setInterval(function() {
            if (currentIndex < slideCount - 1) {
                showSlide(currentIndex + 1);
            } else {
                showSlide(0);
            }
        }, 2000);
    
        Initialize the slider with the first image
        updateValues();
    });
    </script>
</body>
</html>
