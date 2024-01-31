<?php include "header.php"; ?>
    <!-- slider start -->
    <div>
        <img src="image/ag-bg.jpg" id="img">
    </div>
    <script>
			
        let slider=["image/ag-bg.jpg","image/cs-bg.jpg","image/er-bg.jpg","image/ph-bg.jpg"];
        let i=0;
        function demo(){
            let im=document.getElementById("img");
            im.src=slider[i];				
            i++;
            if(i==slider.length){
                i=0;
            }
        }
        window.setInterval(demo,1500);				
    </script>
    <!--slider end-->

    <!-- course start-->
    <section class="course">
        <h1> ­ Our features courses</h1>
        <div class="box">
            <div class="head">
                <a href="#" class="inner-box"><img src="image/er.png" class="isz"></a>
                <h2>Engineering</h2>
            </div>
            <div class="head">
                <a href="#" class="inner-box"><img src="image/ph.png" class="isz"></a>
                <h2>Pharmacy</h2>
             </div>
            <div class="head">
                <a href="#" class="inner-box"><img src="image/cs.png" class="isz"></a>
                <h2>Computer<br> Application</h2>
            </div>
        </div>
        <div class="box">
            <div class="head">
                <a href="#" class="inner-box"><img src="image/ag.png" class="isz"></a>
                <h2>Architecture<br>& Planing</h2>
            </div>
            <div class="head">
                <a href="#" class="inner-box"><img src="image/er.png" class="isz"></a>
                <h2>Engineering</h2>
            </div>
            <div class="head">
                <a href="#" class="inner-box"><img src="image/ph.png" class="isz"></a>
                <h2>Pharmacy</h2>
            </div>
        </div>
    </section>
    <!-- course end-->
<?php include "footer.php"; ?>