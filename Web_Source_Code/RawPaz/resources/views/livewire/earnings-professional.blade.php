<div class="table_visting table_data">
  <table class="table">
    <thead>
      <tr>
        <th>S.no</th>
        <th>Name</th>
        <th>session mode</th>
        <th>Earnings ($)</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($earnings as $earning)
      
      <tr>
        <td>
          {{$loop->iteration}}
        </td>
        <td>{{$earning->name}}</td>
        <td>{{ucwords($earning->session)}}</td>
        <td>50</td>
      </tr>
    @endforeach
      
    </tbody>
  </table>
</div>