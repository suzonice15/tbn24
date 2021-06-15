@if(isset($exams))
    <?php $i=$exams->perPage() * ($exams->currentPage()-1);?>

    @foreach ($exams as $exam)
        <tr>

        <?php
        
         
        $right_answer=DB::table('exams')->where('user_id',$exam->user_id)->where('answer','=',1)->count();
        $wrong_answer=DB::table('exams')->where('user_id',$exam->user_id)->where('answer','=',0)->count();

        
        ?>

         
            <td>{{ ++$i }}</td>
          
            <td>{{ $exam->name }}</td>
            <td>{{ $exam->father_name }}</td>
            <td>{{ $exam->email }}</td>
            <td>{{ $right_answer }}</td>
            <td>{{ $wrong_answer }}</td>

             
            
            
            <td>{{date('d-m-Y',strtotime($exam->created_at))}}</td>

            <td> 

                <a title="Edit" href="{{ url('admin/exam/') }}/{{ $exam->user_id  }}" >
                    <i class="fa fa-eye  btn-sm btn btn-success"></i>
                </a>


                <a title="delete" href="{{ url('admin/exam/delete') }}/{{ $exam->user_id  }}" onclick="return confirm('Are you want to delete this Product')">
                     <i class="fa fa-trash  btn-sm btn btn-danger"></i>
                </a>
            </td>
        </tr>

    @endforeach

    <tr>
        <td colspan="9" align="center">
            {!! $exams->links() !!}
        </td>
    </tr>
@endif
 