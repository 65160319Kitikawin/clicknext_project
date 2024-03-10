<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .sidebar {
            position: fixed;
            left: 0;
            width: 90px;
            height: 100%;
            background-color: #EF5B25;
            border-right: 1px solid #dee2e6;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .main {
            padding-left: 90px;
        }

        .main-content {
            padding: 20px;
        }
        .navbar{
            height: 70px;
            border-bottom: 1px solid #F2F2F2;
        }
        .content{
            margin-top: 10px;
        }
        table {
            margin-top: 20px;
            width: 100%;
        }
        table td {
            padding: 10px;
            border-top: 1px solid #F2F2F2;
            text-align: center;
            font-size: 16px;
            font-weight: 500;
        }
        .table-icon {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .workspace-name{
            display: flex;
            font-size: 16px;
            font-weight: 400;
        }
        .profile{
            display: flex;
            align-items: center;
            font-size: 16px;
            font-weight: 400;
        }

        .dropdown{
            display: flex;
            align-items: baseline;

        }
        .td-80 {
            width: 80%;
        }
        .td-20 {
            width: 20%;
        }
        .navbar {
            justify-content: space-between;
            padding: 0 60px 0 10px;
        }
        .btn-workspace {
            font-size: 24px;
        }
        #workspace-container {
            display: none;
            position: absolute;
            background-color: #fff;
            width: 400px;
            padding: 10px;
            margin: 2px 0 0 2px;
            z-index: 1;
            box-shadow: 0px 0px 6px 0px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .workspace-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }


        .search {
            width: auto;
            height: 35px;
            border: 1px solid #F2F2F2;
            border-radius: 5px;
            font-size: 16px;
            padding: 8px;
        }

        .textfield {
            width: auto;
            height: 30px;
            border: 1px solid #F2F2F2;
            border-radius: 5px;
            font-size: 16px;
            padding: 8px;
        }
        .workspace-body {
            margin-top: 10px;
        }

        .workspace-body .workspace-name{
            color: #000;
            margin: 15px 0 0 20px;
            font-weight: 400;
        }
        .btn-link {
            background-color: transparent;
            border: none;
            color: #808080;
            font-size: 14px;
            font-weight: 400;
            text-decoration: none;
        }

        .workspace-footer {
            border-top: 1px solid #f2f2f2;
            align-items: center;
            padding-top: 5px;
        }

        .label-header {
            font-size: 20px;
            font-weight: 600;

        }
        .label-description {
            font-size: 12px;
            font-weight: 500;
            color: #808080;
        }
        .btn-primary {
            background-color: #EF5B25;
            border: none;
            border-radius: 5px;
            margin-left: 5px;
        }
        .btn-primary:hover {
            background-color: #cc5022;
            border: none;
        }
        .btn-primary:focus {
            background-color: #cc5022;
            border: none;
        }
        .btn-secondary {
            height: 35px;
            width: auto;
            background-color: #F2F2F2;
            border-radius: 5px;
            color: black;
            font-size: 16px;
            border: none;
            border-radius: 5px;
        }
        .btn-secondary:hover {
            background-color: #dcdcdc;
            color: #000;
        }
        .btn-secondary:focus {
            background-color: #dcdcdc;
            color: #000;
        }

        #workspace-create-pane {
            width: 300px;
            display: none;
            position: absolute;
            background-color: #fff;
            padding: 10px;
            margin: 2px 0 0 405px;
            z-index: 1;
            box-shadow: 0px 0px 6px 0px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        #workspace-create-pane .textfield {
            width: 280px;
        }

        #workspace-create-pane .container{
            display: flex;
            margin-top: 10px;
            justify-content: flex-end;
            align-items: center;
        }
    </style>
</head>
<body>

     <!-- Sidebar -->
     <div class="sidebar">
        <!-- Content sidebar -->
        <div class="container" style="margin: 10px;">
            <img src="https://media.discordapp.net/attachments/994685233087643719/1215261876972429323/circle_logo.png?ex=65fc1bd1&is=65e9a6d1&hm=2ca5c2f0daef63d683772b7d936e3398948ccc82dff64fe57dcca0eedd499900&=&format=webp&quality=lossless" alt="clicknext-icon" width="65px">
        </div>
    </div>

    <!-- Main Content -->
    <div class="main">
        <!-- Navbar section -->
        <div class="navbar">
            <div class="col-auto">
                <button class="btn btn-workspace" type="button" id="workspace-switch" onclick="toggleWorkspace()">
                    <i class="fa-solid fa-border-all" style="font-size: 24px;"></i>
                     <label for="">Workspaces</label>
                    <i class="fa-solid fa-angle-down" id="workspace-arrow" style="font-size: 16px;"></i>
                </button>
            </div>


            <div class="col-auto">
                <button class="btn btn-workspace" type="button" id="profile-switch" onclick="toggleProfile()">
                    <img src="https://media.discordapp.net/attachments/994685233087643719/1215271120127791114/77ed449a829d201a7940b0f98d49ca5a3cf43dd9.jpg?ex=65fc246d&is=65e9af6d&hm=cc53b20e7bac20faa1f57f479c85b3a5c19f166a5ece6b0da943736fc79cb017&=&format=webp" alt="" class="table-icon">
                    <label for="">Sweed</label>
                    <i class="fa-solid fa-angle-down" id="profile-arrow" style="font-size: 16px;"></i>
                </button>
            </div>
        </div>
        <!--Workspace Container-->
        <div id="workspace-container">
            <div class="workspace-header">
                <input style="font-family: Arial, FontAwesome;" type="search" name="searh-workspace" id="search-workspace" class="search" placeholder="&#xf002; Search workspaces">
                <button class="btn btn-secondary" type="button" id="create-workspace-switch" onclick="btnCreateWorkspace('open')">Create Workspace</button>
            </div>
            <div class="workspace-body">
                <label for="" class="label-description">Recently visited</label>
                <table>

                    @foreach ($workspaces as $workspace)
                    <tr>
                        <div class="workspace-name">
                            <i class="fa-regular fa-user" style="margin-right: 10px;"></i>
                            <label for="">{{$workspace->name}}</label>
                        </div>
                    </tr>
                    @endforeach

                </table>
            </div>
            <div class="workspace-footer">
                <button class="btn-link">
                    View all workspaces
                    <i class="fa-solid fa-arrow-right" style="font-size: 10px;"></i>
                </button>
            </div>
        </div>
        <div id="workspace-create-pane">
            <form action="{{ route('home.store') }}" method="POST" enctype="multipart/form-data" id="form-create-workspace">
                @csrf
                <label for="workspace-input-name" class="label-header">Create your workspace</label>
                <br>
                <label for="workspace-input-name" class="label-description">Name</label>
                <br>
                <input class="textfield" type="text" name="workspace-input-name" id="workspace-input-name">
                <div class="container">
                    <button type="button" class="btn btn-secondary" onclick="btnCreateWorkspace()">Cancel</button>
                    <button type="submit" class="btn btn-primary" form="form-create-workspace">Create</button>
                </div>
            </form>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">{{$message}}</div>
        @endif
        @error('workspace-input-name')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <section>
            <!-- Section Start-->
           
        </section>
    </div>
    <script>
         function toggleWorkspace() {
            var workspaceContainer = document.getElementById("workspace-container");
            var workspaceArrowIcon = document.getElementById("workspace-arrow");
            var workspaceCreatepane = document.getElementById("workspace-create-pane");
            // Toggle the display property
            if (workspaceContainer.style.display === "none") {
                workspaceContainer.style.display = "block";
                workspaceArrowIcon.className = "fa-solid fa-angle-up";
            } else {
                workspaceContainer.style.display = "none";
                workspaceCreatepane.style.display = "none";
                workspaceArrowIcon.className = "fa-solid fa-angle-down";
            }
        }
        function btnCreateWorkspace(action) {
            var workspaceCreatepane = document.getElementById("workspace-create-pane");
            var formCreateWorkspace = document.getElementById("form-create-workspace");
            formCreateWorkspace.reset();
            if (action === "open") {
                workspaceCreatepane.style.display = "block";
            } else {
                workspaceCreatepane.style.display = "none";
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
