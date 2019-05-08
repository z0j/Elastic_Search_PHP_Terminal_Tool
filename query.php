<?php

$query = [
    'index' => 'cars',
    'type' => 'transactions',
    'body' => [
        "size" => 0,
        'aggs' => [
            "months" => [
                "date_histogram" => [
                    "field" => "sold",
                    "interval" => "month",
                ],
            ],
            "aggs" => [
                'distinct_colors' => [
                    'cardinality' => [
                        "term" => [
                            "field" => "color"
                        ],
                    ],
                ]
            ],
        ]
    ],
];

return $ES->search($query);