<a href="<?php the_permalink(); ?>">
    <div class="slide_img">
        <?php
        $eyecatch = get_eyecatch_with_default();
        ?>
        <img src="<?php echo esc_url($eyecatch[0]); ?>" alt="<?php the_title_attribute(); ?>">
    </div>
    <div class="message-line1">
        <p class="fpc20sp16">
            <span class="back-gold"><?php echo esc_html($staff_meta['firstmessage']); ?></span><br>
            <span class="back-gold"><?php echo esc_html($staff_meta['secondmessage']); ?></span>
        </p>
    </div>
    <div class="message-line2">
        <p class="member-division fpc16sp12"><?php echo esc_html($staff_meta['position']); ?></p>
        <p class="member-year fpc16sp12"><?php echo esc_html($staff_meta['year']); ?>年入社</p>
    </div>
    <p class="member-name fpc24sp20">
        <?php echo esc_html($staff_meta['staffname']); ?>
    </p>
</a>
