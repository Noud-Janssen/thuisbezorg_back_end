<?php 


namespace App\Models;

class Items {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'title one',
                'description' => 'lorem ipsum blah blah blah'
            ],
            [
                'id' => 2,
                'title' => 'title two',
                'description' => 'lorem ipsum blah blah blah'
            ]
        ];
    }

    public static function get_by_id($id) {
        $items = self::all();

        foreach ($items as $item) {
            if ($item['id'] == $id) {
                return $item;
            } 
        }
        return [
            'id' => -1,
            'title' => '404',
            'description' => '404'
        ];

    }
}

?>