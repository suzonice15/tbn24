@if(isset($questions))
    <?php $i=$questions->perPage() * ($questions->currentPage()-1);?>

    @foreach ($questions as $question)
        <tr>

         
            <td>{{ ++$i }}</td>
          
            <td>{{ $question->question_title }}</td>
            

            <td>{{date('d-m-Y',strtotime($question->created_at))}}</td>

            <td>


               

                <a title="Edit" href="{{ url('admin/question/') }}/{{ $question->question_id  }}" >
                    <i class="fa fa-eye  btn-sm btn btn-success"></i>
                </a>


                <a title="delete" href="{{ url('admin/question/delete') }}/{{ $question->question_id  }}" onclick="return confirm('Are you want to delete this Product')">
                     <i class="fa fa-trash  btn-sm btn btn-danger"></i>
                </a>
            </td>
        </tr>

    @endforeach

    <tr>
        <td colspan="9" align="center">
            {!! $questions->links() !!}
        </td>
    </tr>
@endif
 