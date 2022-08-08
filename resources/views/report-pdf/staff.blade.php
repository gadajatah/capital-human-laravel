<!DOCTYPE html>
<html>
    <head>
        <style>
            table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }

            td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            }

            tr:nth-child(even) {
            background-color: #dddddd;
            }
        </style>
    </head>
<body>

<h2>LAPORAN DATA STAFF</h2>

        <table>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Department</th>
                <th>Position</th>
                <th>Phone</th>
                <th>Currency</th>
                <th>Salary</th>
                <th>Resume</th>
            </tr>
            @foreach ($staffs as $no => $st)    
            <tr>
                <td>{{ ++$no }}</td>
                <td>{{ $st->name }}</td>
                <td>{{ $st->department }}</td>
                <td>{{ $st->position }}</td>
                <td>{{ $st->phone }}</td>
                <td>{{ $st->currency }}</td>
                <td>{{ $st->salary }}</td>
                <td>{{ $st->resume }}</td>
            </tr>
            @endforeach
        </table>
</body>
</html>

