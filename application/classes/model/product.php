<?php defined('SYSPATH') or die ('Hacking attemp!');
/**
 * Model for DB table 'Products'.
 */
class Model_Product extends Model
{

    /**
     * Gets all products from database.
     * 
     * @return object Products.
     */
    public function get_all_products()
    {
        return DB::select()
        ->from('products')
        ->as_object()
        ->execute();
    }

    /**
     * Inserts new product into database.
     * 
     * @param  string $img_url URL of product's image.
     * @param  string $name    Product name.
     * @param  string $cat     Product's category.
     * @param  string $descr   Product's description,
     * @param  integer $price   Product's price.
     * 
     * @return void
     */
    public function create_new_product($img_url, $name, $cat, $descr, $price)
    {
        return DB::insert('products',
            array('name', 'category', 'description', 'price', 'image_url'))
        ->values(array($name, $cat, $descr, $price, $img_url))
        ->execute();
    }

    /**
     * Gets product by that ID.
     * 
     * @param int $id Product's ID.
     * 
     * @return object Information about product by that ID.
     */
    public function get_product_by_id($id)
    {
        return DB::select()
        ->from('products')
        ->where('id', '=', $id)
        ->as_object()
        ->execute();
    }

    /**
     * Deletes product from DB by that ID.
     * 
     * @param integer id Product's ID.
     * 
     * @return integer Number of affected rows.
     */
    public function delete_product($id)
    {
        return DB::delete('products')
        ->where('id', '=', $id)
        ->execute();
    }

    /**
     * Updates product information.
     * 
     * @param  integer $is_disc Value can be 0 or 1.
     * @param  integer $disc    Value of discount.
     * @param  string  $name    Name of the product.
     * @param  string  $descr   Description of the product.
     * @param  integer $price   Price of the product.
     * @param  string  $img_url URL of product's image.
     * @param  integer $id      ID of the product.
     * 
     * @return void
     */
    public function update_product_info($is_disc, $disc, $name, $descr, $price, $img_url, $id)
    {
        return DB::update('products')
        ->set(array('name' => $name,
            'discount' => $disc,
            'is_discount' => $is_disc,
            'description' => $descr,
            'price' => $price,
            'image_url' => $img_url))
        ->where('id', '=', $id)
        ->execute();
    }

    /**
     * Get last 5 products from database.
     * 
     * @return Object Information about product.
     */
    public function get_newest_products()
    {
        return DB::select()
        ->from('products')
        ->order_by('id', 'DESC')
        ->where('is_discount', '=', 0)
        ->limit(6)
        ->as_object()
        ->execute();
    }

    /**
     * Selects products from DB with that slug of category.
     * 
     * @param string $slug Slug of category.
     * 
     * @return object       Information about product.
     */
    public function get_products_by_category($slug)
    {
        return DB::select()
        ->from('products')
        ->order_by('id', 'DESC')
        ->where('category', '=', "$slug")
        ->as_object()
        ->execute();
    }

    /**
     * Get products, where is_discount is equal to 1.
     * 
     * @return object Information about product.
     */
    public function get_products_with_discounts()
    {
        return DB::select()
        ->from('products')
        ->order_by('id', 'DESC')
        ->where('is_discount', '=', 1)
        ->as_object()
        ->execute();
    }
}
