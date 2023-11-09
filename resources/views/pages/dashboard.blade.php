{{-- dashboard for the profile homepage after login --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'BeginBloc')}}</title>
    </head>
    <body>
        <h1>Dashboard</h1>
        <p>This is the page where the posts will appear.</p>
    </body>
</html>