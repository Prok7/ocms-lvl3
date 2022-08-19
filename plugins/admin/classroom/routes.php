<?php
    use Admin\ClassRoom\Models\Student;
    use Admin\ClassRoom\Models\Arrival;
    use Admin\ClassRoom\Http\Resources\StudentResource;
    use Admin\ClassRoom\Http\Resources\ArrivalResource;
    use System\Models\EventLog;
    
    Route::get("api/student/{id}", function($id) {
        $student = Student::find($id);
        EventLog::add("User with id $id and name $student->name is checking his info.");
        return new StudentResource($student);
    });

    Route::get("api/students", function() {
        return StudentResource::collection(Student::all());
    });

    Route::get("api/arrival/{id}", function($id) {
        return new ArrivalResource(Arrival::find($id));
    });

    Route::get("api/arrivals", function() {
        return ArrivalResource::collection(Arrival::all());
    });