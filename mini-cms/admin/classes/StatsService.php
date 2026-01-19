<?php
declare(strict_types=1);
class StatsService
{
    public function getStats(): array
    {
        return [
            'posts' => 12,
            'users' => 3,
            'views' => 1245,
        ];
    }
}
