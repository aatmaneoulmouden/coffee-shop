<?php
get_header();


// Get post data
$title = get_the_title();
$featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: get_template_directory_uri() . '/assets/images/gallery-1.jpg';
$content = get_the_content();

?>
<img src="<?= $featured_image_url ?>" alt="<?= $title ?>" class="w-full h-[50vh] mt-20 object-cover">
<div class="blog-content">
    <div class="container mx-auto">
        <h1 class="text-2xl text-cs-primary font-montserrat font-semibold mt-4 mb-6 lg:mt-8"><?= $title ?></h1>
        <?= $content ?>
    </div>
</div>

<?php
get_footer();
