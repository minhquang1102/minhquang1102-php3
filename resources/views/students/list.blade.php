<!-- ke thua view:master: student->layout/master.blade.php -->
@extends('student-layout.master')

<!-- thay doi noi dung don gian -->
@section('title', 'Title list')

@section('header', 'Header list extends')

<!-- thay doi noi dung phuc tap -->
@section('content')
    List
    <table>
        <thead>
            <th>Name</th>
            <th>Phone</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Active</th>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->age }}</td>
                    <td>
                        @if ($student->gender == 0)
                            Female
                        @elseif ($student->gender == 1)
                            Male
                        @else 
                            Nothing
                        @endif
                    </td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->is_active == 1 ? 'Yes' : 'No' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('footer', 'Footer list extends')
