<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Home</title>
</head>
<body>
<h1>List of articles</h1>
<div class="danhsach">
    <table border="1px">
        <thead>
        <tr>
            <th>STT</th>
            <th>Title</th>
            <th>Author</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($articles as $article){?>
        <tr>
            <td><?=$article->getId()?></td>
            <td><?=$article->getTitle()?></td>
            <td><?=$article->getAuthor()?></td>
            <td>
                <a href="index.php?action=edit&id=<?=$article->getId()?>">Sửa</a>
                <a href="index.php?action=delete&id=<?=$article->getId()?>">Xóa</a>
            </td>
        
        </tr>
        </tbody>
        <?php }?>
    </table>
</div>
</body>
</html>