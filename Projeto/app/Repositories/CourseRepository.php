<?php

namespace App\Repositories;

use App\Models\Course;

class CourseRepository
{
    protected $entity;

    public function __construct(Course $course)
    {
        $this->entity = $course;
    }

    public function getCourseByUuid($identify)
    {
        return $this->entity->where('uuid', $identify)->firstOrFail();
    }

    public function getAllCourses()
    {
        return $this->entity->get();
    }

    public function createNewCourse(array $data)
    {
        return $this->entity->create($data);
    }

    public function deleteCourseByUuid($identify)
    {
        $course = $this->getCourseByUuid($identify);

        return $course->delete();
    }
}
