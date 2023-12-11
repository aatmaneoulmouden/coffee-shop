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
            <a href="" class="bg-cs-accent py-3 px-7 font-medium text-white text-lg rounded-lg w-full text-center md:w-fit">Buy Now</a>
        </div>
    </div>
</section>
<!-- ========== End HOME Section ========== -->


<?php
get_footer();
