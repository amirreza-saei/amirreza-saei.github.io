<?php if (is_active_sidebar('watson-blog-sidebar') && is_singular('post')) : ?>
    <div id="sidebar">
        <div class="sidebar-button">
            <span class="icon">
                <i class="fa fa-arrow-left"></i>
            </span>
        </div>
        <div class="sidebar-content">
            <div class="sidebar-content-wrapper">
                <?php dynamic_sidebar('watson-blog-sidebar'); ?>
            </div>
        </div>
    </div>
<?php endif; ?>