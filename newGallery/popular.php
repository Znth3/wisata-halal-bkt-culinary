<link rel="stylesheet" href="gallery.css">

<!-- Container for the image gallery -->
<div class="containerG">

    <div style="background-color: lightgrey; padding: 15px">
        <!-- Full-width images with number text -->
        <div class="mySlides">
            <div class="numbertext">1 / 6</div>
            <img src="img/culinary/cancang.jpg" onclick="recKul('11')" style="width:100%; height: 50%">
        </div>

        <div class="mySlides ">
            <div class="numbertext">2 / 6</div>
            <img src="img/culinary/itiak.jpg" onclick="recKul('4')" style="width:100%">
        </div>

        <div class="mySlides ">
            <div class="numbertext">3 / 6</div>
            <img src="img/culinary/nasikapau.jpg" onclick="recKul('22')" style="width:100%; height: 250px">
        </div>

        <div class="mySlides ">
            <div class="numbertext">4 / 6</div>
            <img src="img/culinary/tmbng.jpg" onclick="recKul('3')" style="width:100%">
        </div>
        <div class="caption-container">
            <p id="caption"></p>
        </div>
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>





    <!-- Image text -->


    <!-- Thumbnail images -->
    <div class="rowG">
        <div class='column-group' align="center">
            <div class="column">
                <img class="demo cursor" src="img/culinary/cancang.jpg" style="width:100%" onclick="currentSlide(1)" alt="Cancang">
            </div>
            <div class="column">
                <img class="demo cursor" src="img/culinary/itiak.jpg" style="width:100%" onclick="currentSlide(2)" alt="Gulai Itiak Lado Mudo">
            </div>
            <div class="column">
                <img class="demo cursor" src="img/culinary/nasikapau.jpg" style="width:100%" onclick="currentSlide(3)" alt="Nasi Kapau">
            </div>
            <div class="column">
                <img class="demo cursor" src="img/culinary/tmbng.jpg" style="width:100%" onclick="currentSlide(4)" alt="Tambungsu">
            </div>
        </div>

    </div>
</div>

<script src="gallery.js"></script>
