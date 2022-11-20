<?php

namespace Tests\Feature\Api;

use App\Models\Course;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CourseTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_all_courses()
    {
        $response = $this->getJson('/courses');

        $response->assertStatus(200);
    }
    
    public function test_new_course()
    {
        // $course = Course::factory()->create();

        $response = $this->postJson("/courses", [
            'name'  => 'Course Updated',
            'description'  => 'Descrição do curso'
        ]);

        $response->assertStatus(201);
    }

    public function test_update_course()
    {
        $course = Course::factory()->create();

        $response = $this->putJson("/courses/{$course->uuid}", [
            'name'  => 'Course Updated'
        ]);

        $response->assertStatus(200);
    }

    public function test_delete_course()
    {
        $course = Course::factory()->create();

        $response = $this->deleteJson("/courses/{$course->uuid}");

        $response->assertStatus(204);
    }

    public function test_not_found_course()
    {
        $response = $this->getJson("/courses/id_fake");

        $response->assertStatus(404);
    }

}
