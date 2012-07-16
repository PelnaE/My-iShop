<?php

/**
 * Model for database table 'Categories'.
 */

class Model_Category extends Model
{

    /**
     * List of all categories from database.
     * 
     * @return object List of all categories as object
     */
    public function get_list_of_categories()
    {
        return DB::select()
        ->from('categories')
        ->order_by('id', 'DESC')
        ->as_object()
        ->execute();
    }

    /**
     * This inserts new category into database.
     * 
     * @param  string $name Name of the category
     * @param  string $slug Slug of name of the category
     */
    public function create_category($name,$slug)
    {

        DB::insert('categories', array('name', 'slug'))
        ->values(array($name, $slug))
        ->execute();
    }

    /**
     * This gets category from database by slug.
     * 
     * @param  string $slug Slug from the url
     * @return string       Name of category
     */
    public function get_category_by_slug($slug)
    {
        return DB::select()
        ->from('categories')
        ->where('slug', '=', $slug)
        ->execute()
        ->get('name');
    }
}