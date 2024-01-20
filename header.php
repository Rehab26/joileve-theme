<!DOCTYPE html>
<html dir="rtl" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
        <title>Joileve</title>
    </head>
    <style>
  .bg-hero-pattern {
    background-image: url("<?php echo get_template_directory_uri() ?>/assets/bg.png");
  }
  .bg-secondary {
    background-color: #fff;
  background-image: url('<?php echo get_template_directory_uri() ?>/assets/logomark.png');
  background-position: center;
  background-repeat: no-repeat;
}
</style>
    <body <?php body_class(); ?> >
        <main>
            <div class="bg-light-brand text-white bg-hero-pattern py-3 px-3">
                <ul class="flex justify-between items-center md:justify-center tablet:justify-between lg:px-10 text-center md:px-3 text-sm">
                    <li class="lg:gap-1 justify-center items-center flex md:hidden text-[12px]">
                        <embed src="<?php echo get_template_directory_uri() ?>/assets/car.svg"/> 
                        <p>توصيل إلى</p>
                        <embed src="<?php echo get_template_directory_uri() ?>/assets/flag.svg" /> 
                        <a href="#" class="space-x-1">الرياض</a>
                    </li>
                    <li>احصل على خصم 20% باستخدام رمز القسيمة craftxtore2023</li>
                    <li class="md:hidden block">دخول / سجل معنا</li>
                </ul>
            </div>
            <section class="">
            <header class="md:text-sm px-24 md:px-10 tablet:px-5 sm:px-1">
                <nav class="text-black-brand w-full flex justify-between p-5 items-center md:text-[14px] top-3">
                <div id="menuToggle" class="relative">
                        <input type="checkbox" class="" />
                        <div class="hidden sm:block">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    <?php 
                wp_nav_menu(array(
                    'theme_location' => 'top-menu',
                    'menu_class'=>'flex justify-start items-center gap-5 sm:hidden',
                    
                ));

                    ?>
                    <img class="sm:w-2/6 tablet:w-32 md:w-32 align-top" src="<?php echo get_template_directory_uri() ?>/assets/logo-img.png" />
                    <a href="<?php echo wc_get_cart_url(); ?>"><button class="flex space-x-1 justify-center items-center py-3 px-10 tablet:px-4 md:px-2 rounded-lg border border-light-brand relative">
                        <div class="header-cart-count absolute -top-3 -right-1 h-5 w-5 bg-pink-brand rounded-full align-middle text-white text-[12px]"><?php echo WC()->cart->get_cart_contents_count(); ?></div>
                        <embed src="<?php echo get_template_directory_uri() ?>/assets/cart.svg" />
                        <p>سلة المشتريات</p>
                    </button></a>
                </nav>
                

            </header>
            
            