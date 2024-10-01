<?php
$pagesTabActive = ! isset($_GET['tab']) || $_GET['tab'] === 'pages' ? 'active' : '';
?>
<div class="py-5 text-center">
    <h2>Blogs Manager</h2>
</div>

<div class="row">
    <div class="col-12">
        <div class="tab-content">
            <div id="pages" class="tab-pane <?= phpb_e($pagesTabActive) ?>">

                <h4>Blogs</h4>

                <div class="main-spacing">
                    <?php
                    if (phpb_flash('message')):
                        ?>
                    <div class="alert alert-<?= phpb_flash('message-type') ?>">
                        <?= phpb_flash('message') ?>
                    </div>
                    <?php
                    endif;
?>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col"><?= phpb_trans('website-manager.name') ?></th>
                                <th scope="col"><?= phpb_trans('website-manager.route') ?></th>
                                <th scope="col"><?= phpb_trans('website-manager.actions') ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
        foreach ($pages as $page):
            ?>
                                <tr>
                                    <td>
                                        <?= phpb_e($page->getName()) ?>
                                    </td>
                                    <td>
                                        <?= phpb_e($page->getRoute()) ?>
                                    </td>
                                    <td class="actions">
                                        <a href="<?= phpb_e(phpb_full_url($page->getRoute())) ?>" target="_blank" class="btn btn-light btn-sm">
                                            <span><?= phpb_trans('website-manager.view') ?></span> <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="<?= phpb_url('pagebuilder', ['page' => $page->getId()]) ?>" class="btn btn-primary btn-sm">
                                            <span><?= phpb_trans('website-manager.edit') ?></span> <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="<?= phpb_url('website_manager', ['route' => 'page_settings', 'action' => 'edit', 'page' => $page->getId()]) ?>" class="btn btn-secondary btn-sm">
                                            <span><?= phpb_trans('website-manager.settings') ?></span> <i class="fas fa-cog"></i>
                                        </a>
                                        <a href="<?= phpb_url('website_manager', ['route' => 'page_settings', 'action' => 'destroy', 'page' => $page->getId()]) ?>" class="btn btn-danger btn-sm">
                                            <span><?= phpb_trans('website-manager.remove') ?></span> <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php
        endforeach;
?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <hr class="mb-3">
                <a href="<?= phpb_url('website_manager', ['route' => 'page_settings', 'action' => 'create']) ?>" class="btn btn-primary btn-sm">
                    Add new blog
                </a>

            </div>
        </div>
    </div>
</div>
