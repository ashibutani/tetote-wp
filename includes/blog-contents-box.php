<div class="blog-contents-box">
    <a href="<?php the_permalink(); ?>"></a>
    <div class="blog-content-left">
        <div class="blog-img">
            <?php
            $eyecatch = get_eyecatch_with_default();
            ?>
            <img src="<?php echo esc_url($eyecatch[0]); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy">
        </div>
    </div>
    <div class="blog-content-right">
        <div class="category fpc14sp12">
            <div class="category-icon">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/category-icon.png"
                    alt="<?php the_title_attribute(); ?>">
            </div>
            <?php
            $descends = get_term_descendants();
            if ($descends):
                foreach ($descends as $descend):
                    $term_name = esc_html($descend->name);
                endforeach;
            endif;
            ?>
            <?php echo $term_name; ?>
        </div>
        <div class="blog-title fpc18sp14">
            <?php     
            $title = get_the_title();
            $truncated_title_40 = get_truncated_title_40($title);
            echo esc_html($truncated_title_40);
            ?>
        </div>
        <div class="blog-date f12">
            <?php the_time(get_option('date_format')); ?>
        </div>
    </div>
</div>