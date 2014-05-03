<?php defined('SYSPATH') or die('No direct script access.');

/**
 * @author Mykola Gulvanyuk
 * Brands Model based on Common Model
 *
 */

class Model_Books extends Model_Common {
	
	protected $tableName = "books";
	protected $fieldNames = array("book_id", "category_id", "book_title", "authors", "isbn_code", "pages", "publisher_id", "pub_date", "language_code", "udk_codes", "bbk_codes", "author_code");

} // Brands Model