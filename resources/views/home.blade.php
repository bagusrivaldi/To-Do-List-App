<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <div class="flex justify-center align-center bg-sky-500 h-screen">
    <div class="bg-white m-5 w-full rounded-xl">
        <div class="font-bold text-lg p-4">To Do List App</div>
        <hr>
        <div class="p-4">
            <div class="mb-2 p-2">To Do</div>
            <div class="p-2">
                <input type="text" name="todo" id="todo" placeholder="Create project..." class="bg-gray-300 w-full p-2 rounded-lg" required>
            </div>
        </div>
        <div class="p-4">
            <div class="mb-2 p-2">To Do List</div>
            <div class="flex justify-between">
                <div class="bg-blue-300 p-2 text-white rounded-lg m-2 w-full">tulisan</div>
                <div class="flex">
                    <a href="" class="bg-amber-500 p-2 text-white rounded-lg m-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                    </a>
                    <a href="" class="bg-red-500 p-2 text-white rounded-lg m-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
  </div>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>