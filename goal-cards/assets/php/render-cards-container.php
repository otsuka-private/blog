<div class="row">
    <div class="col s12" id="goal-cards-container">
        <?php
        $filePath = './database.json';
        if (file_exists($filePath)) {
            $fileContentJSON = file_get_contents($filePath);
            $fileContent = json_decode($fileContentJSON, true);
            $i = 0;
            foreach ($fileContent as $cardContent) {
                if ($cardContent['title'] == 'empty card') {
                    $i++;
                    continue;
                };
        ?>
                <div class="card goal-card lighten-2 <?php echo $cardContent['color']; ?>" id="<?php echo $i; ?>">
                    <a href="<?php echo "./$i/"; ?>">
                        <div class="card-content a-in-this-class-text-black">
                            <span class="card-title"><?php echo $cardContent['title']; ?></span>
                            <p class="goal-card__description"><?php echo $cardContent['description']; ?></p>
                            <p class="goal-card__due">(<?php echo $cardContent['due']; ?>)</p>
                        </div>
                    </a>
                    <div class="card-action <?php echo $cardContent['color']; ?> darken-2 white-text">編集・削除</div>
                </div>
        <?php
                $i++;
            }
        };
        ?>
        <a class="waves-effect waves-light btn-large right modal-trigger" href="#modal__create-new-card" id="button-create-new-card"><i class="fas fa-folder-plus"></i></a>
        <a class="waves-effect waves-light btn-large right modal-trigger hiden amber" href="#modal__edit-card" id="button-edit-card"><i class="fas fa-edit"></i></a>
        <a class="waves-effect waves-light btn-large right modal-trigger hiden red" href="#modal__delete-card" id="button-delete-card"><i class="fas fa-trash"></i></a>

    </div>
</div>


<!-- modal -->
<!-- modal -->
<!-- modal -->
<!-- modal -->
<!-- modal -->

<!-- id, name : create-new-card-?? -->
<div id="modal__create-new-card" class="modal">
    <div class="modal-content">
        <form action="<?php echo $createPHPFilePath; ?>" method="post">
            <div class="input-field">
                <input id="create-new-card-title" type="text" class="validate" name="create-new-card-title">
                <label for="create-new-card-title">Title</label>
            </div>
            <div class="input-field">
                <input id="create-new-card-description" type="text" class="validate" name="create-new-card-description">
                <label for="create-new-card-description">Description</label>
            </div>
            <div class="input-field">
              <select name="create-new-card-color">
                <option value="Red">Red</option>
                <option value="Pink">Pink</option>
                <option value="Purple">Purple</option>
                <option value="Deep-Purple">Deep-Purple</option>
                <option value="Indigo">Indigo</option>
                <option value="Blue">Blue</option>
                <option value="Light-blue">Light-blue</option>
                <option value="Cyan">Cyan</option>
                <option value="Teal">Teal</option>
                <option value="Green">Green</option>
                <option value="Light-green">Light-green</option>
                <option value="Lime">Lime</option>
                <option value="Yellow">Yellow</option>
                <option value="Amber">Amber</option>
                <option value="Orange">Orange</option>
                <option value="Deep-Orange">Deep-Orange</option>
                <option value="Brown">Brown</option>
                <option value="Grey">Grey</option>
                <option value="Blue-Grey">Blue-Grey</option>
              </select>
                <label>Color</label>
            </div>
            <div class="input-field">
                <input type="text" class="datepicker" id="create-new-card-due" name="create-new-card-due">
                <label for="create-new-card-due">Due Date</label>
            </div>
            <div class="input-field">
                <input id="create-new-card-all" type="text" class="validate" name="create-new-card-all">
                <label for="create-new-card-all">All</label>
            </div>
            <div class="input-field">
                <input id="create-new-card-now" type="text" class="validate" name="create-new-card-now">
                <label for="create-new-card-now">Now</label>
            </div>
            <div class="input-field">
                <input id="create-new-card-order" type="text" class="validate" name="create-new-card-order">
                <label for="create-new-card-order">Order</label>
            </div>
            <div class="modal-footer">
                <button class="btn waves-effect waves-light right" type="submit" name="action">
                    <i class="fas fa-check"></i>
                </button>
            </div>
        </form>
    </div>
</div>

<!-- id, name : edit-card-?? -->

<div id="modal__edit-card" class="modal">
    <div class="modal-content">
        <form action="<?php echo $editPHPFilePath; ?>" method="post">
            <div class="input-field">
                <input id="edit-card-id" type="text" class="validate" name="edit-card-id">
                <label for="edit-card-id">Edit Target ID</label>
            </div>
            <div class="input-field">
                <input id="edit-card-title" type="text" class="validate" name="edit-card-title">
                <label for="edit-card-title">Edit Title</label>
            </div>
            <div class="input-field">
                <input id="edit-card-description" type="text" class="validate" name="edit-card-description">
                <label for="edit-card-description">Edit Description</label>
            </div>
            <div class="input-field">
                <input id="edit-card-color" type="text" class="validate" name="edit-card-color">
                <label for="edit-card-color">Edit Color</label>
            </div>
            <div class="input-field">
                <input type="text" class="datepicker" id="edit-card-due" name="edit-card-due">
                <label id="edit-card-due">Due Date</label>
            </div>
            <div class="input-field">
                <input id="edit-card-all" type="text" class="validate" name="edit-card-all">
                <label for="edit-card-all">Edit All</label>
            </div>
            <div class="input-field">
                <input id="edit-card-now" type="text" class="validate" name="edit-card-now">
                <label for="edit-card-now">Edit Now</label>
            </div>
            <div class="input-field">
                <input id="edit-card-order" type="text" class="validate" name="edit-card-order">
                <label for="edit-card-order">Edit Order</label>
            </div>
            <div class="modal-footer">
                <button class="btn waves-effect waves-light right" type="submit" name="action"><i class="fas fa-edit"></i></button>
            </div>
        </form>
    </div>
</div>

<!-- id, name : delete-card-?? -->

<div id="modal__delete-card" class="modal bottom-sheet">
    <div class="modal-content">
        <p>カードを削除しますか？</p>
        <div class="modal-footer">
            <button class="btn waves-effect waves-light right modal-trigger red" data-target="modal__delete-card-for-sure">
                <i class="far fa-trash-alt"></i>
            </button>
        </div>
    </div>
</div>

<div id="modal__delete-card-for-sure" class="modal bottom-sheet">
    <div class="modal-content">
        <form action="<?php echo $deletePHPFilePath; ?>" method="post">
            <div class="input-field">
                <input id="delete-card-id" type="text" class="validate" name="delete-card-id">
                <label for="delete-card-id">Card ID</label>
            </div>
            <div class="modal-footer">
                <button class="btn waves-effect waves-light right red" type="submit" name="action">
                    カードとフォルダーを削除します
                </button>
            </div>
        </form>
    </div>
</div>
