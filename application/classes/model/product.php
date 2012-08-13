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
     * Creates new product for iShop.
     * 
     * @param  array  $data Information about product.
     * 
     * @return void
     */
    public function create_new_product(array $data)
    {
        DB::insert('products', array(array_keys($data)))
        ->values(array_values($data))
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
     * Updates information about product with that id.
     * 
     * @param  array  $data Information about product.
     * @param  intiger $id   Product's ID.
     * 
     * @return void.
     */
    public function update_product_info(array $data, $id)
    {
        return DB::update('products')
        ->set($data)
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
