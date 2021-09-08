<?php

namespace Tests\Unit\View;

use Tests\TestCase;

class TestResultDetailView extends TestCase
{
    public function testVariableinResultDetailPage()
    {
        $response = $this->get('/');

        $data = $response->getOriginalContent()->getData();

        $response->assertViewIs('pages.user.exam.resultDetails');

        $this->assertTrue($data['exams']->count() > 0);

        $this->assertTrue($data['questions']->count() > 0);

        $this->assertTrue($data['quiz']->count() > 0);

        $response->assertViewHas('exams', 'questions', 'quiz');

        $response->assertSuccessful();
    }

    public function testComponentInResultDetailPage()
    {
        $response = $this->get('/');

        $response->assertSee('multi-choice__main');
        $response->assertSee('question');
        $response->assertSee('answer');

        $response->assertSeeText(trans('RESULT DETAIL OF'));
        $response->assertSeeText(trans('Back to the course'));
    }
}