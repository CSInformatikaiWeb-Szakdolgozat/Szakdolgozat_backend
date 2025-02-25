<?php

use App\Models\Menu;
use App\Models\User;

test('example', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
test('adminGetUser', function () {
    $admin = User::find(1);
    $editor = User::factory()->create([
        'role' => 2,
    ]);
    $response = $this->actingAs($admin)->get('/api/user/' . $editor->id);
    $response->assertStatus(200);
});

test('editorAutentikaltMenuPatch', function () {
    $menu = Menu::factory()->create([
        'name' => 'teszt név',
        'link' => '/teszt',
        'status' => true,
    ]);
    $admin = User::factory()->create([
        'role' => 2,
    ]);
    $response = $this->actingAs($admin)->patch('/api/menu/' . $menu->id);
    $response->assertStatus(200);
});
