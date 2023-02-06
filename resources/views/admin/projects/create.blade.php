@extends('layouts.app')

@section('content')
    <div class="text-center bg-white rounded-3 py-5">
        <form action="{{route ('admin.projects.store')}}" class="form-group w-75 d-inline-block shadow rounded-3 p-3 py-5"
         method="POST" enctype="multipart/form-data">
            @csrf()
            <div class="mb-3">
                <label class="form-label">Nome Progetto</label>
                <input type="text" class="form-control text-center w-75 mx-auto
                @error('name') is-invalid @elseif(old('name')) is-valid @enderror"
                name="name" value="{{old('name')}}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Descrizione</label>
                <textarea name="description" cols="30" rows="5" class="form-control w-75 mx-auto
                @error('description') is-invalid @elseif(old('description')) is-valid @enderror">{{old('description')}}</textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Carica l'immagine del progetto</label>
                <input type="file" class="form-control text-center w-75 mx-auto
                @error('cover_img') is-invalid @elseif(old('cover_img')) is-valid @enderror" 
                name="cover_img">
                @error('cover_img')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Link Git-Hub</label>
                <input type="text" class="form-control text-center w-75 mx-auto
                @error('git_link') is-invalid @elseif(old('git_link')) is-valid @enderror" 
                name="git_link" value="{{old('git_link')}}">
                @error('git_link')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button class="btn btn-lg btn-outline-dark mt-4" type="submit">Salva Progetto</button>     
        </form>  
    </div>
@endsection