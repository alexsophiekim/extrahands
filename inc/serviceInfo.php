<form >
    <div class="">
        <label for="service_title">Service Title</label>
        <input type="text" name="service_title" value="<?php echo get_post_meta(get_the_ID(),'service_title',true); ?>">
    </div>
    <p>
    	<label for="service_info">Service Information</label>
    	<br>
    	<textarea name="service_info" id="service_info" rows="5" cols="30" style="width:500px;">
            <?php echo get_post_meta(get_the_ID(),'service_info',true);  ?>
        </textarea>
    </p>
</form>
