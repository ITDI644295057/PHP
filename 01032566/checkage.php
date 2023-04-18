<html>
    <?php
        $age=$_POST["age"];
        if($age>=18){
            echo "คุณสามารถเข้าเว็บไซต์ได้<br>";
    ?> 
        <img src="https://shorturl.asia/rlPZn" width='200' height='200'><br>
        <button><a href="https://www.webtoons.com/th/">webtoons.com</a></button>
    <?php 
        }else if($age==15){
        echo "อายุ 15 มาเป็นสาวรำวง<br><br>";      
    ?>  

       <iframe width="560" height="315" src="https://www.youtube.com/embed/V_hSwR3xvzs" title="YouTube video player" 
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
        allowfullscreen></iframe>

    <?php 
        }else{
            echo "คุณอายุไม่ถึง ไม่สามารถเข้าสู่เว็บไซต์ได้<br>";  
    ?> 
        <img src="https://shorturl.asia/CnRoF" width='200' height='200'>
        <button><a href="https://www.google.com/">google.com/</a></button>
        
    <?php            
        }
    ?>     
</html>

   

