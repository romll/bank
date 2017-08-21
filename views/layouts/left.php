<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity['username'] ?></p>
            </div>
        </div>

        <? if(!Yii::$app->user->isGuest) {

            echo dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [
                        ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                        ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                        ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                        ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                        [
                            'label' => 'Same tools',
                            'icon' => 'share',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                                ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                                [
                                    'label' => 'Level One',
                                    'icon' => 'circle-o',
                                    'url' => '#',
                                    'items' => [
                                        ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                        [
                                            'label' => 'Level Two',
                                            'icon' => 'circle-o',
                                            'url' => '#',
                                            'items' => [
                                                ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                                ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        ['label' => 'Меню', 'options' => ['class' => 'header']],
                        ['label' => 'Довідник банків', 'icon' => 'folse', 'url' => ['/handbk-bank']],
                        ['label' => 'Довідник видів НП', 'icon' => 'folse', 'url' => ['/locality']],
                        ['label' => 'Довідник ознак', 'icon' => 'folse', 'url' => ['/additional-handbk']],
                        ['label' => 'Виписка банку', 'icon' => 'folse', 'url' => ['/statement']],
                        ['label' => 'Коригування', 'icon' => 'folse', 'url' => ['/adjustment']],
                        ['label' => 'Оплата оп актам ПКЕЕн', 'icon' => 'folse', 'url' => ['/akt']],
                    ],
                ]
            );
        } else {
            echo dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [
                        ['label' => 'Вхід', 'icon' => 'folse', 'url' => ['site/login']],
                    ],
                ]
            );
        }
 ?>

    </section>

</aside>
