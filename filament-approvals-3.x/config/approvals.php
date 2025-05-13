<?php

// config for EightyNine/Approval
return [
    "role_model" => App\Models\Role::class,
    "navigation" => [
        "should_register_navigation" => true,
        "icon" => "heroicon-o-clipboard-document-check",
        "sort" => 1
    ],
    "enable_approval_comments" => false, // Allows also commenting on approvals
    "enable_rejection_comments" => true, // Allows also commenting on rejections
];
