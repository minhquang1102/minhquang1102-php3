@section('content-header','Sua Thong Tin $Editstudent->name')
@extends('admin-layout.master')

@section('title', 'Edit student')

@section('content-header', "Edit student  $student->name")
@section('content')
<div class="col-4">
    <form action="{{route('student.update',$Editstudent->id)}}" method="POST">
    <form
        method="POST"
        action="{{route('student.update', $student->id) }}"
    >
        <!-- Them token gui len -->
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$Editstudent->name}}">
        <!-- Thay doi phuong thuc gui request thanh PUT -->
        <input type='hidden' name='_method' value='PUT' />
        <div>
            <label for='name'>Name</label>
            <input id='name' type="text" name="name" value="{{$student->name}}" />
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" name="phone" id="phone" value="{{$Editstudent->phone}}">
        <div>
            <label for='phone'>Phone</label>
            <input id='phone' type="text" name="phone" value="{{$student->phone}}" />
        </div>
        <div class="form-group">
            <label for="radio">Gender</label>
            <input type="radio" name="gender" id="radio" value="0" {{$Editstudent->gender === 0 ? "checked" : ""}}>Nu
            <input type="radio" name="gender" id="radio" value="1" {{$Editstudent->gender === 1 ? "checked" : ""}}>Nam
            <input type="radio" name="gender" id="radio" value="2" {{$Editstudent->gender === 2 ? "checked" : ""}}>Khac
        <div>
            <label for='age'>Age</label>
            <input id='age' type="number" name="age" value="{{$student->age}}" />
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="text" class="form-control" name="age" id="age" value="{{$Editstudent->age}}">
        <div>
            <label for='address'>Address</label>
            <input id='address' type="text" name="address" value="{{$student->address}}" />
        </div>
        <div class="form-group">
            <label for="address">address</label>
            <input type="text" class="form-control" name="address" id="address" value="{{$Editstudent->address}}">
        <div>
            <label>Gender</label>
            Nu
            <input type="radio" name="gender" value="0" {{$student->gender === 0 ? "checked" : ""}} />
            Nam
            <input type="radio" name="gender" value="1" {{$student->gender === 1 ? "checked" : ""}} />
            Khong xac dinh
            <input type="radio" name="gender" value="2" {{$student->gender === 2 ? "checked" : ""}} />
        </div>
        <div class="form-group">
        <div>
            <label>Status</label>
            <input type="radio" name="is_active" id="is_active" value="0" {{$Editstudent->is_active === 0 ? "checked" : ""}}> Khong kich hoat
            <input type="radio" name="is_active" id="is_active" value="1" {{$Editstudent->is_active === 1 ? "checked" : ""}}> Kich hoat
            Deactive
            <input type="radio" name="is_active" value="0" {{$student->is_active === 0 ? "checked" : ""}} />
            Active
            <input type="radio" name="is_active" value="1" {{$student->is_active === 1 ? "checked" : ""}} />
        </div>
        <div>
            <button type='submit'>UPDATE</button>
        </div>
        <button type="submit" class="btn btn-primary">UPDATE</button>
        <a href="{{route('student.index')}}"><button class="btn btn-secondary">Cancel</button></a>
    </form>
</div>
@endsection  
@endsection 