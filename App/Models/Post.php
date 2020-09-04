<?php

namespace App\Models;

use PDO;
use PDOException;

/*
 * Post model
 * PHP version 7.4
 */
class Post extends \Core\Model
{
    /**
     * Get all the posts as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
        try {
            $db = static::getDB();

            $statement = $db->query('SELECT id, title, content FROM posts ORDER BY created_at');

            $results = $statement->fetchAll(PDO::FETCH_ASSOC);

            return $results;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $results;
    }

}