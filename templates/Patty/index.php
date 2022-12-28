<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Patty> $patty
 */
?>
<div class="patty index content">
    <?= $this->Html->link(__('New Patty'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Patty') ?></h3>
    <input type="text" id="myInput" onkeyup="pattyFunction()" placeholder="Search for Names..">
    <div class="table-responsive">
        <table id="patty_table">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('role') ?></th>
                    <!-- <th><?= $this->Paginator->sort('phone') ?></th> -->
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($patty as $patty): ?>
                <tr>
                    <td><?= $this->Number->format($patty->id) ?></td>
                    <td><?= h($patty->name) ?></td>
                    <td><?= h($patty->email) ?></td>
                    <td><?= h($patty->role) ?></td>
                    <!-- <td><?= $this->Number->format($patty->phone) ?></td> -->
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $patty->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $patty->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $patty->id], ['confirm' => __('Are you sure you want to delete # {0}?', $patty->id)]) ?>
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
<script>
function pattyFunction() {

  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("patty_table");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
