<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class TeamManagementTest extends TestCase
{
    use RefreshDatabase;

    public function test_teams_page_lists_only_developer_role_users(): void
    {
        Permission::create(['name' => 'manage users']);

        $adminRole = Role::create(['name' => 'Admin']);
        $developerRole = Role::create(['name' => 'Developer']);

        $admin = User::factory()->create([
            'name' => 'Admin User',
            'designation' => 'Founder',
        ]);
        $admin->assignRole($adminRole);
        $admin->givePermissionTo('manage users');

        $developer = User::factory()->create([
            'name' => 'Developer User',
            'designation' => 'Senior Developer',
        ]);
        $developer->assignRole($developerRole);

        $response = $this->actingAs($admin)->get(route('users.index'));

        $response->assertOk();
        $response->assertSee('Developer Team');
        $response->assertSee('Developer User');
        $response->assertSee(route('users.edit', $developer->id), false);
        $response->assertDontSee(route('users.edit', $admin->id), false);
    }

    public function test_non_admin_user_cannot_access_roles_and_permissions_pages(): void
    {
        Role::create(['name' => 'Admin']);
        $developerRole = Role::create(['name' => 'Developer']);

        $developer = User::factory()->create();
        $developer->assignRole($developerRole);

        $this->actingAs($developer)->get(route('roles.index'))->assertForbidden();
        $this->actingAs($developer)->get(route('permissions.index'))->assertForbidden();
    }
}
