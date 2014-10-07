<htmL>
<head>
    <title>Admin panel</title>
    {{ HTML::style('css/style.css') }}
</head>
<body>
    <header>
        <div class="container">
            <h1>My Blog</h1>
            <p>By Oleksandr Kovalov</p>
        </div>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        <div class="container">
            &copy; {{ date('Y') }} | {{ link_to_route('admin.posts.index', 'Admin') }}
        </div>
    </footer>

</body>
</html>
