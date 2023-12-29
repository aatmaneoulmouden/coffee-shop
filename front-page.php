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
<?php get_template_part('template-sections/section-offers'); ?>
<!-- ========== End OFFERS Section ========== -->

<!-- ========== Start GALLERY Section ========== -->
<?php get_template_part('template-sections/section-gallery'); ?>
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
<?php get_template_part('template-sections/section-blogs'); ?>
<!-- ========== End BLOGS Section ========== -->




<?php
get_footer();
