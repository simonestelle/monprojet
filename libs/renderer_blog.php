<?php
function render(string $view, array $data = []): void
{
    extract($data);

    ob_start();
    require __DIR__.'/../views/'. $view;
    $content = ob_get_contents();
    ob_end_clean();

    require __DIR__.'/../views/template_blog.php';
}