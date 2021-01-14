<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee[]|\Cake\Collection\CollectionInterface $employees
 */
//$cellMenWomenRatio = $this->cell('Inbox');
?>
<div class="employees index content">
    <?= $this->Html->link(__('New Employee'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <?= $this->Html->link(__('Women'), [
        'controller'=>'Employees',
        'action' => 'getAllByGender',
        'f'
    ], ['class' => 'btn btn-secondary mx-2 float-right']) ?>
    <?= $this->Html->link(__('Men'), ['action' => 'getAllByGender','m'], ['class' => 'btn btn-secondary mx-2 float-right']) ?>
    
        <!-- Inbox Cell à enlever sûrement car pas besoin, supprimer même toute la cell -->
    <?= $inbox = $this->cell('Inbox'); ?>
        
    <h3><?= __('Employees') ?></h3>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('emp_no') ?></th>
                    <th><?= $this->Paginator->sort('birth_date') ?></th>
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('gender') ?></th>
                    <th><?= $this->Paginator->sort('hire_date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employees as $employee): ?>
                <tr>
                    <td><?= $this->Number->format($employee->emp_no) ?></td>
                    <td><?= h($employee->birth_date) ?></td>
                    <td><?= h($employee->first_name) ?></td>
                    <td><?= h($employee->last_name) ?></td>
                    <td><?= h($employee->gender) ?></td>
                    <td><?= h($employee->hire_date) ?></td>
                    <td class="actions">
                        <?= $this->Html->image("view.png", [
                            "alt" => "view",
                            'url' => ['action' => 'view', $employee->emp_no],
                            'width' => 50                          
                        ]);?>
                        
                        <?= $this->Html->image("edit.png", [
                            "alt" => "view",
                            'url' => ['action' => 'edit', $employee->emp_no],
                            'width' => 50                           
                        ]);?>
                        
                        <?= $this->Form->postLink(
                            $this->Html->image("delete.png", [
                            "alt" => "view",
                            'width' => 50,
                            ]),
                            ['action' => 'delete', $employee->emp_no], ['escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $employee->emp_no)],
                                                       
                        );?>     
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
  
</div>
