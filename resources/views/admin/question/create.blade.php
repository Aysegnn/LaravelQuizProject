<x-app-layout>
   <x-slot name="header">{{$quiz->title}} için yeni soru oluştur</x-slot>

   <div class="card">
      <div class="card-body">
         <form action="{{route('questions.store',$quiz->id)}}" method="post">
           @csrf
            <div class="form-group">
                <label>Soru</label>
                <textarea  name="question" class="form-control" rows="4" >{{old('question')}}</textarea>
            </div>
            <div class="form-group">
                <label>Fotoğraf</label>
                <input type="file" name="image" class="form-control">
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Cevap 1</label>
                        <textarea  name="answer1" class="form-control" rows="2" >{{old('answer1')}}</textarea>
                    </div>
                </div>
            <div class="col-md-6">
                    <div class="form-group">
                        <label>Cevap 2</label>
                        <textarea  name="answer2" class="form-control" rows="2" >{{old('answer2')}}</textarea>
                    </div>
            </div>
            <div class="col-md-6">
                    <div class="form-group">
                        <label>Cevap 3</label>
                        <textarea  name="answer3" class="form-control" rows="2" >{{old('answer3')}}</textarea>
                    </div>
            </div>
            <div class="col-md-6">
                    <div class="form-group">
                        <label>Cevap 4</label>
                        <textarea  name="answer4" class="form-control" rows="2" >{{old('answer4')}}</textarea>
                    </div>
            </div>
            </div>

            <div class="form-group">
                <label >Doğru Cevap</label>
                <select name="correct_answer" class="form-control" >
                    <option @if(old('correct_answer')==='answer1') selected @endif value="answer1">1. Cevap</option>
                    <option @if(old('correct_answer')==='answer2') selected @endif value="answer2">2. Cevap</option>
                    <option @if(old('correct_answer')==='answer3') selected @endif value="answer3">3. Cevap</option>
                    <option @if(old('correct_answer')==='answer4') selected @endif value="answer4">4. Cevap</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-sm float-right">Soru Oluştur</button>
            </div>
         </form>
      </div>
      
   </div>
</x-app-layout>