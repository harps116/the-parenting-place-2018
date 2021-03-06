<?php
/*
* Template Name: Left Sidebar
*/

$handler = new IntersectionPluginHandler\ACF();
get_header(); 
$the_sections = ['banner'];
$sections = $handler->prepare($the_sections);
$handler->render($sections);
?>
<div class="container-fluid">
    <div class="row">
        <aside class="col-md-3 wp-bp-sidebar-width">
            <?php get_sidebar(); ?>
        </aside>   <!-- #sidebar -->
        <div class="col-md-9 wp-bp-content-width">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <section>
                        <?php
                            $sections = $handler->prepare();
                                                        
                            $handler->render($sections, ['banner']);
                        ?>
                    </section>
                </main>
            </div>
        </div><!-- #content -->
    </div><!-- #row -->
</div><!-- #container -->
<?php
get_footer();
