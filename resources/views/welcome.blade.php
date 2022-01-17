<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body class="container pt-3">
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tambah
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('siswa.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="nama" class="form-label">nama</label>
                  <input  type="text" name="nama" class="form-control" id="nama" aria-describedby="emailHelp">
                  </div>
                <div class="mb-3">
                  <label for="alamat" class="form-label">alamat</label>
                  <input type="text" name="alamat" class="form-control" id="alamat">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
        </div>
    </div>
</div>
<table class="table">
    <thead>
          <tr>
            <th scope="col">nama</th>
            <th scope="col">alamat</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($siswas as $siswa)
                
            <tr>
                <form action="{{ route('siswa.update') }}" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $siswa->id }}" name="id">
                    <td>
                        <input type="text" name="nama" class="bg-transparent border-0" value="{{ $siswa->nama }}">
                    </td>
                    <td>
                        <input type="text" name="alamat" class="bg-transparent border-0" value="{{ $siswa->alamat }}">    
                    </td>
                    <td>
                        <button type="submit" class="btn btn-outline-warning">edit</button>
                    </form>
                        <a href="{{ route('siswa.destroy', ['id'=>$siswa->id]) }}" class="btn btn-outline-danger">delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>