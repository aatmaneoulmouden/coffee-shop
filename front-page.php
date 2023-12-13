<?php
get_header();
?>

<!-- ========== Start HOME Section ========== -->
<section id="home" class="home w-full h-screen pt-20 bg-home bg-cs-black/60 bg-blend-overlay bg-cover flex items-center">
    <div class="container mx-auto">
        <div class="flex flex-col items-center gap-y-6 md:items-start md:max-w-lg">
            <img src="<?= get_template_directory_uri() ?>/assets/images/logo.svg" alt="Cope of coffee" class="block md:hidden">
            <h1 class="font-montserrat font-bold text-white text-3xl leading-10 text-center md:text-left md:text-5xl md:leading-tight"> Keep your dreams aroused with a cup of coffee. </h1>
            <h2 class="text-white text-xl leading-7 hidden md:block">The coffee ideas shared by these generators are not cool at all, as they are not a human being.</h2>
            <a href="#offers" class="bg-cs-accent py-3 px-7 font-medium text-white text-lg rounded-lg w-full text-center md:w-fit">Buy Now</a>
        </div>
    </div>
</section>
<!-- ========== End HOME Section ========== -->

<!-- ========== Start OFFERS Section ========== -->
<section id="offers" class="offers pt-24">
    <div class="container mx-auto">
        <div class="heading flex flex-col items-center gap-y-5 mb-6 lg:flex-row lg:justify-between lg:items-start">
            <div class="section-title-wrapper">
                <h2 class="section-title lg:text-start">Our Offers</h2>
                <p class="section-subtitle lg:text-start">A coffee shop will help you to tell the audience what your business.</p>
            </div>
            <div class="flex gap-3">
                <span id="arrow-prev" class="offerswiper-button-prev">
                    <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="2.5" y="2" width="30" height="30" rx="15" fill="#E79A2E" />
                        <rect x="1.5" y="1" width="32" height="32" rx="16" stroke="#E79A2E" stroke-opacity="0.3" stroke-width="2" />
                        <path d="M12.2975 16.1699L18.9382 9.5293C19.3972 9.07031 20.1393 9.07031 20.5934 9.5293L21.697 10.6328C22.1559 11.0918 22.1559 11.834 21.697 12.2881L16.9948 17L21.7018 21.707C22.1608 22.166 22.1608 22.9082 21.7018 23.3623L20.5983 24.4707C20.1393 24.9297 19.3972 24.9297 18.9431 24.4707L12.3024 17.8301C11.8386 17.3711 11.8386 16.6289 12.2975 16.1699Z" fill="white" />
                    </svg>
                </span>
                <span id="arrow-next" class="offerswiper-button-next">
                    <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="2.5" y="2" width="30" height="30" rx="15" fill="#E79A2E" />
                        <rect x="1.5" y="1" width="32" height="32" rx="16" stroke="#E79A2E" stroke-opacity="0.3" stroke-width="2" />
                        <path d="M22.7 17.8301L16.0594 24.4707C15.6004 24.9297 14.8582 24.9297 14.4041 24.4707L13.3006 23.3672C12.8416 22.9082 12.8416 22.166 13.3006 21.7119L18.0076 17.0049L13.3006 12.2979C12.8416 11.8389 12.8416 11.0967 13.3006 10.6426L14.3992 9.5293C14.8582 9.07031 15.6004 9.07031 16.0545 9.5293L22.6951 16.1699C23.159 16.6289 23.159 17.3711 22.7 17.8301Z" fill="white" />
                    </svg>
                </span>
            </div>
        </div>
        <div class="content">
            <div class="swiper offersSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide bg-[#FCFBF7]">
                        <div class="img-wrapper">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/product.jpg" alt="Brazilian coffee beans">
                        </div>
                        <div class="infos-wrapper p-4 flex flex-col gap-y-3">
                            <span class="text-lg text-cs-primary font-bold">$5.99</span>
                            <h3 class="text-xl text-cs-black font-montserrat font-bold">Brazilian coffee beans</h3>
                            <p class="text-cs-black/60 font-light w-64">Coffee that's always you handle your own the way you like.</p>
                            <div class="flex justify-between items-center">
                                <div class="flex gap-1">
                                    <input type="number" min="1" value="1" class="bg-cs-accent/30 text-cs-primary p-3 text-center text-lg font-bold rounded w-14">
                                    <div class="flex flex-col gap-1 justify-between">
                                        <span class="bg-cs-accent/30 rounded p-2 cursor-pointer">
                                            <svg width="10" height="10" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.94857 3.26292H4.73714V1.05149C4.73714 0.780126 4.51707 0.560059 4.24571 0.560059H3.75428C3.48292 0.560059 3.26285 0.780126 3.26285 1.05149V3.26292H1.05143C0.780065 3.26292 0.559998 3.48298 0.559998 3.75434V4.24577C0.559998 4.51713 0.780065 4.7372 1.05143 4.7372H3.26285V6.94863C3.26285 7.21999 3.48292 7.44006 3.75428 7.44006H4.24571C4.51707 7.44006 4.73714 7.21999 4.73714 6.94863V4.7372H6.94857C7.21993 4.7372 7.44 4.51713 7.44 4.24577V3.75434C7.44 3.48298 7.21993 3.26292 6.94857 3.26292Z" fill="#42281A" />
                                            </svg>
                                        </span>
                                        <span class="bg-cs-accent/30 rounded p-2 cursor-pointer">
                                            <svg width="10" height="8" viewBox="0 0 8 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.94857 0.262878H1.05143C0.780065 0.262878 0.559998 0.482946 0.559998 0.754307V1.24574C0.559998 1.5171 0.780065 1.73716 1.05143 1.73716H6.94857C7.21993 1.73716 7.44 1.5171 7.44 1.24574V0.754307C7.44 0.482946 7.21993 0.262878 6.94857 0.262878Z" fill="#42281A" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <a href="" class="bg-cs-accent text-white text-lg font-medium py-3 px-10 rounded-md">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide bg-[#FCFBF7]">
                        <div class="img-wrapper">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/product.jpg" alt="Brazilian coffee beans">
                        </div>
                        <div class="infos-wrapper p-4 flex flex-col gap-y-3">
                            <span class="text-lg text-cs-primary font-bold">$5.99</span>
                            <h3 class="text-xl text-cs-black font-montserrat font-bold">Brazilian coffee beans</h3>
                            <p class="text-cs-black/60 font-light w-64">Coffee that's always you handle your own the way you like.</p>
                            <div class="flex justify-between items-center">
                                <div class="flex gap-1">
                                    <input type="number" min="1" value="1" class="bg-cs-accent/30 text-cs-primary p-3 text-center text-lg font-bold rounded w-14">
                                    <div class="flex flex-col gap-1 justify-between">
                                        <span class="bg-cs-accent/30 rounded p-2 cursor-pointer">
                                            <svg width="10" height="10" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.94857 3.26292H4.73714V1.05149C4.73714 0.780126 4.51707 0.560059 4.24571 0.560059H3.75428C3.48292 0.560059 3.26285 0.780126 3.26285 1.05149V3.26292H1.05143C0.780065 3.26292 0.559998 3.48298 0.559998 3.75434V4.24577C0.559998 4.51713 0.780065 4.7372 1.05143 4.7372H3.26285V6.94863C3.26285 7.21999 3.48292 7.44006 3.75428 7.44006H4.24571C4.51707 7.44006 4.73714 7.21999 4.73714 6.94863V4.7372H6.94857C7.21993 4.7372 7.44 4.51713 7.44 4.24577V3.75434C7.44 3.48298 7.21993 3.26292 6.94857 3.26292Z" fill="#42281A" />
                                            </svg>
                                        </span>
                                        <span class="bg-cs-accent/30 rounded p-2 cursor-pointer">
                                            <svg width="10" height="8" viewBox="0 0 8 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.94857 0.262878H1.05143C0.780065 0.262878 0.559998 0.482946 0.559998 0.754307V1.24574C0.559998 1.5171 0.780065 1.73716 1.05143 1.73716H6.94857C7.21993 1.73716 7.44 1.5171 7.44 1.24574V0.754307C7.44 0.482946 7.21993 0.262878 6.94857 0.262878Z" fill="#42281A" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <a href="" class="bg-cs-accent text-white text-lg font-medium py-3 px-10 rounded-md">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide bg-[#FCFBF7]">
                        <div class="img-wrapper">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/product.jpg" alt="Brazilian coffee beans">
                        </div>
                        <div class="infos-wrapper p-4 flex flex-col gap-y-3">
                            <span class="text-lg text-cs-primary font-bold">$5.99</span>
                            <h3 class="text-xl text-cs-black font-montserrat font-bold">Brazilian coffee beans</h3>
                            <p class="text-cs-black/60 font-light w-64">Coffee that's always you handle your own the way you like.</p>
                            <div class="flex justify-between items-center">
                                <div class="flex gap-1">
                                    <input type="number" min="1" value="1" class="bg-cs-accent/30 text-cs-primary p-3 text-center text-lg font-bold rounded w-14">
                                    <div class="flex flex-col gap-1 justify-between">
                                        <span class="bg-cs-accent/30 rounded p-2 cursor-pointer">
                                            <svg width="10" height="10" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.94857 3.26292H4.73714V1.05149C4.73714 0.780126 4.51707 0.560059 4.24571 0.560059H3.75428C3.48292 0.560059 3.26285 0.780126 3.26285 1.05149V3.26292H1.05143C0.780065 3.26292 0.559998 3.48298 0.559998 3.75434V4.24577C0.559998 4.51713 0.780065 4.7372 1.05143 4.7372H3.26285V6.94863C3.26285 7.21999 3.48292 7.44006 3.75428 7.44006H4.24571C4.51707 7.44006 4.73714 7.21999 4.73714 6.94863V4.7372H6.94857C7.21993 4.7372 7.44 4.51713 7.44 4.24577V3.75434C7.44 3.48298 7.21993 3.26292 6.94857 3.26292Z" fill="#42281A" />
                                            </svg>
                                        </span>
                                        <span class="bg-cs-accent/30 rounded p-2 cursor-pointer">
                                            <svg width="10" height="8" viewBox="0 0 8 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.94857 0.262878H1.05143C0.780065 0.262878 0.559998 0.482946 0.559998 0.754307V1.24574C0.559998 1.5171 0.780065 1.73716 1.05143 1.73716H6.94857C7.21993 1.73716 7.44 1.5171 7.44 1.24574V0.754307C7.44 0.482946 7.21993 0.262878 6.94857 0.262878Z" fill="#42281A" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <a href="" class="bg-cs-accent text-white text-lg font-medium py-3 px-10 rounded-md">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide bg-[#FCFBF7]">
                        <div class="img-wrapper">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/product.jpg" alt="Brazilian coffee beans">
                        </div>
                        <div class="infos-wrapper p-4 flex flex-col gap-y-3">
                            <span class="text-lg text-cs-primary font-bold">$5.99</span>
                            <h3 class="text-xl text-cs-black font-montserrat font-bold">Brazilian coffee beans</h3>
                            <p class="text-cs-black/60 font-light w-64">Coffee that's always you handle your own the way you like.</p>
                            <div class="flex justify-between items-center">
                                <div class="flex gap-1">
                                    <input type="number" min="1" value="1" class="bg-cs-accent/30 text-cs-primary p-3 text-center text-lg font-bold rounded w-14">
                                    <div class="flex flex-col gap-1 justify-between">
                                        <span class="bg-cs-accent/30 rounded p-2 cursor-pointer">
                                            <svg width="10" height="10" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.94857 3.26292H4.73714V1.05149C4.73714 0.780126 4.51707 0.560059 4.24571 0.560059H3.75428C3.48292 0.560059 3.26285 0.780126 3.26285 1.05149V3.26292H1.05143C0.780065 3.26292 0.559998 3.48298 0.559998 3.75434V4.24577C0.559998 4.51713 0.780065 4.7372 1.05143 4.7372H3.26285V6.94863C3.26285 7.21999 3.48292 7.44006 3.75428 7.44006H4.24571C4.51707 7.44006 4.73714 7.21999 4.73714 6.94863V4.7372H6.94857C7.21993 4.7372 7.44 4.51713 7.44 4.24577V3.75434C7.44 3.48298 7.21993 3.26292 6.94857 3.26292Z" fill="#42281A" />
                                            </svg>
                                        </span>
                                        <span class="bg-cs-accent/30 rounded p-2 cursor-pointer">
                                            <svg width="10" height="8" viewBox="0 0 8 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.94857 0.262878H1.05143C0.780065 0.262878 0.559998 0.482946 0.559998 0.754307V1.24574C0.559998 1.5171 0.780065 1.73716 1.05143 1.73716H6.94857C7.21993 1.73716 7.44 1.5171 7.44 1.24574V0.754307C7.44 0.482946 7.21993 0.262878 6.94857 0.262878Z" fill="#42281A" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <a href="" class="bg-cs-accent text-white text-lg font-medium py-3 px-10 rounded-md">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========== End OFFERS Section ========== -->

<!-- ========== Start GALLERY Section ========== -->
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
                        <img src="<?= get_template_directory_uri() ?>/assets/images/gallery-1.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/gallery-2.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/gallery-3.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/gallery-4.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/gallery-5.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/gallery-6.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="hidden lg:block">
                <div class="gallery-wrapper grid grid-cols-3 gap-5">
                    <div class="grid grid-rows-5 gap-5 h-[75vh]">
                        <div class="row-span-3">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/gallery-1.jpg" alt="" class="h-full w-full object-cover">
                        </div>
                        <div class="row-span-2">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/gallery-2.jpg" alt="" class="h-full w-full object-cover">
                        </div>
                    </div>
                    <div class="grid grid-rows-5 gap-5 h-[75vh]">
                        <div class="row-span-2">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/gallery-3.jpg" alt="" class="h-full w-full object-cover">
                        </div>
                        <div class="row-span-3">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/gallery-4.jpg" alt="" class="h-full w-full object-cover">
                        </div>
                    </div>
                    <div class="grid grid-rows-5 gap-5 h-[75vh]">
                        <div class="row-span-3">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/gallery-5.jpg" alt="" class="h-full w-full object-cover">
                        </div>
                        <div class="row-span-2">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/gallery-6.jpg" alt="" class="h-full w-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========== End GALLERY Section ========== -->

<!-- ========== Start FOLLOW US Section ========== -->
<section id="follow-us" class="follow-us mt-24 py-24 bg-followus bg-cs-black/60 bg-blend-overlay bg-cover">
    <div class="container mx-auto">
        <div class="heading mb-12">
            <h2 class="section-title text-cs-accent">Follow Us</h2>
        </div>
        <div class="content">
            <h2 class="text-white text-3xl text-center font-montserrat font-semibold leading-10 mb-12">Have an inquiry? <br> Text or call and ask something.</h2>
            <a href="tel:+212651-574352" class="text-white text-lg flex items-center justify-center gap-3 mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" />
                </svg>
                +212 651-574352
            </a>
            <a href="mailto:aatmaneoulmouden@gmail.com" class="text-white text-lg flex items-center justify-center gap-3 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-6 h-6">
                    <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                    <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                </svg>
                aatmaneoulmouden@gmail.com
            </a>
            <div class="flex items-center justify-center gap-4">
                <a href="/" class="sm-icon">
                    <i class="fa-brands fa-facebook-f text-white"></i>
                </a>
                <a href="https://www.linkedin.com/in/aatmaneoulmouden/" target="_blank" class="sm-icon">
                    <i class="fa-brands fa-linkedin-in text-white"></i>
                </a>
                <a href="/" class="sm-icon">
                    <i class="fa-brands fa-instagram text-white"></i>
                </a>
                <a href="https://github.com/aatmaneoulmouden" target="_blank" class="sm-icon">
                    <i class="fa-brands fa-github-alt text-white"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- ========== End FOLLOW US Section ========== -->

<!-- ========== Start BLOGS Section ========== -->
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
                    <div class="swiper-slide bg-white shadow-lg rounded-lg overflow-hidden">
                        <div class="img-wrapper">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/gallery-1.jpg" alt="Coffee beans blog">
                        </div>
                        <div class="infos-wrapper p-4 flex flex-col gap-y-3">
                            <h3 class="text-xl text-cs-black font-montserrat font-bold">Coffee beans blog</h3>
                            <p class="text-cs-black/60 font-light">Coffee that's always you handle your own the way you like...</p>
                            <a href="" class="text-cs-accent">Read more <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white shadow-lg rounded-lg overflow-hidden">
                        <div class="img-wrapper">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/gallery-1.jpg" alt="Coffee beans blog">
                        </div>
                        <div class="infos-wrapper p-4 flex flex-col gap-y-3">
                            <h3 class="text-xl text-cs-black font-montserrat font-bold">Coffee beans blog</h3>
                            <p class="text-cs-black/60 font-light">Coffee that's always you handle your own the way you like...</p>
                            <a href="" class="text-cs-accent">Read more <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white shadow-lg rounded-lg overflow-hidden">
                        <div class="img-wrapper">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/gallery-1.jpg" alt="Coffee beans blog">
                        </div>
                        <div class="infos-wrapper p-4 flex flex-col gap-y-3">
                            <h3 class="text-xl text-cs-black font-montserrat font-bold">Coffee beans blog</h3>
                            <p class="text-cs-black/60 font-light">Coffee that's always you handle your own the way you like...</p>
                            <a href="" class="text-cs-accent">Read more <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white shadow-lg rounded-lg overflow-hidden">
                        <div class="img-wrapper">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/gallery-1.jpg" alt="Coffee beans blog">
                        </div>
                        <div class="infos-wrapper p-4 flex flex-col gap-y-3">
                            <h3 class="text-xl text-cs-black font-montserrat font-bold">Coffee beans blog</h3>
                            <p class="text-cs-black/60 font-light">Coffee that's always you handle your own the way you like...</p>
                            <a href="" class="text-cs-accent">Read more <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========== End BLOGS Section ========== -->




<?php
get_footer();
