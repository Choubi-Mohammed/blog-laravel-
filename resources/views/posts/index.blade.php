<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
        }

        .card {
            background-color: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease-in-out;
            width: calc(33.333% - 20px);
            box-sizing: border-box;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            object-fit: cover;
        }

        .card h2 {
            font-size: 1.8rem;
            margin: 15px 0;
            color: #333;
        }

        .card p {
            font-size: 1rem;
            line-height: 1.6;
            color: #555;
        }

        .card a {
            display: inline-block;
            margin-top: 15px;
            font-weight: 500;
            color: #007BFF;
            text-decoration: none;
            transition: color 0.3s;
        }

        .card a:hover {
            color: #0056b3;
        }

        /* Pagination Styles */
        .pagination {
            text-align: center;
            margin-top: 20px;
        }

        .pagination a {
            display: inline-block;
            margin: 0 5px;
            padding: 8px 16px;
            border-radius: 5px;
            background-color: #f1f1f1;
            color: #333;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .pagination a:hover {
            background-color: #007BFF;
            color: white;
        }

        .pagination .active {
            background-color: #007BFF;
            color: white;
        }

        @media (max-width: 768px) {
            .card {
                width: calc(50% - 20px);
            }
        }

        @media (max-width: 480px) {
            .card {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Blog Posts</h1>
        <div class="card-container">
            @foreach ($posts as $post)
                <div class="card">
                    <img src="{{ $post->image }}" alt="Post Image">
                    <h2>{{ $post->title }}</h2>
                    <p>{{ \Illuminate\Support\Str::limit($post->description, 100) }}</p>
                    <a href="#">Read More</a>
                </div>
            @endforeach
        </div>

        <div class="pagination">
            {{ $posts->links() }}
        </div>
    </div>
</body>
</html>
