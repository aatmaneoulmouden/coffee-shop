<?php
$gallery_img_1 = get_theme_mod('gallery_image_1', get_template_directory_uri() . '/assets/images/gallery-1.jpg');
$gallery_img_2 = get_theme_mod('gallery_image_2', get_template_directory_uri() . '/assets/images/gallery-1.jpg');
$gallery_img_3 = get_theme_mod('gallery_image_3', get_template_directory_uri() . '/assets/images/gallery-1.jpg');
$gallery_img_4 = get_theme_mod('gallery_image_4', get_template_directory_uri() . '/assets/images/gallery-1.jpg');
$gallery_img_5 = get_theme_mod('gallery_image_5', get_template_directory_uri() . '/assets/images/gallery-1.jpg');
$gallery_img_6 = get_theme_mod('gallery_image_6', get_template_directory_uri() . '/assets/images/gallery-1.jpg');
?>
<section id="gallery" class="offers pt-24">
    <div class="container mx-auto">
        <div class="heading flex flex-col items-center gap-y-5 mb-6">
            <div class="section-title-wrapper">
                <h2 class="section-title">Our Gallery</h2>
                <p class="section-subtitle">A coffee shop will help you to tell the audience what your business.</p>
            </div>
            <div class="flex gap-3 lg:hidden">
                <span id="arrow-prev" class="galleryswiper-button-prev">
                    <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="2.5" y="2" width="30" height="30" rx="15" fill="#E79A2E" />
                        <rect x="1.5" y="1" width="32" height="32" rx="16" stroke="#E79A2E" stroke-opacity="0.3" stroke-width="2" />
                        <path d="M12.2975 16.1699L18.9382 9.5293C19.3972 9.07031 20.1393 9.07031 20.5934 9.5293L21.697 10.6328C22.1559 11.0918 22.1559 11.834 21.697 12.2881L16.9948 17L21.7018 21.707C22.1608 22.166 22.1608 22.9082 21.7018 23.3623L20.5983 24.4707C20.1393 24.9297 19.3972 24.9297 18.9431 24.4707L12.3024 17.8301C11.8386 17.3711 11.8386 16.6289 12.2975 16.1699Z" fill="white" />
                    </svg>
                </span>
                <span id="arrow-next" class="galleryswiper-button-next">
                    <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="2.5" y="2" width="30" height="30" rx="15" fill="#E79A2E" />
                        <rect x="1.5" y="1" width="32" height="32" rx="16" stroke="#E79A2E" stroke-opacity="0.3" stroke-width="2" />
                        <path d="M22.7 17.8301L16.0594 24.4707C15.6004 24.9297 14.8582 24.9297 14.4041 24.4707L13.3006 23.3672C12.8416 22.9082 12.8416 22.166 13.3006 21.7119L18.0076 17.0049L13.3006 12.2979C12.8416 11.8389 12.8416 11.0967 13.3006 10.6426L14.3992 9.5293C14.8582 9.07031 15.6004 9.07031 16.0545 9.5293L22.6951 16.1699C23.159 16.6289 23.159 17.3711 22.7 17.8301Z" fill="white" />
                    </svg>
                </span>
            </div>
        </div>
        <div class="content">
            <div class="swiper gallerySwiper lg:hidden">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?= $gallery_img_1 ?>" alt="Coffee Shop Gallery Image">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= $gallery_img_2 ?>" alt="Coffee Shop Gallery Image">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= $gallery_img_3 ?>" alt="Coffee Shop Gallery Image">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= $gallery_img_4 ?>" alt="Coffee Shop Gallery Image">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= $gallery_img_5 ?>" alt="Coffee Shop Gallery Image">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= $gallery_img_6 ?>" alt="Coffee Shop Gallery Image">
                    </div>
                </div>
            </div>
            <div class="hidden lg:block">
                <div class="gallery-wrapper grid grid-cols-3 gap-5">
                    <div class="grid grid-rows-5 gap-5 h-[75vh]">
                        <div class="row-span-3">
                            <img src="<?= $gallery_img_1 ?>" alt="Coffee Shop Gallery Image" class="h-full w-full object-cover">
                        </div>
                        <div class="row-span-2">
                            <img src="<?= $gallery_img_2 ?>" alt="Coffee Shop Gallery Image" class="h-full w-full object-cover">
                        </div>
                    </div>
                    <div class="grid grid-rows-5 gap-5 h-[75vh]">
                        <div class="row-span-2">
                            <img src="<?= $gallery_img_3 ?>" alt="Coffee Shop Gallery Image" class="h-full w-full object-cover">
                        </div>
                        <div class="row-span-3">
                            <img src="<?= $gallery_img_4 ?>" alt="Coffee Shop Gallery Image" class="h-full w-full object-cover">
                        </div>
                    </div>
                    <div class="grid grid-rows-5 gap-5 h-[75vh]">
                        <div class="row-span-3">
                            <img src="<?= $gallery_img_5 ?>" alt="Coffee Shop Gallery Image" class="h-full w-full object-cover">
                        </div>
                        <div class="row-span-2">
                            <img src="<?= $gallery_img_6 ?>" alt="Coffee Shop Gallery Image" class="h-full w-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>