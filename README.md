# Laravel-Testing-Partial-JSON-Responses


*** API.php ***
-------------------------------------------------------
Route::get('/users', function() {
    return User::all();
});

Route::get('/users/{id}', function() {
    return User::find(1);
});

-------------------------------------------------------

*** ExampleTest.php  ****

-------------------------------------------------------

/** @test */
    function test_json_response()
    {
        $response = $this->json('GET', 'api/users/1');

        $response
            ->assertStatus(200)
            ->assertJsonFragment([
                'name' => 'kaka',
            ]);
    }
    
-------------------------------------------------------
