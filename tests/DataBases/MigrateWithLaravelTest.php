<?php

namespace Smartosc\LaraBig\Test\DataBases;

use Carbon\Carbon;
use Smartosc\LaraBig\Test\TestCase;

class MigrateWithLaravelTest extends TestCase
{
    /** @test */
    public function itRunsTheMigrations()
    {
        $now = Carbon::now();

        \DB::table('stores')->insert([
            'store_hash' => 'aq00kspexe',
            'access_token' => 'abc',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        \DB::table('admins')->insert([
            'store_hash' => 'aq00kspexe',
            'bc_id' => '32',
            'email' => 'admin@test.com',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        $store = \DB::table('stores')->first();
        $admin = \DB::table('admins')->first();

        $this->assertEquals('aq00kspexe', $store->store_hash);
        $this->assertEquals('abc', $store->access_token);

        $this->assertEquals('admin@test.com', $admin->email);
    }
}
