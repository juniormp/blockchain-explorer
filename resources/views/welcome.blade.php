<html>
    <head>
        @livewireStyles
    </head>
    <body>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        @livewire('transactions-list')

        @livewireScripts
    </body>
</html>

