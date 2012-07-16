<?php
class Model_Cart extends Model
{
    public function add_to_cart($count,$id,$buyer)
    {
        return DB::insert('cart', array('count', 'product_id', 'buyer'))
        ->values(array($count,$id,$buyer))
        ->execute();
    }

    /**
     * Gets product id from cart by buyer email.
     * 
     * @param string $buyer Buyers e-mail.
     * 
     * @return integer        Product id.
     */
    public function get_product_id_from_cart($buyer)
    {
        return DB::select()
        ->from('cart')
        ->where('buyer', '=', $buyer)
        ->execute()
        ->get('product_id');
    }

    /**
     * Delete item from cart by product's ID.
     * 
     * @param integer $id Product's ID.
     * 
     * @return void
     */
    public function delete_from_cart($id) 
    {
        return DB::delete('cart')->where('id', 'IN', array($id))->execute();
    }

    /**
     * Gets details of products from 'Products' DB table 
     * by buyer's email from 'Cart' DB table.
     * 
     * @param string $buyer Buyer's email.
     * 
     * @return object        Product's info.
     */
    public function get_products_from_cart($buyer)
    {
        return DB::select('products.*', 'cart.*')
        ->from('cart')
        ->join('products')
        ->on('cart.product_id', '=', 'products.id')
        ->where('buyer', '=', $buyer)
        ->as_object()
        ->execute();
    }
}
