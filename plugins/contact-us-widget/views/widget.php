<!-- This file is used to markup the public-facing widget. -->
<div class="find-us">
    
        <?php if (strlen(trim($linkedin)) > 0) : ?>
            <?php echo "<a href = '$linkedin'>"?> <span><i class="fas fa-phone"></i></span> </a>
        <?php endif; ?>

    
        <?php if (strlen(trim($facebook)) > 0) : ?>
            <?php echo "<a href = '$facebook'>"?> <span><i class="fas fa-phone"></i></span> </a>
        <?php endif; ?>
    
        <?php if (strlen(trim($twitter)) > 0) : ?>
            <?php echo "<a href = '$twitter'>"?> <span><i class="fas fa-phone"></i></span> </a>
        <?php endif; ?>
    
        <?php if (strlen(trim($youtube)) > 0) : ?>
            <?php echo "<a href = '$youtube'>"?> <span><i class="fas fa-phone"></i></span> </a>
        <?php endif; ?>
    <p>
        <?php if (strlen(trim($facebook_group)) > 0) : ?>
          <?php echo "<a href = '$facebook_group'>"?><button>test</button> </a>
        <?php endif; ?>
    </p>
    
</div>