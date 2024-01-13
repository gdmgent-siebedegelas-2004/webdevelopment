<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FileDrop</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav>
        <div class="brand">FileDrop</div>
        <a href="index.html">Files</a>
        <a href="#">Sharing</a>
        <a href="#">Recents</a>
        <a href="#">File requests</a>
        <a href="#">Deleted files</a>
    </nav>
    <main>
        <div class="top">
        <h1>Files &gt; </h1>
        <form class="search">
            <input type="search" placeholder="Search">
            <button>Search</button>
        </form>
        </div>
        <div class="files">
                <div class="header">File</div>
                <div class="header">Size</div>
                <div class="header">Created</div>


                <div><a href="?folder=my_folder"><i class="fa fa-folder fa-fw"></i> my_folder</a></div>
                <div></div>
                <div>7/10/2023 10:48</div>
            
                <div><a href="uploads/image.jpg"><i class="fa fa-file-image fa-fw"></i> image.jpg</a></div>
                <div>200KB</div>
                <div>7/10/2023 10:48</div>
            
                <div><a href="uploads/text.txt"><i class="fa fa-file-text fa-fw"></i> text.txt</a></div>
                <div>200KB</div>
                <div>7/10/2023 10:48</div>            
        </div>
        <form class="upload">
            <input type="file" name="file" id="file">
            <button>Upload</button>
        </form>
        <form class="upload" method="POST">
            <label>Maak folder: <input type="text" name="foldername"></label>
            
            <button type="submit">Create</button>
        </form>
    </main>

    <script src="https://kit.fontawesome.com/8bf80026e5.js" crossorigin="anonymous"></script>
</body>
</html>