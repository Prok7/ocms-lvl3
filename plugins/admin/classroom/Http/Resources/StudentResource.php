<?php
    namespace Admin\ClassRoom\Http\Resources;
    use Illuminate\Http\Resources\Json\JsonResource;

    class StudentResource extends JsonResource {
        function toArray($request) {
            return [
                "id" => $this->id,
                "name" => $this->name,
                "arrivals" => $this->arrivals
            ];
        }
    };