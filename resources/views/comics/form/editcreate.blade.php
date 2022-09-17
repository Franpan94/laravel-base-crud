<form action="{{ route($routename, $comic->id) }}" method="POST">
    @csrf
    @method($method)

    <div class="p-4">Titolo <br>
        <input type="text" name="title" id="title" placeholder="Inserisci titolo" 
          value="{{ old('title', $comic->title) }}" required 
        >
        @error('title')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="p-4">Descrizione <br>
        <textarea name="description" id="description" cols="60" rows="20" placeholder="Inserisci descrizione"
            required>{{ old('description', $comic->description) }}
        </textarea>
        @error('description')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="p-4">Copertina <br>
        <textarea name="thumb" id="thumb" cols="30" rows="10" placeholder="Inserisci copertina" 
          required>{{ old('thumb', $comic->thumb) }}
        </textarea>
        @error('thumb')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="p-4">Prezzo <br>
        <input type="number" step="0.01" min="2.5" id="price" name="price" placeholder="Inserisci prezzo" 
          value="{{ old('price', $comic->price) }}" required
        >
        @error('price')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="p-4">Serie <br>
        <input type="text" id="series" name="series" placeholder="Inserisci serie" 
          value="{{ old('series', $comic->series) }}" required
        >
        @error('series')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="p-4">Data <br>
        <input type="date" id="sale_date" name="sale_date" 
         value="{{ old('sale_date', $comic->sale_date) }}"required
        >
        @error('sale_date')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="p-4">Tipo <br>
      <input type="text" id="type" name="type" placeholder="Inserisci tipo" 
        value="{{ old('type', $comic->type) }}" required
      >
      @error('type')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="p-4">
      <button class="btn btn-primary" type="submit">
        Invia
      </button>
    </div>
</form>