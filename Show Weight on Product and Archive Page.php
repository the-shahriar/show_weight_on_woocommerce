

/************/ 

add_action ('woocommerce_shop_loop_item_title', 'show_weight', 20);
add_action ('woocommerce_single_product_summary', 'show_weight', 20);
function show_weight() {
global $product;
$weight_unit = get_option('woocommerce_weight_unit');
$attributes = $product->get_attributes();
if ( $product->has_weight() ) {
print '<p style="color: #98C93C; font-weight: 500; margin-bottom:5px;">Weight: '.$product->get_weight(). $weight_unit . '</p>'.PHP_EOL;
}
}
