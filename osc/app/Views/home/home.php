<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<div class="home-head" style="background-image: url('<?= base_url('file/image/banniere_acceuil.png'); ?>');">

    <h1>Découvrez les Organisations de la Société Civile</h1>

    <form class="search-section" action="/search" method="get">
        <input placeholder="Rechercher une organisation" name="searchInput" value="<?= $searchInput ?>"></input>
        <button type="submit">
            <span class="uk-margin-small-right" uk-icon="search"></span>

        </button>
    </form>
</div>

<div class="home-body">
    <section class="home-body-left">
        <form class="search-section" action="/search" method="get">
            <input type="text" name="miniSearchInput" placeholder="Rechercher" value="<?= $miniSearchInput ?>">
            <button type="submit">
                <span class="uk-margin-small-right" uk-icon="search"></span>
            </button>
        </form>
        <div class="osc-category">
            <h2>Catégories</h2>
            <div class="start-line"></div>

            <?php if (!empty($categories) && is_array($categories)) : ?>
                <?php foreach ($categories as $category) : ?>
                    <?php if ($selectedCatgoryId == $category["id"]) { ?>
                    <h3 class="selected-category-line"><?= anchor("/oscByCategory/" . $category["id"], $category['name']) ?></h3>
                    <?php } else { ?>
                    <h3><?= anchor("/oscByCategory/" . $category["id"], $category['name']) ?></h3>
                    <?php } ?>
                <?php endforeach ?>

            <?php else : ?>

                <p class="no-categoryor-domain">Aucune categorie trouvée</p>

            <?php endif ?>
        </div>

        <div class="osc-domain">
            <h2>Domaines</h2>
            <div class="start-line"></div>
            <?php if (!empty($domains) && is_array($domains)) : ?>
                <?php foreach ($domains as $domain) : ?>
                    <?php if ($selectedDomainId == $domain["id"]) { ?>
                    <h3 class="selected-category-line"><?= anchor("/oscByDm/" . $domain['id'], $domain['name']) ?></h3>
                    <?php } else { ?>
                        <h3><?= anchor("/oscByDm/" . $domain['id'], $domain['name']) ?></h3>
                    <?php } ?>
                <?php endforeach ?>
            <?php else : ?>
                <p class="no-categoryor-domain">Aucun Domaine correspondant trouvé</p>
            <?php endif ?>
        </div>
    </section>
    <section class="home-body-right">
        <form class="category-domain-select-div-form" action="/oscByDm/none" method="get" id="domain-select-form">
            <div class="category-domain-select-div">
                <select class="domain-category-select" name="domain-select" id="domain-select">
                    <?php if (!empty($domains) && is_array($domains)) : ?>
                        <?php foreach ($domains as $domain) : ?>
                            <?php if ($selectedDomainId == $domain["id"]) { ?>
                                <option value="<?= esc($domain['id']) ?>" selected><?= anchor("/oscByDm/" . $domain['id'], $domain['name']) ?></option>
                    <?php } else { ?>
                        <option value="<?= esc($domain['id']) ?>"><?= anchor("/oscByDm/" . $domain['id'], $domain['name']) ?></option>
                    <?php } ?>
                        <?php endforeach ?>
                    <?php endif ?>
                </select>
        </form>
        <div class="category-domain-select-space"></div>
        <form class="category-domain-select-div-form" action="/oscByCategory/none" method="get" id="category-select-form">
            <select class="domain-category-select" name="category-select" id="category-select">
                <?php if (!empty($categories) && is_array($categories)) : ?>
                    <?php foreach ($categories as $category) : ?>
                        <?php if ($selectedCatgoryId == $category["id"]) { ?>
                            <option value="<?= esc($category['id']) ?>" selected><?= anchor("/oscByCategory/" . $category['id'], $category['name']) ?></option>
                    <?php } else { ?>
                        <option value="<?= esc($category['id']) ?>"><?= anchor("/oscByCategory/" . $category['id'], $category['name']) ?></option>
                    <?php } ?>
                    <?php endforeach ?>
                <?php endif ?>
            </select>
        </form>
</div>
<?php if (!empty($oscs) && is_array($oscs)) : ?>

    <?php foreach ($oscs as $osc) : ?>

        <a href="/osc/<?= esc($osc['id']) ?>">
            <li class="one-osc">
                <div>
                    <div class="osc-logo-container">
                        <div class="osc-logo" style="background-image: url('<?= base_url('file/image/frg7.jpg'); ?>')">
                        </div>
                    </div>
                    <div class="osc-right">
                        <div>
                            <div class="osc-header">
                                <p>
                                    <?= esc($osc['country']) ?> .
                                    <?= esc($osc['city']) ?> .
                                    <?= esc($osc['category_name']) ?>
                                </p>
                            </div>
                            <div class="osc-title">
                                <b> <?= esc($osc['name']) ?></b>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </li>
        </a>
    <?php endforeach ?>

<?php else : ?>
    <p class="no-osc-to-show">Aucune organisation à afficher</p>
<?php endif ?>
</ul>
</section>
</div>
<div class="pagination-area">
    <?= $pager->links() ?>
</div>
<div class="super-statistic">
    <div class="statistic" style="background-image: url('<?= base_url('file/image/GT.jpg'); ?>');">
        <div>
            <span><?= esc($verifyOscCount) ?></span>
            <p>Organismes vérifiés</p>
        </div>
        <div>
            <span><?= esc($unVerifyOscCount) ?></span>
            <p>Organismes non-vérifiés</p>
        </div>
        <!-- <div>74</div> -->
    </div>
</div>
<?= $this->endSection() ?>