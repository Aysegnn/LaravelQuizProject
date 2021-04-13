<x-app-layout>
    <x-slot name="header">Quizler</x-slot>
    <div class="card">
    <div class="card-body">
    <h5 class="card-title">
    <a href="{{route('quizzes.create')}}" class="btn btn-primary btn-sm"> <i class="fa fa-plus"></i> Quiz Oluştur</a>
    </h5>

    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Quiz</th>
      <th scope="col">Durum</th>
      <th scope="col">Bitiş Tarihi</th>
      <th scope="col">Eylemler</th>
    </tr>
  </thead>
  <tbody>
  @foreach($quizzses as $quiz )
    <tr>
      <td>{{$quiz->title}}</td>
      <td>{{$quiz->status}}</td>
      <td>{{$quiz->finished_at}}</td>
  
      <td> 
      <a href="{{route('quizzes.edit',$quiz->id)}}" class="btn btn-sm btn-primary"><i class="fas fa-edit"  data-toggle="tooltip" title="Düzenle"></i></a>
      <a href="{{route('quizzes.destroy',$quiz->id)}}" class="btn btn-sm btn-danger"><i class="fas fa-trash"  data-toggle="tooltip" title="Sil"></i></a>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>
{{$quizzses->links()}}

    </div>
    </div>
</x-app-layout>


<script>
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();
});
</script>