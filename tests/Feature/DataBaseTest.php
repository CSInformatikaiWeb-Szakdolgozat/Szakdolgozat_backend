<?php

use App\Models\User;

test('user_database', function () {
    User::factory()->count(3)->create();

    $this->assertDatabaseCount('users', 5);
});
