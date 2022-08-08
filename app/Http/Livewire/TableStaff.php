<?php

namespace App\Http\Livewire;

use App\Models\Staff;
use Livewire\Component;

class TableStaff extends Component
{
    public $statusUpdate = false;

    public function render()
    {
        return view('livewire.table-staff', [
            'staffs' => Staff::orderBy('id', 'DESC')->get(),
        ]);
    }

    public function destroy($id)
    {
        if ($id) {
            $staff = Staff::find($id);
            $staff->delete();
            session()->flash('message', 'Data Berhasil Dihapus!.');
            return redirect()->route('staff');
        }
    }

    public function getStaff($id)
    {
        $this->statusUpdate = true;
        $staff = Staff::find($id);
        $this->emit('getStaff', $staff);
    }
}
