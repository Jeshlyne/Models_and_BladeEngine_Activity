<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Hub</title>
  </head>
  <body>
    @include('partials.header')
    <br>
    <div class="container mx-auto mt-8">
      <table class="min-w-full bg-white shadow-md rounded-md overflow-hidden">
        <thead class="bg-yellow-100 text-black">
          <tr>
            <th class="py-3 px-4">ISBN</th>
            <th class="py-3 px-4">Title</th>
            <th class="py-3 px-4">Author</th>
            <th class="py-3 px-4">Description</th>
            <th class="py-3 px-4">Date Published</th>
          </tr>
        </thead>
        <tbody>
          @foreach($books as $book)
            <tr class="hover:bg-yellow-400">
              <td class="py-3 px-4">{{ $book->isbn }}</td>
              <td class="py-3 px-4">{{ $book->title }}</td>
              <td class="py-3 px-4">{{ $book->author }}</td>
              <td class="py-3 px-4">{{ $book->description }}</td>
              <td class="py-3 px-4">{{ $book->date_published }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
      @include('partials.footer')
    </div>
    <br>
    @include('partials.footer')
  </body>
  </html>