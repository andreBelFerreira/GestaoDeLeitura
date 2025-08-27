<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Livros Lidos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>

<body>
    <div class="container">
        <h1>Livro Atual</h1>
        <?php if ($current_book): ?>
            <h2><?php echo $current_book->title; ?></h2>
            <p><strong>Data de Início:</strong> <?php echo $current_book->start_date; ?></p>
            <form action="<?php echo site_url('books/add_annotation'); ?>" method="post">
                <input type="hidden" name="book_id" value="<?php echo $current_book->id; ?>">
                <textarea name="annotation" placeholder="Adicione uma anotação..." required></textarea>
                <button type="submit">Adicionar Anotação</button>
            </form>
            <h3>Anotações:</h3>
            <ul>
                <?php foreach ($current_book->annotations as $annotation): ?>
                    <li><?php echo $annotation->annotation; ?> (<?php echo $annotation->created_at; ?>)</li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Nenhum livro está sendo lido no momento.</p>
        <?php endif; ?>
    </div>
</body>

</html>