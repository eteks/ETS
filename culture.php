 <?php 
    include('header.php');
?> 	
<style>
.fa-play,.fa-th,.fa-ellipsis-h
{
	display:none !important;
}
</style>
	<div id="" class="row clearfix text-center">
		<div class="section-heading ">
			<!-- <h3>FEEDBACK</h3> -->
			<h2 class="section-title">CULTURE</h2>
		</div>
       <div class="col-1">
	       <div id="gallery">
			    <div class="album" data-jgallery-album-title="Album 1">
			        <a href="images/culture/image_1.png"><img src="images/culture/thamizh.jpg" alt="Photo 1" /></a>
			    	<a href="images/culture/image_2.png"><img src="images/culture/Thamizha.jpg" alt="Photo 2" /></a>
			    	<a href="images/culture/image_3.jpg"><img src="images/culture/thamizha2.png" alt="Photo 3" /></a>
			    </div>
			    <div class="album" data-jgallery-album-title="Album 2">
			        <a href="images/culture/thamizha2.png"><img src="images/culture/image_1.png" alt="Photo 1" /></a>
			    	<a href="images/culture/Thamizha.jpg"><img src="images/culture/image_2.png" alt="Photo 2" /></a>
			    	<a href="images/culture/thamizh.jpg"><img src="images/culture/image_3.jpg" alt="Photo 3" /></a>
			    </div>
			</div>
			<script type="text/javascript">
				$(function(){
				    $( '#gallery' ).jGallery();
				});
			</script>
    	</div>
    </div>
<?php 
    include('footer.php');
?> 