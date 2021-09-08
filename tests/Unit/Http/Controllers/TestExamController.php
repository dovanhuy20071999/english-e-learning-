<?php

namespace Tests\Unit\Http\Controllers;

use Tests\TestCase;
use Illuminate\Http\Request;
use App\Http\Controllers\ExamController;
use App\Models\Exams;
use App\Repository\Exam\ExamRepositoryInterface;
use App\Repository\Exam\QuestionRepositoryInterface;
use App\Repository\Exam\QuizRepositoryInterface;
use App\Repository\Exam\ResultRepositoryInterface;
use Mockery;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Collection;
use Symfony\Component\HttpFoundation\ParameterBag;

class TestExamController extends TestCase
{
    protected $examMock;
    protected $exam;
    protected $controller;

    public function setUp(): void
    {
        parent::setUp();
        $this->questionMock = Mockery::mock(QuestionRepositoryInterface::class);
        $this->quizMock = Mockery::mock(QuizRepositoryInterface::class);
        $this->resultMock = Mockery::mock(ResultRepositoryInterface::class);
        $this->examMock = Mockery::mock(ExamRepositoryInterface::class);
        $this->exam = Mockery::mock(Exam::class);
        
        parent::setUp();
    }

    public function tearDown(): void
    {
        Mockery::close();

        parent::tearDown();
    }

    public function testExam()
    {
        $this->questionMock
            ->shouldReceive('findWhere')
            ->once()
            ->andReturn(new Collection);
        $this->quizMock
            ->shouldReceive('findWhere')
            ->once()
            ->andReturn(new Collection);

        $controller = new ExamController($this->examMock);

        $result = $controller->exam();

        $data = $result->getData();

        $this->assertEquals('pages.user.exam.exam', $result->getName());

        $this->assertArrayHasKey('questions', $data);

        $this->assertArrayHasKey('quiz', $data);
    }

    public function testExamResult()
    {
        $this->resultMock
            ->shouldReceive('findOrFail')
            ->once()
            ->andReturn(new Collection);

        $controller = new ExamController($this->examMock);

        $result = $this->controller->examResult($this->exam);

        $data = $result->getData();

        $this->assertEquals('pages.user.exam.result', $result->getName());

        $this->assertArrayHasKey('results', $data);
    }

    public function testResultDetail()
    {
        $this->examMock
            ->shouldReceive('findOrFail')
            ->once()
            ->andReturn(new Collection);
        $this->quizMock
            ->shouldReceive('findOrFail')
            ->once()
            ->andReturn(new Collection);
        $this->questionMock
            ->shouldReceive('findOrFail')
            ->once()
            ->andReturn(new Collection);

        $controller = new ExamController($this->examMock);

        $result = $this->controller->resultDetail($this->exam);

        $data = $result->getData();

        $this->assertEquals('pages.user.exam.resultDetails', $result->getName());
        
        $this->assertArrayHasKey('exams', $data);

        $this->assertArrayHasKey('quiz', $data);

        $this->assertArrayHasKey('questions', $data);
    }
}
