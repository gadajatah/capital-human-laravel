<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    @if ($statusUpdate)  
        <livewire:edit-staff/>
    @else
        <livewire:tambah-staff/>   
    @endif
    <hr>
    <a  href="{{ route('reportpdf.staff') }}"
        class="btn btn-warning btn-sm">
        Download PDF
    </a>
    <hr>
    <table class="table table-hover text-nowrap" id="dataTable">
        <thead>
            <tr>
                <th>No</th>
                <th>Staff ID</th>
                <th>Name</th>
                <th>Department</th>
                <th>Position</th>
                <th>Phone</th>
                <th>Currency</th>
                <th>Salary</th>
                <th>Resume</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($staffs as $index => $st)
            <tr>
                <td>{{ ++$index }}</td>
                <td>{{ $st->staff_id }}</td>
                <td>{{ $st->name }}</td>
                <td>{{ $st->department }}</td>
                <td>{{ $st->position }}</td>
                <td>{{ $st->phone }}</td>
                <td>{{ $st->currency }}</td>
                <td>{{ $st->salary }}</td>
                <td>{{ $st->resume }}</td>
                <td>
                    {{-- <a
                        wire:click="showStaff({{ $st->id }})"
                        class="btn btn-info btn-sm">
                        <i class="fa-solid fa-eye"></i> View
                    </a> --}}
                        <a
                            wire:click="getStaff({{ $st->id }})"
                            class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a
                            wire:click="destroy({{ $st->id }})"
                            class="btn btn-danger btn-sm">
                            <i class="fa-solid fa-trash"></i> Hapus
                        </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
