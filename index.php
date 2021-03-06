<!DOCTYPE html>
<html>
    <?php get_template_part('./template_parts/html_header') ?>
    <body>
    <div class="container">
        <?php get_template_part('template_parts/blog_header') ?>
        <div class="row">
            <div class="<?php echo portfolio_content_classes() ?>">

            </div>
            <div class="<?php echo portfolio_sidebar_classes() ?>">
                <?php dynamic_sidebar(SIDEBAR_NAME) ?>
            </div>
        </div>
        <?php get_template_part('template_parts/blog_footer') ?>
    </div>
    </body>
</html>