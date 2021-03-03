<footer>
    <div class="row">
        <div class="col-12 copyright-date">
            &copy; <?php echo date_i18n(_x('Y', 'copyright date format', 'portfolio')) ?> <?php bloginfo('name') ?>
        </div>
        <div class="col-12 powered-by-wordpress">
            <a href="<?php echo portfolio_base_path() ?>">
                <?php _e('Powered by WordPress', 'portfolio') ?>
            </a>
        </div>
    </div>
</footer>

<?php wp_footer() ?>