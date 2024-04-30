<?php

namespace App\Livewire\ManageDashboard;

use Livewire\Component;
use App\Models\User;


class AdminDashboardComponent extends Component
{
    public function render()
    {
        $count_users = User::where('usertype', '!=', 'admin')->count();
        return view('livewire.manage-dashboard.admin-dashboard-component')->with('count_users', $count_users);
    }

}
