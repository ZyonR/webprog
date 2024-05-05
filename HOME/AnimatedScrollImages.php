<?php
    function getImages(){
        $folderPath = "ImagesScroll/*";
        $all_raw_images = glob($folderPath);
        $all_peeps_img = array();
        foreach($all_raw_images as $file){
            if($file){//strpos($file,"Peeps")==TRUE
                $peep_img = "<img class='scrollIMG' src='$file' alt='Peep Image from Amadeus'/>";
                $all_peeps_img[] = $peep_img;
            }
        }
        return $all_peeps_img;
    }
?>
<div class='slider-container rounded-img'>
    <div class='slider'>
        <?php
            $peepImages = getImages();
            foreach($peepImages as $peepImage){
                echo $peepImage;
            }
        ?>
    </div>
</div>
<?php
if (count($peepImages) > 1) {
    $firstImage = array_shift($peepImages);
    $peepImages[] = $firstImage;
}
?>
<script>
    let sliderContainer = document.querySelector('.slider-container');
    let slider = document.querySelector(".slider");
    let sliderWidth = sliderContainer.clientWidth;
    let countImages = <?php echo count($peepImages); ?>;
    let currentIndex = 0;
    function slide(){
        currentIndex++;
        if(currentIndex > countImages-1){
            currentIndex = 0;
        }
        Array.from(slider.children).forEach(function(child) {
            child.style.width = sliderWidth + 'px';
        });
        let offset = -currentIndex*sliderWidth;
        slider.style.transform = 'translateX(' + offset + 'px)';
    }
    setInterval(slide, 2000);
</script>