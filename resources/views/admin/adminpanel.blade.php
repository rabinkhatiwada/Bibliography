<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('CSS/index.css') }}">
  @yield('css')


  <style>
    /* Custom styles */
    .sidebar {
      background-color: #343a40; /* Dark background color */
      color: #fff; /* White text color */
      height: 100vh; /* Full height of the viewport */
      width: 250px; /* Fixed width for the sidebar */
      padding-top: 20px;
      position: fixed; /* Fixed position */
      top: 0; /* Align to the top */
      left: 0; /* Align to the left */
      overflow-y: auto; /* Allow vertical scrolling if content exceeds viewport height */
    }

    .sidebar h2 {
      margin-bottom: 30px;
      text-align: center;
    }

    .sidebar ul {
      padding-left: 0;
    }

    .sidebar ul li {
      list-style: none;
      margin-bottom: 15px;
    }

    .sidebar ul li a {
      color: #fff;
      text-decoration: none;
      display: flex;
      align-items: center;
      padding: 10px 15px; /* Padding for better spacing */
      border-radius: 5px; /* Rounded corners for links */
    }

    .sidebar ul li a i {
      margin-right: 10px; /* Spacing between icon and text */
    }

    .sidebar ul li a:hover {
      background-color: #495057; /* Darker background color on hover */
    }

    .content {
      min-height: 100vh;
      z-index: 55; /* Ensure content div takes up full height */
    }

  </style>


</head>
<body>

  <div class="container-fluid">
    <div class="row">

      <!-- Sidebar -->
      <div class="col-md-2 col-sm-12">
       @include('admin.sidebar')
      </div>

      <!-- Page content -->
      <div class="col-md-10 col-sm-12">
        <div class="content">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-light">
                        <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
                        @yield('jumbo')
                    </ol>
                </nav>
            </div>
          @yield('content')
        </div>
      </div>

    </div>
  </div>

  @yield('js')

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
