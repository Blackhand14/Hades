<!DOCTYPE html>
<html lang="en">
<x-head titulo="Sneakers">

    
    <x-navbar></x-navbar>
     <!-- ======= Hero Section ======= -->
    <section>

        <div class="container">
        <div class="separar">
            <h1 style="text-align: center">Listado de Sneakers</h1>
        </div>

        <div class="separar">
            <a class="btn btn-primary" href="/sneaker/create">Crear Nuevo Sneaker</a>
        </div>

        <div class="separar">
            <table class="table table-responsive-md">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Precio</th>
                    <th>Talla (cm)</th>
                    <th>Stock</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
                @if (session('status'))
                    <input type="text" name="status" value="{{session('status')}}" class="form-control" disabled>
                @endif
                @foreach($sneakers as $sneaker)
                <tbody>
                <tr>
                    <td>{{ $sneaker->id }}</td>
                    <td>
                        <a href="/sneaker/{{ $sneaker->id }}">
                            {{ $sneaker->nombre }}
                        </a>
                    </td>
                    <td>{{ $sneaker->marca }}</td>
                    <td>{{ $sneaker->precio }}</td>
                    <td>{{ $sneaker->talla }}</td>
                    <td>{{ $sneaker->stock }}</td>
                    <td>
                        <a class="btn btn-warning" href="/sneaker/{{ $sneaker->id }}/edit">Editar</a>
                    </td>
                    <td>
                        <form action="/sneaker/{{ $sneaker->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-danger" type="submit" value="Eliminar">
                            
                        </form>
                    </td>
                </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </section>
</x-head>
</html>