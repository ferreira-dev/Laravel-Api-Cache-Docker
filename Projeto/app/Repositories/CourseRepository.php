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

    public function getCourseByUuid($identify, bool $loadRelationships = true)
    {
        return $this->entity
                    ->where('uuid', $identify)
                    ->with([$loadRelationships ? 'modules.lessons' : ''])
                    ->firstOrFail();
    }

    public function getAllCourses()
    {
        return $this->entity
                    ->with('modules.lessons')
                    ->get();

                    //with('author.contacts')->get();
    }

    public function createNewCourse(array $data)
    {
        return $this->entity->create($data);
    }

    public function deleteCourseByUuid($identify)
    {
        $course = $this->getCourseByUuid($identify, false);

        return $course->delete();
    }

    public function updateCourseByUuid(string $identify, array $data)
    {
        $course = $this->getCourseByUuid($identify, false);

        return $course->update($data);
    }
}
