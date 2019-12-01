<form >
    <p>
    	<label for="service_info">Quality Information</label>
    	<br>
    	<textarea name="quality_info" id="quality_info" rows="5" cols="30" style="width:500px;">
            <?php echo get_post_meta(get_the_ID(),'quality_info',true);  ?>
        </textarea>
    </p>
</form>
