<x-app-layout>
   <x-slot name="header">Quiz Güncelle</x-slot>

   <div class="card">
      <div class="card-body">
         <form action="{{route('quizzes.update',$quiz->id)}}" method="post">
         @method('PUT')
           @csrf
            <div class="form-group">
                <label>Quiz Başlığı</label>
                <input type="text" name="title" class="form-control" value="{{$quiz->title}}">
            </div>
            <div class="form-group">
                <label>Quiz Açıklaması</label>
                <textarea  name="description" class="form-control" rows="4" >{{$quiz->description}}</textarea>
            </div>
            <div class="form-group" >
                <input  id="isFinished" @if($quiz->finished_at)  checked @endif type="checkbox">
                <label>Bitiş Tarihi Olacak mı?</label>
            </div>
            <div class="form-group" @if(!$quiz->finished_at) style="display:none" @endif  id="finishedInput">
                <label>Bitiş Tarihi</label>
                <input type="datetime-local" name="finished_at" class="form-control" @if($quiz->finished_at) value="{{date('Y-m-d\TH:i', strtotime($quiz->finished_at))}} @endif">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-sm float-right">Quiz Güncelle</button>
            </div>
         </form>
      </div>
   </div>
   <x-slot name="js">
     <script>
       $("#isFinished").change(function(){
           if($('#isFinished').is(':checked')){
               $('#finishedInput').show();
           }
           else{
            $('#finishedInput').hide();
           }
       })
     </script>
   </x-slot>
</x-app-layout>