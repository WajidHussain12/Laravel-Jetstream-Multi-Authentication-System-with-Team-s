<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">





    <div class="p-4 sm:ml-64">

        <x-admincomponents.adminnavigationmenu />
        <x-admincomponents.adminheader />
        <x-admincomponents.adminregister />

    </div>

    <x-admincomponents.adminsidebar />









</body>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        // Hide the register form by default
        $("#registerform").hide();

        // Handle click event for "adminregister" button
        $("#adminregister").click(function() {
            // Hide the "main" element
            $("#main").hide();
            // Show the register form
            $("#registerform").show();
        });

        // Handle click event for "superadmin_dash" button
        $("#superadmin_dash").click(function() {
            // Show the "main" element
            $("#main").show();
            // Hide the register form
            $("#registerform").hide();
        });



        // Handle click event for anchor links
        $("a").click(function() {
            // Check if the sidebar is visible and the screen is small
            if ($("#default-sidebar").is(":visible") && $(window).width() < 640) {
                // Hide the sidebar
                $("#default-sidebar").addClass("-translate-x-full");
            }
        });



    });
</script>

</html>
