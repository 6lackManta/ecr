@extends('main')
@section('title',' | Contact')
@section('Contact','active')
@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h1>Contact  @awais</h1>
                <hr>
                <form>  

                    <div class="form-group">
                        <label name="mail">Mail:</label>
                        <input name="mail" id="mail" class="form-control">
                    </div>

                     <div class="form-group">
                        <label name="subject">Subject:</label>
                        <input name="subject" id="subject" class="form-control">
                    </div>

                    <div class="form-group">
                        <label name="body">Body:</label>
                        <textarea name="body" id="body" class="form-control">Your Text Here </textarea>
                    </div>
                    <input type="submit" value="send" class="btn btn-sucess">



                </form>
                </div>
            </div>
         </div>

@endsection