<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MangoTechnologies</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>

<body>
    <h1>Data Deletion Instruction</h1>
    <br>
    <p>{{ $name }} do not save your personal data in our server.</p>
    <p>According to the Facebook Platform rules, we have to provide User Data Deletion Callback URL or Data Deletion Instructions URL.</p>
    <p>If you want to delete your activities for the {{ $name }}, following these instructions:</p>
    <br>
    <p>1. Go to Your Facebook Account's Setting & Privacy. Click " Setting ".</p>
    <p>2. Then, go to " Apps and Websites" and you will see all of your Apps activities.</p>
    <p>3. Select the option box for FinMonster Production</p>
    <p>4. Click " Remove" button.</p>
</body>

</html>