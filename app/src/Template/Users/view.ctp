<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <?= __('Actions') ?>
                </h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li>
                    <?= $this->Html->link(__('Edit {0}', ['User']), ['action' => 'edit', $user->id]) ?>
                </li>
                <li>
                    <?= $this->Form->postLink(__('Delete {0}', ['User']), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('List {0}', ['Users']), ['action' => 'index']) ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="users col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <?= h($user->name) ?>
                </h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Name</th>
                        <td>
                            <?= h($user->name) ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Username</th>
                        <td>
                            <?= h($user->username) ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td>
                            <?= h($user->password) ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>
                            <?= h($user->email) ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Role</th>
                        <td>
                            <?= h($user->role) ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Id</th>
                        <td>
                            <?= $this->Number->format($user->id) ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Created</th>
                        <td>
                            <?= h($user->created) ?>
                    </tr>
                    </tr>
                    <tr>
                        <th>Modified</th>
                        <td>
                            <?= h($user->modified) ?>
                    </tr>
                    </tr>
                </table>
                <div class="related">
                    <?php if (!empty($user->categories)): ?>
                    <h4>
                        <?= __('Related {0}', ['Categories']) ?>
                    </h4>
                    <table class="table table-striped table-hover">
                        <tr>
                            <th>Id</th>
                            <th>User Id</th>
                            <th>Title</th>
                            <th>Url</th>
                            <th>Created</th>
                            <th>Modified</th>
                            <th class="actions">
                                <?= __('Actions') ?>
                            </th>
                        </tr>
                        <?php foreach ($user->categories as $categories): ?>
                        <tr>
                            <td>
                                <?= h($categories->id) ?>
                            </td>
                            <td>
                                <?= h($categories->user_id) ?>
                            </td>
                            <td>
                                <?= h($categories->title) ?>
                            </td>
                            <td>
                                <?= h($categories->url) ?>
                            </td>
                            <td>
                                <?= h($categories->created) ?>
                            </td>
                            <td>
                                <?= h($categories->modified) ?>
                            </td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Categories', 'action' => 'view', $categories->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Categories', 'action' => 'edit', $categories->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Categories', 'action' => 'delete', $categories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categories->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                    <?php endif; ?>
                </div>
                <div class="related">
                    <?php if (!empty($user->categories_products)): ?>
                    <h4>
                        <?= __('Related {0}', ['Categories Products']) ?>
                    </h4>
                    <table class="table table-striped table-hover">
                        <tr>
                            <th>Id</th>
                            <th>User Id</th>
                            <th>Category Id</th>
                            <th>Product Id</th>
                            <th class="actions">
                                <?= __('Actions') ?>
                            </th>
                        </tr>
                        <?php foreach ($user->categories_products as $categoriesProducts): ?>
                        <tr>
                            <td>
                                <?= h($categoriesProducts->id) ?>
                            </td>
                            <td>
                                <?= h($categoriesProducts->user_id) ?>
                            </td>
                            <td>
                                <?= h($categoriesProducts->category_id) ?>
                            </td>
                            <td>
                                <?= h($categoriesProducts->product_id) ?>
                            </td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'CategoriesProducts', 'action' => 'view', $categoriesProducts->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'CategoriesProducts', 'action' => 'edit', $categoriesProducts->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'CategoriesProducts', 'action' => 'delete', $categoriesProducts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriesProducts->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                    <?php endif; ?>
                </div>
                <div class="related">
                    <?php if (!empty($user->products)): ?>
                    <h4>
                        <?= __('Related {0}', ['Products']) ?>
                    </h4>
                    <table class="table table-striped table-hover">
                        <tr>
                            <th>Id</th>
                            <th>User Id</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Cost</th>
                            <th>Status</th>
                            <th>Description</th>
                            <th>Alert Price</th>
                            <th>Created</th>
                            <th>Modified</th>
                            <th class="actions">
                                <?= __('Actions') ?>
                            </th>
                        </tr>
                        <?php foreach ($user->products as $products): ?>
                        <tr>
                            <td>
                                <?= h($products->id) ?>
                            </td>
                            <td>
                                <?= h($products->user_id) ?>
                            </td>
                            <td>
                                <?= h($products->title) ?>
                            </td>
                            <td>
                                <?= h($products->price) ?>
                            </td>
                            <td>
                                <?= h($products->cost) ?>
                            </td>
                            <td>
                                <?= h($products->status) ?>
                            </td>
                            <td>
                                <?= h($products->description) ?>
                            </td>
                            <td>
                                <?= h($products->alert_price) ?>
                            </td>
                            <td>
                                <?= h($products->created) ?>
                            </td>
                            <td>
                                <?= h($products->modified) ?>
                            </td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                    <?php endif; ?>
                </div>
                <div class="related">
                    <?php if (!empty($user->stock)): ?>
                    <h4>
                        <?= __('Related {0}', ['Stock']) ?>
                    </h4>
                    <table class="table table-striped table-hover">
                        <tr>
                            <th>Id</th>
                            <th>User Id</th>
                            <th>Product Id</th>
                            <th>Decimal</th>
                            <th>Unit Price</th>
                            <th>Unit Cost</th>
                            <th>Created</th>
                            <th>Modified</th>
                            <th class="actions">
                                <?= __('Actions') ?>
                            </th>
                        </tr>
                        <?php foreach ($user->stock as $stock): ?>
                        <tr>
                            <td>
                                <?= h($stock->id) ?>
                            </td>
                            <td>
                                <?= h($stock->user_id) ?>
                            </td>
                            <td>
                                <?= h($stock->product_id) ?>
                            </td>
                            <td>
                                <?= h($stock->decimal) ?>
                            </td>
                            <td>
                                <?= h($stock->unit_price) ?>
                            </td>
                            <td>
                                <?= h($stock->unit_cost) ?>
                            </td>
                            <td>
                                <?= h($stock->created) ?>
                            </td>
                            <td>
                                <?= h($stock->modified) ?>
                            </td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Stock', 'action' => 'view', $stock->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Stock', 'action' => 'edit', $stock->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Stock', 'action' => 'delete', $stock->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stock->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                    <?php endif; ?>
                </div>
                <div class="related">
                    <?php if (!empty($user->stock_in)): ?>
                    <h4>
                        <?= __('Related {0}', ['Stock In']) ?>
                    </h4>
                    <table class="table table-striped table-hover">
                        <tr>
                            <th>Id</th>
                            <th>User Id</th>
                            <th>Product Id</th>
                            <th>Quantity</th>
                            <th>Created</th>
                            <th>Modified</th>
                            <th class="actions">
                                <?= __('Actions') ?>
                            </th>
                        </tr>
                        <?php foreach ($user->stock_in as $stockIn): ?>
                        <tr>
                            <td>
                                <?= h($stockIn->id) ?>
                            </td>
                            <td>
                                <?= h($stockIn->user_id) ?>
                            </td>
                            <td>
                                <?= h($stockIn->product_id) ?>
                            </td>
                            <td>
                                <?= h($stockIn->quantity) ?>
                            </td>
                            <td>
                                <?= h($stockIn->created) ?>
                            </td>
                            <td>
                                <?= h($stockIn->modified) ?>
                            </td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'StockIn', 'action' => 'view', $stockIn->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'StockIn', 'action' => 'edit', $stockIn->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'StockIn', 'action' => 'delete', $stockIn->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stockIn->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                    <?php endif; ?>
                </div>
                <div class="related">
                    <?php if (!empty($user->stock_out)): ?>
                    <h4>
                        <?= __('Related {0}', ['Stock Out']) ?>
                    </h4>
                    <table class="table table-striped table-hover">
                        <tr>
                            <th>Id</th>
                            <th>User Id</th>
                            <th>Product Id</th>
                            <th>Quantity</th>
                            <th>Created</th>
                            <th>Modified</th>
                            <th class="actions">
                                <?= __('Actions') ?>
                            </th>
                        </tr>
                        <?php foreach ($user->stock_out as $stockOut): ?>
                        <tr>
                            <td>
                                <?= h($stockOut->id) ?>
                            </td>
                            <td>
                                <?= h($stockOut->user_id) ?>
                            </td>
                            <td>
                                <?= h($stockOut->product_id) ?>
                            </td>
                            <td>
                                <?= h($stockOut->quantity) ?>
                            </td>
                            <td>
                                <?= h($stockOut->created) ?>
                            </td>
                            <td>
                                <?= h($stockOut->modified) ?>
                            </td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'StockOut', 'action' => 'view', $stockOut->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'StockOut', 'action' => 'edit', $stockOut->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'StockOut', 'action' => 'delete', $stockOut->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stockOut->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
