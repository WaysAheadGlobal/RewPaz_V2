<div id="load" style="position: relative;">
@foreach($result as $data)
    <div>
        <h3>
            hello prabhat
            {{ print_r($data->id) }}
        </h3>
    </div>
@endforeach
</div>
{{ $result->links() }}