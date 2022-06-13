<?php
//include header and footer
require header_route;
require footer_route;
?>

<?= template_header('Contacts', file_get_contents(css_route)) ?>

<div class="container">
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <td>#</td>
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Title</td>
        <td>Created</td>
        <td>Options</td>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($AllContacts as $contact) : ?>
        <tr>
          <td><?= $contact['id'] ?></td>
          <td><?= $contact['name'] ?></td>
          <td><?= $contact['email'] ?></td>
          <td><?= $contact['phone'] ?></td>
          <td><?= $contact['title'] ?></td>
          <td><?= $contact['created'] ?></td>
          <td class="actions">
            <a href="update.php?id=<?= $contact['id'] ?>" class="edit"><i class="fas fa-pen fa-xs">edit</i></a>
            <a href="delete.php?id=<?= $contact['id'] ?>" class="trash"><i class="fas fa-trash fa-xs">delete</i></a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
	<div class="pagination">
		<?php if ($page > 1): ?>
		<a class="mx-3" href="/contacts?page=<?=$page-1?>"><i class="fas fa-angle-double-left fa-sm">prev</i></a>
		<?php endif; ?>
		<?php if ($page*$records_per_page < $num_contacts): ?>
		<a href="/contacts?page=<?=$page+1?>"><i class="fas fa-angle-double-right fa-sm">next</i></a>
		<?php endif; ?>
	</div>
</div>

<?= template_footer(file_get_contents(js_route)) ?>