<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body class="bg-gray-800 text-white">
    <header class="fixed inset-x-0 bg-gray-900 border-b">
        <div  class="container mx-auto flex items-center justify-between p-4">
            <a href="/acs" class="flex items-center gap-3 text-5xl hover:text-white text-gray-300 font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><g fill="none"><g clip-path="url(#healthiconsSecurityWorkerNegative0)"><path fill="currentColor" fill-rule="evenodd" d="M0 0h48v48H0zm17.118 30c-.019.004.184.007.555.01l4.284 6.425l.543-2.935l-.447-.224a1 1 0 0 1-.553-.894V31a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v1.382a1 1 0 0 1-.553.894l-.447.224l.577 2.885l4.24-6.36c.29 0 .56.002.804.004C36.526 31.262 42 33.776 42 37.558V42H6v-4.442c0-3.782 5.714-6.325 11.118-7.558M33 34c.667.667 2 1.333 2 1.333S34.302 38 33 38s-2-2.667-2-2.667s1.333-.666 2-1.333m-1.186-15.72c1.39-1.085 1.174-2.28 1.174-2.28H15.012s-.217 1.195 1.174 2.28a8 8 0 1 0 15.629 0M24.096 20c2.67-.007 4.543-.32 5.856-.766a6 6 0 1 1-11.903 0c1.312.447 3.185.759 5.855.766H24zM13.5 10.097C13.5 7.774 24 6 24 6s10.5 1.774 10.5 4.097c0 3.097-1.91 4.403-1.91 4.403H15.41s-1.91-1.306-1.91-4.403m12 .403a1.5 1.5 0 1 1-3 0a1.5 1.5 0 0 1 3 0" clip-rule="evenodd"/></g><defs><clipPath id="healthiconsSecurityWorkerNegative0"><path d="M0 0h48v48H0z"/></clipPath></defs></g></svg>
                {{config('app.name')}}
            </a>
            <nav class="flex gap-8 text-xl font-semibold text-gray-300">
                <a class="hover:text-white" href="/">Главная</a>
                <a class="hover:text-white" href="/acs">ACS</a>
                <a class="hover:text-white" href="/acs/add">Редактировать</a>
            </nav>
        </div>
    </header>
    <div class="container mx-auto">
        {{$slot}}
    </div>
</body>
</html>
