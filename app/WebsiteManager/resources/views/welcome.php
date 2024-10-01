<div id="welcome-page">
    <h1 class="text-center">Blogs</h1>

    <ul class="list-group">
    <?php foreach ($pages as $page): ?>
        <a href="<?= phpb_full_url($page->getRoute()) ?>" class="list-group-item list-group-item-action">
            <?= phpb_e($page->getName()) ?>
        </a>
    <?php endforeach ?>
    </ul>
</div>
