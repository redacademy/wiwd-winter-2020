<!-- This file is used to markup the public-facing widget. -->
<div class="find-us">
     <div class ="social-icons">
        <?php if (strlen(trim($linkedin)) > 0) : ?>
            <?php echo "<a href = '$linkedin'>"?><i class="fab fa-linkedin-in"></i></a>
        <?php endif; ?>

    
        <?php if (strlen(trim($facebook)) > 0) : ?>
            <?php echo "<a href = '$facebook'>"?><i class="fab fa-facebook-f"></i></a>
        <?php endif; ?>
    
        <?php if (strlen(trim($twitter)) > 0) : ?>
            <?php echo "<a href = '$twitter'>"?><i class="fab fa-twitter"></i></a>
        <?php endif; ?>
    
        <?php if (strlen(trim($youtube)) > 0) : ?>
            <?php echo "<a href = '$youtube'>"?><i class="fab fa-youtube"></i></a>
        <?php endif; ?>

     </div>
     <div class="social-button">         
        <p>
            <?php if (strlen(trim($facebook_group)) > 0) : ?>
            <?php echo "<a href = '$facebook_group'>"?><button>Join the Facebook group</button> </a>
            <?php endif; ?>
        </p>
     </div>
</div>