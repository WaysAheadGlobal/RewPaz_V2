<div class="table_visting table_data">
  <table class="table">
    <thead>
      <tr>
        <th>S.no</th>
        <th>Name</th>
        <th>Tokens</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($earnings as $earning)
      <tr>
        <td>
          {{$loop->iteration}}
        </td>
        <td>{{$earning->name}}</td>
        <td>{{$earning->tokens}}</td>
      </tr>
    @endforeach
      
    </tbody>
  </table>
</div>