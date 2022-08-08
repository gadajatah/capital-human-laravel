<?php

namespace App\Http\Livewire;

use App\Models\Staff;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class TambahStaff extends Component
{
    use WithFileUploads;
    public $staff_id, $name, $department, $position ,$phone, $currency, $salary, $resume;

    public function store()
    {
        $kode_staff = Staff::orderBy('id', 'desc')->first()->staff_id ?? 0;
        $last_increment = substr($kode_staff, -3);
        $current_number = 'MTX-'.str_pad($last_increment + 1, 3, 0, STR_PAD_LEFT);

         $validated = $this->validate([
            'name' => 'required',
            'department' => 'required',
            'position' => 'required',
            'phone' => 'required',
            'currency' => 'required',
            'salary' => 'required',
            'resume' => 'required',
        ]);
        $resume = $this->resume->getClientOriginalName();
        $path = $this->resume;
        $validated['resume'] = $resume;
        $staff = new Staff();
        DB::beginTransaction();
        try {
            $staff->staff_id = $current_number;
            $staff->name = $validated['name'];
            $staff->department = $validated['department'];
            $staff->position = $validated['position'];
            $staff->phone = $validated['phone'];
            $staff->currency = strtoupper($validated['currency']);
            $staff->salary = $validated['salary'];
            $staff->resume = $validated['resume'];
            $staff->path = $path;
            $staff->save();
            DB::commit();
            session()->flash('message', 'Data Berhasil Disimpan.');
            return redirect()->route('staff');
        } catch (\Exception $e) {
            DB::rollBack();
            return $e;
        }
    }

    public function render()
    {
        return view('livewire.tambah-staff');
    }
}
