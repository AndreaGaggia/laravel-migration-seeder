<?php

use Carbon\Carbon;

$dt = Carbon::now();

return [
    [
        'name' => 'Marketing',
        'address' => '16169 DuBuque Camp Apt. 899 West Eldredshire, MT 29083',
        'employees' => 53,
        'open_since' => $dt->subYears(15),
    ],
    [
        'name' => 'IT',
        'address' => '645 Mohr Lakes East Irwin, UT 12543-3803',
        'employees' => 23,
        'open_since' => $dt->subYears(5),
    ],
    [
        'name' => 'Finance',
        'address' => '645 Mohr Lakes East Irwin, UT 12543-3803',
        'employees' => 13,
        'open_since' => $dt->subYears(25),
    ],
    [
        'name' => 'Administration & Legal',
        'address' => '645 Mohr Lakes East Irwin, UT 12543-3803',
        'employees' => 73,
        'open_since' => $dt->subYears(25),
    ],
    [
        'name' => 'HR',
        'address' => '645 Mohr Lakes East Irwin, UT 12543-3803',
        'employees' => 13,
        'open_since' => $dt->subYears(17),
    ],
];
