<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header('shop');

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action('woocommerce_before_main_content');
?>

<?php
$is_shop_vendor = strpos($_SERVER['REQUEST_URI'], trim("/vendor/ "));
if ($is_shop_vendor) :

    $img_src = "";
    if( strpos( $_SERVER['REQUEST_URI'], trim("vendor/apotek-sehat-jelita ") ) !== false )
    {
        $img_src = home_url("/wp-content/uploads/2020/09/apotek-sehat-jelita.png");
        $nowa    = "081289717013";
        $address = "Ruko Bidex Blok G 28-29 BSD City. Kel. Lengkong Gudang";
    }
    else if( strpos( $_SERVER['REQUEST_URI'], trim("vendor/apotek-anggun ") ) !== false )
    {
        $img_src = home_url("/wp-content/uploads/2020/09/apotek-anggun.png");
        $nowa    = "081289717013";
        $address = "Ruko griya loka sektor I-1 RF-1 No. 19-20. Kel Rawa buntu, Kec. Serpong";
    }
    else if( strpos( $_SERVER['REQUEST_URI'], trim("vendor/apotek-hijau ") ) !== false )
    {
        $img_src = home_url("/wp-content/uploads/2020/09/apotek-hijau.png");
        $nowa    = "081289717013";
        $address = "Ruko Golden Boulevard Blok S 05-06. Kel. Jelupang, Kec. Serpong Utara. 15323";
    }
    else if( strpos( $_SERVER['REQUEST_URI'], trim("vendor/apotek-tunggal ") ) !== false )
    {
        $img_src = home_url("/wp-content/uploads/2020/09/apotek-tunggal.png");
        $nowa    = "081289717013";
        $address = "JL. Raya Puspitek RT.004 RW.007, Pabuaran, Gunung Sindur. (Bizhub Serpong RD 12 dan RD 19)";
    }
    else if( strpos( $_SERVER['REQUEST_URI'], trim("vendor/apotek-permata ") ) !== false )
    {
        $img_src = home_url("/wp-content/uploads/2020/09/apotek-permata.png");
        $nowa    = "081289717013";
        $address = "Jl. Buaran Raya No. 39A-39B BSD Blok Batako. Serpong, Tangerang Selatan 15310";
    }
    else if( strpos( $_SERVER['REQUEST_URI'], trim("vendor/apotek-indah ") ) !== false )
    {
        $img_src = home_url("/wp-content/uploads/2020/09/apotek-indah.png");
        $nowa    = "081289717013";
        $address = "Ruko Golden Road Blok C-28/3-3A BSD Sektor VII C. Kel Lengkong Gudang, Kec Serpong";
    }
?>

    <header class="woocommerce-products-header">
        <div class="store-header-wrapper small-box with-image" style="background: url('<?php echo esc_url( home_url( '/wp-content/themes/easy-store/assets/images/toko-obat.jpg' ) ); ?>') top center; background-size: cover;">
            <div class="store-info small-box">
                <div class="owner-avatar"> 
                    <span class="avatar"> 
                        <img alt="" src="<?php echo $img_src; ?>" class="avatar avatar-62 photo" width="100%"> 
                    </span> 
                    
                    <span class="store-name"> 

                    </span> 
                </div>

                <div class="store-contact"> 
                    <span class="store-location"> 
                        <i class="fa fa-location-arrow"></i> <?php echo $address; ?>
                    </span> 
                    <span class="store-telephone"> 
                        <i class="fa fa-phone"></i> <?php echo $no_wa; ?>
                    </span>
                </div>
            </div>
            <!-- <div class="store-socials"> 
                <span class="socials-container"> 
                    <a class="vendor-social-uri" href="//#" target="_blank"> 
                        <i class="fa fa-facebook-square"></i> 
                    </a> 
                    
                    <a class="vendor-social-uri" href="//#" target="_blank"> 
                        <i class="fa fa-twitter-square"></i> 
                    </a> 
                    
                    <a class="vendor-social-uri" href="//#" target="_blank"> 
                        <i class="fa fa-google-plus-square"></i> 
                    </a> 
                    
                    <a class="vendor-social-uri" href="//#" target="_blank"> 
                        <i class="fa fa-linkedin"></i> 
                    </a> 
                    
                    <a class="vendor-social-uri" href="//#" target="_blank"> 
                        <i class="fa fa-youtube"></i> 
                    </a> 
                    
                    <a class="vendor-social-uri" href="//#" target="_blank"> 
                        <i class="fa fa-vimeo-square"></i> 
                    </a> 
                    
                    <a class="vendor-social-uri" href="//#" target="_blank"> 
                        <i class="fa fa-instagram"></i> 
                    </a> 
                    
                    <a class="vendor-social-uri" href="//#" target="_blank"> 
                        <i class="fa fa-pinterest-square"></i> 
                    </a> 
                    
                    <a class="vendor-social-uri" href="//#" target="_blank"> 
                        <i class="fa fa-flickr"></i> 
                    </a> 
                    
                    <a class="vendor-social-uri" href="//#" target="_blank"> 
                        <i class="fa fa-behance-square"></i> 
                    </a> 
                    
                    <a class="vendor-social-uri" href="//#" target="_blank"> 
                        <i class="fa fa-tripadvisor"></i> 
                    </a> 
                </span> 
            </div> -->
        </div>
        <div class="store-description-wrapper">
            <?php 
                do_action('woocommerce_archive_description');
            ?>
        </div>
    </header>

<?php else : ?>
    <header class="woocommerce-products-header">
        <?php if (apply_filters('woocommerce_show_page_title', true)) : ?>
            <h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
        <?php endif; ?>

        <?php
        /**
         * Hook: woocommerce_archive_description.
         *
         * @hooked woocommerce_taxonomy_archive_description - 10
         * @hooked woocommerce_product_archive_description - 10
         */
        do_action('woocommerce_archive_description');
        ?>
    </header>
<?php endif; ?>

<?php
if (woocommerce_product_loop()) {

    /**
     * Hook: woocommerce_before_shop_loop.
     *
     * @hooked woocommerce_output_all_notices - 10
     * @hooked woocommerce_result_count - 20
     * @hooked woocommerce_catalog_ordering - 30
     */
    do_action('woocommerce_before_shop_loop');

    woocommerce_product_loop_start();

    if (wc_get_loop_prop('total')) {
        while (have_posts()) {
            the_post();

            /**
             * Hook: woocommerce_shop_loop.
             */
            do_action('woocommerce_shop_loop');

            wc_get_template_part('content', 'product');
        }
    }

    woocommerce_product_loop_end();

    /**
     * Hook: woocommerce_after_shop_loop.
     *
     * @hooked woocommerce_pagination - 10
     */
    do_action('woocommerce_after_shop_loop');
} else {
    /**
     * Hook: woocommerce_no_products_found.
     *
     * @hooked wc_no_products_found - 10
     */
    do_action('woocommerce_no_products_found');
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action('woocommerce_after_main_content');

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action('woocommerce_sidebar');

get_footer('shop');
