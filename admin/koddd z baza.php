<?php foreach($new->get() as $tab) : ?>
                <tr>
                  <td><?php echo $tab['id']; ?></td>
                  <td><?php echo $tab['tytul']; ?></td>
                  <td>
                    <button type="button" class="btn btn-block btn-info">Zobacz</button>
                  </td>
                </tr>
                <?php endforeach; ?>