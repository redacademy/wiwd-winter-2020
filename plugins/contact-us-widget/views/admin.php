<!-- This file is used to markup the administration form of the widget. -->

<div class="widget-content">
   <p><label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
      <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">
   </p>

   <p>
      <label for="<?php echo $this->get_field_id('linkedin'); ?>">Link to linkedin:</label>
      <input class="widefat" id="<?php echo $this->get_field_id('linkedin'); ?>" name="<?php echo $this->get_field_name('linkedin'); ?>" type="text" value="<?php echo $linkedin; ?>">
   </p>

   <p>
      <label for="<?php echo $this->get_field_id('facebook'); ?>">Telefacebook:</label>
      <input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo $facebook; ?>">
   </p>

   <p>
      <label for="<?php echo $this->get_field_id('twitter'); ?>">Teletwitter:</label>
      <input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo $twitter; ?>">
   </p>

   <p>
      <label for="<?php echo $this->get_field_id('youtube'); ?>">Teleyoutube:</label>
      <input class="widefat" id="<?php echo $this->get_field_id('youtube'); ?>" name="<?php echo $this->get_field_name('youtube'); ?>" type="text" value="<?php echo $youtube; ?>">
   </p>
   <p>
      <label for="<?php echo $this->get_field_id('facebook_group'); ?>">Telefacebook_group:</label>
      <input class="widefat" id="<?php echo $this->get_field_id('facebook_group'); ?>" name="<?php echo $this->get_field_name('facebook_group'); ?>" type="text" value="<?php echo $facebook_group; ?>">
   </p>
</div>