<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anomali Library</title>
</head>
<body>
        <x-sidebar></x-sidebar>

        <div class="h-full ml-14 mt-8 mb-10 md:ml-64">
            {{ $slot }}
        </div>

     <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
     <script>
        const sidebar = document.getElementById('sidebar');
        const header = document.getElementById('header');

        sidebar.addEventListener('mouseover', () => {
            header.classList.remove('ml-14');
            header.classList.add('ml-56');
        });

        sidebar.addEventListener('mouseout', () => {
            header.classList.remove('ml-56');
            header.classList.add('ml-14');
        });
    </script>

</body>
</html>
