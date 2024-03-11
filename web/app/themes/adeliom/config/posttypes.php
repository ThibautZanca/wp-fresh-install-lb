<?php

declare(strict_types=1);

return [
    /**
     * List all the sub-classes of Rareloop\Lumberjack\Post in your app that you wish to
     * automatically register with WordPress as part of the bootstrap process.
     */
    'register' => [
        \App\PostTypes\Question::class
    ],
];