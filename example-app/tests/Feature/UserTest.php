<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    // public function test_example(): void
    // {
    // $response = $this->get('/');

    // $response->dumpHeaders();

    // $response->dumpSession();

    // $response->dump();
    // $view = $this->view('user', ['name' => 'Taylor']);

    // $a = (string)$view->assertSeeText('Taylor');
    // var_dump($a);
    // }

    /**
     * 一个基础的功能测试例子。
     */
    public function test_making_an_api_request(): void
    {
        // $response = $this->get('/');
        // $response->dump();
        // die;
        // ini_set('memory_limit', '2048M');
        $response = $this->post('/user', ['name' => 'Sally']);
        $response->assertStatus(201);
        // var_dump($response);die;
        // $response
        //     ->assertStatus(201)
        //     ->assertJson([
        //         'created' => true,
        //     ]);
    }

    /**
     * 一个基础的功能测试例子。
     */
    // public function test_interacting_with_headers(): void
    // {
    //     $response = $this->withHeaders([
    //         'X-Header' => 'Value',
    //     ])->post('/user', ['name' => 'Sally']);

    //     $response->assertStatus(200);
    // }

    /**
     * 一个基础的测试例子。
     */
    // public function test_a_basic_request(): void
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }
}
