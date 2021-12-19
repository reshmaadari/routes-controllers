<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    td{
        border:2px solid black;
        padding:3px;
    }
    button{
        margin-left:1150px
    }
</style>

</head>
<body  >
<a  href="{{ url('form') }}">
<button type="submit" class="btn btn-primary">Add Mem</button>
</a>

<form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
            placeholder="Search users"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</form>

<center>
<table >
    <th >
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Gender</td>
            <td>Phone</td>
            <td>Description</td>
            <td>Language</td>
            <td>Country</td>
            <td>State</td>
            <td>City</td>
            <td colspan="2" >Action</td>
        </tr>
    <th>
    
        <tbody>
  @foreach($members as $student)
        <tr>
            <td>{{$student['name']}}</td>
            
            <td>{{$student['email']}}</td>
            
            
            
            <td>{{$student['gender']}}</td>
            <td>{{$student['phone']}}</td>
            
            <td>{{$student['description']}}</td>
            <td>{{$student['language']}}</td>
            <td>{{$student['country']}}</td>
            
            <td>{{$student['state']}}</td>
            <td>{{$student['city']}}</td>
            <td><a href="{{url('/update'.$student->id)}}">edit</a></td>
            <td><a href="{{url('/delete'.$student->id)}}">delete</a></td>
        </tr>
        @endforeach
  </tbody>
</table></center>
</body>