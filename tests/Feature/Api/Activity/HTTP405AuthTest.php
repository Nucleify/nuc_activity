<?php

if (!defined('PEST_RUNNING')) {
    return;
}

uses()->group('activity-api-405');
uses()->group('activity-api-405-auth');
uses()->group('api-405');
uses()->group('api-405-auth');

beforeEach(function (): void {
    $this->createUsers();
    $this->actingAs($this->admin);
});

describe('405 > Authorized', function (): void {
    apiTestArray([
        'put json > index api' => [
            'method' => 'PUT',
            'route' => 'activity-log.index',
            'status' => 405,
        ],
        'delete json > index api' => [
            'method' => 'DELETE',
            'route' => 'activity-log.index',
            'status' => 405,
        ],
        'put json > countByCreatedLastWeek api' => [
            'method' => 'PUT',
            'route' => 'activity-log.countByCreatedLastWeek',
            'status' => 405,
        ],
        'post json > countByCreatedLastWeek api' => [
            'method' => 'POST',
            'route' => 'activity-log.countByCreatedLastWeek',
            'status' => 405,
        ],
        'post json > show api' => [
            'method' => 'POST',
            'route' => 'activity-log.show',
            'status' => 405,
            'id' => 1,
        ],
        'post json > destroy api' => [
            'method' => 'POST',
            'route' => 'activity-log.destroy',
            'status' => 405,
            'id' => 1,
        ],
    ]);
});
