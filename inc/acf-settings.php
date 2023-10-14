<?php

//ACF options page
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Theme Settings',
        'menu_title' => 'Theme Settings',
        'position' => 3.33,
    ));
}
//collapse acf fields
function my_acf_admin_head()
{
?>
    <script type="text/javascript">
        (function($) {
            $(document).ready(function() {
                $('.layout').addClass('-collapsed');
                $('.acf-postbox').addClass('closed');
            });
        })(jQuery);
    </script>
<?php
}
add_action('acf/input/admin_head', 'my_acf_admin_head');
