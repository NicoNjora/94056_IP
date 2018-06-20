<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Students</title>
        <style type="text/css">
            .content {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <table border="1">
                <tr>
                    <th>Name</th>
                    <th>DOB</th>
                    <th>Address</th>
                    
                    <th>View</th>
                    
                    
                </tr>
                @foreach ($students as $student)
                <tr>
                 
                    <td>{{$student->name}}</td>
                    <td>{{$student->dob}}</td>
                    <td>{{$student->address}}</td>
                    <!-- <td><a href="/games/{{$student->id}}">View</a></td> -->
                    <!-- <td><a href="/games/edit/{{$student->id}}">Edit</a></td> -->
                    
                </tr>
                @endforeach
            </table>
        </div>
        

    </body>
</html>
