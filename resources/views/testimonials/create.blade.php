<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="nombre">Name:</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="testimonial">Testimonial:</label>
            <textarea name="testimonial" id="testimonial" rows="4"></textarea>
        </div>
        <div>
            <label for="imagen">Imagen:</label>
            <input type="file" name="image" id="image">
        </div>
        <button type="submit">Guardar</button>
    </form>

    @foreach (App\Models\Testimonial::all() as $testimonial)

    <div>
        <img src="{{ asset('storage/' . $testimonial->image) }}}}">
    </div>

    @endforeach

</body>
</html>
