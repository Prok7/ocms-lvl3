<?php
    namespace Admin\ClassRoom\Http\Resources;
    use Illuminate\Http\Resources\Json\JsonResource;

    class ArrivalResource extends JsonResource {
        function toArray($request) {
            return [
                "id" => $this->id,
                "user_id" => $this->user_id,
                "arrival_date" => date($this->created_at)
            ];
        }
    };