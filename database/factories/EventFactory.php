<?php

use App\Country;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(App\Event::class, function (Faker $faker) {


    $start_date = $faker->dateTimeBetween($start = '-1week', $end = 'now');
    $end_date = $faker->dateTimeBetween($start = 'now', $end = '+1week');


    $countries = Country::all()->pluck('iso')->toArray();
    $orgtypes = array('school','library','nonprofit','other');
    if (empty($countries)) $countries[0] = factory('App\Country')->create()->iso;

$latitude = $faker->latitude(42,59);
$longitude = $faker->longitude(1,20);

    return [
        'status' => $faker->randomElement(['APPROVED','PENDING','REJECTED']),
        'title' => $faker->text(40),
        'slug' => $faker->slug(2),
        'organizer' => $faker->company,
        'description' => $faker->text,
        'geoposition' => $latitude . ',' . $longitude,
        'latitude' => $latitude,
        'longitude' => $longitude,
        'location' => $faker->address,
        'country_iso' => $faker->randomElement($countries),
        'start_date' => $start_date,
        'end_date' => $end_date,
        'event_url' => $faker->url,
        'contact_person' => $faker->email,
        'user_email' => $faker->email,
        'pub_date' => $faker->dateTime,
        'created' => $faker->dateTime,
        'updated' => $faker->dateTime,
        'creator_id' => function () {
            return factory('App\User')->create()->id;
        },
        'report_notifications_count' => 0,
        'name_for_certificate' => $faker->name,
        'organizer_type' => $faker->randomElement($orgtypes),
        "participants_count" => $faker->numberBetween(0,100),
        "codeweek_for_all_participation_code" => $faker->randomAscii,
        "activity_type" => "offline",
        "language"=>"en",
        "highlighted_status"=>"NONE"

    ];
});
