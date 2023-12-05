<table class="table">
    <thead>
      <tr>
        <th>Post Name</th>
        <th>Post type</th>
        <th>Created date</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
        @isset($post)
            @foreach ($post as $val)
            <tr>
                <td>{{ ucFirst($val->name) }}</td>
                <td>{{ ucFirst($val->post_type) }}</td>
                <td>{{ date('d-m-Y',strtotime($val->created_at)) }}</td>
                <td>
                    @if ($val->status == 1)
                    <label class="badge badge-success">Active</label>
                    @else
                        <label class="badge badge-danger">In Active</label>
                    @endif
                </td>
              </tr>     
            @endforeach
        @endisset
      {{-- <tr>
        <td>Jacob</td>
        <td>53275531</td>
        <td>12 May 2017</td>
        <td>
          <label class="badge badge-danger">Pending</label>
        </td>
      </tr>
      <tr>
        <td>Messsy</td>
        <td>53275532</td>
        <td>15 May 2017</td>
        <td>
          <label class="badge badge-warning">In progress</label>
        </td>
      </tr>
      <tr>
        <td>John</td>
        <td>53275533</td>
        <td>14 May 2017</td>
        <td>
          <label class="badge badge-info">Fixed</label>
        </td>
      </tr>
      <tr>
        <td>Peter</td>
        <td>53275534</td>
        <td>16 May 2017</td>
        <td>
          <label class="badge badge-success">Completed</label>
        </td>
      </tr>
      <tr>
        <td>Dave</td>
        <td>53275535</td>
        <td>20 May 2017</td>
        <td>
          <label class="badge badge-warning">In progress</label>
        </td>
      </tr> --}}
    </tbody>
</table>
{!! $post->links('pagination::bootstrap-4') !!}