<?php
$blogs = get_posts(array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => -1,
));
?>

<section id="blogs" class="blogs pt-24">
    <div class="container mx-auto">
        <div class="heading flex flex-col items-center gap-y-5 mb-6 lg:flex-row lg:justify-between lg:items-start">
            <div class="section-title-wrapper">
                <h2 class="section-title lg:text-start">Our Blogs</h2>
                <p class="section-subtitle lg:text-start">A coffee shop will help you to tell the audience what your business.</p>
            </div>
            <div class="flex gap-3">
                <span id="arrow-prev" class="blogswiper-button-prev">
                    <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="2.5" y="2" width="30" height="30" rx="15" fill="#E79A2E" />
                        <rect x="1.5" y="1" width="32" height="32" rx="16" stroke="#E79A2E" stroke-opacity="0.3" stroke-width="2" />
                        <path d="M12.2975 16.1699L18.9382 9.5293C19.3972 9.07031 20.1393 9.07031 20.5934 9.5293L21.697 10.6328C22.1559 11.0918 22.1559 11.834 21.697 12.2881L16.9948 17L21.7018 21.707C22.1608 22.166 22.1608 22.9082 21.7018 23.3623L20.5983 24.4707C20.1393 24.9297 19.3972 24.9297 18.9431 24.4707L12.3024 17.8301C11.8386 17.3711 11.8386 16.6289 12.2975 16.1699Z" fill="white" />
                    </svg>
                </span>
                <span id="arrow-next" class="blogswiper-button-next">
                    <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="2.5" y="2" width="30" height="30" rx="15" fill="#E79A2E" />
                        <rect x="1.5" y="1" width="32" height="32" rx="16" stroke="#E79A2E" stroke-opacity="0.3" stroke-width="2" />
                        <path d="M22.7 17.8301L16.0594 24.4707C15.6004 24.9297 14.8582 24.9297 14.4041 24.4707L13.3006 23.3672C12.8416 22.9082 12.8416 22.166 13.3006 21.7119L18.0076 17.0049L13.3006 12.2979C12.8416 11.8389 12.8416 11.0967 13.3006 10.6426L14.3992 9.5293C14.8582 9.07031 15.6004 9.07031 16.0545 9.5293L22.6951 16.1699C23.159 16.6289 23.159 17.3711 22.7 17.8301Z" fill="white" />
                    </svg>
                </span>
            </div>
        </div>
        <div class="content">
            <div class="swiper blogsSwiper">
                <div class="swiper-wrapper pb-24">
                    <?php foreach ($blogs as $blog) :
                        $blog_id = $blog->ID;
                        $blog_content = $blog->post_content;
                        $brief_content = wp_trim_words($blog_content, 12, '...');
                        $featured_image_url = get_the_post_thumbnail_url($blog_id, 'full'); ?>
                        <div class="swiper-slide bg-white shadow-lg rounded-lg overflow-hidden">
                            <div class="img-wrapper h-72">
                                <img src="<?php echo $featured_image_url ? $featured_image_url : get_template_directory_uri() . '/assets/images/gallery-1.jpg'; ?>" alt="Coffee beans blog" class="h-full w-full object-cover">
                            </div>
                            <div class="infos-wrapper p-4 flex flex-col gap-y-3">
                                <h3 class="text-xl text-cs-black font-montserrat font-bold truncate"><?= $blog->post_title ?></h3>
                                <p class="text-cs-black/60 font-light"><?= $brief_content ?></p>
                                <a href="<?= $blog->guid ?>" class="text-cs-accent flex items-center gap-2">Read more <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    <?php wp_reset_postdata();
                    endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>