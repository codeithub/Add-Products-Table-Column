/**
 * @snippet       New Products Table Column on WooCommerce Admin
 * @author        codeithub
 */
 
add_filter( 'manage_edit-product_columns', 'codeithub_admin_products_visibility_column', 9999 );
 
function codeithub_admin_products_visibility_column( $columns ){
   $columns['visibility'] = 'Visibility';
   return $columns;
}
 
add_action( 'manage_product_posts_custom_column', 'codeithub_admin_products_visibility_column_content', 10, 2 );
 
function codeithub_admin_products_visibility_column_content( $column, $product_id ){
    if ( $column == 'visibility' ) {
        $product = wc_get_product( $product_id );
      echo $product->get_catalog_visibility();
    }
}
