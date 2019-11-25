<?php

namespace App;

//Build Model 
class Post 
{
    public function getPosts($session) 
    {
        if(!$session->has('posts')) {
            $this->createDummyData($session);
        }
        return $session->get('posts');
    }

    //Set data to pass to controller
    private function createDummyData($session)
    {
        $posts = [
            [
                'team' => 'Cleveland Browns',
                'location' => 'Cleveland, OH'
            ],
            [
                'team' => 'Pittsburg Steelers',
                'location' => 'Pittsburg, PA'
            ]
        ];
        $sesstion->put('posts', $posts);
    }
}

?>