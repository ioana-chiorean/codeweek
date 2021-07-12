<?php

namespace Tests\Feature;

use App\Http\Livewire\LeadingTeacherReportForm;
use App\LeadingTeacherAction;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire;
use Tests\TestCase;

class LeadingTeachersReportFormTest extends TestCase
{

    use RefreshDatabase;

    private $leading_teacher;
    private $leading_teacher_admin;

    public function setup():void
    {
        parent::setUp();
        $this->seed('RolesAndPermissionsSeeder');
        $this->seed('LeadingTeacherRoleSeeder');


        $this->leading_teacher = create('App\User');
        $this->leading_teacher->assignRole('leading teacher');

        $this->leading_teacher_admin = create('App\User');
        $this->leading_teacher_admin->assignRole('leading teacher admin');


    }

    /** @test */

    public function submitted_form_should_notify_admin_via_email()
    {
        //TODO
    }

    /** @test */
    public function leading_teacher_action_should_be_created()
    {
        // Submit the form
        // Expect Action to be created in pending status
        $this->actingAs($this->leading_teacher);



        Livewire::test(LeadingTeacherReportForm::class)
            ->set('action_title', 'foo')
            ->set('action_type', 'bar')
            ->call('submit');

        $this->assertTrue(LeadingTeacherAction::whereTitle('foo')->exists());

    }
}
