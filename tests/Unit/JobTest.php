<?php

use App\Models\Employer;
use App\Models\Job;

test('it belongs to an employer', function () {
    //AAA

    // ARRANGE
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    // ACT

    expect($job->employer->is($employer))->toBeTrue();

    // ASSERT
});

it('can have tags', function () {

    $job = Job::factory()->create();

    $job->tag('Frontend');

    expect($job->tag)->toHaveCount('1');
});
