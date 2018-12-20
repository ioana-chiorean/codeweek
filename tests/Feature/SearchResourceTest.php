<?php

namespace Tests\Feature;

use App\Audience;
use App\Theme;
use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SearchResourceTest extends TestCase
{
    use DatabaseMigrations;

    private $item;
    private $item2;

    public function setup()
    {
        parent::setUp();
        $this->item = create('App\ResourceItem');
        $this->item2 = create('App\ResourceItem');


    }


    /** @test */
    public function a_user_can_search_resource_by_name()
    {

        $item = create('App\ResourceItem', ["name" => "foobar"]);
        $item2 = create('App\ResourceItem', ["name" => "rrrghrgrhrgh"]);



        $this->post('/resources/search', ["name" => "foo"])
            ->assertSee($item->name)
            ->assertDontSee($item2->name);


    }

    /** @test */
    public function a_user_can_search_resource_by_levels()
    {
        $level = create('App\ResourceLevel',["id"=>1]);
        $level2 = create('App\ResourceLevel');


        $this->item->levels()->attach($level);
        $this->item2->levels()->attach($level2);

        $selectedLevels = array($level);



        $this->post('/resources/search', ["selectedLevels" => $selectedLevels])
            ->assertSee($this->item->name)
            ->assertDontSee($this->item2->name);



    }

    /** @test */
    public function a_user_can_search_resource_by_types()
    {
        $type = create('App\ResourceType',["id"=>1]);
        $type2 = create('App\ResourceType');


        $this->item->types()->attach($type);
        $this->item2->types()->attach($type2);

        $selectedTypes = array($type);



        $this->post('/resources/search', compact("selectedTypes") )
            ->assertSee($this->item->name)
            ->assertDontSee($this->item2->name);



    }


    /** @test */
    public function a_user_can_search_resource_by_subject()
    {

        $subject = create('App\ResourceSubject',["id"=>1]);
        $subject2 = create('App\ResourceSubject');

        $this->item->subjects()->attach($subject);
        $this->item2->subjects()->attach($subject2);

        $selectedSubjects = array($subject);



        $this->post('/resources/search', compact("selectedSubjects"))
            ->assertSee($this->item->name)
            ->assertDontSee($this->item2->name);

    }

    /** @test */
    public function a_user_can_search_resource_by_category()
    {

        $category = create('App\ResourceCategory',["id"=>1]);
        $category2 = create('App\ResourceCategory');

        $this->item->categories()->attach($category);
        $this->item2->categories()->attach($category2);

        $selectedCategories = array($category);



        $this->post('/resources/search', compact("selectedCategories"))
            ->assertSee($this->item->name)
            ->assertDontSee($this->item2->name);

    }

    /** @test */
    public function a_user_can_search_resource_by_languages()
    {

        $language = create('App\ResourceLanguage',["id"=>1]);
        $language2 = create('App\ResourceLanguage');

        $this->item->languages()->attach($language);
        $this->item2->languages()->attach($language2);

        $selectedLanguages = array($language);



        $this->post('/resources/search', compact("selectedLanguages"))
            ->assertSee($this->item->name)
            ->assertDontSee($this->item2->name);

    }

    /** @test */
    public function a_user_can_search_resource_by_programming_languages()
    {

        $programmingLanguage = create('App\ResourceProgrammingLanguage',["id"=>1]);
        $programmingLanguage2 = create('App\ResourceProgrammingLanguage');

        $this->item->programmingLanguages()->attach($programmingLanguage);
        $this->item2->programmingLanguages()->attach($programmingLanguage2);

        $selectedProgrammingLanguages = array($programmingLanguage);



        $this->post('/resources/search', compact("selectedProgrammingLanguages"))
            ->assertSee($this->item->name)
            ->assertDontSee($this->item2->name);

    }

    /** @test */
    public function a_user_can_search_resource_by_types_and_language()
    {

        $type = create('App\ResourceType',["id"=>1]);
        $type2 = create('App\ResourceType');
        $language = create('App\ResourceLanguage',["id"=>1]);
        $language2 = create('App\ResourceLanguage');


        $this->item->types()->attach($type);
        $this->item2->types()->attach($type);
        $this->item->languages()->attach($language);
        $this->item2->languages()->attach($language2);

        $selectedTypes = array($type);
        $selectedLanguages = array($language);



        $this->post('/resources/search', compact(["selectedTypes","selectedLanguages"]) )
            ->assertSee($this->item->name)
            ->assertDontSee($this->item2->name);

    }

}


