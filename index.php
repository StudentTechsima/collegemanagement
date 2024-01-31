<?php include "header.php"; ?>

<!-- --------------------------------------Slider Section Start------------------------------------------- -->
<section class="slider-section">
    <div class="slide">
        <img src="images/college1.jpg" alt="" id="img">
    </div>
</section>
<!-- --------------------------------------Slider Section End------------------------------------------- -->


    <!-- -------------------------Notifications / Announcements Start----------------------------------- -->
    <section>
        <div class="announcements">
            <h1>Notifications / <b> Announcements</b></h1>
            <div class="notic">
                <marquee direction="up">
                    <a href=""><h2>Techsima 1 :-  </h2></a>
                    <a href=""><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, blanditiis. Ullam possimus deleniti iusto voluptatibus iure ducimus quas saepe, maxime voluptates dicta. Harum, corporis necessitatibus? Quibusdam suscipit nulla, iste iusto fugiat id alias totam atque commodi est facilis vitae error reprehenderit ratione, veniam autem, cum doloribus earum animi. Nesciunt, atque!</p><br><br></a>
                    <a href=""><h2>Techsima 2 :-  </h2></a>
                    <a href=""><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, blanditiis. Ullam possimus deleniti iusto voluptatibus iure ducimus quas saepe, maxime voluptates dicta. Harum, corporis necessitatibus? Quibusdam suscipit nulla, iste iusto fugiat id alias totam atque commodi est facilis vitae error reprehenderit ratione, veniam autem, cum doloribus earum animi. Nesciunt, atque!</p></a><br><br>
                    <a href=""><h2>Techsima 3 :-  </h2></a>
                    <a href=""><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, blanditiis. Ullam possimus deleniti iusto voluptatibus iure ducimus quas saepe, maxime voluptates dicta. Harum, corporis necessitatibus? Quibusdam suscipit nulla, iste iusto fugiat id alias totam atque commodi est facilis vitae error reprehenderit ratione, veniam autem, cum doloribus earum animi. Nesciunt, atque!</p></a><br><br>
               </marquee>
            </div>
        </div>
    </section>
    <!-- ---------------------------- Notifications / Announcements End---------------------------------- -->
    <!--  -->
  
    <script src="js/all.min.js"></script>
    <script>
        let slider=["images/college2.jpg","images/college3.jpg","images/college4.jpg","images/college5.jpg","images/college6.jpg"];
        let i=0;
        function demo(){
            let im=document.getElementById("img");
            im.src=slider[i];
            i++;
            if(i==slider.length){
                i=0;
            }
        }
        window.setInterval(demo,2000);
    </script>
<?php include "footer.php"; ?>