<?php if($menu): ?>
    <nav id="nav" class="nav">
        <ul class="main-nav">
            <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($item['is_it_link']): ?>
                    <li>
                        <p class="nav-item"><?php echo $item['link']['title']; ?></p>
                    </li>
                <?php else: ?>
                    <li class="has-submenu">
                        <p class="nav-item"><?php echo $item['title']; ?></p>

                        <?php if($item['submenu']): ?>
                            <?php ($submenu = $item['submenu'][0]); ?>
                            <?php switch($submenu['acf_fc_layout']):
                                case ('type_a'): ?>
                                    <div class="submenu type-a">
                                        <div class="submenu-body js-tabs">
                                            <div class="submenu-left">
                                                <?php $__currentLoopData = $submenu['tabs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <button class="tab-nav-item js-tabs-nav">
                                                        <div>
                                                            <span><?php echo $tab['title']; ?></span>
                                                            <p><?php echo $tab['description']; ?></p>
                                                        </div>
                                                    </button>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                            <div class="submenu-right">
                                                <?php $__currentLoopData = $submenu['tabs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="tabs-body js-tabs-body">
                                                        <div class="top"><p class="title"><?php echo $tab['title']; ?></p>
                                                        </div>

                                                        <?php $__currentLoopData = $tab['columns']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $col): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="col col-<?php echo e(count($tab['columns'])); ?>">
                                                                <p class="label"><?php echo $col['title']; ?></p>
                                                                <?php $__currentLoopData = $col['buttons']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $button): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if (isset($component)) { $__componentOriginal0cf91c378e904571d44466de4263f4cdf856fdd0 = $component; } ?>
<?php $component = App\View\Components\MenuLink::resolve(['link' => $button['link'],'description' => $button['description'],'image' => $button['image']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\MenuLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0cf91c378e904571d44466de4263f4cdf856fdd0)): ?>
<?php $component = $__componentOriginal0cf91c378e904571d44466de4263f4cdf856fdd0; ?>
<?php unset($__componentOriginal0cf91c378e904571d44466de4263f4cdf856fdd0); ?>
<?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php break; ?>
                                <?php case ('type_b'): ?>
                                    <div class="submenu type-b">
                                        <div class="submenu-body js-tab-box js-tabs">
                                            <div class="top">
                                                <p class="label"><?php echo $submenu['tag']; ?></p>
                                            </div>

                                            <?php $__currentLoopData = $submenu['buttons']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $button): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if (isset($component)) { $__componentOriginal0cf91c378e904571d44466de4263f4cdf856fdd0 = $component; } ?>
<?php $component = App\View\Components\MenuLink::resolve(['link' => $button['link'],'description' => $button['description'],'image' => $button['image']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\MenuLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0cf91c378e904571d44466de4263f4cdf856fdd0)): ?>
<?php $component = $__componentOriginal0cf91c378e904571d44466de4263f4cdf856fdd0; ?>
<?php unset($__componentOriginal0cf91c378e904571d44466de4263f4cdf856fdd0); ?>
<?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                    <?php break; ?>
                                <?php case ('type_c'): ?>
                                    <div class="submenu type-c">
                                        <div class="submenu-body <?php if($submenu['title']): ?> has-title <?php endif; ?>">
                                            <div class="submenu-left">
                                                <?php if($submenu['title']): ?>
                                                    <div class="top">
                                                        <p class="title"><?php echo $submenu['title']; ?></p>
                                                    </div>
                                                <?php endif; ?>
                                                <?php $__currentLoopData = $submenu['buttons']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $button): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if (isset($component)) { $__componentOriginal0cf91c378e904571d44466de4263f4cdf856fdd0 = $component; } ?>
<?php $component = App\View\Components\MenuLink::resolve(['link' => $button['link'],'description' => $button['description'],'image' => $button['image']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\MenuLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0cf91c378e904571d44466de4263f4cdf856fdd0)): ?>
<?php $component = $__componentOriginal0cf91c378e904571d44466de4263f4cdf856fdd0; ?>
<?php unset($__componentOriginal0cf91c378e904571d44466de4263f4cdf856fdd0); ?>
<?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </div>
                                            <div class="submenu-right">
                                                <?php if (isset($component)) { $__componentOriginalb6f7c37376c8c16b0ea5f7170130ebba1dd1f02a = $component; } ?>
<?php $component = App\View\Components\PostCard::resolve(['id' => $submenu['post']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('post-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\PostCard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb6f7c37376c8c16b0ea5f7170130ebba1dd1f02a)): ?>
<?php $component = $__componentOriginalb6f7c37376c8c16b0ea5f7170130ebba1dd1f02a; ?>
<?php unset($__componentOriginalb6f7c37376c8c16b0ea5f7170130ebba1dd1f02a); ?>
<?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php break; ?>
                                <?php default: ?>
                                    <?php break; ?>
                            <?php endswitch; ?>
                        <?php endif; ?>
                    </li>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </nav>
<?php endif; ?>
<?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/components/mega-menu.blade.php ENDPATH**/ ?>