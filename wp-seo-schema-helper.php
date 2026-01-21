<?php
/**
 * Plugin Name: WP SEO Schema Helper
 * Description: A lightweight helper plugin for adding basic SEO-related schema markup in WordPress.
 * Version: 0.1.0
 * Author: Edu Nezzan
 * Author URI: https://nezzan.edu.eu.org
 * License: GPL-2.0+
 * Outputs a basic WebPage schema using JSON-LD.
 * This implementation is intentionally minimal for learning purposes.
 */

 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('wp_head', function () {
    if (is_singular()) {
        ?>
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "WebPage",
          "name": "<?php echo esc_js(get_the_title()); ?>",
          "url": "<?php echo esc_url(get_permalink()); ?>"
        }
        </script>
        <?php
    }
});

