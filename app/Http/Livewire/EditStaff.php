<?php

namespace App\Http\Livewire;

use App\Models\Staff;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditStaff extends Component
{
    use WithFileUploads;
    public $name, $department, $position ,$phone, $currency, $salary, $resume;
    public $staffId;

    protected $listeners = [
        'getStaff' => 'showStaff'
    ];

    public function update()
    {
       $this->validate([
            'name' => 'required',
            'department' => 'required',
            'position' => 'required',
            'phone' => 'required',
            'currency' => 'required',
            'salary' => 'required',
            'resume' => 'required',
        ]);
        $resume = $this->resume->getClientOriginalName();
        $path = $this->resume->store('documents', 'public');
        $validated['resume'] = $resume;

        if ($this->staffId) {
            $staff = Staff::find($this->staffId);
            $staff->update([
                'name' => $this->name,
                'department' => $this->department,
                'position' => $this->position,
                'phone' => $this->phone,
                'currency' => strtoupper($this->currency),
                'salary' => $this->salary,
                'resume' => $resume,
                'path' => $path,
            ]);
            session()->flash('message', 'Data Berhasil Diupdate.');
            return redirect()->route('staff');
        }
    }

    public function render()
    {
        return view('livewire.edit-staff');
    }

    public function showStaff($staff)
    {
        $this->name = $staff['name'];
        $this->department = $staff['department'];
        $this->position = $staff['position'];
        $this->phone = $staff['phone'];
        $this->currency = $staff['currency'];
        $this->salary = $staff['salary'];
        $this->resume = $staff['resume'];
        $this->staffId = $staff['id'];
    }
}
