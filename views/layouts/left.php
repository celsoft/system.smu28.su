<aside class="main-sidebar">

    <section class="sidebar">

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Диспетчерская', 'options' => ['class' => 'header']],
                    ['label' => 'Журнал заявок', 'icon' => 'genderless', 'url' => ['/operator'],],
                    ['label' => 'Журнал отключений', 'icon' => 'genderless', 'url' => ['/'],],
                    ['label' => 'Отчеты', 'icon' => 'genderless', 'url' => ['/'],],
                    ['label' => 'Настройки', 'options' => ['class' => 'header']],
                    ['label' => 'Организации', 'icon' => 'genderless', 'url' => ['/']],
                    ['label' => 'Справочники', 'icon' => 'genderless', 'url' => ['/']],
                    ['label' => 'Аналитика', 'icon' => 'genderless', 'url' => ['/']],
                ],
            ]
        ) ?>

    </section>

</aside>
